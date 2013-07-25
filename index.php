<?php
    require 'req/geo.php';
    require 'req/weatherinfo.php';

    if(empty($QueryState) || empty($QueryCity)) {
        header("Location: index.php?city=" . $visitor_city . "&state=" . $visitor_state);
    } else {
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php if(empty($QueryState) || empty($QueryCity)) { ?> <?php } else { ?><?php echo $location_city; ?>, <?php echo $location_state; ?> (<?php echo $location_zip; ?>) <?php } ?> | Wunderground API Integration</title>
        
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
          body {
            background-repeat: no-repeat;
            padding-top: 60px;
            padding-bottom: 40px;
          }
        </style>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->
    
    </head>
    
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="./">Wunderground API</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#"><?php echo $location_city . ", " . $location_state . " (" . $location_zip . ")" ?></a></li>
                        </ul>
                        <form class="navbar-form pull-right">
                            <input class="span2" name="city" type="text" placeholder="City">
                            <input class="span2" name="state" type="text" placeholder="State / Providence">
                            <button type="submit" class="btn btn-success">Get the weather!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <?php
                if(empty($location_full)) {
                    echo '<h3>There has indeed been an problem with the location that you have selected. Please try again, and if all else fails, contact us!</h3>';
                } else {
            ?>
                <?php if(empty($QueryState) || empty($QueryCity)) { ?>
                
                    <h3>Start by putting your state and city above, then click "Get the weather!"</h3>
                
                <?php
                    } else {
                ?>
                    
            
                    
            
            
            
                <?php
                    }
                ?>
            
            
            <?php
                }
            ?>
        </div>
    </body>
</html>