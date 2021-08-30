<doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data hp</title>
    <style>
         .field {
            border: 1px solid #CCC;
            margin: 10px 0px; 
            padding: 10px; 
            width: 130px; 
            height: 140px; 
            background-color: #fbfbee; 
            text-align: left;
        }
        .tombol {
	    color: #fff !important;
	    text-transform: uppercase;
	    background: #242526;
	    padding: 10 px;
	    display: inline-block;
        }
        </style>
</head>
<body>
<?php
    $dataProduk = array(
        array("Galaxy S21", "Samsung", 19000000, true),
        array("Galaxy A71", "Samsung", 6999000, false),
        array("iPhone 12 Pro Max", "Apple", 20999000, true),
        array("iPhone 12 Mini", "Apple", 10999000, false),
    );

    $n = count($dataProduk);

for ($i=0; $i < 4; $i++) {     
    echo '<div class="field">';
    foreach ($dataProduk[$i] as $key => $value) {
        if ($value != 3) {
            echo $value."<br>";
        }

        if ($value === true) {
            echo("stok tersedia<br>");
            echo '<br><br><div class="button_cont" align="center">
            <a class="tombol" href="tampilan.php" target="_blank" draggable="false">beli</a>
            </div>';
        }else if ($value === false) {
            echo("stok habis<br>");       
        } 
    }
    echo '</div>';
    // echo "<br>";
} 
?>

</body>
</html>