<?php
$country = "US";
$redir = "country.php";
//echo $transport ;
if (isset($_POST['formSubmit'])) {
    $country = $_POST['formCountry'];
    $transport = $_POST['transport'];
    $stars = $_POST["stars"];
    $price = $_POST["price"];
    //$redir = "US.php";
    // switch ($country) {
    //     case "US":$redir = "US.php";
    //         break;
    //     case "UK":$redir = "UK.php";
    //         break;
    //     case "France":$redir = "France.php";
    //         break;
    //     case "Mexico":$redir = "Mexico.php";
    //         break;
    //     case "Japan":$redir = "Japan.php";
    //         break;
    //     default:echo ("Error!");
    //     exit();
    //         break;
    // }
    header("Location: $redir?country=$country&transport=$transport&stars=$stars&price=$price");
    exit();
}