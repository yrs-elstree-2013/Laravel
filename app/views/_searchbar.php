<div class="row">
    <div class="col-lg-2"></div><!-- /.col-lg-6 -->
    <div class="col-lg-8">
        <form method="post" action="/search/">
            <div style="width:100%">
                <input id="query" type="text" class="form-control" name="query" placeholder="Enter your Postcode! e.g. NW7 4HN" style="border-color:rgb(0, 150, 230);">
            </div><!-- /input-group -->
            <div>
                <center>
                    <button class="btn btn-primary" type="submit" formaction="/search/project" style="width:175px;background-color:rgb(0, 150, 230);"><label style="padding-right: 5px;">Find Projects</label><img src="/img/glyphicons_242_google_maps.png" /></button>
                    <button class="btn btn-primary" type="submit" formaction="/search/property" style="width:175px;background-color:rgb(0, 150, 230);"><img src="/img/glyphicons_242_google_maps.png" /><label style="padding-left: 5px;">Find Properties</label></button>
                </center>
            </div>
        </form>
    </div><!-- /.col-lg-6 -->
</div><!-- /.row -->