<!-- Add your content of header -->
<header class="">
  <nav id="navbar" class="navbar navbar-expand-lg navbar-default home">
    <div class="container">
      <div class="navbar-header">
        <button onclick="setPadding()" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('app')}}" title="">
          <img src="{{asset('img/brand.png')}}" class="navbar-logo-img" alt="">
          {{--<span class="trn">کشتارگاه جهان مرغ</span>--}}
        </a>
      </div>

      <div id="navbar-collapse"  class="collapse navbar-collapse" >
        <ul class="nav navbar-nav navbar-right rtl">
          <li class="dropdown">
            <a class="nav-link dropdown-toggle trn" style="color: white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">مجموعه زنجیره ای</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" dir="rtl" style="min-width:250px">
              <a id="toFlamingo" class="dropdown-item trn trn-digit" href="{{route('chain-set')}}#flamingo1">مرغ مادر فلامينگو فارم يک</a>
              <a id="toFlamingo2" class="dropdown-item trn trn-digit" href="{{route('chain-set')}}#flamingo2">مرغ مادر فلامينگو فارم دو</a>
              <a id="toSepidmorgh" class="dropdown-item trn trn-digit" href="{{route('chain-set')}}#sepidmorgh">مرغ مادر سپيدمرغ</a>
              <a id="toKhushekhan" class="dropdown-item trn trn-digit" href="{{route('chain-set')}}#khushekhan">مرغ مادر خوشه خوان</a>
              <a id="toTavoni" class="dropdown-item trn trn-digit" href="{{route('chain-set')}}#tavoni">مرغ مادر تعاوني 323</a>
            </div>
          </li>
          <li><a href="{{route('human-resource')}}" class="trn" title="">منابع انسانی</a></li>
          <li><a href="{{route('products')}}" class="trn" title="">محصولات شرکت</a></li>
          <li><a href="{{route('gallery')}}" class="trn" title="">گالری</a></li>
          <li><a href="{{route('about-us')}}" class="trn" title="">درباره ما</a></li>
          @auth()
            <li><a href="{{route('home')}}" class="text-primary nav-link-admin" title="">پنل مدیریت</a></li>
            <li>
              <a  href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                خروج
              </a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          @endauth
          <li>
            {{--<p>--}}
              {{--<a href="./components.html" class="btn btn-default navbar-btn" title="">خرید آنلاین</a>--}}
            {{--</p>--}}
          </li>

        </ul>
      </div> 
    </div>
      <select id="langSelect" class="selectpicker" data-width="fit">
        <option  data-content='<span class="flag-icon flag-icon-ir"></span>' value="fr"></option>
        <option  data-content='<span class="flag-icon flag-icon-iq"></span>' value="ar"></option>
        <option data-content='<span class="flag-icon flag-icon-us"></span>' value="en"></option>
      </select>
  </nav>
</header>