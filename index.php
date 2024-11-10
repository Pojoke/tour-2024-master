
<?php include "header.php"; ?>

<div class="container mt-5">
    <h2 class="mb-4">Форма вибору країни та транспорту</h2>
    <form method="post" action="countries.php" name="myform" class="p-4 border rounded-3 shadow-sm bg-light">
        <!-- Выбор страны -->
        <div class="mb-3">
            <label for="formCountry" class="form-label">Виберіть країну:</label>
            <select name="formCountry" id="formCountry" class="form-select">
                <option value="US">США</option>
                <option value="UK">Великобританія</option>
                <option value="France">Франція</option>
                <option value="Mexico">Мексика</option>
                <option value="Japan">Японія</option>
            </select>
        </div>
        
        <!-- Выбор транспорта -->
        <div class="mb-3">
            <label for="transport" class="form-label">Виберіть транспорт:</label>
            <select name="transport" id="transport" class="form-select">
                <option value="bus">Автобус</option>
                <option value="airplane">Літак</option>
                <option value="train">Потяг</option>
            </select>
        </div>
        
        <!-- Рейтинг -->
        <div class="mb-3">
            <label for="stars" class="form-label">Кількість зірок (від 1 до 5):</label>
            <input type="number" name="stars" id="stars" min="1" max="5" value="3" class="form-control">
        </div>
        
        <!-- Ціна -->
        <div class="mb-3">
            <label for="price" class="form-label">Ціна (від 100 до 1000):</label>
            <input type="range" id="price" name="price" min="100" max="1000" step="50" class="form-range">
        </div>
        
        <!-- Кнопка отправки -->
        <button type="submit" name="formSubmit" class="btn btn-primary">ОК</button>
    </form>
</div>

<?php include "footer.php"; ?>