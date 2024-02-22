<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 style="position: relative;left:200px" class="logo me-auto"><a href="index.html">محمد العتيبي</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav style="position: relative;left:120px" id="navbar" class="navbar">
        <ul>
          <li><a @if (Session::get('page') == 'index') class="nav-link scrollto active" @endif  href="{{route('index')}}">الرئيسية</a></li>
          <li><a @if (Session::get('page') == 'cv_artical') class="nav-link scrollto active" @endif  href="{{route('cv.articals')}}">محمد العتيبي</a></li>
          <li class="dropdown megamenu"><a href="#"><span>البرامج التدريبية</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>الدورات المتاحة</span></a>
              </li>
              <li>
                <a href="#">Column 1 link 1</a>
                <a href="#">Column 1 link 2</a>
                <a href="#">Column 1 link 3</a>
              </li>
              <li>
                <a href="#">Column 2 link 1</a>
                <a href="#">Column 2 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 3 link 1</a>
                <a href="#">Column 3 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 4 link 1</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>معرض الصور</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>معرض التصاميم</span> <i class="bi bi-chevron-left"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>الملفات</span> <i class="bi bi-chevron-left"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">إتصل بنا</a></li>
          <li><a class="getstarted scrollto" href="#about">إستشارة مجانية</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->   