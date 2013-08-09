<body>
<div class="container">

    <div class="navbar navbar-static-top">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="col-lg-6" href="http://establish.dev/"><img src="/img/logo.png" alt="Establish.ME"/></a>
            <div class="nav-collapse collapse pull-right" style="margin-top:15px;">
                <ul class="nav navbar-nav">
                    <li <?php if ($isHome) { echo('class="active"'); } ?> ><a href="http://establish.dev/">Home</a></li>
                    <li <?php if ($title == 'About Us') { echo('class="active"'); } ?>><a href="http://establish.dev/info/about">About</a></li>
                    <?php if($user == null) { ?>
                    <li class="dropdown">
                                <button type="button" class="btn btn-primary" data-toggle="dropdown"> Log In / Sign Up </button>
                                <div class="dropdown-menu pull-right" style="padding: 20px 40px;">
                                    <div class="row">
                                        <div>
                                            <form action="/user/login" method="post" accept-charset="UTF-8">
                                                <label class="string optional" for="user_username"> Email:</label><input id="user_username" style="margin-bottom: 15px;" placeholder="email@address.com" type="text" name="username" size="30" />
                                                <label class="string optional" for="user_password"> Password:</label><input id="user_password" style="margin-bottom: 15px;" placeholder="password" type="password" name="password" size="30" />
                                                <input id="user_rememberme" style="float: left; margin-right: 10px;" type="checkbox" name="user_rememberme" value="1" />
                                                <label class="string optional" for="user_rememberme"> Remember me</label>

                                                <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In">
                                            </form>
                                            <a href="/user/signup"><button class="btn pull-right" style="clear: left; width: 100%; height: 32px; font-size: 13px;margin-top: 5px;">Need an account?</button></a>


                                        </div>
                                    </div>


                                </div>
                     </li>

                    <?php } else { ?>
                    <li>
                        <form action="/user/" method="GET" accept-charset="UTF-8">
                        <div class="btn-group">
                           <button type="submit" class="btn btn-primary"><img src="/img/glyphicons_003_user.png" alt="E"/> <?php echo($user->first_name . ' ' . $user->last_name); ?> </button>
                           <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="user/">Control Panel</a></li>
                                <li class="divider"></li>
                                <li><a href="user/logout">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>