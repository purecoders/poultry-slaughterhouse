@extends('layouts.main')
@section('content')
<script src="{{asset('js/chart.min.js')}}"></script>

<style>
  canvas{
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
  }
</style>
<script src="{{asset('js/jquery.min.js')}}"></script>
<div class="section-container mt-5 pt-5">
  <div class="container mt-3">
    <div class="row section-container-spacer">
      <div class="col-xs-12 col-md-12 text-center ">
        <h2 class="trn">محصولات</h2>
        <p dir="rtl" align="center" class="trn">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
      </div>
    </div>



      @foreach($categories as $category)
        <div class="rtl p-2 mb-5" style="border: 1px dotted #ffc107;border-radius: 1rem">
      <div class="d-flex justify-content-center">
        <i class="fal fa-plus mt-2" style="color: #ffc107;font-size: 1.2em"></i>
        <h3 class="ml-1 trn" >{{$category->name}}</h3>
      </div>
       @php
       $products = $category->products;
       @endphp
       @foreach($products as $product)
         <div class="row">
           <div class="col-md-7 d-flex flex-wrap">
             <img class="reveal product-img-alt" src="{{asset($product->image_url)}}" alt="">
             <div class="m-3">
               <h5 class="trn">{{$product->name}}</h5>
               <span>
                 <span class="trn">آخرین قیمت</span>
                 :

               </span>
                 @if($product->prices !== null)
               <span>
                 <span class="trn-digit">{{number_format($product->prices()->take(1)->get()[0]->amount)}}</span>
                 <span class="trn">تومان</span>
               </span>
               <div class="mt-5">
                 <span class="j-date{{$product->id}} j-date-product"> <i class="fal fa-calendar-alt text-primary"></i> انتخاب تاریخ :</span>
                 @php
                  $today = new \App\Http\Controllers\PersianDate();
                 @endphp
                 <span class="selected-date{{$product->id}} selected-date-style p-1">{{$today->toPersiandate(date('Y/m/d', time()), 'y/m/d')}}</span>
                 <div>
                   <i class="fal fa-money-bill-alt text-primary"></i>
                   <span class="price-by-date{{$product->id}} mt-2  trn-digit">{{number_format($product->prices()->take(1)->get()[0]->amount)}}</span>
                   <span class="trn">تومان</span>
                 </div>

               </div>

                 @endif
             </div>
           </div>
             @php
             $counter++;
             $prices = $product->prices()->take(6)->get()->reverse()->values();
             $max = 0;
             $min = 100000000000;
             $date = new \App\Http\Controllers\PersianDate();
             foreach ($prices as $price){
                if($price->amount > $max) $max = $price->amount;
                if($price->amount < $min) $min = $price->amount;
             }
             //$min = (int)($min - ($min/10));
             $step = (int)(($max - $min)/2);
             @endphp
           <div class="col-md-5">
             <div style="width:100%;">
               <canvas id="chart{{$product->id}}" ></canvas>
             </div>
             <script>
                 $(document).ready(function () {
                     new persianDate().format("dddd, MMMM DD YYYY");
                     $('.j-date{{$product->id}}').persianDatepicker({
                         autoClose: true,
                         observer: true,
                         navigator: {
                             scroll: {
                                 enabled: false
                             }
                         },
                         altField: '.observer-example-alt',
                         onSelect: function(unix){

                             $('.selected-date{{$product->id}}').text(new persianDate(unix).format("YY/MM/DD"));
                             $.ajax({url: "http://localhost/poultry_house_back/price-by-date/" + unix, success: function(result){
                                     $('.price-by-date{{$product->id}}').text(result);
                                 }});

                         },
                         format: 'DD / MM / YYYY'
                     });
                 });


                 var ctx = document.getElementById('chart{{$product->id}}').getContext('2d');
                 var myChart = new Chart(ctx, {
                     type: 'line',
                     data: {
                         labels: [
                 @foreach($prices as $price)
                 "{{$date->toPersiandate($price->date, 'y/m/d')}}",
                 @endforeach
                 ],
                         datasets: [{
                             label: 'نمودار قیمت',
                             data: [
                                 @foreach($prices as $price)
                               "{{$price->amount}}",
                                 @endforeach
                             ],
                           @if($counter % 2 == 0)
                                backgroundColor: [
                                    'rgba(255, 99, 50, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],

                           @else
                                backgroundColor: [
                                  'rgba(150, 35, 125, 0.2)',
                                  'rgba(54, 162, 235, 0.2)',
                                  'rgba(255, 206, 86, 0.2)',
                                  'rgba(75, 192, 192, 0.2)',
                                  'rgba(153, 102, 255, 0.2)',
                                  'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                  'rgba(255, 99, 132, 1)',
                                  'rgba(54, 162, 235, 1)',
                                  'rgba(255, 206, 86, 1)',
                                  'rgba(75, 192, 192, 1)',
                                  'rgba(153, 102, 255, 1)',
                                  'rgba(255, 159, 64, 1)'
                                ],
                           @endif
                             borderWidth: 1
                         }]
                     },
                     options: {
                         legend:{
                           labels:{
                               fontFamily:'IRANSans'
                           }
                         },
                         scales: {
                             scaleLabel:{
                                 fontFamily:'IRANSans',
                                 labelString:'IRANSans',
                             },
                             xAxes:[{
                                 gridLines: {
                                     color: "rgba(0, 0, 0, 0)",
                                 }
                             }],
                             yAxes: [{
                                 gridLines: {
                                     color: "rgba(0, 0, 0, 0)",
                                 },
                                 ticks: {
                                     callback: function(value, index, values) {
                                         return  value + ' تومان';
                                     },

                                     min: {{$min}},
                                     max: {{$max}},

                                     // forces step size to be 5 units
                                     stepSize: {{$step}} // <----- This prop sets the stepSize
                                 }
                             }]
                         }
                     }
                 });
             </script>
           </div>

         </div>
         <hr>
       @endforeach

    </div>
      @endforeach

    {{--<hr style="background-color:rgb(255, 193, 7);">--}}
  </div>
</div>

@endsection