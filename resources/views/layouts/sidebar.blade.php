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
              <li {!! Request::is( 'web' ) ? 'style="background-color: #ee8"' : '' !!}>
                  <a href="{{ url( 'web/' ) }}">
                    Webサイト一覧
                  </a>
              </li>
              <li {!! Request::is( 'system' ) ? 'style="background-color: #ee8"' : '' !!}>
                  <a href="{{ url( 'system/' ) }}">
                    システム一覧
                  </a>
              </li>
              <li {!! Request::is( 'server' ) ? 'style="background-color: #ee8"' : '' !!}>
                  <a href="{{ url( 'server/' ) }}">
                    サーバー一覧
                  </a>
              </li>
          </ul>
      </nav>

  </div>

</div>
