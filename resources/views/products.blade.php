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
<div class="section-container mt-5 pt-5">
  <div class="container mt-3">
    <div class="row section-container-spacer">
      <div class="col-xs-12 col-md-12 text-center ">
        <h2>محصولات</h2>
        <p dir="rtl" align="center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
      </div>
    </div>
    {{--category one--}}
    <div class="rtl p-2 mb-5" style="border: 1px dotted #ffc107;border-radius: 1rem">
      <div class="d-flex justify-content-center">
        <i class="fal fa-plus mt-2" style="color: #ffc107;font-size: 1.2em"></i>
        <h3 class="ml-1" >مرغ ممتاز</h3>
      </div>
      {{--product one in category one--}}
      <div class="row">
        <div class="col-md-7 d-flex flex-wrap">
          <img class="reveal product-img-alt" src="{{asset('img/p1.jpg')}}" alt="">
          <div class="m-3">
            <h5>مرغ ممتاز</h5>
            <span>قیمت امروز : </span>
            <span> 16،0000 تومان</span>
          </div>
        </div>
        <div class="col-md-5">
          <div style="width:100%;">
            <canvas id="chart1" ></canvas>
          </div>
          <script>
            var x = {{$test}};
              var ctx = document.getElementById('chart1').getContext('2d');
              var myChart = new Chart(ctx, {
                  type: 'line',
                  data: {
                      labels: ['98/۶/۱', '98/1/10', '98/1/30', '98/2/30', '98/5/30'],
                      datasets: [{
                          label: 'نمودار قیمت',
                          data: [x, 15000, 12500, 20000, 17500,],
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

                                  min: 10000,
                                  max: 20000,

                                  // forces step size to be 5 units
                                  stepSize: 5000 // <----- This prop sets the stepSize
                              }
                          }]
                      }
                  }
              });
          </script>
        </div>

      </div>
      <hr>
      {{--product two in category one--}}
      <div class="row">
        <div class="col-md-7 d-flex flex-wrap">
          <img class="reveal product-img-alt" src="{{asset('img/p2.jpg')}}" alt="">
          <div class="m-3">
            <h5>بال مرغ ممتاز</h5>
            <span>قیمت امروز : </span>
            <span> 19،0000 تومان</span>
          </div>
        </div>
        <div class="col-md-5">
          <div style="width:100%;">
            <canvas id="chart2" ></canvas>
          </div>
          <script>
              var x = {{$test}};
              var ctx = document.getElementById('chart2').getContext('2d');
              var myChart = new Chart(ctx, {
                  type: 'line',
                  data: {
                      labels: ['98/۶/۱', '98/1/10', '98/1/30', '98/2/30', '98/5/30'],
                      datasets: [{
                          label: 'نمودار قیمت',
                          data: [x, 15000, 12500, 20000, 17500,],
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

                                  min: 10000,
                                  max: 20000,

                                  // forces step size to be 5 units
                                  stepSize: 5000 // <----- This prop sets the stepSize
                              }
                          }]
                      }
                  }
              });
          </script>
        </div>

      </div>
    </div>

    {{--<hr style="background-color:rgb(255, 193, 7);">--}}
    {{--category two--}}
    <div class="rtl p-2 mb-4" style="border: 1px dotted #ffc107;border-radius: 1rem">
      <div class="d-flex justify-content-center">
        <i class="fal fa-plus mt-2" style="color: #ffc107;font-size: 1.2em"></i>
        <h3 class="ml-1" >مرغ منجمد</h3>
      </div>
      {{--product one in category two--}}
      <div class="row">
        <div class="col-md-7 d-flex flex-wrap">
          <img class="reveal product-img-alt" src="{{asset('img/p3.jpg')}}" alt="">
          <div class="m-3">
            <h5>مرغ ممتاز</h5>
            <span>قیمت امروز : </span>
            <span> 16،0000 تومان</span>
          </div>
        </div>
        <div class="col-md-5">
          <div style="width:100%;">
            <canvas id="chart3" ></canvas>
          </div>
          <script>
              var x = {{$test}};
              var ctx = document.getElementById('chart3').getContext('2d');
              var myChart = new Chart(ctx, {
                  type: 'line',
                  data: {
                      labels: ['98/۶/۱', '98/1/10', '98/1/30', '98/2/30', '98/5/30'],
                      datasets: [{
                          label: 'نمودار قیمت',
                          data: [x, 15000, 12500, 20000, 17500,],
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

                                  min: 10000,
                                  max: 20000,

                                  // forces step size to be 5 units
                                  stepSize: 5000 // <----- This prop sets the stepSize
                              }
                          }]
                      }
                  }
              });
          </script>
        </div>

      </div>
      <hr>
      {{--product two in category two--}}
      <div class="row">
        <div class="col-md-7 d-flex flex-wrap">
          <img class="reveal product-img-alt" src="{{asset('img/p2.jpg')}}" alt="">
          <div class="m-3">
            <h5>بال مرغ ممتاز</h5>
            <span>قیمت امروز : </span>
            <span> 19،0000 تومان</span>
          </div>
        </div>
        <div class="col-md-5">
          <div style="width:100%;">
            <canvas id="chart4" ></canvas>
          </div>
          <script>
              var x = {{$test}};
              var ctx = document.getElementById('chart4').getContext('2d');
              var myChart = new Chart(ctx, {
                  type: 'line',
                  data: {
                      labels: ['98/۶/۱', '98/1/10', '98/1/30', '98/2/30', '98/5/30'],
                      datasets: [{
                          label: 'نمودار قیمت',
                          data: [x, 15000, 12500, 20000, 17500,],
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

                                  min: 10000,
                                  max: 20000,

                                  // forces step size to be 5 units
                                  stepSize: 5000 // <----- This prop sets the stepSize
                              }
                          }]
                      }
                  }
              });
          </script>
        </div>

      </div>
    </div>
  </div>
</div>

@endsection