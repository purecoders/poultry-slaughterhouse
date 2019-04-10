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
          <img src="{{asset('img/poultry-icon.svg')}}" class="navbar-logo-img" alt="">
          کشتارگاه جهان مرغ
        </a>
      </div>

      <div id="navbar-collapse"  class="collapse navbar-collapse" >
        <ul class="nav navbar-nav navbar-right rtl">
          <li class="dropdown">
            <a class="nav-link dropdown-toggle" style="color: white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              مجموعه زنجیره ای
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" dir="rtl" style="min-width:200px">
              <a id="toFlamingo" class="dropdown-item" href="{{route('chain-set')}}#flamingo1">مرغ مادرفلامینگو فرام یک</a>
              <a id="toFlamingo2" class="dropdown-item" href="{{route('chain-set')}}#flamingo2">مرغ مادرفلامینگو فرام دو</a>
              <a id="toSepidmorgh" class="dropdown-item" href="{{route('chain-set')}}#sepidmorgh">مرغ مادر سپید مرغ</a>
              <a id="toKhushekhan" class="dropdown-item" href="{{route('chain-set')}}#khushekhan">مرغ مادر خوشه خوان</a>
              <a id="toTavoni" class="dropdown-item" href="{{route('chain-set')}}#tavoni">مرغ مادر تعاونی</a>
            </div>
          </li>
          <li><a href="{{route('human-resource')}}" title="">منابع انسانی</a></li>
          <li><a href="{{route('products')}}" title="">محصولات شرکت</a></li>
          <li><a href="{{route('gallery')}}" title="">گالری</a></li>
          <li><a href="{{route('about-us')}}" title="">درباره ما</a></li>

          <li>
            {{--<p>--}}
              {{--<a href="./components.html" class="btn btn-default navbar-btn" title="">خرید آنلاین</a>--}}
            {{--</p>--}}
          </li>

        </ul>
      </div> 
    </div>
  </nav>
</header>