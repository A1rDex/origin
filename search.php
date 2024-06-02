<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/7892645b61.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/search.css">
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

    <div id="modal-windowappointment">
    <h1>Запись</h1>
        <div class="modal-content">
        
            <button onclick='close_modalappointment()' class="close-btn">x</button>
            
            <label for="pets">Питомец:</label>
           <div class='pets'>
<select name="pets" id="pets">
  <option value="Мурзик">Мурзик(Кот)</option>
  <option value="Жучка">Жучка(Собака)</option>
</select><a href='pet.php'><h1>+</h1></a>
</div>
<button class="login" onclick="open_modalappointment2(),close_modalappointment()">Далее</button>
        
        </div>
    </div>

    <div id="modal-windowappointment2">
    <h1>Запись</h1>
        <div class="modal-content">
        
            <button onclick='close_modalappointment2()' class="close-btn">x</button>
            <p>Врачи</p>
        <div class='doctors'>
            <div class='doctor'>
            <img src='img/R (1).jpg' height="70px" width="70px">
            <div class="doc-text">
    <h1>Добрыня Никитыч</h1>
    <p>Ветеринар-стоматолог</p>
            </div>
            </div>
            <div class='doctor'>
            <img src='img/profile05.jpg' height="70px" width="70px">
            <div class="doc-text">
    <h1>Кирилл Кириллов</h1>
    <p>Ветеринар-стоматолог</p>
            </div>
            </div>
            <div class='doctor'>
            <img src='img/8nv6pqpe.png' height="70px" width="70px">
            <div class="doc-text">
    <h1>Наталья Олегова</h1>
    <p>Ветеринар-стоматолог</p>
            </div>
            </div>
            <div class='doctor'>
            <img src='img/8nv6pqpe.png' height="70px" width="70px">
            <div class="doc-text">
    <h1>Наталья Олегова</h1>
    <p>Ветеринар-стоматолог</p>
            </div>
            </div>
        </div>
        <P>Дата</p>
        <div class=' dates'>
           <div class=' date'>Май,23</div>
           <div class=' date'>Май,24</div>
           <div class=' date'>Май,25</div>
           <div class=' date'>Май,26</div>
           <div class=' date'>Май,27</div>
           <div class=' date'>Май,28</div>
           <div class=' date'>Май,29</div>
           <div class=' date'>Май,30</div>
           <div class=' date'>Май,31</div>
           <div class=' date'>Июнь,1</div>
           <div class=' date'>Июнь,2</div>
           <div class=' date'>Июнь,3</div>
           <div class=' date'>Июнь,4</div>
            </div>
            <P>Время</p>
            <div class='times'>
           <div class='time'>9:00</div>
           <div class='time'>9:30</div>
           <div class='time'>10:00</div>
           <div class='time'>10:30</div>
           <div class='time'>11:00</div>
           <div class='time'>11:30</div>
           <div class='time'>12:00</div>
           <div class='time'>12:30</div>
           <div class='time'>13:00</div>
           <div class='time'>13:30</div>
            </div>
<button class="login"onclick="close_modalappointment2()">Далее</button>
        
        </div>
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
    <div class="search-text">
   <input type="text" name="text" class="search" placeholder= "Поиск по проблеме">
   <p>Найдено:</p>
    </div>

    
    <div class='clinic'>
    <div>
    <div class="photo">
<img src='img/359gqyad.png' height="300px" width="300px">

</div>

<div class="all">
    <div class="other">
<h1>Название</h1>
<p><i class="fa-solid fa-star">4.9</i></p>
</div>
<p>От 6000тг</p>
<p><a href="#">Отзывы</a></p>
<div class="buttons"> 
<button><a href="details.php">Подробнее</a></button>
<button onclick="open_modalappointment()">Запись</button>
</div>
</div>

</div>

</div>

<div class='clinic'>
    <div>
    <div class="photo">
<img src='img/359gqyad.png' height="300px" width="300px">

</div>

<div class="all">
    <div class="other">
<h1>Название</h1>
<p><i class="fa-solid fa-star">4.7</i></p>
</div>
<p>От 4000тг</p>
<p><a href="#">Отзывы</a></p>
<div class="buttons"> 
<button>Подробнее</button>
<button>Запись</button>
</div>
</div>

</div>

</div>
<div class='clinic'>
    <div>
    <div class="photo">
<img src='img/359gqyad.png' height="300px" width="300px">

</div>

<div class="all">
    <div class="other">
<h1>Название</h1>
<p><i class="fa-solid fa-star">4.7</i></p>
</div>
<p>От 5000тг</p>
<p><a href="#">Отзывы</a></p>
<div class="buttons"> 
<button>Подробнее</button>
<button>Запись</button>
</div>
</div>

</div>

</div>

    </section>

    
   
    <div class="year">
        © 2020 - 2024   Харчевников Кирилл
    </div>
    <script src="script.js"></script>
</body>
</html>