<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="doctor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header id="head">
        <a href="#" id="logo"><i class=" fas fa-heartbeat"></i>       Medo</a>
        <nav>

            <a href="index.php"> Home</a>
            <a href="service.php"> services</a>
            <a href="managment.php"> Management</a>
            <a href="doctors.php"> Doctors</a>
            <a href="book.php"> Boking</a>
    
        </nav>
    </header>
    <section id="main">
        <div id="">
       <div id="box1">
        <h1>Our Team</h1>
        <img src="./img/doct1.jpg" alt="">
        <button class="btn" id="btn1" onclick="move()">Appoint</button>

       </div>
       <div id="box2">
        <h1>Gynecologist</h1>
        <img src="./img/doc2.jpg" alt="">
        <button class="btn" onclick="move()">Appoint</button>

       </div>
       <div id="box3">
        <h1>Neurologist</h1>
        <img src="./img/doc3.jpg" alt="">
        <button class="btn" onclick="move()">Appoint</button>

       </div>
       <div id="box4">
        <h1>Cardiologist</h1>
        <img class="img" src="./img/doc4.jpg" alt="">
        <div id="appoint">
        <div class="middle"><button class="btn" onclick="move()">Appoint</button>
        </div>
    </div>

       </div>
       <div id="box5">
        <h1>orthopedist</h1>
        <img src="./img/doc5.jpg" alt="">
        <button class="btn" onclick="move()">Appoint</button>

       </div>
       <div id="box6">
        <h1>physician</h1>
        <img src="./img/doc6.jpg" alt="">
        <button class="btn" onclick="move()">Appoint</button>

       </div>
    </div>
    </section>
</body>
<script src="script.js"></script>
<script src="ambulance.js"></script>
</html>