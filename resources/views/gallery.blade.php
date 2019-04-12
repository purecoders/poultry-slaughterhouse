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
        "itemsBaseURL": "",
        "thumbnailWidth": "200",
        "thumbnailBorderVertical": 0,
        "thumbnailBorderHorizontal": 0,
        "thumbnailLabel": {
          "display": true
        },
        "thumbnailHoverEffect2": "imageGrayOff",
        "thumbnailAlignment": "center"
      }' >

      <!-- gallery content -->
          @foreach($media as $item)
             <a href = "{{$item->original_url}}"   data-ngThumb = "{{$item->resized_url}}" data-ngdesc="{{$item->text}}"></a>
          @endforeach
    </div>


  </div>
  </div>
</div>
@endsection
