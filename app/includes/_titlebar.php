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
                    <li><a href="#contact">Contact</a></li>
                    <button type="button" class="btn btn-primary" onclick="if (document.getElementById('pop-login').style.visibility == 'hidden') {document.getElementById('pop-login').style.visibility = 'visible';}else{document.getElementById('pop-login').style.visibility = 'hidden';}">Log in / Sign Up </button>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
	<div class="pop-login" id="pop-login" alt="pop-login">
		<div class="col-lg-8" style="float:left;">
			<h4 style="padding:0 0 10px 0; margin:0;">login</h4>
			<form>
			Username: <input type="text" style="width:200;"/>
			Password: <input type="text" style="width:200;"/>
			<input type="submit" value="Login" class="btn"/>
			</form>
			<div  style="text-align:left;">
				<a href="#forgotPass">Forgot password</a>
			</div>
		</div>
		<div class=".col-lg-8" style="float:right">
			<h4 style="padding:0 0 10px 0; margin:0;">Signup</h4>
			<form>
			Username: <input type="text" style="width:200;"/>
			Password: <input type="text" style="width:200;"/>
			<input type="submit" value="Signup" class="btn"/>
			</form>
		</div>
	</div>