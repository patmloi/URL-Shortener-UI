<?php include("shorten.inc.php");
    // At the top, similar to Python's import 

    # Defining elements
    $in_url = "";
    if( isset($_GET["in_url"]) ){
        $in_url = $_GET["in_url"]; 
    }

    $ext_url = ""; 
    $ext_array = []; 
    $out_url = ""; 

    # Using the functions
    if( $in_url != "" ){
        $ext_url = generate_ext($in_url); 
        $ext_url = unique_ext($ext_url, $in_url); 
        $out_url = generate_short($ext_url);
    } 

?> 



<DOCTYPE! HTML> 
<html> 
    <head> 
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> URL Shortener </title> 
        <meta name="description" content="Free URL Shortener">
        <meta name="author" content="Patricia Loi">

        <link href="../static/css/fonts.css" rel="stylesheet" />
        <link href="../static/css/index.css" rel="stylesheet" />

    </head>
    <body> 
        <div class="page">

            <div class="search-bar-title">
                <h2> bit.ly </h2>
            </div>
    
        
            <div>
                <form action="index.php" method="GET">
                    <input type="text" name="in_url" placeholder="Paste your URL here" class="in-url-box">
                    <input type="submit" value="Shorten" class="shorten-button">
                </form>
                </br> 
            </div>

            <?php if( $in_url != "" ){ ?>
                <div class="out-url-box">
                    
                    <?php echo "$out_url";
                    ?>
                    
                </div>
            <?php } ?>

            <?php if( $in_url == "" ){ ?>
                <div class="tnc"> 
                    </br>
                    By using our service you accept our Terms of Service and Privacy Policy.
                </div>
            <?php } ?>

        </div>
        
    </body>
</html>