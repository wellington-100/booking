<!-- LOGIC -->
<?php
if (isset($_GET['color'])) {
    switch ($_GET['color']) {
        case 'stop':
            $color = 'red';
            break;
        case 'getready':
            $color = 'yellow';
            break;
        case 'go':
            $color = 'green';
            break;
        default:
            $color = '#222';
    }
} else {
    $color = '#222'; 
}
?>

<!-- TEEMPLATE -->
<style>
    body {
        background-color: #222; 
        color: white; 
        text-align: center;
    }
    .circle { 
        width: 50px; 
        height: 50px; 
        border-radius: 50%; 
        display: inline-block; 
        margin: 10px; 
    }
    .button { width: 80px; 
        height: 30px;
        border-radius: 10%;
        margin: 10px; 
        text-align: center; 
        line-height: 30px; 
        background-color: whitesmoke; 
        color: black; 
        text-decoration: none; 
        display: inline-block; 
        }
</style>
<div>
    <div>
        <a href="?color=stop" class="circle" style="background-color: <?= ($color == 'red') ? 'red': '#FEE2E2'?>;"></a><br>
        <a href="?color=getready" class="circle" style="background-color: <?= ($color == 'yellow') ? 'yellow': '#FEF3C7'?>;"></a><br>
        <a href="?color=go" class="circle" style="background-color: <?= ($color == 'green') ? 'green': '#D1FAE5'?>;"></a>
    </div>
    <a href="?color=stop" class="button">stop</a>
    <a href="?color=getready" class="button">get ready</a>
    <a href="?color=go" class="button">go</a>
</div>



<!--
Управление потоком + ввод / switch/case

Создать страницу "traffic-light.php" на которой пользователь 
сможет переключать цвета светофора нажатием на кнопки
Создать три ссылки и переделать их стиль так чтобы они выглядели как 3 кружка (красного, желтого, зеленого)
Ссылки содержат адрес "prefix/traffic-light.php?color=xxxxx" - 
где префикс адреса вы сами вставите исходя из папки где находится ващ скрипт, 
а xxxxx - будет название цвета на который нажимает пользователь
Скрипт должен получить название цвета $_GET -ом и при помощи siwtch/case 
переделать вывод так чтобы соответствующий кружок стал светлее

ВНИМАНИЕ: изначально - когда только загрузилась страница - все 3 крудка содержат бледные цвета