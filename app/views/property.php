<?php include(app_path() . '/includes/_header.php') ?>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
    </script>
    <script>
        function initialize()
        {
            var mapProp = {
                center:new google.maps.LatLng(51.508742,-0.120850),
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

        <!-- Example row of columns -->
        <div class="row col-lg-12">
            <h2><?php echo $title ?></h2>
        </div>


        <div class="row col-lg-12" style="background-color:rgb(0, 150, 230);height:2px;width:70%;margin-left:5px;">
        </div>

        <div class="row col-lg-12">
            <div class="col-lg-8"><h5>A short catchphrase for the particular venture</h5></div>

        </div>

        <!-- Body Text -->
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
                        You should definitely purchase this property!
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:left;">Existing properties in the area</h3>
                    </div>
                    <div>
                        Yelp goes here
                    </div>
                </div>

            </div>

            <div class="col-lg-3">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:center;">Bids</h3>
                    </div>
                    <div style="text-align:center;">
                        £70,000
                    </div>

                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:center;">Place a offer</h3>
                    </div>
                    <div style="text-align:center;">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="£67,775">
                          <span class="input-group-btn">
                            <button class="btn" style="background-color: rgb(0, 150, 230);"type="button"><img src="/img/glyphicons_458_money.png" /></button>
                          </span>
                        </div><!-- /input-group -->
                    </div>

                </div>
                <div class="panel">
                    <h3 class="panel-title" style="text-align:center;">Google Maps</h3>
                    <div class="panel-heading">
                    </div>
                    <div>
                        <div id="googleMap" style="width:100%;height:200px;"></div>
                    </div>
                </div>
                <div class="panel">
                    <h3 class="panel-title" style="text-align:center;">Projects</h3>
                    <div class="panel-heading">
                    </div>
                    <div>
						<table class="table table-hover">
							<tr><td>Project Name</td><td>Project category</td></tr>
							<tr><td>Project x</td><td>No category</td></tr>
						</table>
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

</div>

<?php include(app_path().'/includes/_footer.php') ?>
</div> <!-- /container -->
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

</body>
</html>