<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="book.css">
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
    <section>
        <div id="contain"></div>
     
    <div id="contain1">
        <h1>Patient Details...</h1>
        <p>* Please fill the form below and we will get back soon to you.
            A confirmation Email will be sent to you.
        </p>
            <form id="form"  action="slip.php" method="post"  onsubmit="return fsubmit()" >

            <div id="n">
            <h1 id="name">*NAME:</h1>
            <input type="text" name="name" class="i" id="np"onkeyup="return nform()">
            <p id="nerror"></p>
            </div>
        
            <div id="d">
            <h1 id="dob">*DOB:
            <input type="date" name="birth" class="i" id="dp" onkeyup="return dform()"></h1>
            <p id="derror"></p>
            </div>
            
            <div id="e">
            <h1 id="email">*EMAIL:
            <input type="email" name="email" id="ep" class="i" onkeyup="return eform()"></h1>
            <p id="eerror"></p>
            </div>

            <div id="a">
            <h1 id="age">*AGE:
            <input type="number" name="age" class="i" id="ap" onkeyup="return aform()"></h1>
            <p id="aerror"></p>
            </div>

            <div id="c">
            <h1 id="contact">*CONTACT:
            <input type="TEXT" name="contact" id="con" class="i" onkeyup="return cform()"></h1>
            <p id="cerror"></p>
            </div>

            <div id="g">
            <h1 id="gender">*GENDER:
            <input type="TEXT" name="gender" class="i" id="gp" onkeyup="return gform()"></h1>
            <p id="gerror"></p>
            </div>
            <div id="ad">
            <h1 id="add">*ADDRESS:
            <input type="text" name="address" class="i" id="adp" onkeyup="return adform()"></h1>
            <p id="aderror"></p>
            </div>

            <div id="pqr">
                <p>*for booking pay 99₹ only</p>
            <input class="btn1" type="submit" name="book" value="submit" >
            <!-- <input class="btn1" type="submit" name="PAY" value="PAY"> -->

            </div>
        </form>
    </div>    
</section>
 <?php
    
   
?> 
</body>
<script src="book.js"></script>
</html>