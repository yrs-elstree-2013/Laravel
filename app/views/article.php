<?php include(app_path().'/includes/_header.php'); ?>


</head>

<?php include(app_path().'/includes/_titlebar.php') ?>

<div class="body-content">

    <!-- Example row of columns -->
    <div class="row">
        <div class="col-lg-12" />
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align:left;"><?php echo $title ?></h3>
                </div>
                <div style="margin-left:25%;margin-right:25%;">
                    <?php echo $content ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.body-content -->

<?php include(app_path().'/includes/_footer.php') ?>