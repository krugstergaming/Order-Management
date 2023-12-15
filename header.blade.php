    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top">
      <div class="navbar-branding">
<!-- CHANGED THIS -->
        <a class="navbar-brand" href="{{url('/')}}">          
          <img class="upperlogo" src="assets/img/logos/comet_al one.png" alt="COMET.AL">
          <b class="titlecometal">COMET</b>.al
      </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
      <ul class="nav navbar-nav navbar-left">
<!-- REMOVED THIS
        <li>
          <a class="sidebar-menu-toggle" href="{{url('/')}}#">
            <span class="ad ad-ruby fs18"></span>
          </a>
        </li>
-->
<!--
        <li>
          <a class="topbar-menu-toggle" href="{{url('/')}}#">
            <span class="ad ad-wand fs16"></span>
          </a>
        </li>
-->
        <!-- Full Screen -->
        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active" href="{{url('/')}}#">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
  
      </ul>
      <form class="navbar-form navbar-left navbar-search" role="search">
        <div class="form-group">
<!--
          <input type="text" class="form-control" placeholder="Search..." value="Search...">
-->
        </div>
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/')}}#">
            <span class="ad ad-radio-tower fs18"></span>
          </a>
          <ul class="dropdown-menu media-list w350 animated animated-shorter fadeIn" role="menu">
            <li class="dropdown-header">
              <span class="dropdown-title"> Notifications</span>
              <span class="label label-warning">3</span>
            </li>
            <li class="media">
<!-- CHANGED THIS -->
              <a class="media-left" href="{{url('/')}}#"> <img src="assets/img/avatars/Fababeir.png" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading"> <b>From:</b> Fababeir.Ruwu
                  <small class="text-muted">- 12/01/23</small>
                </h5> kumain k n b
                <!-- <a class="text-system" href="{{url('/')}}#"> Max </a> -->
              </div>
            </li>
<!-- CHANGED THIS -->
            <li class="media">
              <a class="media-left" href="{{url('/')}}"> <img src="assets/img/avatars/Cabral.png" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading mv5"> <b>From:</b> Cabral.Loyd
                  <small> - 12/01/23</small>
                </h5> otw na po
                <!-- <a class="text-system" href="{{url('/')}}#"> Max </a> -->
                </div>
            </li>
<!-- CHANGED THIS -->
            <li class="media">
              <a class="media-left" href="{{url('/')}}#"> <img src="assets/img/avatars/Torres.png" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading"> <b>From:</b> Torres.Juli
                  <small class="text-muted">- 12/01/23</small>
                </h5> pabili po
                <!-- <a class="text-system" href="{{url('/')}}#"> Max </a> -->
              </div>
            </li>
<!--
            <li class="media">
              <a class="media-left" href="{{url('/')}}#"> <img src="assets/img/avatars/4.jpg" class="mw40" alt="avatar"> </a>
              <div class="media-body">
                <h5 class="media-heading mv5">Article
                  <small class="text-muted">- 08/16/22</small>
                </h5> Last Updated 36 days ago by
                <a class="text-system" href="{{url('/')}}#"> Max </a>
              </div>
            </li>
-->
          </ul>
        </li>
<!--
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/')}}#">
            <span class="flag-xs flag-us"></span> US
          </a>
          <ul class="dropdown-menu pv5 animated animated-short flipInX" role="menu">
            <li>
              <a href="javascript:void(0);">
                <span class="flag-xs flag-in mr10"></span> Hindu </a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <span class="flag-xs flag-tr mr10"></span> Turkish </a>
            </li>
            <li>
              <a href="javascript:void(0);">
                <span class="flag-xs flag-es mr10"></span> Spanish </a>
            </li>
          </ul>
        </li>
-->
        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle"></i>
        </li>
        <li class="dropdown">
<!-- CHANGED THIS -->
          <a href="{{url('/')}}#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> 
            <img src="assets/img/avatars/Kho.png" alt="avatar" class="mw30 br64 mr15"> <b class="surnamebold">Kho</b>.Kim
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="dropdown-header clearfix">
              <div class="pull-left ml10">
                <select id="user-status">
                  <optgroup label="Current Status:">
                    <option value="1-1">Away</option>
                    <option value="1-2">Offline</option>
                    <option value="1-3" selected="selected">Online</option>
                  </optgroup>
                </select>
              </div>

              <div class="pull-right mr10">
                <select id="user-role">
                  <optgroup label="Logged in As:">
                    <option value="1-1">Client</option>
                    <option value="1-2">Editor</option>
                    <option value="1-3" selected="selected">Admin</option>
                  </optgroup>
                </select>
              </div>
            </li>

<!-- hrefs to be changed -->
            <li class="list-group-item">
              <a href="{{url('/')}}#" class="animated animated-short fadeInUp">
                <span class="fa fa-envelope"></span> Messages
                <span class="label label-warning">2</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="{{url('/')}}#" class="animated animated-short fadeInUp">
                <span class="fa fa-user"></span> Friends
                <span class="label label-warning">6</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="{{url('/')}}#" class="animated animated-short fadeInUp">
                <span class="fa fa-gear"></span> Account Settings </a>
            </li>
            <li class="list-group-item">
              <a href="{{url('/')}}#" class="animated animated-short fadeInUp">
                <span class="fa fa-power-off"></span> Logout </a>
            </li>
          </ul>
        </li>
      </ul>

    </header>
    <!-- End: Header -->