<DOCTYPE html>
<head>
    <title>Rechner</title>
</head>
<body>
<?php
    $zahl = $_POST["Zahl"];
    $rechner1 = $_POST["rechner1"];
    $rechner2 = $_POST["rechner2"];
    
    if ($rechner1 == "Binär") {
        $zahl = bindec($zahl);
    }
    if ($rechner1 == "Hexa") {
        $zahl = hexdec($zahl);
    }

    if ($rechner2 == "Binär") {
        $zahl = decbin($zahl);
    }
    if ($rechner2 == "Hexa") {
        $zahl = dechex($zahl);
    }

    print($zahl);
?>
</body>
</html>