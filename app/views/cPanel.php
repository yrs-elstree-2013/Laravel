<?php include(app_path().'/includes/_header.php'); ?>
</head>

<?php include(app_path().'/includes/_titlebar.php') ?>

    <div class="body-content" style="padding:25px;">

        <div class="jumbotron">
            <?php View::make('_searchbar');?>
            </div><!-- /.row -->

        </div>

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
						<li style="list-style-type: none; float:left; padding:0;">
							<a href="#link"><h5 style="padding:0; margin:0; font-size:16pt;">Project Name</h5></a>
								<p style="padding:0; margin:0;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nunc massa. Proin ultricies tellus elementum tellus suscipit, eget aliquam erat vehicula. Maecenas scelerisque risus nisl, ut eleifend diam egestas ut. Aenean vel elit mattis, laoreet mauris non, lacinia diam.
								</p>
						</li>
						<li style="list-style-type: none; float:left; padding:0;">
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
