<html>
    <title>IP</title>
    <body>
    <center><h3>Welcome to MyScript :D :D :D </h3></center>
    <?php
        $document=$_SERVER['DOCUMENT_ROOT'];
        $fp=fopen("$document/order/detect.txt","ab");
        if(!'fb'){
            exit;
        }
        $ipaddress = $_SERVER['REMOTE_ADDR'];
        $detect="=> ip=$ipaddress\n";
        fwrite($fp,$detect);
        fclose($fp);
    ?>
    </body>
</html>
