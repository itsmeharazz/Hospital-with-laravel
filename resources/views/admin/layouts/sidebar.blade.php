<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="index.html" class="logo">
        <img
          src="  {{asset('admin')}}/assets/img/kaiadmin/logo_light.svg"
          alt="navbar brand"
          class="navbar-brand"
          height="20" />
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <!-- Department -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#deparment">
            <i class="fas fa-layer-group"></i>
            <p>Departments</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="deparment">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{route('addDeparment')}}">
                  <span class="sub-item">Add Departments</span>
                </a>
              </li>
              <li>
                <a href="{{route('allDeparment')}}">
                  <span class="sub-item">All Departments</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Doctors -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#doctors">
            <i class="fas fa-layer-group"></i>
            <p>Doctors</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="doctors">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{route('addDoctor')}}">
                  <span class="sub-item">Add Doctors</span>
                </a>
              </li>
              <li>
                <a href="{{route('allDoctor')}}">
                  <span class="sub-item">All Doctors</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <!-- Appointment -->
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#appointment">
            <i class="fas fa-layer-group"></i>
            <p>Appointment</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="appointment">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{route('pendingappointment')}}">
                  <span class="sub-item">Pandsing appointment</span>
                </a>
              </li>
              <li>
                <a href="{{route('confromappointment')}}">
                  <span class="sub-item">Confrom appointment</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>