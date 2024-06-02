<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/7892645b61.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Услуги</title>
    
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/reviews.css">
</head>
<body>
<div id="modal-window">
<h1>Вход</h1>
        <div class="modal-content">
            <button onclick='close_modal()' class="close-btn">x</button>
            
            <p>Электронная почта</p>
            <input type="text">
            <a>Отправить код</a>
            <p>Введите код из письма</p>
            <input type="text">
            <br>
            <button class="login"onclick="close_modal()">Войти</button>
            <br>
            <a onclick="open_modal2(),close_modal()">Регистрация</a>
        </div>
    </div>
    <div id="modal-window2">
    <h1>Регистрация</h1>
        <div class="modal-content">
            <button onclick='close_modal2()' class="close-btn">x</button>
          
            <p>Имя</p>
            <input type="text">
             <p>Фамилия</p>
            <input type="text">
            <p>Электронная почта</p>
            <input type="text">
            <p>Телефон</p>
            <input type="text">
            <br>
            <button class="login"onclick="close_modal2()">Зарегистрироваться</button>
        </div>
    </div>
    <header>
   
        <img src="img/2 (1).png" height="65px"><h1>VetNavigator</h1>
        <menu>
            <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a onclick='open_modal()'>Вход</a></li>
            </ul>
        </menu>
    </header>
    
<section class='pets'>
    <h1>Добавить питомца</h1>
<div class="add">
    <p>Имя Питомца</p>
    <input type="text">
    <p>Вес/кг</p>
    <input type="number" placeholder="Вес в кг">
    <p>Возраст/лет</p>
    <input type="number" placeholder="Лет.Месяцев">
    <p>Вид</p>
    <select name="pets" id="pets">
  <option value="Кот">Кот</option>
  <option value="Собака">Собака</option>
  <option value="Птица">Птица</option>
  <option value="Грызун">Грызун</option>
</select>
<input class='button' type='submit' value="Добавить">
</div>

</section>

    
    <div class="year">
        © 2020 - 2024   Харчевников Кирилл
    </div>
    <script src="script.js"></script>
</body>
</html>