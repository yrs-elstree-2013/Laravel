<?php include(app_path().'/includes/_header.php'); ?>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
    </script>

    <script>
        function initialize()
        {
            var mapProp = {
                center:new google.maps.LatLng(50.7289,-3.5333),
                zoom:12,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap")
                ,mapProp);


            <?php
			$properties = array(
				array('name'=>'1 Shepherds Road',
				'lat'=>51.508742,
				'lng'=>-0.120850),
				array('name'=>'2 Shepherds Road',
				'lat'=>51.508742,
				'lng'=>-0.130860),
				array('name'=>'3 Shepherds Road',
				'lat'=>51.508742,
				'lng'=>-0.140870),
			);
			for ($i =0; $i < sizeOf($properties); $i++) {
			//foreach($properties as $prop) {
				$prop = $properties[$i];
				echo "var marker".$i." = new google.maps.Marker({";
				echo "position: new google.maps.LatLng(".$prop['lat'].",".$prop['lng']."),";
				echo "map: map,";
				echo "title: '".$prop['name']."'";
				echo "});";
			}
		?>
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<style>
    .panel{margin-bottom:0px;}
</style>

</head>

<?php include(app_path().'/includes/_titlebar.php') ?>
    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1 style="text-align:center">Find A Project!</h1>
        <?php echo View::make('_searchbar');?>

    </div>


    <div class="body-content">

        <!-- Example row of columns -->
        <div class="row">
            <div class="col-lg-4">
                <h2>Our Mission</h2>
                <p style="text-align:justify;text-justify:inter-word;">Establish.Me is an ambitious project which aims to unite local councils, residents and locally based new businesses and take advantage of the ever growing number of empty shop spaces in our high streets.
                    With the cooperation of councils Establish.Me will give new start ups the chance to create a "Project Page" on the site which will allow them to pitch their business to the local community.  In turn the community, may donate towards the business.  These donations go towards paying for a 3-6 month period of rent for a dis-used shop front in the local high street.</p>
                <p><a class="btn btn-default" href="http://establish.dev/info/about">Read More &raquo;</a></p>
            </div>
            <div class="col-lg-8">
                <div id="googleMap" style="width:100%;height:480px;"></div>
            </div>
        </div>

        <div class="row"><?php include(app_path().'/includes/_slide.php') ?></div>
        </div>
    </div><!-- /.body-content -->
    <?php include(app_path().'/includes/_footer.php') ?>
