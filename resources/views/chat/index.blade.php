@extends('layouts.app')

@section('content')
<!-- メインコンテンツ -->
    <div class="card">
        <div class="card-header">チャットサイト一覧</div>

        <div class="card-body">
            <div class="row">
              <div class="panel panel-default col-sm-12">
                <table class="table table-bordered tbl-pdg tbl-txt-center">
                  <thead>
                    <tr class="bg-primary">
                      <th class="list_th">Webサイト名</th>
                      <th class="list_th">ユーザーID</th>
                      <th class="list_th">パスワード</th>
                      <th class="list_th">操作</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      {{-- Webサイト名 --}}
                      <td class="list_td">
                        Webサイト名
                      </td>

                      {{-- ユーザーID --}}
                      <td class="list_td">
                        ユーザーID
                      </td>

                      {{-- パスワード --}}
                      <td class="list_td">
                        パスワード
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
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
@endsection
