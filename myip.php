<html>
<head>
    <meta charset="utf-8">
    <title>
        내 아이피
    </title>
</head>
<body style="margin : 30px 30px 30px 30px;">
    <center>
        <h2>
            <hr>
            <?php
                $ip = $_SERVER["REMOTE_ADDR"];
                $fp = fopen("IpLog.txt", 'a');
                fwrite($fp, "\n".$ip);
                fclose($fp);
                echo "<p>당신의 IP : ".$ip."</p>";
            ?>
        </h2>
        <hr>
        <h5>
            해당 사이트는 IP를 수집하지 않습니다.
        </h5>
    </center>
</body>
</html>
