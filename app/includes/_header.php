<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap-switch.css">
	
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.2.0/pure-min.css">
  <link rel="stylesheet" href="./examples/assets/prism.css">
  <link rel="stylesheet" href="./examples/assets/styles.css">

 <script type="text/javascript">
     $(function() {
         // Setup drop down menu
         $('.dropdown-toggle').dropdown();

         // Fix input element click problem
         $('.dropdown input, .dropdown label').click(function(e) {
             e.stopPropagation();
         });
     });

 </script>