<header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <ul class="app-nav">
        <li class="dropdown">
            <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-globe fa-lg"></i></a>
            <div class="dropdown-menu dropdown-menu-right p-0">
                <a href="lang/en"  class="{{ @session('lang')=='en'? 'dropdown-item active':'dropdown-item'}}">
                  <i class="flag-icon flag-icon-us mr-2"></i> @lang('dashboard.english')
                </a>
                <a href="lang/ar"  class="{{ @session('lang')=='ar'? 'dropdown-item active':'dropdown-item'}}">
                  <i class="flag-icon flag-icon-sa mr-2"></i> @lang('dashboard.arabic')
                </a>
              </div>
        </li>
        <li></li>
        <li class="dropdown">
            <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> @lang('dashboard.settings')</a></li>
                <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> @lang('dashboard.profile')</a></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-lg"></i>
                        @lang('dashboard.logout')
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="...">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
  </header>

