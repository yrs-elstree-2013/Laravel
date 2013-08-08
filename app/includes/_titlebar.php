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
                    <button type="button" class="btn btn-primary" onclick="if (document.getElementById('pop-login').style.display == 'block') {document.getElementById('pop-login').style.display = 'none';}else{document.getElementById('pop-login').style.display = 'block';}">Log in / Sign Up </button>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
	<div class="pop-login col-lg-12" id="pop-login" alt="pop-login" style="display: hidden">
		<div class="col-lg-6" style="float:left;">
			<form>
				<fieldset>
					<legend>Sign in</legend>
					<div class="form-group">
						<label for="exampleInputEmail">Email address</label>
						<input type="text" class="form-control" placeholder="email@address.com">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword">Password</label>
						<input type="password" class="form-control" placeholder="user password">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Remember me
						</label>
					</div>
					<button type="submit" class="btn btn-default">Sign in</button>
				</fieldset>
			</form>
		</div>
		<div class="col-lg-6" style="float:right; margin:-10px 0 0 0;">
			<form>
				<fieldset>
					<legend>Regisiter</legend>
					<div class="form-group">
						<label for="exampleInputEmail">Email address</label>
						<input type="text" class="form-control" placeholder="email@address.com">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword">Password</label>
						<input type="password" class="form-control" placeholder="user password">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> I agree to the T&C's
						</label>
					</div>
					<button type="submit" class="btn btn-default">Register</button>
				</fieldset>
			</form>
		</div>
	</div>
    </div>