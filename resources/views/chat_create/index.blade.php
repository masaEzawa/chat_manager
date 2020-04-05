@extends('layouts.app')

@section('content')
<!-- メインコンテンツ -->
    <div class="card">
        <div class="card-header">チャット一覧</div>

        <div class="card-body">
          @forelse ( $datas as $data )

            <div class="chat-box">
              <div class="chat-face">
                <img src="https://pbs.twimg.com/profile_images/1223671265770164224/Fj0bUIcC_x96.jpg" alt="自分のチャット画像です。" width="90" height="90">
              </div>
              <div class="chat-area">
                <div class="chat-hukidashi">
                  {{ $data->message }}
                </div>
              </div>
            </div>
          @empty
            メッセージはありません。
          @endforelse

          {{--
          <div class="chat-box">
            <div class="chat-face">
              <img src="https://lh3.googleusercontent.com/-2_U6eFWc8Tw/AAAAAAAAAAI/AAAAAAAAAAA/AAKWJJMRPew_24TI-XNFMczYgNs0hWUpjA.CMID/s192-c/photo.jpg" alt="誰かのチャット画像です。" width="90" height="90">
            </div>
            <div class="chat-area">
              <div class="chat-hukidashi someone">
                ふきだしだよ<br>
                へへへ
              </div>
            </div>
          </div>
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
