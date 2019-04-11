@extends('layouts.main')
@section('content')
  <div class="section-container mt-5 pt-5">
    <div class="container mt-3 rtl">
      <div class="row section-container-spacer text-center">
        <div class="col-xs-12 col-md-12">
          <h2>مجموعه زنجیره ای</h2>
          <p dir="rtl" align="center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
        </div>
      </div>
      <div id="flamingo1" class="my-5">
        <h5>
          <i class="fal fa-hashtag" style="color: rgb(255, 193, 7);"></i>
          مرغ مادر فلامینگو فارم یک
        </h5>
        <div class="row">
          <div class="col-md-6">
            <img class="reveal chain-set-img" src="{{asset('img/img-06.jpg')}}" alt="">
          </div>
          <div class="col-md-6 mt-3 mt-md-0">
            <h6 >
              <i class="fal fa-address-book"></i>
              آدرس </h6>
            <p style="font-weight: 300;">آذربایجان شرقی 20 کیلومتری جاده مرند - بازرگان</p>
            <h6 >
              <img style="height: 25px;" src="{{asset('img/poultry-icon.svg')}}" alt="">
              تعداد قطعه مرغ </h6>
            <p style="font-weight: 300;">50000 قطعه</p>
          </div>
        </div>
      </div>
      <hr>
      <div id="flamingo2" class="my-5">
        <h5>
          <i class="fal fa-hashtag" style="color: rgb(255, 193, 7);"></i>
          مرغ مادر فلامینگو فارم دو
        </h5>
        <div class="row">
          <div class="col-md-6">
            <img class="reveal chain-set-img" src="{{asset('img/img-07.jpg')}}" alt="">
          </div>
          <div class="col-md-6 mt-3 mt-md-0">
            <h6 >
              <i class="fal fa-address-book"></i>
              آدرس </h6>
            <p style="font-weight: 300;">آذربایجان شرقی 20 کیلومتری جاده مرند - بازرگان</p>
            <h6 >
              <img style="height: 25px;" src="{{asset('img/poultry-icon.svg')}}" alt="">
              تعداد قطعه مرغ </h6>
            <p style="font-weight: 300;">20000 قطعه</p>
          </div>
        </div>
      </div>
      <hr>
      <div id="sepidmorgh" class="my-5">
        <h5>
          <i class="fal fa-hashtag" style="color: rgb(255, 193, 7);"></i>
          مرغ مادر سپیدمرغ
        </h5>
        <div class="row">
          <div class="col-md-6">
            <img class="reveal chain-set-img" src="{{asset('img/img-07.jpg')}}" alt="">
          </div>
          <div class="col-md-6 mt-3 mt-md-0">
            <h6 >
              <i class="fal fa-address-book"></i>
              آدرس </h6>
            <p style="font-weight: 300;">آذربایجان شرقی شهرستان شبستر</p>
            <h6 >
              <img style="height: 25px;" src="{{asset('img/poultry-icon.svg')}}" alt="">
              تعداد قطعه مرغ </h6>
            <p style="font-weight: 300;">50000 قطعه</p>
          </div>
        </div>
      </div>
      <hr>
      <div id="khushekhan" class="my-5">
        <h5>
          <i class="fal fa-hashtag" style="color: rgb(255, 193, 7);"></i>
          مرغ مادر خوشه خوان
        </h5>
        <div class="row">
          <div class="col-md-6">
            <img class="reveal chain-set-img" src="{{asset('img/img-07.jpg')}}" alt="">
          </div>
          <div class="col-md-6 mt-3 mt-md-0">
            <h6 >
              <i class="fal fa-address-book"></i>
              آدرس </h6>
            <p style="font-weight: 300;">آذربایجان شرقی شهرستان شبستر</p>
            <h6 >
              <img style="height: 25px;" src="{{asset('img/poultry-icon.svg')}}" alt="">
              تعداد قطعه مرغ </h6>
            <p style="font-weight: 300;">50000 قطعه</p>
          </div>
        </div>
      </div>
      <hr>
      <div id="tavoni" class="my-5">
        <h5>
          <i class="fal fa-hashtag" style="color: rgb(255, 193, 7);"></i>
          مرغ مادر تعاونی 323
        </h5>
        <div class="row">
          <div class="col-md-6">
            <img class="reveal chain-set-img" src="{{asset('img/img-07.jpg')}}" alt="">
          </div>
          <div class="col-md-6 mt-3 mt-md-0">
            <h6 >
              <i class="fal fa-address-book"></i>
              آدرس </h6>
            <p style="font-weight: 300;">آذربایجان شرقی شهرستان شبستر</p>
            <h6 >
              <img style="height: 25px;" src="{{asset('img/poultry-icon.svg')}}" alt="">
              تعداد قطعه مرغ </h6>
            <p style="font-weight: 300;">50000 قطعه</p>
          </div>
        </div>
      </div>



    </div>
  </div>
  <script src="{{asset('js/jquery.min.js')}}"></script>
@endsection


