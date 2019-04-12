@extends('layouts.main')
<script src="{{asset('js/jquery.min.js')}}"></script>
@section('content')
  <div class="section-container mt-5 pt-5">
    <div class="container mt-3 rtl">
      <div class="row section-container-spacer text-center">
        <div class="col-xs-12 col-md-12">
          <h2>پنل مدیریت</h2>
        </div>
      </div>
      <div class="rtl">
        {{--manage category--}}
        <div class="row">
          <div class="col-md-6">
            <h5 class="mb-3">
              <i class="fal fa-list-alt text-primary"></i>
              ثبت دسته بندی
            </h5>

            <form action="{{route('category-add')}}" method="post" class="form-inline" onsubmit="return confirm('آیا از ثبت دسته مطمئن هستید؟')">
              @csrf
              <div class="form-group mb-2">
                <label for="category" class="sr-only">نام دسته</label>
                <input name="name" type="text" class="form-control" id="category" placeholder="نام دسته بندی" required>
              </div>

              <button type="submit" class="btn  btn-primary  mb-2 ml-3" style="padding: 8px 14px;">ثبت</button>
            </form>

          </div>
          <div class="col-md-6">
            <h5 class="mb-3">
              <i class="fal fa-list text-primary"></i>
              دسته بندی های ثبت شده
            </h5>
            <ul>

                @foreach($categories as $category)
              <li class="alert alert-info p-2 mb-1 d-flex justify-content-between">
                <span>{{$category->name}}</span>
                <form action="{{route('category-delete')}}" method="post" class="" onsubmit="return confirm('آیا از حذف این دسته مطمئن هستید؟')">
                  @csrf
                    <input type="hidden" name="id" value="{{$category->id}}">
                  <button type="submit" class="btn btn-danger p-2" style="font-size: 0.9em;">
                    <i class="fal fa-times"></i>
                    حذف
                  </button>
                </form>
              </li>
                @endforeach

            </ul>
          </div>
        </div>

        <hr class="bg-primary my-4">

        {{--manage products--}}
        <div class="row">
          <div class="col-md-6">
            <h5 class="mb-3">
              <i class="fal fa-inventory text-primary"></i>
              ثبت محصول
            </h5>
            <form action="{{route('product-add')}}" method="post" enctype="multipart/form-data" onsubmit="return confirm('آیا از ثبت این کالا مطمئن هستید؟')">
              @csrf
              <div class="form-group mb-4 row">
                <label for="product" class="col-sm-4 col-form-label">نام محصول</label>
                <div class="col-sm-8">

                  <input name="name" type="text" class="form-control" id="product" placeholder="نام محصول " required>

                </div>
              </div>

              <div class="form-group row">
                <label for="productCategory" class="col-sm-4 col-form-label">انتخاب دسته</label>
                <div class="col-sm-8">
                  <select name="category_id" class="form-control " id="productCategory" required>
                      @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach

                  </select>
                </div>

              </div>
              <div class="form-group row">
                <label for="productImage" class="col-sm-4 col-form-label">تصویر</label>
                <div class="col-sm-8">

                  <input name="image" type="file" class="form-control-file" id="productImage" onchange="readUrlProduct(this)">
                  <img id="productLoadImage" src="#" class="d-none loaded-img mt-1"  alt="your image"/>
                </div>
              </div>


              <button type="submit" class="btn  btn-primary  mb-2 ml-3" style="padding: 8px 14px;">ثبت</button>
            </form>
          </div>
          <div class="col-md-6">
            <h5 class="mb-3">
              <i class="fal fa-list text-primary"></i>
              محصولات ثبت شده
            </h5>
            <ul>
                @foreach($products as $product)
              <li class="alert alert-primary p-2 mb-1 d-flex justify-content-between">
                <span>{{$product->name}}</span>
                <form action="{{route('product-delete')}}" method="post" class="" onsubmit="return confirm('آیا از حذف این دسته مطمئن هستید؟')">
                  @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                  <button type="submit" class="btn btn-danger p-2" style="font-size: 0.9em;">
                    <i class="fal fa-times"></i>
                    حذف
                  </button>
                </form>
              </li>
                @endforeach



            </ul>
          </div>
        </div>

        <hr class="bg-primary my-4">
        {{--manage price--}}
        <div class="row">
          <div class="col-12">
            <h5 class="mb-3">
              <i class="fal fa-money-bill text-primary"></i>
              ثبت قیمت
            </h5>
            <div class="d-flex flex-wrap justify-content-center">

                @foreach($products as $product)
                <div class="card p-1 mr-1 mt-1" style="width: 18rem;">
                <img src="{{asset($product->image_url)}}" class="card-img-top" style="height: 270px">
                <div class="card-body">
                  <h5 class="card-title">{{$product->name}}</h5>

                  <form action="{{route('product-insert-price')}}" method="post" class="" onsubmit="return confirm('آیا از ثبت قیمت این محصول مطمئن هستید؟')">
                    @csrf
                    <div class="form-group mb-2">
                      <label for="category" class="">قیمت امروز</label>
                      <input type="number" name="amount" class="form-control" id="category" placeholder="قیمت به تومان" required>
                    </div>

                      <input type="hidden" name="product_id" value="{{$product->id}}">

                    <button type="submit" class="btn  btn-primary " style="padding: 8px 14px;">ثبت</button>
                  </form>
                </div>
              </div>
                @endforeach


            </div>

          </div>
        </div>

        <hr class="bg-primary my-4">

        {{--manage gallery --}}
        <div>
          {{--add image--}}
          <div class="row">
            <div class="col-md-6">
              <h5 class="mb-3">
                <i class="fal fa-file-image text-primary"></i>
                گالری
              </h5>
              <form action="{{route('media-add')}}" method="post" enctype="multipart/form-data" onsubmit="return confirm('آیا از ثبت این رسانه مطمئن هستید؟')">
                @csrf

                <div class="form-group row">
                  <label for="galleryImage" class="col-sm-4 col-form-label">تصویر/ ویدیو</label>
                  <div class="col-sm-8">
                    <input type="file" name="file" class="form-control-file" id="galleryImage" onchange="readURL(this);" required>
                  </div>
                </div>

                  <div class="form-group row">
                      <label for="galleryImage" class="col-sm-4 col-form-label">توضیحات</label>
                      <div class="col-sm-8">
                          <textarea name="text" maxlength="250" class="form-control-file" placeholder="توضیحات(حداکثر 250 کاراکتر)"></textarea>
                      </div>
                  </div>

                <div class="form-group row">
                  <button type="submit" class="btn  btn-primary  mb-2 ml-3" style="padding: 8px 14px;">
                    <i class="fal fa-plus"></i>
                    ثبت عکس / ویدیو
                  </button>
                </div>


              </form>
            </div>
            <div class="col-md-6">
              <img id="galleryLoadImage" src="#" class="d-none loaded-img"  alt="your image"/>
            </div>
          </div>
          {{--manage image--}}
          <div class="row mt-5">
            <div class="col-12">
              <h5 class="mb-3">
                <i class="fal fa-images text-primary"></i>
                همه ی تصاویر
              </h5>
              <div class="d-flex flex-wrap justify-content-center">

                  @foreach($media as $item)
                <div class="card text-white mr-1 mt-1 p-0 card-gallery">
                  <img src="{{asset($item->resized_url)}}" class="card-img">
                  <div class="card-img-overlay p-0">
                    <form action="{{route('media-delete')}}" method="post" class="" onsubmit="return confirm('آیا از حذف این رسانه مطمئن هستید؟')">
                      @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                      <button type="submit" class="btn  btn-danger" style="padding: 4px 8px; font-size: 0.9em">
                        <i class="fal fa-times"></i>
                        حذف
                      </button>
                    </form>
                  </div>
                </div>
                  @endforeach

              </div>
            </div>
          </div>
        </div>

        <hr class="bg-primary my-4">

        <div class="row">
          <div class="col-12">
            <h5 class="mb-3">
              <i class="fal fa-envelope-open text-primary"></i>
              پیام ها
            </h5>
            <div class="table-responsive">
              <table class="table">
                <thead>
                <tr >
                  <th scope="col" class="text-center" >ردیف</th>
                  <th scope="col" class="text-center" >ایمیل</th>
                  <th scope="col" class="text-center" style="min-width: 190px">موضوع</th>
                  <th scope="col" class="text-center" >متن پیام</th>
                </tr>
                </thead>
                <tbody>

                @php($i = 0)
                @foreach($messages as $message)
                <tr>
                  <th scope="row">{{++$i}}</th>
                  <td >{{$message->email}}</td>
                  <td>{{$message->title}}</td>
                  <td align="justify">
                      {{$message->description}}
                  </td>
                </tr>
                @endforeach


                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
