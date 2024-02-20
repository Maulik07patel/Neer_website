  <!-- js -->
  <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/minimal-slider.js"></script>
    <script src="js/toucheffects.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!-- carousel -->
    <script src="js/owl.carousel.js"></script>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>

    <!-- //dropdown nav -->

    <script>
         // active header nav-link
    var currentUrl = window.location.href;
    $('.navbar .nav-link').each(function() {
        var targetUrl = $(this).attr('href');
        if (currentUrl.includes(targetUrl) || targetUrl.includes(currentUrl)) {
            $(this).addClass('active');
            return false;
        }
    });
    if (currentUrl.endsWith('/')) {
        $('.navbar .nav-link[href="index.php"]').addClass('active');
    }


    $(document).ready(function() {
        var currentUrl = window.location.href;

        // Check footer links
        $('.footer-emp-wthree .links').each(function() {
            var targetUrl = $(this).attr('href');
            if (currentUrl.includes(targetUrl) || targetUrl.includes(currentUrl)) {
                $(this).addClass('active');
                return false;
            }
        });

        // Special case for the home link if the URL ends with '/'
        if (currentUrl.endsWith('/')) {
            $('.footer-emp-wthree .links[href="index.php"]').addClass('active');
        }
    });
    </script>
    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
    <!-- /js -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->