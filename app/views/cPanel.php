<?php include(app_path().'/includes/_header.php'); ?>
</head>

<?php include(app_path().'/includes/_titlebar.php') ?>
    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1 style="text-align:center">Find A Project!</h1>
        <div class="row">
            <div class="col-lg-2">

            </div><!-- /.col-lg-6 -->
            <div class="col-lg-8">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter your Postcode! e.g. NW7 4HN">
		      <span class="input-group-btn">
		        <button class="btn" style="background-color: rgb(0, 150, 230);"type="button"><img src="/img/glyphicons_242_google_maps.png" /></button>
		      </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->

    </div>


    <div class="body-content">

        <!-- Example row of columns -->
        <div class="row">
            <div class="col-lg-6">
                <div class="title">Personal Details</div>
					<form class="form-horizontal">
						<div class="control-group">
							<label class="control-label" for="inputFirstName">First Name</label>
							<div class="controls">
								<input type="text" id="inputFirstName" value="Name">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputLastName">Last Name</label>
								<div class="controls">
									<input type="text" id="inputFirstName" value="Surname">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputEmail">Email</label>
							<div class="controls">
								<input type="text" id="inputEmail" value="Email">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputCompanyName">Company Name</label>
							<div class="controls">
								<input type="text" id="inputCompanyName" value="Company Name">
							</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="inputCompanyName">Company type</label>
							<div class="controls">
								<input type="text" id="inputCompanyName" value="Type">
							</div>
						</div>
					</form>
                <p><a class="btn btn-default" href="http://establish.dev/info/about">Save settings</a></p>
            </div>
			
            <div class="col-lg-6">
                <div class="title">Created Projects</div>
					<ol>
						<li style="list-style-type: none; float:left; padding:0 0 10px;">
							<a href="#link"><h5 style="padding:0; margin:0; font-size:16pt;">Project Name</h5></a>
								<p style="padding:0; margin:0;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nunc massa. Proin ultricies tellus elementum tellus suscipit, eget aliquam erat vehicula. Maecenas scelerisque risus nisl, ut eleifend diam egestas ut. Aenean vel elit mattis, laoreet mauris non, lacinia diam.
								</p>
						</li>
						<li style="list-style-type: none; float:left; padding:0 0 10px;">
							<a href="#link"><h5 style="padding:0; margin:0; font-size:16pt;">Project Name</h5></a>
								<p style="padding:0; margin:0;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nunc massa. Proin ultricies tellus elementum tellus suscipit, eget aliquam erat vehicula. Maecenas scelerisque risus nisl, ut eleifend diam egestas ut. Aenean vel elit mattis, laoreet mauris non, lacinia diam.
								</p>
						</li>
					</ol>
                <p><a class="btn btn-default" href="http://establish.dev/info/about">Save settings</a></p>
            </div>
				
			</div>
    </div><!-- /.body-content -->
    <?php include(app_path().'/includes/_footer.php') ?>
