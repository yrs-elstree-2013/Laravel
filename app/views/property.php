<?php include(app_path() . '/includes/_header.php') ?>

</head>

<?php include(app_path().'/includes/_titlebar.php') ?>



    <div class="body-content">

        <div class="row col-lg-12">
            <div class="col-lg-9">
                <!-- Left hand coloumn -->
                <div class="panel">
                    <img src="/building_img/<?php echo($property->id); ?>.jpg" style="margin: auto;display: block;max-width:100%;max-height:100%;" />
                </div>

            </div>

            <div class="col-lg-3">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:center;">Create Project</h3>
                    </div>
                    <div style="text-align:center;">
                        <a href="/project/create/<?php echo ($property->id); ?>"><button class="btn btn-primary" style="">Create a Project!</button></a>
                    </div>

                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:center;">Rent Details</h3>
                    </div>
                    <div style="margin-left:auto;margin-right:auto;">
                        <strong>Rent:</strong> <br> £ 1000 / month <br> <br>
                        <strong>Owner:</strong> <br> Exeter Council <br>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="text-align:left;"> Establish.me Ratings:</h3>
                    </div>
                    <div>
                        <div style="width:100%;"><strong>Crime Rating: </strong> <?php CrimeFunctions::OutputCrimeRating($property->postcode)?></div>
                    </div>
                </div>
            </div>



        </div>

    </div>


<?php include(app_path().'/includes/_footer.php') ?>
</div> <!-- /container -->
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

</body>
</html>