<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Основні соціальні та медійні-платформи</title>
    <link rel="icon" href="photos/brain.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        *{
            margin: 0%;
        }
        header{
            background-color: black;
            color: white;
            position: fixed;
        }
        header{
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .p{
            transform: translate(100px, -50px);
            font-size: 23px;
            color: white;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .choose1{
            transform: translate(600px, 10px);
            top: 0px;
        }
        .choose2{
            transform: translate(700px, 10px);
        }
        #icon{
            transform: translate(20px, 0px);
            width: 50px;
            height: 50px;
        }
        .navigation {
            display: flex;
            flex-flow: row wrap;
            font-size: 20px;
            list-style: none;
            margin: 0;
        }
        .navigation a {
            text-decoration: none;
            display: block;
            padding: 1em;
            font-size: 20px;
            font-weight: bold;
        }
        .navigation a:hover {
            color: #533a2e;
        }
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            transition: 0.3s ease-out;
            padding: 5px 0;
            z-index: 999;
            color: #f9f4f4;
        }
        .header a {
            color: #f9f4f4;
        }
        .header_active {
            background: #f9f4f4;
        }
        .header_active a {
            color: #533a2e;
        }
        .logo-wrap img {
            width: 60px;
        }
        .logo-wrap {
            width: 100px;
            height: auto;
        }
        .wrap {
            margin: 0 auto;
            max-width: 960px;
            padding: 0 15px;
        }
        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
        }
        .brain{
            transform: translate(-5px, 0px);
            width: 36px;
        }
        .social{
            transform: translate(480px, 10px);
        }
        .photo1{
            transform: translate(13px, -360px); 
            height: 350px;
            width: 15px;
        }
        .underline{
            text-decoration: underline;
        }
        .media{
            transform: translate(815px, -715px);
        }
        .dot-line{
            transform: translate(0px, -550px);
        }
        .figure-square{
            text-decoration: none;
            border-radius: 10px;
            background-color: black;
            color: white;
            transform: translate(-120px, 50px);
            font-size: 10px;
            height: 250px;
            width: 400px;
        }
        h3, .social, .media, h2{
            font-family: 'Trebuchet MS', sans-serif;
        }
        .navigation{
            transform: translate(100px, -500px);
        }
        .navig1{
            transform: translate(0px, -10px);
            color: white;
        }
        .navig2{
            transform: translate(0px, -30px);
            color: white;
        }
        .navig3{
            transform: translate(0px, -60px);
            color: white;
        }
        .navig5{
            transform: translate(0px, -100px);
            color: white;
        }
        .navig6{
            transform: translate(0px, -130px);
            color: white;
        }
        .navig7{
            transform: translate(0px, -160px);
            color: white;
        }
        .navig9{
            transform: translate(0px, -200px);
            color: white;
        }
        .navig10{
            transform: translate(0px, -230px);
            color: white;
        }
        .navig11{
            transform: translate(0px, -260px);
            color: white;
        }
        .sociale-medier{
            transform: translate(650px, -480px);
            border-radius: 20px;
            width: 600px;
        }
        .img-network{
            width: 60px;
            height: 60px;
            border-radius: 1000px;
        }
        .header-tt{
            transform: translate(300px, -300px);
        }
        .header-tt-img1{
            transform: translate(500px, -905px);
        }
        .header-tt-img3{
            transform: translate(950px, -905px);
        }
        .header-tt-line{
            transform: rotate(90deg) translate(-600px, 0px);
            width: 50px;
        }
        .black{
            border-radius: 1000px;
        }
        .b11{
            transform: translate(80px, -800px);
        }
        .tt{
            border-radius: 20px;
            transform: translate(100px, -360px);
        }
        .title-tt{
            transform: translate(250px, -360px);
        }
        .block-tt{
            transform: translate(800px, -1250px);
            border: 1px black solid;
            width: 600px;
            height: 555px;
            border-radius: 15px;
        }
        .logo1{
            border-radius: 1000px;
            transform: translate(310px, -200px);
        }
        .znak1{
            border-radius: 1000px;
            transform: translate(310px, -150px);
        }
        .wiki1{
            border-radius: 1000px;
            transform: translate(310px, -100px);
        }
        .o{
            border: solid black 1px;
        }
        .b12{
            transform: translate(80px, -800px);
        }
        .inst{
            border-radius: 20px;
            transform: translate(100px, -360px);
        }
        .title-inst{
            transform: translate(250px, -360px);
        }
        .block-inst{
            transform: translate(800px, -1150px);
            border: 1px black solid;
            width: 600px;
            height: 555px;
            border-radius: 15px;
        }
        .logo2{
            border-radius: 1000px;
            transform: translate(310px, -200px);
        }
        .znak2{
            border-radius: 1000px;
            transform: translate(310px, -150px);
        }
        .wiki2{
            border-radius: 1000px;
            transform: translate(310px, -100px);
        }
        .header-twitch{
            transform: translate(-100px, 100px);
        }
        .header-twitch-img1{
            transform: translate(80px, -505px);
        }
        .header-twitch-img3{
            transform: translate(530px, -505px);
        }
        .header-twitch-line{
            transform: rotate(90deg) translate(-200px, 435px);
            width: 50px;
        }
        .twitch{
            transform: translate(-310px, -230px);
            border-radius: 20px;
        }
        .b21{
            transform: translate(-730px, -600px);
        }
        .title-twitch{
            transform: translate(-120px, -230px);
        }
        .block-twitch{
            transform: translate(-15px, -900px);
            border: 1px black solid;
            width: 620px;
            height: 555px;
            border-radius: 15px;
        }
        .logo3{
            border-radius: 1000px;
            transform: translate(310px, -200px);
        }
        .znak3{
            border-radius: 1000px;
            transform: translate(310px, -150px);
        }
        .wiki3{
            border-radius: 1000px;
            transform: translate(310px, -100px);
        }
        .yt{
            transform: translate(-310px, -230px);
            border-radius: 20px;
        }
        .b21{
            transform: translate(-730px, -600px);
        }
        .title-yt{
            transform: translate(-120px, -230px);
        }
        .block-yt{
            transform: translate(-15px, -900px);
            border: 1px black solid;
            width: 650px;
            height: 555px;
            border-radius: 15px;
        }
        .logo4{
            border-radius: 1000px;
            transform: translate(330px, -200px);
        }
        .znak4{
            border-radius: 1000px;
            transform: translate(350px, -150px);
        }
        .wiki4{
            border-radius: 1000px;
            transform: translate(330px, -100px);
        }
        .b22{
            transform: translate(-730px, -600px);
        }
        .logott, .logoyt, .logoin, .logotw{
        }
        footer{
            background-color: black;
            color: white;
        }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
        <div class="container"><br>
          <img src="photos/brain1.png" class="brain" alt="">
          <a class="navbar-brand text-warning" href="#">MSMP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
              <li class="nav-item">
                <a class="nav-link" href="#navigation">Навігація</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Зареєструватись на форумі</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Реквізити</a>
              </li>
            </ul><br>
          </div>
        </div>
      </nav>
      <div class="beggining" id="b"><br><br><br><br><br></div>
      <div class="description">
        <div class="text-description">
            <center><h3>Що таке соціальні платформи і які це медійні?</h3></center>
            <div class="social"><p><div class="underline">Соціальна платформа</div> — це федеральний <br> ресурс, що об'єднує різні соціальні служби <br> й постійно розвивається. Якщо ж <br>простими словами, то це платформи де <br> люди спілкуються між собою, діляться <br> новинами і т.д. <br> <div class="underline">Служба соціальних мереж</div> — вебсайт або <br> інша служба у Веб, яка дозволяє <br> користувачам створювати публічну або <br> напівпублічну анкету, складати список <br> користувачів, з якими вони мають зв'язок <br> та переглядати власний список зв'язків <br> і списки інших користувачів.</p></div>
            <center><img src="photos/1.jpg" class="photo1" alt=""></center>
            <div class="media"><div class="underline">Медійні платформи,</div>на відміну від соціальних, транслюють <br> контент окремих медійних(тобто <br> популярних) осіб. Більість медійних <br> платформ існуть тільки для того, <br> щоб на них медійні особи проводили <br> трансляції або вели власний блог. <br> Також відмінність медійних платформ <br> від соціальних у тому, що на медійних <br> платформах дуже важко стати відомим <br> з нуля, тому більша частина медійних <br> людей переходили з соціальних <br> платформ до медійних будучи вже <br>яби-якими популярними.</div>
            <div class="dot-line"><hr></div>
        </div>
      </div>
      <div id="navigation"></div>
      <div class="navigation">
        <h2>Навігація: </h2> <br>
        <br><div class="figure-square">
        <table>
            <ul>
                <a href="#topic1" class="navig1"><li>Соціальні платформи⠀⠀</li></a>
                <ol>
                    <a href="#eleven" class="navig2"><li>TikTok</li></a>
                    <a href="#twelve" class="navig3"><li>Instagram</li></a>
                </ol>
                <a href="#topic2" class="navig5"><li>Медійні платформи⠀⠀</li></a>
                <ol>
                    <a href="#twoone" class="navig6"><li>Twitch</li></a>
                    <a href="#twotwo" class="navig7"><li>YouTube</li></a>
                </ol>
            </ul>
        </table>
        <img src="photos/sociale-medier-2.jpg" class="sociale-medier" alt="">
        </div>
      </div>

      <div class="social-network">
        <div class="tiktok">
            <div class="header-tt" id="topic1"><h2>1 РОЗДІЛ</h2></div>
            <center><img src="photos/1.jpg" class="header-tt-line" alt=""></center>
            <a href="#eleven"><img src="photos/11.png" class="header-tt-img1 img-network" alt=""></a>
            <a href="#twelve"><img src="photos/12.png" class="header-tt-img3 img-network" alt=""></a>
        </div>

        <img id="eleven" src="photos/11.png" class="black b11" width="70px" heigth="70px" alt="">
        <div class="tt"><img src="photos/tiktok.png" class="tt" width="400px" alt="">
        <h1 class="title-tt">TikTok</h1></div>
        <div class="block-tt">
            <p><div class="underline"><b>TikTok</b></div> ー ⠀ китайський соцмедійний застосунок для створення та поширення <br>⠀ відеофайлів та онлайн-трансляцій. Сервіс запущено у вересні 2016 ⠀ китайською. <br>⠀ компанією ByteDance. Це найпопулярніша платформа для коротких відео в <br>⠀ Азії, яка поширилася на інші частини світу і швидко набирає популярність. <br>⠀ Застосунок дозволяє користувачам створювати музичні, танцювальні, <br>⠀ комедійні та інші відео тривалістю до 10 хвилин, але зазвичай до 15 секунд. <br>⠀ Кількість користувачів програми сягнула 1 млрд з 170 країн. <br>⠀ Для міжнародного ринку використовується назва TikTok з моменту, коли <br>⠀ програма почала розширення до Індонезії у вересні 2017 року. 23 січня <br>⠀ 2018 року, застосунок TikTok посів 1 місце серед завантажень безкоштовних <br>⠀ мобільних застосунків у Таїланді. У лютому 2018 року, TikTok розпочав <br>⠀ партнерство з Modern Sky, з метою монетизації музики. <br>⠀ 9 листопада 2017 року TikTok'ова батьківська компанія, ByteDance, витратила <br>⠀ $1 мільярд, аби придбати musical.ly — Шанхайську стартапову компанію з <br>⠀ офісом у Санта-Моніці, Каліфорнія. Ця компанія вже мала на той час <br>⠀ соціально-медійну платформу, націлену на підлітковий ринок Сполучених ⠀ Штатів. <br>⠀ Сподіваючись захопити молодих користувачів цифрових платформ США, ⠀⠀ TikTok. <br>⠀ 2 серпня 2018 року об'єднався з musical.ly.</p>
            <a href="https://www.tiktok.com/"><div class="logo1"><img src="photos/logott.png" width="50px" class="logo1" alt=""></div></a>
            <a href="https://www.tiktok.com/community-guidelines/uk-ua/"><div class="znak1"><img src="photos/znak.png" width="50px" class="znak1" alt=""></div></a>
            <a href="https://uk.wikipedia.org/wiki/TikTok"><div class="wiki1"><img src="photos/wiki.png" width="50px" class="wiki1 o" alt=""></div></a>

        </div>
      </div>

      <img id="twelve" src="photos/12.png" class="black b12" width="70px" heigth="70px" alt="">
        <div class="inst"><img src="photos/inst.jpg" class="inst" width="500px" alt="">
        <h1 class="title-inst">Instagram</h1></div>
        <div class="block-inst">
            <p>⠀<div class="underline"><b>Instagram</b></div>⠀ — соціальна мережа, що базується на обміні світлинами, дозволяє <br>⠀ користувачам робити світлини, застосовувати до них фільтри, а також <br>⠀ поширювати їх через свій сервіс і низку інших соціальних мереж. Належить <br>⠀ компанії Meta Platforms. Є одним із найпопулярніших сервісів у мистецтві <br>⠀ айфонографії. Світлини у Інстаґрамі мають квадратну форму — як в камерах <br>⠀ Kodak Instamatic і Polaroid. Тоді як більшість мобільних фоторедакторів <br>⠀ використовує співвідношення сторін 3:2.<br>⠀ Застосунок сумісний зі специфікацією IPhone, IPad і IPod на IOS 4,0 і вище, а <br>⠀ також зі смартфонами на Android 4,2,2 і вище з підтримкою OpenGL ES 2, а <br>⠀ також доступний для смартфонів, на яких встановлена Windows Phone 8 (8.1). <br>⠀ Поширюється через App Store, Google Play, Windows Marketplace відповідно. <br>⠀ Застосунок з'явився в магазині App Store компанії Apple 6 жовтня 2010.<br>⠀ У січні 2011 року в застосунок були додані хештеґи для того, щоб було легше <br>⠀ знаходити користувачів і фотографії. <br>⠀ У вересні 2011 року була випущена версія застосунку 2.0, в якій з'явилися живі <br>⠀ фільтри, миттєва зміна нахилу, чотири нових фільтри, фотографії високої <br>⠀ роздільної здатності, опціональні границі, поворот одним кліком і оновлена <br>⠀ ​​іконка. <br>⠀ У квітні 2012 року була випущена версія програми для платформи Android. </p>
            <a href="https://www.instagram.com"><div class="logo1"><img src="photos/logoinst.jpg" width="50px" class="logo2" alt=""></div></a>
            <a href="https://www.facebook.com/help/instagram/477434105621119"><div class="znak2"><img src="photos/znak.png" width="50px" class="znak1" alt=""></div></a>
            <a href="https://uk.wikipedia.org/wiki/Instagram"><div class="wiki1"><img src="photos/wiki.png" width="50px" class="wiki2 o" alt=""></div></a>

        </div>
      </div>
        
      <div class="media">
        <div class="twitch">
            <div class="header-twitch" id="topic2"><h2>2 РОЗДІЛ</h2></div>
            <center><img src="photos/1.jpg" class="header-twitch-line" alt=""></center>
            <a href="#twoone"><img src="photos/21.png" class="header-twitch-img1 img-network" alt=""></a>
            <a href="#twotwo"><img src="photos/22.png" class="header-twitch-img3 img-network" alt=""></a>
        </div>
        
        <img id="twoone" src="photos/21.png" class="black b21" width="70px" heigth="70px" alt="">
        <div class="twitch"><img src="photos/twitch.jpg" class="twitch" width="500px" alt="">
        <h1 class="title-twitch">Twitch</h1></div>
        <div class="block-twitch">
            <p><div class="underline"><b>Twitch</b></div> — це платформа для онлайн відеотрансляцій, що належить Twitch Interactive, <br>⠀  дочірній компанії Amazon.com.Представлений в червні 2011 р. як <br>⠀ відгалуження від платформи відеотрансляцій загального поширення, Justin.tv, <br>⠀ сайт, в першу чергу, зосереджується на потоковій трансляції відеоігор, <br>⠀ включаючи трансляції кіберспортивних змагань, креативного контенту, розділ <br>⠀ «реальне життя» та останнім часом музичні передачі. На ранніх етапах <br>⠀ популярність Twitch була порівняно невеликою, порівняно з Justin TV, де в <br>⠀ жовтні 2013 р. було 45 млн унікальних глядачів. Але до лютого 2014 р. Twitch<br>⠀ посів четверте за величиною джерело пікового інтернет-трафіку в США. У той <br>⠀ же час материнська компанія Justin.tv була ребрендована як Twitch <br>⠀ Interactive, щоб представити зміну напрямку діяльності, Justin.tv був закритий <br>⠀ у серпні 2014 року. Twitch  був підтриманий одним з найуспішніших <br>⠀ американських бізнес-інкубатором Y Combinator та викуплений у серпні 2014 <br>⠀ року компанією Amazon за 970 мільйонів доларів США, що пізніше призвело до <br>⠀ впровадження синергії з передплатою компанії Amazon Prime. Twitch пізніше <br>⠀ придбав Curse, засіб спілкування ігрової спільноти в Інтернеті, і ввів засоби <br>⠀ для придбання ігор за допомогою посилань на трансляції, а також програму, <br>⠀ яка дозволяє стрімерам отримувати комісію від продажу ігор, в які <br>⠀ вони грають.</p>
            <a href="https://www.twitch.com"><div class="logo3"><img src="photos/twitchlogo.jpg" width="50px" class="logo3" alt=""></div></a>
            <a href="https://safety.twitch.tv/s/article/Community-Guidelines?language=ru"><div class="znak3"><img src="photos/znak.png" width="50px" class="znak3" alt=""></div></a>
            <a href="https://uk.wikipedia.org/wiki/Twitch"><div class="wiki3"><img src="photos/wiki.png" width="50px" class="wiki3 o" alt=""></div></a>
        </div>


        <img id="twotwo" src="photos/22.png" class="black b22" width="70px" heigth="70px" alt="">
        <div class="yt"><img src="photos/youtube.jpg" class="yt" width="500px" alt="">
        <h1 class="title-yt">YouTube</h1></div>
        <div class="block-yt">
            <p><div class="underline"><b>YouTube</b></div> — популярний відеохостинг, що надає послуги розміщення відеоматеріалів. <br>⠀ Заснований 14 лютого 2005 року трьома працівниками PayPal: Чадом Герлі, <br>⠀ Стівеном Чені та Джаведом Карімом. Зараз є підрозділом компанії Google. Станом <br>⠀ на серпень 2019 року YouTube є другим за відвідуваністю сайтом в Інтернеті (за <br>⠀ даними компанії Alexa Internet). <br>⠀⠀Користувачі можуть додавати, переглядати і коментувати ті чи інші <br>⠀ відеозаписи. Завдяки простоті та зручності використання, YouTube став одним із <br>⠀ найпопулярніших місць для розміщення відеофайлів. Служба містить як <br>⠀ професійні, так і аматорські відеозаписи, у тому числі відеоблоги. <br>⠀ У жовтні 2006 року відеосервіс придбала компанія Google Inc. за 1,65 млрд $. <br>⠀ Засновник YouTube Чад Герлі вважає, що успіх компанії полягає не тільки в тому, <br>⠀ що за допомогою сайту користувачі можуть показати свої відео всьому світу; на <br>⠀ YouTube можна легко знайти потрібне відео і порекомендувати його іншим. <br>⠀ До січня 2012 кількість щоденних переглядів відео на сайті сягала 4 млрд, а в <br>⠀ травні того ж року на сайт щохвилини завантажувалося близько 72 годин <br>⠀ відеоматеріалів. <br>⠀⠀Станом на 2019 рік на YouTube завантажують близько 300 годин відео щохвилини, а <br>⠀ кількість щоденних переглядів відео сягнула 5 млрд.</p>
            <a href="https://www.youtube.com"><div class="logo4"><img src="photos/youtubelogo.png" width="50px" class="logo4" alt=""></div></a>
            <a href="https://support.google.com/youtube/answer/9288567?hl=ru"><div class="znak4"><img src="photos/znak.png" width="50px" class="znak3" alt=""></div></a>
            <a href="https://uk.wikipedia.org/wiki/YouTube"><div class="wiki4"><img src="photos/wiki.png" width="50px" class="wiki4 o" alt=""></div></a>
        </div>
      </div>


      <footer> <br><br><br>
        <center><h3>Про право на авторство</h3></center>
        <center><b> Автор не претендує на авторські права інформації. <br> Джерела вказані на окремій сторінці і поряд з розповідямипро латформи. Мета сайту пізнавча, націлена <br> на теоретичне ознайомлення читача. Посилання на  платформи також взакані праворуч від тексту<br><u>  <a href="#navigation"> у логотипах</u></a>.</b></center><br><br><br>
      </footer>

      <script src="js/bootstrap.min.js"></script>
</body>
</html>