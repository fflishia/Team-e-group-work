<?php
$servername = "localhost";
$username = "root";
$password = "cmm004_login";

//Create connection
$conn = new mysqli("localhost","root","","cmm004_login");

// Check connection
if ($conn->connect_error) {
  die("connection failed:" . $conn->connect_error);
}
echo "connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/unsemantic-grid-responsive-tablet.css">
</head>
<body>
   <!--START OF HEADER-->
   <header>
    <div class="topheader">
    <img id="rgu_logo" src="assets/images/rgulib.png" alt="Robert Gordon University">

        <div class="dropdowne">
        <button onclick="myFunction()" class="dropbtn">StudentNumber</button>
        <div id="myDropdown" class="dropdown-content">
          <a href="#">Profile</a>
          <a href="#">Logout</a>
          <a href="#">Settings</a>
        </div>
      </div>
    </div>

    
       
    
    <nav>
        <div class="bg-img">
        <div class="navbar">
            <a href="#">A-Z Search</a>
            <a href="file:///C:/Users/mojis/Desktop/CMM004/GROUP-E-004/CMM004%20Homepage/index.html">Home</a>
            
            
            </div>

           

    </nav>
</header>
<!--END OF HEADER-->
<!--START OF MAIN-->
<main>
<div id='wrapper'>
  <div class='box'>
    A
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    B
    <p>Biology</p>
    <p>Biographs</p>
    <p>Biopsy</p>
  </div>
  <div class='box'>
    
    C
    <p>Cats</p>
    <p>Casting</p>
    <p>Cargo</p>
  </div>
  <div class='box'>
    
    D
    <p>Digits</p>
    <p>Datasets</p>
    <p>Drama</p>
  </div>
  <div class='box'>
    
    E
    <p>Empathy</p>
    <p>Encomium</p>
    <p>Entertainment</p>
  </div>
  <div class='box'>
    
    F
    <p>Fundings</p>
    <p>Funerals</p>
    <p>Functions</p>
  </div>
  <div class='box'>
  
    G
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    H
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    I
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    J
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    K
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    L
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
  
    M
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    N
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    O
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    P
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    Q
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    R
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
  
    S
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    T
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    U
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    V
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    W
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    X
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
  
    Y
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
  <div class='box'>
    
    Z
    <p>Andrew</p>
    <p>Andrew</p>
    <p>Andrew</p>
  </div>
 
</div>

</main>
<!--END OF MAIN-->

<!--START OF FOOTER-->
<div>
<footer>
   <p>(c) 2022 Group E</p>

</footer>
</div>
<!--END OF FOOTER-->
    
</body>
</html>