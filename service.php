<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="service.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="head">
        <a href="#" id="logo"><i class=" fas fa-heartbeat"></i>       Medo</a>
        <nav>

            <a href="index.php"> Home</a>
            <a href="service.php"> services</a>
            <a href="managment.php"> management</a>
            <a href="doctors.php"> Doctors</a>
            <a href="book.php"> Boking</a>
    
        </nav>
    </header>
    <section id="main">
    <div id="">
   <div id="box1">
    <h1>Emrgency Room Service</h1>
    <img src="./img/emer.jpg" alt="">
    <button class="btn" id="btn1" onclick="move()" >BOOK</button>

   </div>
   <div id="box2">
    <h1>Blood Service</h1>
    <img src="./img/blood.gif" alt="">
    <button class="btn" onclick="move()">BOOK</button>

   </div>
   <div id="box3">
    <h1>X-ray/Radiology Service</h1>
    <img src="./img/xray.gif" alt="">
    <button class="btn" onclick="move()">BOOK</button>
   </div>
   <div id="box4">
    <h1>Ambulance Service</h1>
    <img src="./img/ambulanca.gif" alt="">
    <button class="btn" onclick="btn()">BOOK</button>
   </div>
   <div id="box5">
    <h1>surgical Service</h1>
    <img src="./img/surgical.jpg" alt="">
    <button class="btn" onclick="move()">BOOK</button>
   </div>
   <div id="box6">
    <h1>Laboratory Service</h1>
    <img src="./img/lab.jpg" alt="">
    <button class="btn" onclick="move()">BOOK</button>
   </div>
</div>
</section>
</body>
<script src="ambulance.js"></script>
</html>