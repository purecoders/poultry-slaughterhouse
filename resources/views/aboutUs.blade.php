@extends('layout.main')
@section('content')

  <div class="section-container mt-5 pt-5">
    <section id="about-heading" class="p-5" style="overflow: hidden;margin-top: -1.6rem">
      <div class="dark-overlay">
        <div class="row">
          <div class="col-12">
            <div class="container pt-4 pt-sm-5">
              <h2>درباره ما</h2>
              <p class="" style="font-weight: 200">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container mt-3 rtl">
      <div class="d-flex">
        <i class="fal fa-play text-primary mt-1 mr-2" style="font-size:1.3em "></i>
        <h5>ویدیو معرفی شرکت</h5>
      </div>

      <div class="row section-container-spacer text-center">
        <div class="col-md-8 m-auto">
          <div class="h_iframe-aparat_embed_frame" style="" >
            <span style="display: block;padding-top: 57%;"></span>
            <iframe style="" src="https://www.aparat.com/video/video/embed/videohash/XwP0U/vt/frame"  frameborder="0" allowfullscreen allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
          </div>
        </div>
      </div>
      <div></div>
    </div>
  </div>
@endsection


