<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Создание сессии</title>
</head>
<body class="min-vh-100 d-flex">
<div class="container">
    <h1>Создание сессии</h1>
    <form action="AddSession.php" method="post">
        <div class="form-group">
            <label for="first_type">Вопрос с открытым ответом (число)</label>
            <input type="text" class="form-control" id="first_type"  name="first_question">
        </div>
        <div class="form-group">
            <label for="second_type">Вопрос с открытым ответом (положительное число)</label>
            <input type="text" class="form-control" id="second_type"  name="second_question">
        </div>
        <div class="form-group">
            <label for="third_type">Вопрос с открытым ответом (строка)</label>
            <input type="text" class="form-control" id="third_type"  name="third_question">
        </div>
        <div class="form-group">
            <label for="fourth_type">Вопрос с открытым ответом (текст)</label>
            <input type="text" class="form-control" id="fourth_type"  name="fourth_question">
        </div>
        
        <div class="form-group">
            <label for="fourth_type">Вопрос с единственным выбором</label>
            <input type="text" class="form-control" id="five_type" name="five_question">
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label for="first_rb">Первый ответ</label>
                <input type="text" class="form-control" id="first_rb" name="first_rb">
                <input type="number" class="form-control" id="first_score_rb" min="-100" max="100" maxlength="3" placeholder='Балл' name="first_score_rb">
                
            </div>
            <div class="form-group col-4">
                <label for="second_rbutton">Второй ответ</label>
                <input type="text" class="form-control" id="second_rb" name="five_question">
                <input type="number" class="form-control" id="second_csore_rb" min="-100" max="100" maxlength="3"  placeholder='Балл' name="second_csore_rb">
            </div>
            
        </div>
        
        <div class="form-group">
            <label for="fourth_type">Вопрос с множественным выбором</label>
            <input type="text" class="form-control" id="six_type" name="six_question">
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label for="first_check">Первый ответ</label>
                <input type="text" class="form-control" id="first_check" name="first_check">
                <input type="number" class="form-control" id="first_score_ck" min="-100" max="100" maxlength="3" placeholder='Балл' name="first_score_ck">
            </div>
            <div class="form-group col-4">
                <label for="second_check">Второй ответ</label>
                <input type="text" class="form-control" id="second_check">
                <input type="number" class="form-control" id="second_score_ck" min="-100" max="100" maxlength="3" placeholder='Балл' name="second_score_ck">
            </div>
            <div class="form-group col-4">
                <label for="third_check">Третий ответ</label>
                <input type="text" class="form-control" id="third_check">
                <input type="number" class="form-control" id="third_score_ck"  min="-100" max="100" maxlength="3" placeholder='Балл' name="third_score_ck">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Создать</button>
        <br>
    </form>
</div>

</body>
</html>