@extends('layouts.main')
@section('content')
<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- nanogallery2 -->
<link  href="{{asset('css/nanogallery2.min.css')}}" rel="stylesheet" type="text/css">
<script  type="text/javascript" src="{{asset('js/jquery.nanogallery2.min.js')}}"></script>

<div class="section-container mt-5 pt-5">
  <div class="container text-center mt-3">
    <div class="row section-container-spacer">
      <div class="col-xs-12 col-md-12">
        <h2>گالری تصاویر</h2>
        <p dir="rtl" align="center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
      </div>
    </div>
    <div class="">

      <div id="nanogallery2"
      data-nanogallery2 = '{
        "itemsBaseURL": "img/",
        "thumbnailWidth": "200",
        "thumbnailBorderVertical": 0,
        "thumbnailBorderHorizontal": 0,
        "thumbnailLabel": {
          "display": false
        },
        "thumbnailHoverEffect2": "imageGrayOff",
        "thumbnailAlignment": "center"
      }' >

      <!-- gallery content -->
      <a href = "img-01.jpg"   data-ngThumb = "img-01.jpg" data-ngdesc=""></a>
      <a href = "img-04.jpg"   data-ngThumb = "img-04.jpg" data-ngdesc=""></a>
      <a href = "img-06.jpg"   data-ngThumb = "img-06.jpg" data-ngdesc=""></a>
      <a href = "img-05.jpg"   data-ngThumb = "img-05.jpg" data-ngdesc=""></a>
      <a href = "img-07.jpg"   data-ngThumb = "img-07.jpg" data-ngdesc=""></a>
      <a href = "slaughter-house2.jpg"   data-ngThumb = "slaughter-house2.jpg" data-ngdesc=""></a>
      <a href = "building.jpg"   data-ngThumb = "building.jpg" data-ngdesc=""></a>
      <a href = "slaughter-house.jpg"   data-ngThumb = "slaughter-house.jpg" data-ngdesc=""></a>
      <a href = "three.jpeg"   data-ngThumb = "three.jpeg" data-ngdesc=""></a>
      {{--<a href = "p3.jpg"   data-ngThumb = "p3.jpg" > Berlin 2 </a>--}}
      {{--<a href = "p2.jpg"   data-ngThumb = "p2.jpg" > Berlin 3 </a>--}}
    </div>


  </div>
  </div>
</div>
@endsection
