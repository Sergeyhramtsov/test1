<?php
namespace app\controllers;

$cluch = 1;
$mogemrabotat = new rabochiy();
echo "<br/>";
if($cluch){
    $rabochiy = 0;
    $mogemrabotat->rabochiyskaf($rabochiy);
}
else {
    echo "Шкаф закрыт, придется идти за ключом.";
}
?>
