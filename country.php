<?php
$country = $_GET["country"];
$transport = $_GET['transport'];
$stars = $_GET["stars"];
$price = $_GET["price"];
include "header.php";
include_once "db.php";

?>
<div class="container mt-5">
    
    <h2 class="text-center text-primary mb-4"><?=$country?></h2>

    
    <h3 class="text-center mb-3">Ви обрали:</h3>

    
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

if (empty($tour_keys)) {
    $vib = '<h3 class="text-center mt-5">На данний момент турів не має</h3>';
    echo "$vib";
}
?>
 
    
<!-- <h3 class="text-center mt-5">Схожі тури</h3> -->

<div class="container mt-5">
    <h3 class="text-center mb-4">Схожі тури</h3>
    
    <div class="row">
        <?php
        foreach ($tours as $key => $tour) {
            if ($tour['country'] == $country || $tour['price'] <= $price || $tour['stars'] == $stars) {
                echo "<div class='col-md-4 mb-4'>"; 
                echo "<div class='card h-100 shadow-sm'>"; 

                // Заголовок карточки
                echo "<div class='card-header bg-primary text-white'>";
                echo "<h5 class='card-title'>Схожий тур №" . ($key + 1) . "</h5>";
                echo "</div>";

                // Тело карточки с информацией о туре
                echo "<div class='card-body'>";
                foreach ($tour as $infoKey => $infoValue) {
                    echo "<p class='card-text'><strong>" .  $infoKey . ":</strong> " . $infoValue . "</p>";
                }
                echo "</div>"; 
                
                // Нижняя часть карточки
                echo "<div class='card-footer text-muted'>";
                echo "Інформація про тур";
                echo "</div>";

                echo "</div>"; 
                echo "</div>"; 
            }
        }
        ?>
    </div> 
</div>
<?php include "footer.php";?>