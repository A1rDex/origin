<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/reviews.css"> 
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
    <div class="reviews-body">
        <h1>Отзывы на ....</h1>
   <div class="reviews">
    <div class="review">
        <div class='review-name'>
<h1>Имя Фамилия</h1>
<p>24/05/24</p>
<p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
        </div>
        <p>ОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзыв</p>
        <button>Ответить</button>
    </div>
    <div class="review">
        <div class='review-name'>
<h1>Имя Фамилия</h1>
<p>Дата</p>
<p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></p>
        </div>
        <p>ОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзыв</p>
        <button>Ответить</button>
    </div>
    <div class="review">
        <div class='review-name'>
<h1>Имя Фамилия</h1>
<p>Дата</p>
<p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></p>
        </div>
        <p>ОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзывОтзыв</p>
        <button>Ответить</button>
    </div>
   </div>
 
   <form method="post" action="">
	<label>Ваша оценка</label>
	<div class="rating-area">
		<input type="radio" id="star-5" name="rating" value="5">
		<label for="star-5" title="Оценка «5»"></label>	
		<input type="radio" id="star-4" name="rating" value="4">
		<label for="star-4" title="Оценка «4»"></label>    
		<input type="radio" id="star-3" name="rating" value="3">
		<label for="star-3" title="Оценка «3»"></label>  
		<input type="radio" id="star-2" name="rating" value="2">
		<label for="star-2" title="Оценка «2»"></label>    
		<input type="radio" id="star-1" name="rating" value="1">
		<label for="star-1" title="Оценка «1»"></label>
	</div>
	
	<label>Отзыв</label>
	<textarea name="text"></textarea>
   </div>
    <div class="year">
        © 2020 - 2024   Харчевников Кирилл
    </div>
</body>
</html>
</body>
</html>