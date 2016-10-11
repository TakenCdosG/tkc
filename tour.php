<?php
    $width = round($_GET['w']);
    $height = round($_GET['h']);
    $url = $_GET['url'];
    

?>
<html>
    
    <head>
        
    </head>
    
    <body>
        <script type="text/javascript" src="<?php print "http://occipital.com/360/embed.js?pano=$url&amp;width=$width&amp;height=$height" ?>"></script>
    </body>
    
</html>