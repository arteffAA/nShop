<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('modules/head.php'); ?>
</head>
<body class="fade-in">
    <header class="contaner">
        <?php include('modules/header.php'); ?>
    </header>
    
    <div class="header-bar"></div>

    <main class="main">
        <div class="info">
            <h1 class="info-title">Nike</h1>
            <h2 class="info-title-2 fade-in" id="shoe-model"></h2>
            <p id="shoe-model-description" class="description"></p>
    
            <div class="price">
                <a class="eur" id="price-value">29.99</a><br>
                <a class="buy" href="">Заказать</a>
            </div>
        </div>
    
        <div class="square"></div>
    
        <img class="nike-logo-2 fade-in" src="/img/nike-logo-2.png">
        <img id="shoe-image" src="img/placeholder.png" alt="Selected Shoe">
    
        <div class="sale shoe-image">
            <div class="square-3" onclick="selectShoe('img/force.png', 'Air Force 1', 'стильная иконическая реплика кроссовок с высокой подошвой и узнаваемым дизайном. Удобство, прочность и модный стиль в одной модели, на выбор есть два цвета. Идеальный выбор для повседневной носки.', 'nike-1', '$29.99')">
                <img src="img/force.png" width="150px" style="margin-top: -25px; margin-left: 18px">
            </div>
            <div class="square-3" onclick="selectShoe('img/jordan.png', 'Air Jordan 1', 'Классические и элегантные кроссовки с высоким верхом и уникальным стилем. Воплощение спортивной элегантности и баскетбольного наследия. Непревзойденный комфорт и стиль для истинных ценителей моды и спорта.', 'nike-2', '$49.99')">
                <img src="img/jordan.png" width="200px" style="margin-top: -75px; margin-left: -9px;">
            </div>
            <div class="square-3" onclick="selectShoe('img/nike.png', 'Self-Lacing', 'инновационная обувь с автоматической шнуровкой, которая самостоятельно подстраивается под форму вашей ноги. Удобство и современные технологии в одной паре обуви. Невероятно удобные и функциональные кроссовки для повседневной жизни.', 'nike-3', '$99.99')">
                <img src="img/nike.png" width="220px" style="margin-top: -15px; margin-left: -9px; transform: scaleX(-1);">
            </div>
        </div>

        <script>
            function selectShoe(imageSrc, modelText, modelDescription, imageClass, priceValue) {
                var selectedShoeImage = document.getElementById('shoe-image');
                var selectedShoeModel = document.getElementById('shoe-model');
                var selectedShoeDescription = document.getElementById('shoe-model-description');
                var selectedPriceValue = document.getElementById('price-value');

                selectedShoeImage.src = imageSrc;
                selectedShoeImage.className = imageClass;
                selectedShoeModel.textContent = modelText;
                selectedShoeDescription.textContent = modelDescription;
                selectedPriceValue.textContent = priceValue;
            }

            window.addEventListener('DOMContentLoaded', function() {
                selectShoe(
                    'img/force.png',
                    'Air Force 1',
                    'стильная иконическая реплика кроссовок с высокой подошвой и узнаваемым дизайном. Удобство, прочность и модный стиль в одной модели. Идеальный выбор для повседневной носки.',
                    'nike-1',
                    '$29.99'
                );
            });
        </script>
    </main>

    <block class="white-square">
        <div class="video">
            <iframe width="400" height="170" src="https://www.youtube.com/embed/yVlRblONELo" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="social">
            <ul>
                <li><a class="" href="">INSTAGRAM</a></li>
                <li><a class="" href="">FACEBOOK</a></li>
                <li><a class="" href="">TIKTOK</a></li>
                <li><a class="" href="">YOUTUBE</a></li>
            </ul>
        </div>

        <div class="black-square">
            <a href="#about" class="text" style="color: azure    ;">как мы работаем<i class="fa-solid fa-arrow-right icon"></i></a>
        </div>        
    </block>

    <about class="about" id="about">
        <div class="delivety">
            <div class="circle-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
            <div class="arrow"><i class="fa-solid fa-arrow-right icon"></i></div>
            <div class="circle-icon"><i class="fa-solid fa-handshake"></i></div>
            <div class="arrow"><i class="fa-solid fa-arrow-right icon"></i></div>
            <div class="circle-icon"><i class="fa-solid fa-cart-shopping"></i></div>
            <div class="arrow"><i class="fa-solid fa-arrow-right icon"></i></div>
            <div class="circle-icon"><i class="fa-solid fa-ship"></i></div>
            <div class="arrow"><i class="fa-solid fa-arrow-right icon"></i></div>
            <div class="circle-icon"><i class="fa-solid fa-truck-fast"></i></div>
        </div>

        <h1 class="who">Кто мы?</h1><br>
        <p>
            Мы знаем, насколько важно иметь стильную обувь, которая подчеркивает твою индивидуальность. Именно поэтому мы предлагаем уникальный сервис доставки, который облегчит тебе процесс получения кроссовок из Китая.
            Наша команда состоит из профессионалов, которые тесно сотрудничают с надежными поставщиками из Китая. Мы понимаем, что оформление заказа, оплата и доставка - все это может быть сложным и многоэтапным процессом. Поэтому мы берем на себя все хлопоты, чтобы ты мог наслаждаться своей покупкой без лишних забот.
            Как это работает? Все начинается с оформления заказа и перевода средств. Ты выбираешь свою идеальную пару кроссовок, а мы предоставляем тебе информацию о стоимости и сроках доставки. После того, как ты осуществляешь перевод средств, мы приступаем к закупке товара.
            Наша команда закупает заказанные кроссовки у поставщика в Китае и проверяет их на качество и соответствие заказу. После этого кроссовки отправляются к нам в офис, где мы осуществляем переупаковку и отправляем тебе заказ с помощью удобной и надежной доставки.
            Мы всегда следим за процессом доставки и держим тебя в курсе событий. Если возникают вопросы или проблемы, наша служба поддержки готова помочь тебе в любое время.
        </p>

        <a class="buy" href="">Связаться</a>
    </about>



    <script src="js/script.js"></script>
    <script src="js/navigation.js"></script>
    <script src="js/search.js"></script>
</body>
</html>