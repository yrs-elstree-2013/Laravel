<br />
<div class="container">
    <div class="col-lg-12 navbar navbar-static visible-lg" style="bottom:0;">
        <div class="nav-collapse collapse" style="width:400px;margin: 0 auto;">
            <div>
                <ul class="nav navbar-nav text-center" style="">

                    <li style="border-right:1px solid #000; margin:5px 0 5px 0; padding:0;" <?php if ($title == 'Terms & Conditions') { echo('class="active"'); } ?>><a href="http://establish.dev/info/tos">Terms &amp; Services</a></li>
                    <li style="border-right:1px solid #000; margin:5px 0 5px 0;" <?php if ($title == 'Privacy') { echo('class="active"'); } ?>><a href="http://establish.dev/info/privacypolicy">Privacy</a></li>
                    <li style="margin:5px 0 5px 0;" <?php if ($title == 'About Us') { echo('class="active"'); } ?>><a href="http://establish.dev/info/about">About Us</a></li>

                </ul>
            </div>
        </div><!--/.nav-collapse -->
    </div>
</div>
</div> <!-- /container -->
	  <!-- Feel free to load scripts in the footer -->
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.7/bootstrap-switch.min.js"></script>

<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <!-- Feel free to load scripts in the footer -->
  <!-- <script src="./js/prism.js"></script> -->
  <script src="./js/jquery.easing.1.3.js"></script>
  <script src="./js/jquery.touchSwipe.min.js"></script>
  <script src="./js/jquery.liquid-slider.min.js"></script>  
  <script>
    $('#main-slider').liquidSlider({
      slideEaseFunction:'animate.css',
      animateOut:'fadeOutLeft',
      animateIn:'fadeInRight',
      heightEaseDuration:1000,
      slideEaseDuration:1000,
	  autoSlide: true,
	  pauseOnHover: true
    });

    /* If you need to access the internal property or methods, use this:
    var api = $.data( $('#slider-id')[0], 'liquidSlider');
    */
  </script>

</body>
</html>