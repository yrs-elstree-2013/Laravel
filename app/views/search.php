<?php include(app_path().'/includes/_header.php'); ?>

</head>

<?php include(app_path().'/includes/_titlebar.php') ?>

    <div class="jumbotron">

        <div class="row">
            <div class="col-lg-2">
                <h4>Search</h4>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-8">
			<form method="post" action="establish.dev/search">
                <div class="input-group">
                    <input id="query" type="text" class="form-control" placeholder="Enter your Postcode! e.g. NW7 4HN">
                    <span class="input-group-btn">
                        <button class="btn" style="background-color: rgb(0, 150, 230);"type="button">
                        <img src="/img/glyphicons_242_google_maps.png" /></button>
                    </span>
              </div><!-- /input-group -->
              <div>
                  <center>
                      <input id="projects" type="radio" name="sex" value="male">Projects</input>
                      <input id="properties" type="radio" name="sex" value="female">Properties</input>
                  </center>
              </div>
			</form>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div>

    <div class="body-content">
		<ol>
			<?php
                if($results != null) {
                    foreach($results as $property) {

                        echo View::make('_result')->with('result_title', $property->postcode)->with('result_body', 'Dynamic body bitches')->with('result_link', URL::to('/property/'.$property->id));

                    }
                }
            ?>
		</ol>
    </div><!-- /.body-content -->
    <?php include(app_path().'/includes/_footer.php') ?>
