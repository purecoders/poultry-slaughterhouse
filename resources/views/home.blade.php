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
            <form action="#" class="form-inline" onsubmit="return confirm('آیا از ثبت دسته مطمئن هستید؟')">
              @csrf
              <div class="form-group mb-2">
                <label for="category" class="sr-only">نام دسته</label>
                <input type="text" class="form-control" id="category" value="مثال: مرغ منجمد" required>
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
              <li class="alert alert-info p-2 mb-1 d-flex justify-content-between">
                <span>دسته اول</span>
                <form action="" class="" onsubmit="return confirm('آیا از حذف این دسته مطمئن هستید؟')">
                  @csrf
                  <button type="submit" class="btn btn-danger p-2" style="font-size: 0.9em;">
                    <i class="fal fa-times"></i>
                    حذف
                  </button>
                </form>
              </li>

              <li class="alert alert-info p-2 mb-1 d-flex justify-content-between">
                <span>دسته دوم</span>
                <form action="" class="" onsubmit="return confirm('آیا از حذف این دسته مطمئن هستید؟')">
                  @csrf
                  <button type="submit" class="btn btn-danger p-2" style="font-size: 0.9em;">
                    <i class="fal fa-times"></i>
                    حذف
                  </button>
                </form>
              </li>


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
            <form action="#" onsubmit="return confirm('آیا از ثبت این کالا مطمئن هستید؟')">
              @csrf
              <div class="form-group mb-4 row">
                <label for="product" class="col-sm-4 col-form-label">نام محصول</label>
                <div class="col-sm-8">

                  <input type="text" class="form-control" id="product" value="مثال: مرغ " required>

                </div>
              </div>

              <div class="form-group row">
                <label for="productCategory" class="col-sm-4 col-form-label">انتخاب دسته</label>
                <div class="col-sm-8">
                  <select class="form-control " id="productCategory" required>
                    <option>دسته اول</option>
                    <option>دسته دوم</option>
                    <option>دسته سوم</option>

                  </select>
                </div>

              </div>
              <div class="form-group row">
                <label for="productImage" class="col-sm-4 col-form-label">تصویر</label>
                <div class="col-sm-8">

                  <input type="file" class="form-control-file" id="productImage" onchange="readUrlProduct(this)">
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
              <li class="alert alert-primary p-2 mb-1 d-flex justify-content-between">
                <span>محصول دوم</span>
                <form action="" class="" onsubmit="return confirm('آیا از حذف این دسته مطمئن هستید؟')">
                  @csrf
                  <button type="submit" class="btn btn-danger p-2" style="font-size: 0.9em;">
                    <i class="fal fa-times"></i>
                    حذف
                  </button>
                </form>
              </li>

              <li class="alert alert-primary p-2 mb-1 d-flex justify-content-between">
                <span>محصول اول</span>
                <form action="" class="" onsubmit="return confirm('آیا از حذف این دسته مطمئن هستید؟')">
                  @csrf
                  <button type="submit" class="btn btn-danger p-2" style="font-size: 0.9em;">
                    <i class="fal fa-times"></i>
                    حذف
                  </button>
                </form>
              </li>


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
              <div class="card p-1 mr-1 mt-1" style="width: 18rem;">
                <img src="{{asset('img/p1.jpg')}}" class="card-img-top" style="height: 270px">
                <div class="card-body">
                  <h5 class="card-title">محصول اول</h5>
                  <form action="#" class="" onsubmit="return confirm('آیا از ثبت قیمت این محصول مطمئن هستید؟')">
                    @csrf
                    <div class="form-group mb-2">
                      <label for="category" class="">قیمت امروز</label>
                      <input type="text" class="form-control" id="category" value="مثال:  150000 تومان" required>
                    </div>

                    <button type="submit" class="btn  btn-primary " style="padding: 8px 14px;">ثبت</button>
                  </form>
                </div>
              </div>
              <div class="card p-1 mr-1 mt-1" style="width: 18rem;">
                <img src="{{asset('img/p1.jpg')}}" class="card-img-top" style="height: 270px">
                <div class="card-body">
                  <h5 class="card-title">محصول اول</h5>
                  <form action="#" class="" onsubmit="return confirm('آیا از ثبت قیمت این محصول مطمئن هستید؟')">
                    @csrf
                    <div class="form-group mb-2">
                      <label for="category" class="">قیمت امروز</label>
                      <input type="text" class="form-control" id="category" value="مثال:  150000 تومان" required>
                    </div>

                    <button type="submit" class="btn  btn-primary " style="padding: 8px 14px;">ثبت</button>
                  </form>
                </div>
              </div>
              <div class="card p-1 mr-1 mt-1" style="width: 18rem;">
                <img src="{{asset('img/p1.jpg')}}" class="card-img-top" style="height: 270px">
                <div class="card-body">
                  <h5 class="card-title">محصول اول</h5>
                  <form action="#" class="" onsubmit="return confirm('آیا از ثبت قیمت این محصول مطمئن هستید؟')">
                    @csrf
                    <div class="form-group mb-2">
                      <label for="category" class="">قیمت امروز</label>
                      <input type="text" class="form-control" id="category" value="مثال:  150000 تومان" required>
                    </div>

                    <button type="submit" class="btn  btn-primary " style="padding: 8px 14px;">ثبت</button>
                  </form>
                </div>
              </div>
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
              <form action="#" onsubmit="return confirm('آیا از ثبت این عکس مطمئن هستید؟')">
                @csrf

                <div class="form-group row">
                  <label for="galleryImage" class="col-sm-4 col-form-label">تصویر</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control-file" id="galleryImage" onchange="readURL(this);" required>
                  </div>
                </div>
                <div class="form-group row">
                  <button type="submit" class="btn  btn-primary  mb-2 ml-3" style="padding: 8px 14px;">
                    <i class="fal fa-plus"></i>
                    ثبت عکس
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

                <div class="card text-white mr-1 mt-1 p-0 card-gallery">
                  <img src="{{asset('img/img-04.jpg')}}" class="card-img">
                  <div class="card-img-overlay p-0">
                    <form action="#" class="" onsubmit="return confirm('آیا از ثبت قیمت این عکس مطمئن هستید؟')">
                      @csrf
                      <button type="submit" class="btn  btn-danger" style="padding: 4px 8px; font-size: 0.9em">
                        <i class="fal fa-times"></i>
                        حذف
                      </button>
                    </form>
                  </div>
                </div>
                <div class="card text-white mr-1 mt-1 p-0 card-gallery">
                  <img src="{{asset('img/img-06.jpg')}}" class="card-img">
                  <div class="card-img-overlay p-0">
                    <form action="#" class="" onsubmit="return confirm('آیا از ثبت قیمت این عکس مطمئن هستید؟')">
                      @csrf
                      <button type="submit" class="btn  btn-danger" style="padding: 4px 8px; font-size: 0.9em">
                        <i class="fal fa-times"></i>
                        حذف
                      </button>
                    </form>
                  </div>
                </div>
                <div class="card text-white mr-1 mt-1 p-0 card-gallery">
                  <img src="{{asset('img/img-07.jpg')}}" class="card-img">
                  <div class="card-img-overlay p-0">
                    <form action="#" class="" onsubmit="return confirm('آیا از ثبت قیمت این عکس مطمئن هستید؟')">
                      @csrf
                      <button type="submit" class="btn  btn-danger" style="padding: 4px 8px; font-size: 0.9em">
                        <i class="fal fa-times"></i>
                        حذف
                      </button>
                    </form>
                  </div>
                </div>
                <div class="card text-white mr-1 mt-1 p-0 card-gallery">
                  <img src="{{asset('img/img-01.jpg')}}" class="card-img">
                  <div class="card-img-overlay p-0">
                    <form action="#" class="" onsubmit="return confirm('آیا از ثبت قیمت این عکس مطمئن هستید؟')">
                      @csrf
                      <button type="submit" class="btn  btn-danger" style="padding: 4px 8px; font-size: 0.9em">
                        <i class="fal fa-times"></i>
                        حذف
                      </button>
                    </form>
                  </div>
                </div>

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
                <tr>
                  <th scope="row">1</th>
                  <td >pouyaakn4@gmail.com</td>
                  <td>خرید عمده</td>
                  <td align="justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                    نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Mohsen@gmail.com</td>
                  <td>خرید مرغ</td>
                  <td align="justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد
                    نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                  </td>
                </tr>

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
