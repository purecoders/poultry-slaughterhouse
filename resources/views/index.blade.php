@include('includes.metaHeader')
@include('includes.header')

<!-- Add your site or app content here -->
<div class="icon hero-full-container background-image-container white-text-container">
  <div class="container">
    <div class="row">
      <div id="slogan" class="col-xs-12">
        <h1>شرکت فاخر صبانور</h1>
        <p>تضمین بهترین قیمت</p>
        <br>
        <a id="btnProducts" href="#products" class="btn btn-default btn-lg" title="">محصولات</a>
      </div>
    </div>
  </div>
</div>

<div class="section-container" style="padding-bottom: 0px">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 m-auto" style="overflow: hidden">
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
              <img class="img-responsive" style="height: 500px" src="{{asset('img/slaughter-house.jpg')}}" alt="First slide">
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
              <img class="img-responsive" style="height: 500px" src="{{asset('img/slaughter-house2.jpg')}}" alt="First slide">
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
              <img class="img-responsive" style="height: 500px" src="{{asset('img/slaughter-house3.jpg')}}" alt="First slide">
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

<div id="products" class="section-container">
  <div class="container rtl">
    <div class="row">
      <div class="col-12 col-md-12">
        <div class="section-container-spacer">
          <h2 class="text-center">محصولات</h2>
          <p class="text-center" dir="rtl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>

        </div>
        <div class="row">
          <div class="col-md-3 text-center">
            <img class="reveal product-img" src="{{asset('img/p1.jpg')}}" alt="">
          </div>
          <div class="col-md-3 text-center">
             <img class="reveal product-img" src="{{asset('img/p2.jpg')}}" alt="">
          </div>
          <div class="col-md-3 text-center">
             <img class="reveal product-img" src="{{asset('img/p3.jpg')}}" alt="">
          </div>
          <div  class="col-md-3 text-center">
            <div class="product-more d-flex justify-content-center align-items-center">
              <a  href="#"  class="btn btn-primary ">
                بیشتر ...
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-container contact-container">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12">
        <div class="section-container-spacer">
          <h2 class="text-center">ارتباط با ما</h2>
          <p class="text-center" dir="rtl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
        </div>
        <div class="card-container rtl">
          <div class="card card-shadow col-12 col-md-8 m-auto reveal">
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
                <div class="col-md-5 pl-0">
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
                      آذربایجان شرقی 30 کیلومتری جاده مرند و بازرگان
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    //starts the carousel

    document.addEventListener("DOMContentLoaded", function (event) {
        window.navbarFixedTopAnimation();
    });
    function setPadding() {
        if(!document.getElementById('navbar-collapse').className.match(/\in\b/)){
            document.getElementById('navbar').style.paddingBottom = '70px';
        }else{
            document.getElementById('navbar').style.paddingBottom = '20px';
        }

    }

    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("#btnProducts").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 50
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });

</script>

@include('includes.footer')
@include('includes.metaFooter')