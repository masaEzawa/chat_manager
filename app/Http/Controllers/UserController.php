<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;


class UserController extends Controller
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
        $this->route = "user";
    }

    /**
     * ユーザーの一覧表示
     */
    public function index()
    {
        $datas = User::get();
        return view( $this->route . '.index', compact( 'datas' ) )
                ->with( 'route', $this->route );
    }

    /**
     * ユーザーの登録画面
     */
    public function create(){
        $data = new User();

        return view( $this->route . '.input', compact( 'data' ) )
                ->with( 'route', $this->route );
    }

    /**
     * ユーザー編集画面
     */
    public function edit( $id ){
        $data = User::findOrFail( $id );
        
        return view( $this->route . '.input', compact( 'data' ) )
                ->with( 'route', $this->route )
                ->with( 'input_mode', 'edit' );
    }

    /**
     * ユーザー登録処理
     */
    public function comp( UserRequest $req ){
        // IDが存在するとき
        if( isset( $req->id ) ){
            // 編集処理
            $user = User::findOrFail( $req->id );
            $setValue = $req->all();
            // 編集処理
            $user->update( $setValue );
        }else{
            // 登録処理
            $user = new User();
            $setValue = $req->all();
            // パスワードをハッシュで暗号化
            $setValue['password'] = \Hash::make( $setValue['password'] );
            // 登録処理
            $user->create( $setValue );
        }

        return redirect( $this->route );
        
    }

}
