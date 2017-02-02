<?php
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$facebook_url = $_REQUEST['facebook_url'];
$position = strpos($facebook_url, "facebook.com");
    if ($position === false){
        $facebook_url = "http://www.facebook.com".$facebook_url;
    }
$twitter_handle = $_REQUEST['twitter_handle'];
$twitter_url = "http://www.twitter.com/";
$position = strpos($twitter_handle, "@");
    if ($position === false){
        $twitter_handle = $twitter_url . $twitter_handle;
    }
    else{
        $twitter_url = $twitter_url . substr($twitter_handle, $position + 1);
    }
?>


<html>
<head>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    </head>
    
<body>
    <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
    <div id="example">Example 3-1</div>
    
    <div id="content">
        <p>Here is a record of the information you submitted:</p>
        <p>
        Name: <?php echo $first_name. " " .$last_name; ?> <br />
        E-mail Address <?php echo $email; ?> <br />
            <a href="<?php echo $facebook_url; ?>">Your Facebook Page</a><br />
            <a href="<?php echo $twitter_url; ?>">Your Twitter Page</a><br />
        Facebook URL <?php echo $facebook_url; ?> <br />
        Twitter Handle <?php echo $twitter_handle; ?> <br />
        </p>
    </div>
    
    <div id="footer"></div>
    
    </body>    
</html>