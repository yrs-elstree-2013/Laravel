<?php include(app_path().'/includes/_header.php'); ?>

</head>

<?php include(app_path().'/includes/_titlebar.php'); ?>
    <div class="jumbotron">

        <?php echo View::make('_searchbar');?>
    </div>

    <div class="body-content col-12">
        <div class="col-1 hidden-sm"></div>
        <div class ="col-10">
            <ol>
                <?php
                if( $type == 'property') {
                    if($results != null) {
                        foreach($results as $property) {

                            echo View::make('_result')->with('result_title', $property->postcode)->with('result_body', $property->address)->with('result_link', URL::to('property/show/'.$property->id));

                        }
                    } else {
                        echo 'No Results!';
                    }
                }
                ?>
            </ol>
        </div>
    </div><!-- /.body-content -->
    <?php include(app_path().'/includes/_footer.php') ?>
