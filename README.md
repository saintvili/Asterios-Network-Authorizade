# Asterios-Network-Authorizade
Authorization class via Asterios Network

Authorization class via Asterios Network in Php
With this class you will be able to. it is easy to make a system of Authorization and Registration directly on your website!

index.php is the Main class, it stores methods for retrieving data from Asterios Network
auth.php-Demo class, in it you can see how the system works

Php 5.3 or higher is required to work!



Класс авторизации через Asterios Network на Php
С помощью этого класса вы сможете. легко сделать систему Авторизации и Регистрации прямо у вас на сайте!

index.php - Главный класс, в нем хранятся методы получения данных с Asterios Network
auth.php - Демонстрационный класс, в нем вы можете посмотреть как функционирует система

Для работы необходима версия php 5.3 и выше! 
  

Method php / Методы Php 


        echo 'Ваш пол: '.$asterios["fullname"].'<br>';
        echo 'Количество Записей: '.$asterios["postsCount"].'<br>';
        echo 'Количество Лайков: '.$asterios["likesCount"].'<br>';
        echo 'Количество Видео: '.$asterios["videosCount"].'<br>';
        echo 'Количество Подарков: '.$asterios["giftsCount"].'<br>';
        echo 'Количество Друзей: '.$asterios["friendsCount"].'<br>';
        echo 'Ваша Локация: '.$asterios["location"].'<br>';
        echo 'Ваша Статус: '.$asterios["status"].'<br>';
        echo 'Ваша Логин: '.$asterios["asterios"].'<br>';
        echo 'Дата Рождения: '.$asterios["day"].' /'.$asterios["month"].' /'.$asterios["year"].'<br>';
        echo 'День Рождения: '.$asterios["day"].'<br>';
        echo 'Месяц Рождения: '.$asterios["month"].'<br>';
        echo 'Год Рождения: '.$asterios["year"].'<br>';
        echo 'Ваш уникальный ID: '.$asterios["id"].'<br>';
