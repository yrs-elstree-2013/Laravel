<?php include(app_path().'/includes/_header.php'); ?>
</head>

<?php include(app_path().'/includes/_titlebar.php') ?>

    <div class="body-content" style="padding:25px;">

        <div class="jumbotron">
            <?php echo View::make('_searchbar');?>

        </div>

        <!-- Example row of columns -->
        <div class="row">
            <div class="col-lg-6">
                <div class="title">Personal Details</div>
                <div>
					<form class="form-horizontal">
						<div class="control-group">
							<label class="control-label">First Name</label>
						</div>
						<div class="control-group">
							<label class="control-label">Last Name</label>
						</div>
						<div class="control-group">
							<label class="control-label">Email</label>
						</div>
					</form>
                </div>
            </div>
			
            <div class="col-lg-6">
                <div class="title">Projects</div>
                    <table class="table table-hover">
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
                                    <a href="/project/create"><button class="btn btn-primary pull-right" style="clear: left; width: 100%; height: 32px; font-size: 13px;margin-top: 5px;">Create a Project!</button></a>
                                </td>
                            </tr>
                    </table>
            </div>
				
	    </div>
    </div><!-- /.body-content -->
    <?php include(app_path().'/includes/_footer.php') ?>
