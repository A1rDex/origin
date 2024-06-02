<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/7892645b61.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<div id="modal-window">
<h1>Вход</h1>
        <div class="modal-content">
            <button onclick='close_modal()' class="close-btn">x</button>
            <form action="include/login.php" method="post">
            <p>Электронная почта</p>
            <input type="text" name='email'>
            <a>Отправить код</a>
            <p>Введите код из письма</p>
            <input type="text" name='code'>
            <br>
            <button class="login" type="submit">Войти</button>
            <br>
            <a onclick="open_modal2(),close_modal()">Регистрация</a>
            </form>
        </div>
    </div>
    <div id="modal-window2">
    <h1>Регистрация</h1>
        <div class="modal-content">
            <button onclick='close_modal2()' class="close-btn">x</button>
            <form action="include/register.php" method="post">
            <p>Имя</p>
            <input type="text" name="name" id="name" required>
             <p>Фамилия</p>
            <input type="text" name="secondname" id="secondname" required>
            <p>Электронная почта</p>
            <input type="text" name="email" id="email" required>
            <p>Телефон</p>
            <input type="text" name="phone" id="phone" required>
            <br>
            <button class="login" type="submit">Зарегистрироваться</button>
            </form>
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
      
    
<section class="a1"> 
    <h1>Путеводитель по заботе о питомцах!</h1>
   
  <input type="text" name="text" class="search" placeholder= "Поиск по проблеме">
  <input type="submit" name="submit" class="submit" value="Найти" href="search.php">

</section>
 <h1 class='popular_title'>Популярные клиники</h1>
<section class="Popular"> 
 

<div class='clinic'>
    <div>
    <div class="photo">
<img src='img/359gqyad.png' height="300px" width="300px">
<button>Подробнее</button>
</div>
<div class="all">
    <div class="other">
<h1>Название</h1>
<p><i class="fa-solid fa-star">4.7</i></p>
</div>
<p>Последние отзывы</p>
<div class="reviews">
   
<div class="review">
    <div class="review-name"><h1>Имя Фамилия</h1><p><i class="fa-solid fa-star">4</i></p></div>
    <p>ОтзывОтзывОтзывОтзывОтзывОтзыв</p>
</div>
<div class="review">
<div class="review-name"><h1>Имя Фамилия</h1><p><i class="fa-solid fa-star">5</i></p></div>
    <p>Отзы вОтзыв Отзыв OтзывОтзывОтзыв</p>
</div>
</div>
</div>
</div>
</div>

<div class='clinic'>
    <div>
    <div class="photo">
<img src='img/359gqyad.png'  height="300px" width="300px">
<button>Подробнее</button>
</div>
<div class="all">
    <div class="other">
<h1>Название</h1>
<p><i class="fa-solid fa-star">4.9</i></p>
</div>
<p>Последние отзывы</p>
<div class="reviews">
   
<div class="review">
    <div class="review-name"><h1>Имя Фамилия</h1><p><i class="fa-solid fa-star">5</i></p></div>
    <p>ОтзывОтзывОтзывОтзывОтзывОтзыв</p>
</div>
<div class="review">
<div class="review-name"><h1>Имя Фамилия</h1><p><i class="fa-solid fa-star">5</i></p></div>
    <p>ОтзывОтзывОтзывОтзывОтзывОтзыв</p>
</div>
</div>
</div>
</div>
</div>
<!-- <div class='clinic'>
    <div>
    <div class="photo">
<img src='img/359gqyad.png' height="300px" width="300px">
<button>Подробнее</button>
</div>
<div class="all">
    <div class="other">
<h1>Название</h1>
<p><i class="fa-solid fa-star">4.8</i></p>
</div>
<p>Последние отзывы</p>
<div class="reviews">
   
<div class="review">
    <div class="review-name"<h1>Имя Фамилия</h1><p><i class="fa-solid fa-star">5</i></p></div>
    <p>ОтзывОтзывОтзывОтзывОтзывОтзыв</p>
</div>
<div class="review">
<div class="review-name"<h1>Имя Фамилия</h1><p><i class="fa-solid fa-star">4</i></p></div>
    <p>ОтзывОтзывОтзывОтзывОтзывОтзыв</p>
</div>
</div>
</div>
</div>
</div> -->




</section>
<div class="grid-container">
    <div class="grid-item1"></div>
    <div class="grid-item2">
        <div class="grid-text">
        <h1>Коротко о нас</h1>
       
        <p>Ветеринарный Сервис "VetNavigator" - это не просто поиск ветеринарных клиник. Мы — сообщество заботливых владельцев животных, которые ценят профессионализм и добросовестность. Наша миссия — обеспечить каждому питомцу доступ к квалифицированной медицинской помощи. Мы верим, что здоровье животных — это здоровье нашего общества.</p>
    </div>
</div>
</div>
 
   


<div class="year">
    © 2020 - 2024   Харчевников Кирилл
</div>
<script src="script.js"></script>
</body>

</html>