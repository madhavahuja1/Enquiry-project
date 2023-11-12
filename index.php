<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GEU(graphicera)</title>
  <link rel="stylesheet" href="./css/style.php">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <style>
    .loginBtn {
      padding: 10px;
      border: 2px solid;
    }

    footer {
      background-color: #333333;
      color: #ffffff;
      padding: 30px 0;
    }

    .container {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .footer-left {
      flex-basis: 60%;
    }

    .footer-left h3 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .footer-left p {
      font-size: 14px;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    .footer-right {
      flex-basis: 40%;
      display: flex;
      justify-content: flex-end;
      align-items: flex-start;
    }

    .footer-right h3 {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .footer-right ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .footer-right li {
      font-size: 14px;
      line-height: 1.6;
      margin-bottom: 10px;
    }

    .footer-right li i {
      margin-right: 10px;
    }

    .footer-bottom {
      background-color: #222222;
      padding: 10px 0;
      text-align: center;
    }

    .footer-bottom p {
      font-size: 12px;
      margin: 0;
    }

    /* Animation styles */
    .footer-left h3,
    .footer-left p,
    .footer-right h3,
    .footer-right li {
      opacity: 0;
      transform: translateY(20px);
      animation-name: fade-in;
      animation-duration: 1s;
      animation-fill-mode: forwards;
    }

    @keyframes fade-in {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .footer-right li {
      position: relative;
      cursor: pointer;
      transition: transform 0.3s;
    }

    .footer-right li:hover {
      transform: translateX(5px);
    }
  </style>
</head>

<body>

  <header class='header'>
    <video id="myVideo" muted loop autoplay>
      <source src="./img/graphic.mp4" type="video/mp4">

    </video>
    <nav class='navbar content'>
      <div id="headerhai">
        <div class="top">
          <a href="./index.php"><i class="fa-solid fa-house"></i>|GEU Dehradun</a>
          <a href="./about.php">| About</a>
        </div>

        <div class="navlinks">

          <a class="login" href="./login.php" target="_vipul">Login</a>

          <a href="./Apply.php" target="_madhav">Enquery <i
                class="fa-solid fa-arrow-right"></i>
           
          </a>
        </div>
      </div>
      <div class="middle">

        <div id="logo">
          <strong> ग्राफ़िक एरा विश्वविद्यालय (जीईयू)</strong>

          <img src="./img/logo.jpg" alt=logo width="60" height="40"> <strong>Graphic Era
            university(GEU)</strong>
        </div>
      </div>


      <div class="navbar_1">
        <a href="index.php">Faculty</a>
        <a href="student.php">Students</a>
        <div class="dropdown">
          <button class="dropbtn">ACADEMICS
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="UG.php" target="_vipul">UG</a>
            <a href="PG.php">PG</a>
            <a href="PHD.php">PHD</a>
            <a href="FRESHER.php">WELCOME FRESHER</a>




          </div>
        </div>
        <div class="navbar_2">
          <div class="dropdown">
            <button class="dropbtn">ADMISSION
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="Apply.php" target="_madhav">ApplyNow</a>
              <a href="scholar.php" target="_madhav">Scholarship</a>
            </div>
          </div>
        </div>
      </div>


    </nav>

  </header>

  </div>
  </div>
  </div>

  </div>
  </div>

</html>