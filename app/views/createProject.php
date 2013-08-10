<?php include(app_path().'/includes/_header.php'); ?>

</head>

<?php include(app_path().'/includes/_titlebar.php') ?>


<div class="body-content">


        <form action="/user/login" method="post" accept-charset="UTF-8">
            <div class="row col-12">
                <div class="col-1 hidden-sm"></div>
                <div class="panel col-lg-10">
                    <fieldset style='border: none;'>
                        <legend>Basic Information</legend>

                        <div class="row">

                            <div class="col-lg-5">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" placeholder="John's Shop" name="title"/>
                                <abbr style="font-size: 12px;" title="The name of your project">What is this?</abbr>
                                <br><br>
                                <label for="slogan">Slogan:</label>
                                <input type="text" class="form-control" placeholder="A fantastic shop" name="slogan"/>
                                <abbr style="font-size: 12px;" title="A slogan or subtitle for your project">What is this?</abbr>
                                <br><br>
                                <label for="slogan">Weblink:</label>
                                <input type="text" class="form-control" placeholder="johnsshop" name="slogan"/>
                                <abbr style="font-size: 12px;" title="This will become the domain name for your project. For example johnsshop would become johnsshop.establish.me">What is this?</abbr>

                            </div>
                            <div class="col-1 hidden-sm"></div>
                            <div class="col-lg-5">
                                <label for="target">Primary Target:</label>
                                <input type="number" class="form-control" placeholder="3000" name="target" disabled/>
                                <abbr style="font-size: 12px;" title="This is the amount of funding you will need to rent the selected property. Additional funding can be added below">What is this?</abbr>
                                <br><br>
                                <label for="target">Costs Target:</label>
                                <input type="number" class="form-control" placeholder="0.00" name="target"/>
                                <abbr style="font-size: 12px;" title="This is a secondary funding target for associated setup costs. This will be clearly displayed as seperate to users.">What is this?</abbr>
                                <br><br>
                                <label for="private_funding">Your Contribution:</label>
                                <input type="number" class="form-control" placeholder="0.00" name="private_funding"/>
                                <abbr style="font-size: 12px;" title="The amount of money you are putting towards the project. There is a limit of 49% of the total funding target.">What is this?</abbr>
                            </div>



                        </div>

                    </fieldset>
                </div>
                <div class="col-1 hidden-sm"></div>
            </div>

            <div class="row col-12" style="margin-top: 15px;">
                <div class="col-1 hidden-sm"></div>
                <div class="panel col-lg-10">
                    <fieldset style='border: none;'>
                        <legend>Property Information</legend>

                        <div class="row">
                            <div class="col-lg-4 "><img src="http://www.thepotteries.org/walks/fenton1/city_road_shops.jpg" style="max-width:100%;max-height:100%;"/></div>
                            <div class="col-lg-4">
                                <address>
                                    <strong>3 Awesome Street</strong><br>
                                    Exceter<br>
                                    EX1 2UY<br>
                                </address>

                                <strong>Monthly Rate (GBP): </strong> £1000
                            </div>

                            <div class="col-lg-4">
                                <label for="target">Establish.me Ratings:</label>
                                <strong style="font-size: 13px;">Crime : </strong> 4 <br>
                                <strong style="font-size: 13px;">Example Data : </strong> 3 <br>
                                <strong style="font-size: 13px;">Example Data: </strong> 4

                            </div>

                        </div>

                    </fieldset>
                </div>
                <div class="col-1 hidden-sm"></div>
            </div>
            <div class="row col-12" style="margin-top: 15px;">
                <div class="col-1 hidden-sm"></div>
                <div class="panel col-lg-10">
                    <fieldset style='border: none;'>
                        <legend>Submit</legend>

                        <div class="row">
                            <div class="col-lg-5" style="height:40px;">
                                <label>
                                    <input type="checkbox" value="">
                                    I agree to the <a href="<?php echo(URL::to('about/tos')); ?>">Terms of Service</a>
                                </label>
                            </div>

                            <div class="col-lg-1 hidden-sm"></div>

                            <div class="col-lg-5" style="height:40px;">
                                <button type="submit" class="pull-right btn btn-primary" style="width:50%">Submit</button>
                            </div>
                        </div>

                    </fieldset>
                </div>
                <div class="col-1 hidden-sm"></div>
            </div>
        </form>

</div>
</div><!-- /.body-content -->
<?php include(app_path().'/includes/_footer.php') ?>
