<?php include(app_path().'/includes/_header.php'); ?>


</head>

<?php include(app_path().'/includes/_titlebar.php') ?>

<div class="body-content">

    <!-- Example row of columns -->
    <div class="row">
        <div class="col-lg-2" />
        <div class="col-lg-8">
            <h2><?php echo $title ?></h2>
            <p style="text-align:justify;text-justify:inter-word;"><?php echo $content ?></p>

        </div>
        <div class="col-lg-2" />
    </div>
</div><!-- /.body-content -->

<?php include(app_path().'/includes/_footer.php') ?>