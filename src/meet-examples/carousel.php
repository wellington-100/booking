<?  //DATA
    $images = array(
        'https://fastly.picsum.photos/id/356/200/300.jpg?hmac=pb0ZyD5jAO137vihtNEtssVuagKD77egevbOXVGquy8',
        'https://fastly.picsum.photos/id/570/200/300.jpg?hmac=fMlqjNmBSgN75P_tCU-PVSGzRYQxU23Xqd593HxZSZQ',
        'https://fastly.picsum.photos/id/347/200/300.jpg?hmac=1fVrW9rwreP4KjihlnGB5FbyHgQZ_B06amJlSg6bfes',
        'https://fastly.picsum.photos/id/344/200/300.jpg?hmac=hFZM-uJoRMyNATe_kjGvS2NGGP60jqqP64vpGQ98VAo',
        'https://fastly.picsum.photos/id/701/200/300.jpg?hmac=gVWdD9Rh_J0iGXpXOJAN7MZpGPrpeHX_M5JwGGvTSsI',
        'https://fastly.picsum.photos/id/265/200/300.jpg?hmac=NX0ut-ylHFyYKa4TxhZFNElh-h6RcVV7P4PNPgeBxKk',
        'https://fastly.picsum.photos/id/716/200/300.jpg?hmac=qbNS_afUKsp_nyvuAAcK8T7OxOtMoqJvLIeaK-jirsU',
        'https://fastly.picsum.photos/id/602/200/300.jpg?hmac=TkzlF12MtJomcmqzsOc-CR43gSl3xnotDQRPBvM7Avw',
        'https://fastly.picsum.photos/id/669/200/300.jpg?hmac=ypH3d7OM0ROvll045TKXPpwkg24nCbbWckekDHVyH0U',
        'https://fastly.picsum.photos/id/446/200/300.jpg?hmac=VaF-vrs-svfPoYxxsTKI08lxXNlPBzqyj97M82eX8mc',
    );
    
    
    // LOGIC
    if (isset ($_GET['s'])) {
        $slide = $_GET['s'];
    } else {
        $slide = 1;
    }
    $total_slides = count($images) - 2;
    $prev_slide = ($slide > 1) ? $slide - 1 : $slide;
    $next_slide = ($slide < $total_slides) ? $slide + 1 : $slide;
    $imageIndex = $slide;

?>


<!-- STYLES -->
<style>
    body {
        background-color: #222;
        color: white;
        text-align: center;
    }

    a {
        color: #ccc;
        text-decoration: none;
        
    }

    a.current {
        text-decoration: underline;
        color: #ccc;
    }
</style>

<!-- SLIDES -->
<div>
    <img src="<?= $images[($imageIndex == 1) ? 0 : $imageIndex - 1] ?>">
    <img src="<?= $images[$imageIndex] ?>">
    <img src="<?= $images[($imageIndex == count($images) - 1) ? count($images) : $imageIndex + 1] ?>">
    

</div>
<hr>

<!-- PAGINATOR -->
<div>
    <a href="?s=<?= $prev_slide ?>">
        <?= ($slide > 1) ? '&lt;' : '' ?>
    </a>
    <?php for ($i = 1; $i <= $total_slides; $i++): ?>
        <a href="?s=<?= $i ?>" class="<?= ($i == $slide) ? 'current' : '' ?>">
            <?= $i ?>
        </a>
    <?php endfor ?>
    <a href="?s=<?= $next_slide ?>">
        <?= ($slide < $total_slides) ? '&gt;' : '' ?>
    </a>
</div>

<!--
Создать простой карусель при помощи php и принципа пагинации который вы прошли на уроке
объявить слайды каруселя (адреса картинок) в виде идексированого массива
ПРОСТОЙ вариант каруселя: отображает 1 куртинку и стрелками дает прокрутить влево и вправо
СЛОЖНЫЙ вариант: отображает часть картинок (допустим у вас их 7 а вы отображаете 3), стрелки и индикаторы
использовать for для вывода слайдов
применить if / else