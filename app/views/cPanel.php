<?php include(app_path().'/includes/_header.php'); ?>
</head>

<?php include(app_path().'/includes/_titlebar.php') ?>

    <div class="body-content" style="padding:25px;">

        <div class="jumbotron">
            <center>
                <h5>Search</h5>
            </center>
            <?php echo View::make('_searchbar');?>
            </div><!-- /.row -->

        </div>

    <div class="row">
        <div class="col-lg-1" ></div>
        <div class="col-lg-5 panel" style="margin-right: 5px;">

            <form action="/user/signup" method="post" accept-charset="UTF-8">
                <fieldset style='border: none;'>
                    <center><legend>Sign Up!</legend></center>
                    <div class="form-group">
                        <label for="username">Email Address:</label>
                        <input type="text" class="form-control" id="username" placeholder="email@address.com" name="username"/>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="password" name="password"/>
                    </div>

                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" id="first_name" placeholder="John" name="first_name"/>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Doe" name="last_name"/>
                    </div>

                    <button type="submit" class="btn btn-default pull-right" style="width:40%">Sign Up</button>
                </fieldset>

            </form>


        </div>

        <div class="col-lg-5 panel" style="margin-left: 5px;">

            <form action="/user/login" method="post" accept-charset="UTF-8">
                <fieldset style='border: none;'>
                    <center><legend>Existing User?</legend></center>
                    <div class="form-group">
                        <label for="username">Email Address:</label>
                        <input type="text" class="form-control" placeholder="email@address.com" name="username"/>

                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="password" name="password"/>
                    </div>
                    <input id="user_rememberme" style="float: left; margin-right: 10px;" type="checkbox" name="rememberme" value="1" />
                    <label class="string optional" for="user_rememberme"> Remember me</label>
                    <button type="submit" class="btn btn-default pull-right" style="width:40%">Log In</button>

                </fieldset>
            </form>

        </div>
        <div class="col-lg-1" ></div>
    </div>
    </div><!-- /.body-content -->
    <?php include(app_path().'/includes/_footer.php') ?>
