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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $datas = Chat::all();
        return view( $this->route . '.index' , compact( 'datas' ) )
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
