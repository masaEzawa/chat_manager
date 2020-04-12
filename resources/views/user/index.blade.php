@extends('layouts.app')

@section('content')
  <!-- メインコンテンツ -->
  <div class="card">
    <div class="card-header">ユーザー一覧</div>

    <div class="card-body">
      <div class="row">
        <div class="col-sm-2 pb-1">
          <button type="button" onClick="location.href='{{ url( $route . '/create' ) }}'" class="btn btn-warning btn-block btn-embossed">
            <i class="fa fa-pencil-square-o"></i> 新規作成
          </button>
        </div>

        <div class="panel panel-default col-sm-12">
          <table class="table table-bordered tbl-pdg tbl-txt-center">
            <thead>
              <tr class="bg-primary">
                <th class="list_th">ユーザーID</th>
                <th class="list_th">ユーザー名</th>
                <th class="list_th">メールアドレス</th>
                <th class="list_th">機能権限</th>
                <th class="list_th">操作</th>
              </tr>
            </thead>
            <tbody>
              {{-- データが存在するとき --}}
              @forelse ( $datas as $data )
                <tr>
                  {{-- ユーザーID --}}
                  <td class="list_td">
                    {{ $data->id }}
                  </td>

                  {{-- ユーザー名 --}}
                  <td class="list_td">
                    {{ $data->name }}
                  </td>

                  {{-- メールアドレス --}}
                  <td class="list_td">
                    {{ $data->email }}
                  </td>

                  {{-- 機能権限 --}}
                  <td class="list_td">
                    <?php
										$roles = \Config('const.roles');
										$addClass = ( $errors->has('user_type') )? ' is-invalid' : ''; 
                    ?>
                    @if( isset( $roles ) )
                      {{ $roles[$data->user_type] }}
                    @endif
                  </td>

                  {{-- 操作 --}}
                  <td class="list_td">
                    {{-- 詳細 --}}
                    <a href="{{ url( $route . '/detail/1' ) }}">
                      <i class="fas fa-search pr-1"></i>
                    </a>
                    {{-- 編集 --}}
                    <a href="{{ url( $route . '/edit/1' ) }}">
                      <i class="fas fa-edit pr-1"></i>
                    </a>
                    {{-- 削除 --}}
                    <a href="{{ url( $route . '/delete/1' ) }}">
                      <i class="fas fa-trash pr-1"></i>
                    </a>
                  </td>
                </tr>
              @empty
                データはありません。
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
