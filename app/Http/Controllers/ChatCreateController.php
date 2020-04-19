<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatCreateController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
    public function __construct()
    {
        $this->middleware('auth');
        // ãƒ«ãƒ¼ãƒˆ
        $this->route = "chat_create";
    }

    /**
     * チャットの一覧
     */
    public function index()
    {
      // ログインユーザーのID
      $auth_id = \Auth::id();
      
      // 相手（ターゲットのID）
      $target_userid = 2;

      $sql = "
        (
          -- 自分が相手に送信したメッセージ
          from_user_id = {$auth_id} AND
          to_user_id = {$target_userid}
        ) OR (
          -- 相手が自分に送信したメッセージ
          from_user_id = {$target_userid } AND
          to_user_id = {$auth_id}
        )
      ";

      
      $datas = Chat::whereRaw( \DB::Raw( $sql ) )
                  ->get();

      return view( 
        $this->route . '.index' ,
        compact( 'datas', 'auth_id', 'target_userid' ) 
      )
      ->with( 'route', $this->route );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create( Request $req )
    {
        // メッセージが空でないとき
        if( isset( $req->message ) ){
          // チャットのモデル
          $chatModel = new Chat();
          // 登録する値を格納
          $setValue = [
            'to_user_id' => 2,
            'from_user_id' => 1,
            'message' => $req->message
          ];
          // データの登録
          $chatModel->create( $setValue );

        }

        return redirect($this->route );

    }
}
