<?php
include "header.php";

?>
<!-- Name input-->
<form method="post" action="countries.php" name="myform">
<label for='formCountry' id="vibor-krain"class="form-label"> Виберіть країну: </label>
        <select name="formCountry" class="form-select">
            <option value="US">США</option>
            <option value="UK">Великобританія</option>
            <option value="France">Франція</option>
            <option value="Mexico">Мексика</option>
            <option value="Japan">Японія</option>
        </select><br>
    <!-- <div class="form-floating mb-3">
        
    </div> -->
    <label for='transport' class="form-label" > Виберіть транспорт: </label>
    <select name="transport" class="form-select">
        <option value="bus">Автобус</option>
        <option value="airplane">Літак</option>
        <option value="train">Потяг</option>
    </select><br>
    <label for='stars' class="form-label"> Stars (from 1 to 5): </label>
    <input type="number" name="stars" id="stars" min="1" max="5" value="3"><br>
    <label for="price">Ціна (між 100 та 1000):</label>
    <input type="range" id="price" name="price" min="100" max="1000" step="50" class="form-range"><br>

    <button name=" formSubmit" class="button-submit">ОК</button>
</form>
<?php
include "footer.php";

?>