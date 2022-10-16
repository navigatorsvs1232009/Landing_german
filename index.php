<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<!-- <script src=" /assets/libs/css/bootstrap.min.css" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(  ); ?>  /assets/css/main.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Magra&family=Red+Hat+Text:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
    <header id="header" class="p-3 text-bg-dark">
        <div class="container-md">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <img src="<?php echo get_template_directory_uri(  ); ?>/assets/Logo.png" alt="" height="51">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 navlogo">
              <li><a href="#" class="nav-link px-2 text-white">HOME</a></li>
              <li><a href="#" class="nav-link px-2 text-white">ABOUT US</a></li>
              <li><a href="#" class="nav-link px-2 text-white">SERVICES</a></li>
              <li><a href="#" class="nav-link px-2 text-white">OUR PROJECTS</a></li>
              <li><a href="#" class="nav-link px-2 text-white">OUR TEAM</a></li>
              <li><a href="#" class="nav-link px-2 text-white">HAPPY CLIENTS</a></li>
              <li><a href="#" class="nav-link px-2 text-white">PRICE</a></li>
              <li><a href="#" class="nav-link px-2 text-white">SOME FACTS</a></li>
              <li><a href="#" class="nav-link px-2 text-white">CONTACT US</a></li>
            </ul>
    
            
    
            
          </div>
        </div>
      </header>
    <!-- slider -->
    
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri(  ); ?> /assets/Bg_img_01.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <img id="intro_img1" class="img_header" src=" <?php echo get_template_directory_uri(  ); ?> /assets/Design is about communication.png" alt="">
                <div class="wrap__button">
                <img id="img_header12" class="img_header" src="<?php echo get_template_directory_uri(  ); ?> /assets/call us_ +00 0 1234 5678_.png" alt="">
                <button id="botun" type="button" class="btn btn-primary btn-lg">GET IN TOUCH!</button>
            </div>
            
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(  ); ?> /assets/Bg_img_01.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <img id="intro_img1" class="img_header" src=" <?php echo get_template_directory_uri(  ); ?> /assets/Design is about communication.png" alt="">
                <div class="wrap__button">
                    <img id="img_header12" class="img_header" src="<?php echo get_template_directory_uri(  ); ?> /assets/call us_ +00 0 1234 5678_.png" alt="">
                    <button id="botun" type="button" class="btn btn-primary btn-lg">GET IN TOUCH!</button>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(  ); ?> /assets/Bg_img_01.png" class="d-block w-100" alt="...">
            <div id="intro" class="carousel-caption d-none d-md-block">
                <img id="intro_img1" class="img_header " src=" <?php echo get_template_directory_uri(  ); ?> /assets/Design is about communication.png" alt="">
                <div class="wrap__button">
                    <img id="img_header12" class="img_header" src="<?php echo get_template_directory_uri(  ); ?> /assets/call us_ +00 0 1234 5678_.png" alt="">
                    <button id="botun" type="button" class="btn btn-primary btn-lg">GET IN TOUCH!</button>
                </div>
            </div>
          </div>
        </div>
        
      </div>
    <!-- slider -->
        <!-- Button trigger modal -->
        <a class="scr1" href="#zatemnenie" > <img src="<?php echo get_template_directory_uri(  ); ?> /assets/Button_ Call Me Back.png" alt=""></a>
 
        <div id="zatemnenie">
            <div id="okno">
              Всплывающее окошко!<br>
              <a href="#" class="close">Закрыть окно</a>
            </div>
          </div>
           
 
        
        <!-- Modal -->
        
    <!-- about us -->
    
        <div id="zagolh1h2" class="container-md">
            <h1>ABOUT US</h1>
            <h2>WHO WE ARE?</h2>
        </div> 
        <div class="wrap__about">
            <div class="card w-75">
                <div class="card-body">
                  <p id="text_aboutus" class="card-text">Praesent metus urna, feugiat a placerat vel, elementum at leo. Quisque vel fermentum ipsum.
                     Nulla at facilisis est, vel condimentum ligula. Mauris volutpat vitae risus sed pellentesque.
                      Praesent fermentum neque ac tellus gravida, at varius sem accumsan. Nam porta erat id sapien consectetur. 
                      Fusce sed purus eros. Vivamus rhoncus, ipsum in tempus fermentum, orci leo facilisis purus. Nam porta erat id sapien consectetur.
                     Fusce sed purus eros. Vivamus rhoncus, ipsum in tempus fermentum, orci leo facilisis purus.</p>
                  <a href="#" id="botun" class="btn btn-primary btn-lg">LEARN MORE</a>
                </div>
              </div>
        
    <img id="video" src="<?php echo get_template_directory_uri(  ); ?> /assets/Video.png" alt="">
</div>
    <!-- about us -->

  
<!-- price -->
<div class="wrapprice">
<div id="zagolh1h2" class="container-md">
    <h1>PRICE</h1>
    <h2>PRICING TABLE</h2>
</div> 
<div id="prcard" class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        
        <div class="card-body">
            <h4>EXPRESS</h4>
          <h1 class="card-title pricing-card-title"><ya-tr-span data-index="7-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="$0" data-translation="0 долларов США " data-ch="0" data-type="trSpan">$ 9.99</ya-tr-span><small class="text-muted fw-light fs-5"><ya-tr-span data-index="7-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="/mo" data-translation="/ месяц" data-ch="0" data-type="trSpan"><br>/MONTH</ya-tr-span></small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan">Tracking Issues</ya-tr-span></li>
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
            <li><ya-tr-span data-index="9-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="2 GB of storage" data-translation="2 ГБ памяти" data-ch="0" data-type="trSpan">Add bugs through email</ya-tr-span></li>
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
            <li><ya-tr-span data-index="10-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Email support" data-translation="Поддержка по электронной почте" data-ch="0" data-type="trSpan">Notifications</ya-tr-span></li>
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
            <li><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Help center access" data-translation="Доступ к справочному центру" data-ch="0" data-type="trSpan">Time tracking</ya-tr-span></li>
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
            <li><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Help center access" data-translation="Доступ к справочному центру" data-ch="0" data-type="trSpan">Custom views</ya-tr-span></li>
          </ul>
          <button type="button" id="botunbl" class="btn btn-primary btn-lg">CHOOSE</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
       
        <div class="card-body">
            <h4>STANDART</h4>
          <h1 class="card-title pricing-card-title"><ya-tr-span data-index="14-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="$15" data-translation="15 долларов США " data-ch="0" data-type="trSpan">$ 9.99</ya-tr-span><small class="text-muted fw-light fs-5"><ya-tr-span data-index="14-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="/mo" data-translation="/ месяц" data-ch="0" data-type="trSpan"><br>/MONTH</ya-tr-span></small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan">Tracking Issues</ya-tr-span></li>
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
            <li><ya-tr-span data-index="9-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="2 GB of storage" data-translation="2 ГБ памяти" data-ch="0" data-type="trSpan">Add bugs through email</ya-tr-span></li>
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
            <li><ya-tr-span data-index="10-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Email support" data-translation="Поддержка по электронной почте" data-ch="0" data-type="trSpan">Notifications</ya-tr-span></li>
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
            <li><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Help center access" data-translation="Доступ к справочному центру" data-ch="0" data-type="trSpan">Time tracking</ya-tr-span></li>
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
            <li><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Help center access" data-translation="Доступ к справочному центру" data-ch="0" data-type="trSpan">Custom views</ya-tr-span></li>
          </ul>
          <button type="button" id="botunbl" class="btn btn-primary btn-lg"><ya-tr-span data-index="18-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Get started" data-translation="Начало работы" data-ch="0" data-type="trSpan">CHOOSE</ya-tr-span></button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
       
        <div class="card-body">
            <h4>LUXE</h4>
          <h1 class="card-title pricing-card-title"><ya-tr-span data-index="19-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="$29" data-translation="29 долларов США " data-ch="0" data-type="trSpan">$ 9.99</ya-tr-span><small class="text-muted fw-light fs-5"><ya-tr-span data-index="19-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="/mo" data-translation="/ месяц" data-ch="0" data-type="trSpan"><br>/MONTH</ya-tr-span></small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan">Tracking Issues</ya-tr-span></li>
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
            <li><ya-tr-span data-index="9-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="2 GB of storage" data-translation="2 ГБ памяти" data-ch="0" data-type="trSpan">Add bugs through email</ya-tr-span></li>
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
            <li><ya-tr-span data-index="10-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Email support" data-translation="Поддержка по электронной почте" data-ch="0" data-type="trSpan">Notifications</ya-tr-span></li>
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
            <li><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Help center access" data-translation="Доступ к справочному центру" data-ch="0" data-type="trSpan">Time tracking</ya-tr-span></li>
            <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
            <li><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Help center access" data-translation="Доступ к справочному центру" data-ch="0" data-type="trSpan">Custom views</ya-tr-span></li>
          </ul>
          <button type="button" id="botunbl" class="btn btn-primary btn-lg"><ya-tr-span data-index="23-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Contact us" data-translation="Связаться с нами" data-ch="0" data-type="trSpan">CHOOSE</ya-tr-span></button>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
         
          <div class="card-body">
            <h4>PREMIUM</h4>
            <h1 class="card-title pricing-card-title"><ya-tr-span data-index="14-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="$15" data-translation="15 долларов США " data-ch="0" data-type="trSpan">$ 9.99</ya-tr-span><small class="text-muted fw-light fs-5"><ya-tr-span data-index="14-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="/mo" data-translation="/ месяц" data-ch="0" data-type="trSpan"><br>/MONTH</ya-tr-span></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan">Tracking Issues</ya-tr-span></li>
                <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
                <li><ya-tr-span data-index="9-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="2 GB of storage" data-translation="2 ГБ памяти" data-ch="0" data-type="trSpan">Add bugs through email</ya-tr-span></li>
                <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
                <li><ya-tr-span data-index="10-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Email support" data-translation="Поддержка по электронной почте" data-ch="0" data-type="trSpan">Notifications</ya-tr-span></li>
                <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
                <li><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Help center access" data-translation="Доступ к справочному центру" data-ch="0" data-type="trSpan">Time tracking</ya-tr-span></li>
                <li><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="10 users included" data-translation="В том числе 10 пользователей" data-ch="0" data-type="trSpan"> --- </ya-tr-span></li>
                <li><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Help center access" data-translation="Доступ к справочному центру" data-ch="0" data-type="trSpan">Custom views</ya-tr-span></li>
              </ul>
            <button type="button" id="botun" class="btn btn-primary btn-lg"><ya-tr-span data-index="18-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Get started" data-translation="Начало работы" data-ch="0" data-type="trSpan">CHOOSE</ya-tr-span></button>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
<!-- price -->
<!-- form -->
<div id="zagolh1h2" class="container-md">
    <h1>CONTACT US</h1>
    <h2>OUR AGENCY LOCATED MELBURNE, AUSTRALIA</h2>
</div>
<div class="wrapform">
<div class="row">
    <div class="col">
      <?php echo do_shortcode( '[contact-form-7 id="34" title="Имя"]' ); ?>
    </div>
    <div class="col">
      <?php echo do_shortcode( '[contact-form-7 id="35" title="Фамилия"]' ); ?>
    </div>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label"></label>
    <?php echo do_shortcode( '[contact-form-7 id="36" title="Subject"]' ); ?>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label"></label>
    <?php echo do_shortcode( '[contact-form-7 id="37" title="MESSAGE"]' ); ?>
  </div>
  <button id="botun4" type="button" class="btn btn-primary btn-lg">SEND MESSAGE</button>
</div>
<!-- form -->
<!-- footer -->
<a href="#header" class="scr"> <img src="<?php echo get_template_directory_uri(  ); ?> /assets/Button_ ScrollUp.png" alt=""></a>
<div class="container">
    <footer class="row row-cols-3 py-5 my-5 border-top text-bg-dark">
       
      <div class="col">
        <img src="<?php echo get_template_directory_uri(  ); ?> /assets/Twitter.png" alt="">
        <img src="<?php echo get_template_directory_uri(  ); ?> /assets/Instagram_ Hover.png" alt="">
        <img src="<?php echo get_template_directory_uri(  ); ?> /assets/LinkedIn.png" alt="">
        <img src="<?php echo get_template_directory_uri(  ); ?> /assets/Facebook.png" alt="">
        <img src="<?php echo get_template_directory_uri(  ); ?> /assets/YouTube.png" alt="">
        <img src="<?php echo get_template_directory_uri(  ); ?> /assets/Googleplus.png" alt="">
        <img src="<?php echo get_template_directory_uri(  ); ?> /assets/Other.png" alt="">

      </div>
  
      <div class="col">
        <p>Nulla iaculis enim a magna tempor congue. Sed aliquam dignissim hendrerit. Duis erat nulla, pellentesque at enim in, scelerisque placerat nunc.
            Nulla vestibulum ex sed neque auctor rutrum. Donec fringilla tincidunt aliquet. Nullam rhoncus urna massa, vulputate congue velit pulvinar suscipit.
            Mauris laoreet blandit pharetra. Suspendisse rutrum dolor at augue convallis, eget dapibus nunc consequat. Sed diam nulla, elementum non laoreet eu,vulputate urna, at pellentesque risus orci in ante.</p>
      </div>
  
      <div class="col">
        
      </div>
  
      
  
      
    </footer>
  </div>
<!-- footer -->
<?php wp_footer(); ?>
</body>
</html>