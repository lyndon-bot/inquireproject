<?php  session_start();?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Your Resume</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" href="css/progressbar.css" type="text/css" />
  <link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
  <link rel="shortcut icon" type="image/x-icon" href="../Style/IMG/Button/i_ambutton2.png" />
</head>

<body>
    <div id="container">
      <div id="header" >
        <ul>
          <li><a href="#">Portfolio</a></li>

          <li><a href="#">Contact</a></li>
        </ul><a href="#" class="social_contact">facebook</a> <a href="#" class=
        "social_contact">twitter</a>
      </div>

      <div class="section sectiontop">
        <img src="img/profilepicture2.png" id="profilepicture" width="110" height="110"
        alt="profile_picture" />

        <h1><?php echo $_SESSION['fname'] . " " .  $_SESSION['lname']; ?></h1>

        <h2>webdesigner</h2>

        <ul>
          <li><span>E-mail:</span> <a href="#"><?php echo $_SESSION['email'] ?></a></li>

          <li><span>Website:</span> <a href="#">johnnewman.com</a></li>

          <li><span>Phone:</span> (123) 456-7890</li>

          <li><span>Address:</span> 32 Your Street, City, Country</li>
        </ul>
      </div>

      <div class="section personal">
        <div class="left">
          <h3>Personal &amp; Professional Informations</h3>
        </div>

        <div class="right">
          <p contenteditable="true">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a pulvinar
          tellus. Donec laoreet posuere felis, sit amet convallis urna porta in. Praesent
          consectetur metus ac purus imperdiet in aliquam purus viverra. Praesent purus
          mi, mattis id ultricies id, porta condimentum dolor.</p>

          <p contenteditable="true">Suspendisse a nulla vitae orci dictum facilisis. Donec sem purus, tristique
          eget consectetur malesuada, pharetra nec erat. Aenean ac justo diam.</p>
        </div>
      </div>

      <div class="section gallery">
        <div class="left">
          <h3>Porfolio</h3>

          <p>For me the photography is not just a hobby, this is a passion.</p>
        </div>

        <div class="right gallery">
          <a href="#"><img src="img/pic.png" width="90" height="90" alt="image" /></a>
          <a href="#"><img src="img/pic.png" width="90" height="90" alt="image" /></a>
          <a href="#"><img src="img/pic.png" width="90" height="90" alt="image" /></a>
          <a href="#"><img src="img/pic.png" width="90" height="90" alt="image" /></a>
          <a href="#"><img src="img/pic.png" width="90" height="90" alt="image" /></a>
          <a href="#"><img src="img/pic.png" width="90" height="90" alt="image" /></a>
          <a href="#"><img src="img/pic.png" width="90" height="90" alt="image" /></a>
          <a href="#"><img src="img/pic.png" width="90" height="90" alt="image" /></a>
          <a href="#"><img src="img/pic.png" width="90" height="90" alt="image" /></a>
        </div>
      </div>

      <div class="section education">
        <div class="left">
          <h3>Education</h3>

          <p contenteditable="true" >Nullam a pulvinar tellus. Donec laoreet posuere felis, sit amet convallis
          urna porta in.</p>
        </div>

        <div class="right">
          <div class="row selection_education">
            <h4 contenteditable="true">Stanford University</h4>

            <h5 contenteditable="true">Graphich Designer</h5>

            <p contenteditable="true">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a pulvinar
            tellus. Donec laoreet posuere felis, sit amet convallis urna porta
            in.</p><a href="#">2008-2012</a>
          </div>

          <div class="row">
            <h4 contenteditable="true">Boston High School</h4>

            <h5 contenteditable="true">Graphich</h5>

            <p contenteditable="true">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a pulvinar
            tellus. Donec laoreet posuere felis, sit amet convallis urna porta
            in.</p><a href="#">2004-2008</a>
          </div>
        </div>
      </div>

      <div class="section technical">
        <div class="left">
          <h3 contenteditable="true">Technikal Skills</h3>
        </div>

        <div class="right">
          <div class="right_right">
            <h4 contenteditable="true">Adobe Photoshop</h4>
                <div class="progress-bar green">
                    <span style="width: 90%"></span>
                </div>
                <h4 contenteditable="true">HTML/CSS</h4>
                <div class="progress-bar orange">
                    <span style="width: 80%"></span>
                </div>
                <h4 contenteditable="true">PHP</h4>
                <div class="progress-bar orange">
                    <span style="width: 60%"></span>
                </div>
                <h4 contenteditable="true">Javascript</h4>
                <div class="progress-bar red">
                    <span style="width: 40%"></span>
                </div>
          </div>

          <div class="right_left">
            <p contenteditable="true"><span>Aenean venenatis convallis diam eget sagittis. Donec iaculis felis a
            est ultrices dapibus.</span></p>

            <p contenteditable="true">Sed cursus quam ac nibh convallis vitae faucibus quam condimentum. Nulla
            elementum ultrices fermentum. Nulla non dolor odio, quis dictum dui. Aenean
            venenatis convallis diam eget sagittis. Donec iaculis felis a est ultrices
            dapibus.</p>
          </div>
        </div>
      </div>

      <div class="section contact">
        <div class="left">
          <h3>Contact</h3>

          <p>Suspendisse a nulla vitae orci dictum facilisis.</p>
        </div>

        <div class="right">
          <form class="form" action="#">
            <p class="name"><input type="text" name="name" id="name" value="Name" /></p>

            <p class="email"><input type="text" name="email" id="email" value="E-mail" /></p>

            <p class="text">
            <textarea name="text" rows="" cols="">Text
</textarea></p>

            <p class="submit"><input type="submit" value="Send" /></p>
          </form>

          <p class="contact_text">Sed cursus quam ac nibh convallis vitae faucibus quam
          condimentum. Nulla elementum ultrices fermentum. Nulla non dolor odio, quis
          dictum dui. Aenean venenatis convallis diam eget sagittis. Donec iaculis felis
          a est ultrices dapibus.</p>

          <div id="contact_icons">
            <a href="#" class="social_contact">facebook</a> <a href="#" class=
            "social_contact">twitter</a> <a href="#" class="social_contact">deviantArt</a> <a href="#"
            class="social_contact">Google+</a>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
