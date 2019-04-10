document.addEventListener("DOMContentLoaded", function (event) {
    if(window.location.href.includes('human-resource') || window.location.href.includes('gallery') ||
        window.location.href.includes('products') || window.location.href.includes('about-us') ||window.location.href.includes('chain-set')){
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
           console.log('fsfa')
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


        // Add smooth scrolling to all links


    });
}catch (e){

}
