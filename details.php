<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/details.css">
    <script src="https://kit.fontawesome.com/7892645b61.js" crossorigin="anonymous"></script>

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
   <div class='details'>
    <div class='photo'>
        <img src="img/359gqyad.png" alt="Фото клиники" height="400px" width="400px">
        <h1>Название</h1>
        <p><i class="fa-solid fa-star">4.9</i></p>
    
    <div class="reviews">
   <h1>Отзывы</h1>
<div class="review">
    <div class="review-name"><h1>Имя Фамилия</h1><p><i class="fa-solid fa-star">4</i></p></div>
    <p>ОтзывОтзывОтзывОтзывОтзывОтзыв</p>
</div>
<div class="review">
<div class="review-name"><h1>Имя Фамилия</h1><p><i class="fa-solid fa-star">5</i></p></div>
    <p>Отзы вОтзыв Отзыв OтзывОтзывОтзыв</p>
</div>
<button><a href="reviews.php">Еще отзывы</a></button>
</div>
</div>
<div class="detail">
    <h1>Описание</h1>
    <p>ОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписание ОписаниеОписание ОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписание</p>
    <h1>Список услуг</h1>
    <ul>
  <li>Стоматология</li>
  <li>Вакцинация</li>
  <li>Хирургия</li>
</ul>
</div>
   </div>
   
    <div class="year">
        © 2020 - 2024   Харчевников Кирилл
    </div>
    <script src="script.js"></script>
</body>
</html>