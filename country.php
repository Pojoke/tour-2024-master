<?php
$country = $_GET["country"];
$transport = $_GET['transport'];
$stars = $_GET["stars"];
$price = $_GET["price"];
include "header.php";
include_once "db.php";

?>
<div class="container mt-5">
    <!-- Заголовок с названием страны -->
    <h2 class="text-center text-primary mb-4"><?=$country?></h2>

    <!-- Заголовок "Ви обрали:" -->
    <h3 class="text-center mb-3">Ви обрали:</h3>

    <!-- Выбранные параметры в виде списка -->
    <ul class="list-group">
        <li class="list-group-item"><strong>Країна:</strong> <?=$country?></li>
        <li class="list-group-item"><strong>Транспорт:</strong> <?=$transport?></li>
        <li class="list-group-item"><strong>Зірок:</strong> <?=$stars?></li>
        <li class="list-group-item"><strong>Ціна:</strong> <?=$price?></li>
    </ul>
</div>
<?php
//echo "$country $transport" ;
$tour_keys = [];
foreach ($tours as $key => $tour) {
    if ($tour['country'] == $country && $tour['price'] <= $price && $tour['stars'] >= $stars) {
        $tour_keys[] = $key;
    }

}
?>
<!-- <h3 class="text-center mt-5">Схожі тури</h3> -->

<div class="list-group"></div>
<?php
if (empty($tour_keys)) {
    $vib = "<h2 class='text-center mt-5'>Вибачте турів не має</h2>";
    echo "$vib";
}
echo "<h2 class='text-center mt-5'>Cхожі тури</h2>";

foreach ($tours as $key => $tour) {
    if ($tour['country'] == $country || $tour['price'] <= $price || $tour['stars'] = $stars) {
        $tour_keys[] = $key;
    }
}

for ($i = 0; $i < count($tour_keys); $i++) {
    //print_r($tours[$tour_keys[$i]]);
    $n = $i + 1;
    echo "<h3>" . $n . "</h3>";
    foreach ($tours[$tour_keys[$i]] as $key => $value) {
        echo "$key: $value <br>";
    }
}
?>
 </div>
 </div>
<?php include "footer.php";?>