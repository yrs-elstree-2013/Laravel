<?php include(app_path().'/includes/_header.php'); ?>

</head>

<?php include(app_path().'/includes/_titlebar.php'); ?>
    <div class="jumbotron">

        <?php echo View::make('_searchbar');?>
    </div>

    <div class="body-content">
		<ol>
			<?php
                if($results != null) {
                    foreach($results as $property) {

                        echo View::make('_result')->with('result_title', $property->postcode)->with('result_body', 'Dynamic body bitches')->with('result_link', URL::to('/property/'.$property->id));

                    }
                } else {
                    echo 'No Results!';
                }
            ?>
		</ol>
    </div><!-- /.body-content -->
    <?php include(app_path().'/includes/_footer.php') ?>
