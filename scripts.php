<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scroll.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>

<script>
    AOS.init();
</script>

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:180,
        responsiveClass:true,
        responsive:{
            0:{
                margin:10,
                items:1,
                nav:true
            },
            600:{
                margin:10,
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })
</script>
