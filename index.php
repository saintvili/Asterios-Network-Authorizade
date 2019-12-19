<?php 
$reuest = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'].'?asterios_engine=1&';
?>
<?php
$url = "https://newapi.asterios.ws/api/v2/method/profile.get";
$post_data = array (
    "clientId" => "1743",
    "accountId" => $_GET['user_id'],
    "accessToken" => $_GET['access_token'],
    "profileId" => $_GET['user_id']
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
curl_close($ch);
//echo $output;
$asterios = json_decode($output, true);
?>    
    
    
   <?php
switch ($asterios["error"]) {
    case true:
        echo '<html><head><title>Asterios Auth</title><meta charset="utf-8"></head><body><center><br><button onclick="window.location.href = \'https://asterios.ws/cdn/auth/web_site?url_back='. $reuest .'\';">Click Here</button></center></body></html>';  
        break;
    case false:
        ///Начало  Комента
        echo 'Добро пожаловать, '.$asterios["fullname"].'<br><br><hr><img src="'.$asterios["normalPhotoUrl"].'">';
        echo '<br><strong>Информация, которая нам доступна о вашем аккаунте</strong><br>';
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
        echo 'Ссылка на ваш профиль: <a href="https://asterios.ws/'.$asterios["username"].'" target="_blank">https://asterios.ws/'.$asterios["username"].' </a><br>';
        break;
///КОнец комента
}
?>
