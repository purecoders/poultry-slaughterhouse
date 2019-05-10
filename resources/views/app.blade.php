@extends('layouts.main')
@section('content')

  <!-- Add your site or app content here -->
  <div class="icon hero-full-container background-image-container white-text-container">
    <div class="container">
      <div class="row">
        <div id="slogan" class="col-xs-12">
          <h1 class="trn">شرکت فاخر صبانور</h1>
          <p class="trn">تضمین بهترین قیمت</p>
          <br>
          <a id="btnProducts" href="#products" class="btn btn-default btn-lg trn" title="">محصولات</a>
        </div>
      </div>
    </div>
  </div>

  <div class="section-container" style="padding-bottom: 0px">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-8 m-auto" style="overflow: hidden">
          <div class="text-center">
            <h2 class="trn">درباره ما</h2>
            <p class="trn">.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
              <br>
            <p class="trn">طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
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
                  <h3 align="right" class="trn">خدمات</h3>
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    <span class="sr-only">قبلی</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <span class="sr-only">بعدی</span>
                  </a>
                  <p align="justify" dir="rtl">
                    <p class="trn">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                    <br/>
                    کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                  </p>
                  <a href="./project.html" class="btn btn-primary trn" title="">بیشتر</a>
                </div>
              </div>
              <div class="item">
                <img class="img-responsive" style="height: 500px" src="{{asset('img/slaughter-house2.jpg')}}" alt="First slide">
                <div class="carousel-caption card-shadow reveal">
                  <h3 align="right" class="trn">محصولات</h3>
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
                  <a href="./project.html" class="btn btn-primary trn" title="">بیشتر</a>
                </div>
              </div>
              <div class="item">
                <img class="img-responsive" style="height: 500px" src="{{asset('img/slaughter-house3.jpg')}}" alt="First slide">
                <div class="carousel-caption card-shadow reveal">
                  <h3 align="right" class="trn">مدیریت</h3>
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
                  <a href="./project.html" class="btn btn-primary trn" title="">بیشتر</a>
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
            <h2 class="text-center trn">محصولات</h2>
            <p  class="text-center" dir="rtl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>

          </div>
          <div class="row">

              @foreach($products as $product)
              <div class="col-md-3 text-center">
              <img class="reveal product-img" src="{{asset($product->image_url)}}" alt="">
                <h6 class="mt-3">{{$product->name}}</h6>
              </div>
              @endforeach


            <div  class="col-md-3 text-center">
              <div class="product-more d-flex justify-content-center align-items-center">
                <a  href="{{route('products')}}"  class="btn btn-primary trn">بیشتر</a>
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
            <h2 class="text-center trn">ارتباط با ما</h2>
            <p class="text-center" dir="rtl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
          </div>
          <div class="card-container rtl">
            <div class="card card-shadow col-12 col-md-8 m-auto reveal">

                <form action="{{route('message-send')}}" method="post" class="reveal-content">
                    @csrf
                <div class="row" dir="rtl">
                  <div class="col-md-7">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control" id="email" placeholder="ایمیل">
                    </div>
                    <div class="form-group">
                      <input name="title" type="text" class="form-control" id="subject" placeholder="موضوع">
                    </div>
                    <div class="form-group">
                      <textarea name="description" maxlength="6000" class="form-control" rows="3" placeholder="متن پیام را وارد کنید"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary trn">ارسال پیام</button>
                  </div>
                  <div class="col-md-5 pl-0">
                    <ul dir="ltr" class="list-unstyled address-container">
                      <li dir="rtl" align="right">
                        <span class="fa-icon">
                          <i class="fal fa-phone" aria-hidden="true"></i>
                        </span>
                        <span dir="ltr" class="trn-digit">
                        041 42 23 6292
                      </span>
                      </li>
                      <li dir="rtl" align="right">
                        <span class="fa-icon">
                          <i class="fal fa-map" aria-hidden="true"></i>
                        </span>
                        <span class="trn">آذربایجان شرقی 30 کیلومتری جاده مرند و بازرگان</span>
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
  <script src="{{asset('js/jquery.min.js')}}"></script>


@endsection