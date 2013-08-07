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
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <button type="button" class="btn btn-primary">Log in / Sign Up </button>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>