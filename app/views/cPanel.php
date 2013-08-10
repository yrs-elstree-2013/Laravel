<?php include(app_path().'/includes/_header.php'); ?>
</head>

<?php include(app_path().'/includes/_titlebar.php') ?>

    <div class="body-content" style="padding:25px;">

        <div class="jumbotron">
            <?php echo View::make('_searchbar');?>

        </div>

        <!-- Example row of columns -->
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-5 panel" style="margin-right:10px;">
                <div class="title">Personal Details</div>
                <div>
					<form class="form-horizontal">
						<div class="control-group">
							<label class="control-label" style="width:150px;text-align:left;">First Name:</label>
                            <label class="control-label" style="font-weight:normal;font-size:15px;"><?php echo($user->first_name);?></label>
						</div>
						<div class="control-group">
							<label class="control-label" style="width:150px;text-align:left;">Last Name:</label>
                            <label class="control-label" style="font-weight:normal;font-size:15px;"><?php echo($user->last_name);?></label>
						</div>
						<div class="control-group">
							<label class="control-label" style="width:150px;text-align:left;">Email Address:</label>
                            <label class="control-label" style="font-weight:normal;font-size:15px;"><?php echo($user->email);?></label>
						</div>
					</form>
                </div>
            </div>
			
            <div class="col-lg-5 panel">
                <div class="title">Projects</div>
                    <table class="table">
                            <?php foreach($projects as $p) { echo("
                            <tr>
                                <td>
                                    " . $p->title . "
                                </td>
                                <td>
                                    <a href='" . $p->weblink . ".establish.dev' >View Page</a>
                                </td>
                                <td>
                                   "); if($p->target == $p->progress) { echo('Funded!'); } else { echo('In Progress'); } echo("
                                </td>
                            </tr>"); } ?>

                            <tr>
                                <td>
                                    <a href="/search/"><button class="btn btn-primary pull-right" style="clear: left; width: 100%; height: 32px; font-size: 13px;margin-top: 5px;">Find a Property to get Started!</button></a>
                                </td>
                            </tr>
                    </table>
            </div>
            <div class="col-lg-1"></div>
				
	    </div>
    </div><!-- /.body-content -->
    <?php include(app_path().'/includes/_footer.php') ?>
