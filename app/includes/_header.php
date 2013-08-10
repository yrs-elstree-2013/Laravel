<?php include(app_path() . '/includes/CrimeFunctions.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/ico" href="/favicon.ico" />

    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap-switch.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!--<link rel="stylesheet" href="./js/pure-min.css">-->
    <link rel="stylesheet" href="/css/liquid-slider.css">

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