<!-- 4列をサイドメニューに割り当て -->
<div class="col-sm-3 col-md-2 sidebar">
  <div class="wrapper">
      <!-- Sidebar -->
      <nav id="sidebar">
          <ul class="list-unstyled components">
              {{--
              <li class="active">
                  <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    Home
                  </a>
                  <ul class="collapse list-unstyled" id="homeSubmenu">
                      <li>
                          <a href="#">Home 1</a>
                      </li>
                      <li>
                          <a href="#">Home 2</a>
                      </li>
                  </ul>
              </li>
              --}}
              <li {!! Request::is( 'home' ) ? 'style="background-color: #ee8"' : '' !!}>
                  <a href="{{ url( 'home/' ) }}">
                    トップ
                  </a>
              </li>
              <li {!! Request::is( 'chat' ) ? 'style="background-color: #ee8"' : '' !!}>
                  <a href="{{ url( 'chat/' ) }}">
                    チャット一覧
                  </a>
              </li>
              <li {!! Request::is( 'chat_create' ) ? 'style="background-color: #ee8"' : '' !!}>
                  <a href="{{ url( 'chat_create/' ) }}">
                    チャット作成
                  </a>
              </li>
              <li {!! Request::is( 'system' ) ? 'style="background-color: #ee8"' : '' !!}>
                  <a href="{{ url( 'system/' ) }}">
                    〇〇一覧
                  </a>
              </li>
              <li {!! Request::is( 'server' ) ? 'style="background-color: #ee8"' : '' !!}>
                  <a href="{{ url( 'server/' ) }}">
                    〇〇一覧
                  </a>
              </li>
          </ul>
      </nav>

  </div>

</div>
