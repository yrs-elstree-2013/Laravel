<?php include(app_path() . '/includes/_header.php') ?>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
    </script>
    <script>
        function initialize()
        {
            var mapProp = {
                center:new google.maps.LatLng(<?php
                $result = exec(app_path().'python/PostCodesV5.py ' . $property->postcode);
                $json = json_decode($result);
                echo($json['lat'] . ' ' . $json['long']);
                ?> ),
                zoom:12,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap")
                ,mapProp);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<?php include(app_path().'/includes/_titlebar.php') ?>



    <div class="body-content">

        <div class="row col-lg-12">
            <div class="col-lg-9">
                <!-- Left hand coloumn -->
                <div class="panel">
                    <img src="http://www.ournewhaven.org.uk/images/uploaded/scaled/Lower_High_Street_Shops.jpg" style="max-width:100%;max-height:100%;margin-left:2.5%;margin-right:2.5%;" />
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:left;">My Fantastic Photography Shop </h3>
                    </div>
                    <div>
                        You should definitely fund this incredible project!
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:left;">Existing businesses in the area</h3>
                    </div>
                    <div>
                        Yelp goes here
                    </div>
                </div>

            </div>

            <div class="col-lg-3">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:center;">Curent Funding</h3>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" style="width: 60%"></div>
                    </div>
                    <div style="text-align:center;">
                        £60 of £300
                    </div>

                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:center;">Donations</h3>
                    </div>
                    <div style="text-align:center;">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="£10">
                          <span class="input-group-btn">
                            <button class="btn" style="background-color: rgb(0, 150, 230);"type="button"><img src="/img/glyphicons_458_money.png" /></button>
                          </span>
                        </div><!-- /input-group -->
                    </div>

                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:center;">Social Media</h3>
                    </div>
                    <div style="margin-left:auto;margin-right:auto;">
                        <a href="http://www.facebook.com" target="_blank"><img src="/img/img1.png" onmouseover="this.src='/img/img1b.png'" onmouseout="this.src='/img/img1.png'" alt="Facebook" width="100" height="100"></a>
                        <a href="http://www.googlemail.com" target="_blank"><img src="/img/img2.png" onmouseover="this.src='/img/img2b.png'" onmouseout="this.src='/img/img2.png'" alt="Email" width="100" height="100"></a>
                        <a href="https://plus.google.com" target="_blank"><img src="/img/img3.png" onmouseover="this.src='/img/img3b.png'" onmouseout="this.src='/img/img3.png'" alt="Google+" width="100" height="100"></a>
                        <a href="https://twitter.com/" target="_blank"><img src="/img/img5.png" onmouseover="this.src='/img/img5b.png'" onmouseout="this.src='/img/img5.png'" alt="twitter" width="100" height="100"></a>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:center;">Google Maps</h3>
                    </div>
                    <div>
                        <div id="googleMap" style="width:100%;height:200px;"></div>
                    </div>

                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:left;"> Establish.me Ratings:</h3>
                    </div>
                    <div style="margin-left:25%;margin-right:25%;">

                    </div>
                </div>
            </div>
        </div>

    </div>


<?php include(app_path().'/includes/_footer.php') ?>
</div> <!-- /container -->
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

</body>
</html>