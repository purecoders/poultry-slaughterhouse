@include('includes.metaHeader')
@include('includes.header')

<!-- Add your site or app content here -->
<div class="icon hero-full-container background-image-container white-text-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>کشتارگاه مرغ وطنی</h1>
        <p>تضمین بهترین قیمت</p>
        <br>
        <a href="./project.html" class="btn btn-default btn-lg" title="">محصولات</a>
      </div>
    </div>
  </div>
</div>

<div class="section-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="text-center">
          <h2>درباره ما</h2>
          <p>.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
            <br>
            اپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">


        <div id="carousel-example-generic" class="carousel carousel-fade slide" data-ride="carousel">

          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <img class="img-responsive" style="max-height: 500px" src="{{asset('img/slaughter-house.jpg')}}" alt="First slide">
              <div class="carousel-caption card-shadow reveal" dir="">
                <h3 align="right">خدمات</h3>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <i class="fa fa-chevron-left" aria-hidden="true"></i>
                  <span class="sr-only">قبلی</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  <span class="sr-only">بعدی</span>
                </a>
                <p align="justify" dir="rtl">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                  <br/>
                  کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                </p>
                <a href="./project.html" class="btn btn-primary" title="">
                  بیشتر
                </a>
              </div>
            </div>
            <div class="item">
              <img class="img-responsive" style="max-height: 500px" src="{{asset('img/slaughter-house2.jpg')}}" alt="First slide">
              <div class="carousel-caption card-shadow reveal">
                <h3 align="right">محصولات</h3>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <i class="fa fa-chevron-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                </a>
                <p align="justify" dir="rtl">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                  <br/>
                  کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                </p>
                <a href="./project.html" class="btn btn-primary" title="">
                  بیشتر
                </a>
              </div>
            </div>
            <div class="item">
              <img class="img-responsive" style="max-height: 500px" src="{{asset('img/slaughter-house3.jpg')}}" alt="First slide">
              <div class="carousel-caption card-shadow reveal">
                <h3 align="right">مدیریت</h3>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <i class="fa fa-chevron-left" aria-hidden="true"></i>
                  <span class="sr-only">قبلی</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  <span class="sr-only">بعدی</span>
                </a>
                <p align="justify" dir="rtl">
                  لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                  <br/>
                  کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                </p>
                <a href="./project.html" class="btn btn-primary" title="">
                  بیشتر
                </a>
              </div>
            </div>
          </div>

        </div>


      </div>

    </div>

  </div>
</div>

<div class="section-container">
  <div class="container text-center">
    <div class="row section-container-spacer">
      <div class="col-xs-12 col-md-12">
        <h2>همکاران</h2>
        <p dir="rtl" align="center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-4">
        <img src="{{asset('img/profil-01.jpg')}}" alt="" class="reveal img-responsive reveal-content image-center">
        <h3>محسن وطنی</h3>
        <h4>مسئول فروش</h4>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        <p>
          <a href="https://facebook.com/" class="social-round-icon fa-icon" title="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="https://twitter.com/" class="social-round-icon fa-icon" title="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="https://www.linkedin.com/" class="social-round-icon fa-icon" title="">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </p>
      </div>

      <div class="col-xs-12 col-md-4">
        <img src="{{asset('img/profil-02.jpg')}}" alt="" class="reveal img-responsive reveal-content image-center">
        <h3>شادی محمدی</h3>
        <h4>مسئول بازاریابی</h4>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        <p>
          <a href="https://facebook.com/" class="social-round-icon fa-icon" title="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="https://twitter.com/" class="social-round-icon fa-icon" title="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="https://www.linkedin.com/" class="social-round-icon fa-icon" title="">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </p>
      </div>
      <div class="col-xs-12 col-md-4">
        <img src="{{asset('img/profil-03.jpg')}}" alt="" class="reveal img-responsive reveal-content image-center">
        <h3>رضا وطنی</h3>
        <h4>مدیر مجموعه</h4>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        <p>
          <a href="https://facebook.com/" class="social-round-icon fa-icon" title="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="https://twitter.com/" class="social-round-icon fa-icon" title="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="https://www.linkedin.com/" class="social-round-icon fa-icon" title="">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="section-container">
  <div class="container text-center">
    <div class="row section-container-spacer">
      <div class="col-xs-12 col-md-12">
        <h2 class="text-center">مشتریان ما</h2>
        <p dir="rtl" align="center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-4">
        <img src="{{asset('img/logo-01.png')}}" alt="" class="img-responsive reveal-content image-center">

      </div>

      <div class="col-xs-12 col-md-4">
        <img src="{{asset('img/logo-02.png')}}" alt="" class="img-responsive reveal-content image-center">
      </div>
      <div class="col-xs-12 col-md-4">
        <img src="{{asset('img/logo-03.png')}}" alt="" class="img-responsive reveal-content image-center">
      </div>
    </div>
  </div>
</div>


<div class="section-container contact-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <div class="section-container-spacer">
          <h2 class="text-center">ارتباط با ما</h2>
          <p class="text-center" dir="rtl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
        </div>
        <div class="card-container">
          <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
            <form action="" class="reveal-content">
              <div class="row" dir="rtl">
                <div class="col-md-7">
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="ایمیل">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="subject" placeholder="موضوع">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="متن پیام را وارد کنید"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">ارسال پیام</button>
                </div>
                <div class="col-md-5">
                  <ul dir="ltr" class="list-unstyled address-container">
                    <li dir="rtl" align="right">
                        <span class="fa-icon">
                          <i class="fal fa-phone" aria-hidden="true"></i>
                        </span>
                      <span dir="ltr">
                        + 44 34 34 2453
                      </span>
                    </li>
                    <li dir="rtl" align="right">
                        <span class="fa-icon">
                          <i class="fal fa-map" aria-hidden="true"></i>
                        </span>
                      ایران آذربایجان شرقی مرند خیابان نیکو
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
          <div class="card-image col-xs-12" style="background-image: url('img/building.jpg')">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    //starts the carousel

    document.addEventListener("DOMContentLoaded", function (event) {
        window.navbarFixedTopAnimation();
    });
</script>

@include('includes.footer')
@include('includes.metaFooter')