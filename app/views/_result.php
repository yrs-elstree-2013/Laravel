<li class="panel col-12" style="list-style-type: none; float:left;">
    <a href="<?php echo $result_link ?>"><h5 style="padding:0; margin:0; font-size:16pt;"><?php echo $result_title ?></h5></a>
    <div class="row" style="margin-left: 15px; margin-right: 15px;">
        <div class="col-lg-8">
            <p style="padding:0; margin:0; width:65%; float:left;">
                <?php echo $result_body ?>
            </p>
        </div>
        <img class="col-lg-4" src="<?php echo($img_adr); ?>" style="float: right; margin: 0px; padding: 0px;max-width:250px;max-height:200px;"/>
    </div>

    <div class="col-lg-12" style="margin-top:10px;margin-left: 15px; margin-right: 15px;">
        <strong>Monthly Rent</strong> £ 1000 / month <br>
        <strong>Crime Rating: </strong> <?php CrimeFunctions::OutputCrimeRating($property->postcode)?>
        <abbr class="" style="font-size: 12px;" title="This is a measure of how much crime occurs in the local area. A higher rating indicates a safer environment, while a lower rating indicates a less secure location.">What is this?</abbr>


    </div>
</li>