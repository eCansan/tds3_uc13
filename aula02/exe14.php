<html>
<title>Tabuada Do Cansan</title>
<h3>Tabuada Realizada em</h3>
</html>
<?php
$tabuada = 0;
while ($tabuada <= 10) {
    for ($i = 0; $i <= 10; $i++) { 
        echo "$tabuada X $i = ".$tabuada * $i;
        echo "<br>";           
    }
    echo "<br>";
    $tabuada++;
}
?>