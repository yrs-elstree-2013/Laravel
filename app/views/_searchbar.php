<div class="row">
    <div class="col-lg-2">
        <h4>Search</h4>
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-8">
        <form method="post" action="/search">
            <div class="input-group">
                <input id="query" type="text" class="form-control" placeholder="Enter your Postcode! e.g. NW7 4HN">
                    <span class="input-group-btn">
		        <button class="btn" style="background-color: rgb(0, 150, 230);"type="submit"><img src="/img/glyphicons_242_google_maps.png" /></button>
                    </span>
            </div><!-- /input-group -->
            <div>
                <center style="font-size:14px;">
                    <input checked="true" id="type" type="radio" name="sex" value="male">Projects</input>
                    <input id="type" type="radio" name="sex" value="female">Properties</input>
                </center>
            </div>
        </form>
    </div><!-- /.col-lg-6 -->
</div><!-- /.row -->