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
                        <h3 class="panel-title" style="text-align:center;">Existing Projects</h3>
                    </div>
                    <div style="text-align:center;">
                        No Existing Projects
                    </div>

                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:center;">Rent Details</h3>
                    </div>
                    <div style="margin-left:auto;margin-right:auto;">
                        <strong>Rent:</strong> <br> £ 1000 / month <br> <br>
                        <strong>Owner:</strong> <br> Exeter Council <br>
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
                    <div>
                        <div style="width:100%;"><strong>Crime Rating: </strong> 1</div>
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