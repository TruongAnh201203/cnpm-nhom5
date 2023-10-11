<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route('admin.home')}}" class="logo d-flex align-items-center">
        <img src="{{asset('assetsAdmin/img/logo.png')}}" alt="">
        <span class="d-none d-lg-block">Closet Collection</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{asset('assetsAdmin/img/messages-1.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{asset('assetsAdmin/img/messages-2.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{asset('assetsAdmin/img/messages-3.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="data:image/png;base64,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" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{Auth::user()->name}}</h6>
              <span>Admin Closet</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
                <form action="{{route('logout')}}" method="POST" >
                    @csrf
                    <i class="bi bi-box-arrow-right" style="padding: 0px 5px 0px 15px;"></i>
                    <button type="submit" class="logout"><span>Sign Out</span></button>
                </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
