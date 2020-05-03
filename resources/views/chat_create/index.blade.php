@extends('layouts.app')

@section('js')
@parent
@stop

@section('content')
<!-- メインコンテンツ -->
    <div class="card">
        <div class="card-header">チャット一覧</div>

        <div class="card-body" id="app">

          <example-component v-bind:target_userid="{{ $target_userid }}"></example-component>

          {{--
          
          --}}

          <form class="" action="{{ url( $route . '/create' ) }}" method="post">
              @csrf
              <!-- テキストボックス、送信ボタン④ -->
              <div id="chat_send">
                  <textarea name="message" id="chat_send_message"></textarea>
                  <button type="submit" id="chat_send_btn">送信</button>
              </div>
          </form>

        </div>
    </div>
@endsection
