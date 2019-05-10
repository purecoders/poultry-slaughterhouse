document.addEventListener("DOMContentLoaded", function (event) {
    if(window.location.href.includes('human-resource') || window.location.href.includes('gallery') ||
        window.location.href.includes('products') || window.location.href.includes('about-us') ||window.location.href.includes('chain-set') || window.location.href.includes('home')){
        document.getElementById('navbar').classList.add('active')
        document.getElementById('navbar').classList.add('navbar-fixed-top')
    }else{
        window.navbarFixedTopAnimation();
    }

});
function setPadding() {
    if(!document.getElementById('navbar-collapse').className.match(/\in\b/)){
        document.getElementById('navbar').style.paddingBottom = '70px';
    }else{
        document.getElementById('navbar').style.paddingBottom = '20px';
    }

}
try {
    $(document).ready(function(){
        if(window.location.href.includes('chain-set')){

            setTimeout(function() {
                if (location.hash) {
                    window.scrollTo(0, 0);
                    $('html, body').animate({
                        scrollTop: $(location.hash).offset().top - 100
                    }, 800);

                }
            }, 1);

            $("#toFlamingo").on('click', function(event) {
                if (this.hash !== "") {

                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 100
                    }, 800, function(){
                        window.scrollTo(0, $(hash).offset().top -100);
                        window.location.hash = hash;
                    });
                }
            });

            $("#toFlamingo2").on('click', function(event) {
                if (this.hash !== "") {

                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 100
                    }, 800, function(){
                        window.scrollTo(0, $(hash).offset().top -100);
                        window.location.hash = hash;
                    });
                }
            });

            $("#toKhushekhan").on('click', function(event) {
                if (this.hash !== "") {

                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 100
                    }, 800, function(){
                        window.scrollTo(0, $(hash).offset().top -100);
                        window.location.hash = hash;
                    });
                }
            });

            $("#toSepidmorgh").on('click', function(event) {

                if (this.hash !== "") {

                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 100
                    }, 800, function(){
                        window.scrollTo(0, $(hash).offset().top -100);
                        window.location.hash = hash;
                    });
                }
            });

            $("#toTavoni").on('click', function(event) {
                if (this.hash !== "") {

                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 100
                    }, 800, function(){
                        window.scrollTo(0, $(hash).offset().top -100);
                        window.location.hash = hash;
                    });
                }
            });
        }

        $("#btnProducts").on('click', function(event) {
            if (this.hash !== "") {

                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 100
                }, 800, function(){
                    window.scrollTo(0, $(hash).offset().top -100);
                    window.location.hash = hash;
                });
            }
        });
    });
}catch (e){

}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#galleryLoadImage').attr('src', e.target.result);
            if($('#galleryLoadImage').hasClass('d-none')){
                $('#galleryLoadImage').toggleClass('d-none')
            }

        };

        reader.readAsDataURL(input.files[0]);
    }
}

function readUrlProduct(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#productLoadImage').attr('src', e.target.result);
            if($('#productLoadImage').hasClass('d-none')){
                $('#productLoadImage').toggleClass('d-none')
            }

        };

        reader.readAsDataURL(input.files[0]);
    }
}
var dict = {
    "مجموعه زنجیره ای": {
        en: "Chain set",
        ar: "مجموعة سلسلة"
    },
    "منابع انسانی": {
        en: "Human resource",
        ar: "الموارد البشرية"
    },
    "محصولات شرکت":{
        en: "Company Products",
        ar: "منتجات الشركة"
    },
    "گالری" : {
        en : "Gallery",
        ar: "معرض الصور"
    },
    "گالری تصاویر" : {
      en: "Gallery",
      ar: "معرض الصور"
    },
    "درباره ما" : {
        en: "About Us",
        ar: "معلومات عنا"
    },
    "شرکت فاخر صبانور": {
        en:"Fakher Sabanoor Company",
        ar: "شركة فاخر صبانور"
    },
    "محصولات": {
        en: "Products",
        ar: "منتجات"
    },
    "تضمین بهترین قیمت" : {
        en: "Guaranteed the best price",
        ar: "ضمان أفضل الأسعار"
    },
    "کشتارگاه جهان مرغ" : {
        en: "Jahan Morgh Slaughterhouse",
        ar: "مسلخ الجهان مرغ"
    },
    "بیشتر" : {
        en: "More",
        ar: "المزيد"
    },
    "مدیریت" : {
        en: "Management",
        ar: "إدارة"
    },
    "خدمات" : {
        en: "Services",
        ar: "الخدمات"
    },
    "ارتباط با ما" : {
        en: "Contact Us",
        ar: "اتصل بنا"
    }
    ,"ارسال پیام" : {
        en: "Send Message",
        ar: "إرسال رسالة"
    }
    ,"متن پیام را وارد کنید" : {
        en: "Enter text",
        ar: ""
    },
    "ویدیو معرفی شرکت": {
        en: "Company Introduction Video",
        ar: "شركة مقدمة الفيديو"
    },
    "آدرس": {
        en: "Address",
        ar: "عنوان"
    },
    "تعداد قطعه مرغ": {
        en: "Number Of Chicken Pieces",
        ar: "عدد قطع الدجاج"
    },
    "قطعه": {
        en: "Pieces",
        ar: "قطعة"
    },

    "مرغ مادر فلامينگو فارم يک": {
        en: "Morghe Madare Flamingo Farme 1",
        ar: "مرغ مادر فلامينگو فارم يک"
    },

    "مرغ مادر فلامينگو فارم دو": {
        en: "Morghe Madare Flamingo Farme 2",
        ar: "مرغ مادر فلامينگو فارم دو"
    },

    "مرغ مادر سپيدمرغ": {
        en: "Morghe Madare Sepid Morgh",
        ar: "مرغ مادر سپيدمرغ"
    },

    "مرغ مادر خوشه خوان": {
        en: "Morghe Madare Khooshe Khan",
        ar: "مرغ مادر خوشه خوان"
    },

    "مرغ مادر تعاوني 323": {
        en: "Morghe Madare Taavoni 323",
        ar: "مرغ مادر تعاوني 323"
    },

    "تماس با ما": {
        en: "Contact Us",
        ar: "اتصل بنا"
    },
    "تلفن": {
        en: "Phone",
        ar: "هاتف"
    },

    "فاکس": {
        en: "Fax",
        ar: "ثعلب"
    },
    "آذربایجان شرقی 30 کیلومتری جاده مرند و بازرگان": {
        en: "Iran East Azarbaijan 30 Km Marand road and Bazargan",
        ar: "آذربايجان شرقي 30 کيلومتري جاده مرند و بازرگان"
    },
    "آدرس ما روي نقشه": {
        en: "Our Address On The Map",
        ar: "عنواننا على الخريطة"
    },
    "آذربايجان شرقي 30 کيلومتري جاده مرند و بازرگان": {
        en: "Iran East Azarbaijan 30 Km Marand Road and Bazargan",
        ar: "آذربايجان شرقي 30 کيلومتري جاده مرند و بازرگان"
    },
    "تومان": {
        en: "Toman",
        ar: "تومان"
    },
    "آذربایجان شرقی 20 کیلومتری جاده مرند - بازرگان": {
        en:"Iran East Azarbaijan 20 Km Marand Road and Bazargan",
        ar:"آذربایجان شرقی 20 کیلومتری جاده مرند - بازرگان"
    },
    "آذربایجان شرقی شهرستان شبستر":{
        en:"Iran East Azarbaijan Shabestar",
        ar:"آذربایجان شرقی شهرستان شبستر"
    },
    "آخرین قیمت":{
        en:"last price",
        ar:"أحدث سعر"
    },
    "مرغ منجمد":{
        en:"Frozen chicken",
        ar:"دجاج مجمد"
    },
     "بال مرغ":{
        en:"chicken wing",
        ar:"أجنحة الدجاج"
     },

  "واحدها":{
    en:"units",
    ar:"مجموع"
  },

  " انتخاب تاریخ : ":{
    en:" select date : ",
    ar:"حدد تاريخ : "
  },

    "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد." : {
        en: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem dolor eum modi quidem tempora. Aut commodi cumque cupiditate earum eius, enim eveniet facilis laboriosam nemo officia qui sit soluta tenetur ut velit! Deleniti, recusandae",
        ar: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد "
    },


    "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است" : {
        en: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem dolor eum modi quidem tempora. Aut commodi cumque cupiditate earum eius",
        ar: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است"
    },"طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد." : {
        en: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem dolor eum modi quidem tempora. Aut commodi cumque cupiditate earum eius, enim eveniet facilis laboriosam nemo officia qui sit soluta tenetur ut velit! Deleniti, recusandae.",
        ar: "طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد."
    }
    ,".لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است" : {
        en: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid distinctio dolorem fuga quaerat.",
        ar: ".لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است"
    },
    "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است" : {
        en: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem dolor eum modi quidem tempora. Aut commodi cumque cupiditate earum eius",
        ar: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است"
    },
    "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد." : {
        en:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem dolor eum modi quidem tempora. Aut commodi cumque cupiditate earum eius, enim eveniet facilis laboriosam nemo officia qui sit soluta tenetur ut velit! Deleniti, recusandae",
        ar:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد."
    },
    "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است":{
        en:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem dolor eum modi quidem tempora. Aut commodi cumque cupiditate earum eius",
        ar:"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است"
    },
    "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است" : {
        en: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet autem dolor eum modi quidem tempora. Aut commodi cumque cupiditate earum eius",
        ar: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است"
    }
}
var translator = $('body').translate({lang: "fr", t: dict});
$(function(){
    $('.selectpicker').selectpicker();
    try{
        var lang = getCookie('lang');
        translator.lang(lang);
        if(lang === 'en'){
            $('.trn-digit').addClass('en-digit');
        }else {
            $('.trn-digit').removeClass('en-digit');
        }
        $('#langSelect').val(lang);
        $('.selectpicker').selectpicker('refresh')

    }catch (e){

    }
    $('#langSelect').on('change', function(e){
        var lang = this.value;
        translator.lang(lang);
        if(lang === 'en'){
            $('.trn-digit').addClass('en-digit');
        }else {
            $('.trn-digit').removeClass('en-digit');
        }
        setCookie('lang',lang,365);
    });
});

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

$(document).ready(function () {
    new persianDate().format("dddd, MMMM DD YYYY");
    $('.j-date').persianDatepicker({
        autoClose: true,
        observer: true,
        navigator: {
            scroll: {
                enabled: false
            }
        },
        altField: '.observer-example-alt',
        onSelect: function(unix){
            $('.j-date').siblings('.selected-date').innerHTML = new persianDate(unix).format("YY/MM/DD");

            // persianDate(1318874398806).format();
            $.ajax({url: "http://localhost/poultry_house_back/price-by-date/" + unix, success: function(result){
                    console.log(result);
            }});

        },
        format: 'DD / MM / YYYY'
    });
});