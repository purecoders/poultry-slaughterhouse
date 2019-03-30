
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import ScrollReveal from 'scrollreveal'
// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });

// Code your custom function
window.navbarFixedTopAnimation = function navbarFixedTopAnimation() {
    var scroll_pos = 0;
    $(".navbar-default").removeClass('active').addClass('navbar-fixed-top');

    $(document).scroll(function() {
        scroll_pos = $(this).scrollTop();
        if(scroll_pos > 440) {
            $(".navbar-default").addClass('active');
        } else {
            if ($(".navbar-default").hasClass('home') && $(".navbar-collapse").hasClass('in')) return;
            $(".navbar-default").removeClass('active');
        }
    });

    $('.navbar-toggle').click(function(event){
        if (!$('.navbar-default').hasClass('active')) {
            $(".navbar-default").addClass('active home');
        }else if($(".navbar-default").hasClass('home') && scroll_pos <440){
            $(".navbar-default").removeClass('active');
        }
    });

    $(window).resize(function() {
        var viewportWidth = window.innerWidth;
        if($(".navbar-default").hasClass('home') && $('.navbar-collapse').hasClass('in')){
            if (viewportWidth >767) {
                $(".navbar-default").removeClass('active');
            }else{
                $(".navbar-default").addClass('active');
            }
        }

    });

}

// Code your custom function
window.scrollRevelation = function scrollRevelation( classString ) {
    window.sr =  new ScrollReveal();
    sr.reveal(classString, 200);
}


window.navActivePage =  function navActivePage(){
    $('nav li a[href=".' + location.pathname + '"]').addClass('active');
    if (location.pathname == '/') $('nav li a[href="./index.html"]').addClass('active')
}
