<?php
include("connection.php");
?>
<?php
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admin WHERE username='$username' && password='$password'"; 
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
   if($total==1)
    {
        $_SESSION['username']=$username;
        header('location:data.php');
    }
    else
    {
        echo "Invalid username / Password";
    }
}
?>
<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="script.js" defer></script>
    </head>
    <style>
        body{
    margin:0;
    padding:0;
    font-family: neo;
    background-color: white;
   
}

@font-face{
    src: url("fonts/neo.ttf");
    font-family: neo;
    
}


.outline{
    background-color: #E24E42;
    padding-top: 30px;
    padding-bottom: 30px;
}
.outline h1{
    color: white;
}

.navbar {
    display: flex;
    position: relative;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    color: white;
}

.brand-title {
    font-size: 1.5rem;
    margin: .5rem;
}

.navbar-links {
    height: 100%;
}

.navbar-links ul {
    display: flex;
    margin: 0;
    padding: 0;
    background-color: #333;
}

.navbar-links li {
    list-style: none;
}

.navbar-links li a {
    display: block;
    text-decoration: none;
    color: white;
    padding: 1rem;
}

.navbar-links li:hover {
    background-color: #555;
}

.toggle-button {
    position: absolute;
    top: .75rem;
    right: 1rem;
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
}

.toggle-button .bar {
    height: 3px;
    width: 100%;
    background-color: white;
    border-radius: 10px;
}

@media (max-width: 1600px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .toggle-button {
        display: flex;
    }

    .navbar-links {
        display: none;
        width: 100%;
    }

    .navbar-links ul {
        width: 100%;
        flex-direction: column;
        
    }

    .navbar-links ul li {
        text-align: left;
    }

    .navbar-links ul li a {
        padding: .5rem 1rem;
       
    }

    .navbar-links.active {
        display: flex;
    }
}

  h1{
      text-align: center;
      color: black;
      font-family: neo;
      font-weight: bolder;
      font-size: 70px;
  }
  
  .container{
      padding: 50px 50px 50px 0px;
      
  }
  .box1{
      padding-left: 300px;
      padding-right: 300px;
      text-align: left;
      float: left;
  }
  .box1 h1{
      text-align: left;
      font-size: 25px;
  }
  
  @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');


body{
  background: #DFDCE3;
  
}
.wrapper{
  max-width: 500px;
  width: 100%;
  background-color:white;
  margin: 50px auto;
  box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
  padding: 30px;
  font-family: 'Montserrat', sans-serif;
  
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: black;
  text-align: center;
}

.wrapper .form{
  width: 100%;
}

.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label{
   width: 200px;
   color: black;
   margin-right: 10px;
  font-size: 14px;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 100%;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before{
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #d5dbd9 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select{
  -webkit-appearance: none;
  -moz-appearance:   none;
  appearance:        none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #d5dbd9;
  border-radius: 3px;
}


.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus{
  border: 1px solid #fec107;
}

.wrapper .form .inputfield p{
   font-size: 14px;
   color: #757575;
}
.wrapper .form .inputfield .check{
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
}
.wrapper .form .inputfield .check input[type="checkbox"]{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.wrapper .form .inputfield .check .checkmark{
  width: 15px;
  height: 15px;
  border: 1px solid #fec107;
  display: block;
  position: relative;
}
.wrapper .form .inputfield .check .checkmark:before{
  content: "";
  position: absolute;
  top: 1px;
  left: 2px;
  width: 5px;
  height: 2px;
  border: 2px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
  display: none;
}
.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark{
  background: #fec107;
}

.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark:before{
  display: block;
}

.wrapper .form .inputfield .btn{
  width: 100%;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background:  #E24E42;
  color: white;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper .form .inputfield .btn:hover{
  background: #DFDCE3;
  color: black;
}

.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}

@media (max-width:420px) {
  .wrapper .form .inputfield{
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label{
    margin-bottom: 5px;
  }
  .wrapper .form .inputfield.terms{
    flex-direction: row;
  }
}
  
  
  
    </style>
    <body>
        
         
        
        <nav class="navbar">
        <div class="brand-title">Smile</div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="helpline.html">Emergency helpline numbers</a></li>
                <li><a href="faqs.html">How do we work</a></li>
                <li><a href="challenge.html">15 Days Mental Health challenge</a></li>
                <li><a href="counselor.html">Consult to our Counsellor</a></li>
                <li><a href="boost.html">Boost your mental health</a></li>
                <li><a href="chatbot.html">Chat with us</a></li>
                <li><a href="login.php">Admin login</a></li>
          </ul>
        </div>
        </nav> 
        </div>
        <div class="outline">
        <h1>Admin login</h1>
        </div>
       
        <div class="wrapper">
    
    <div class="form">
	<form action="" method="post">
       <div class="inputfield">
          <label> Username</label>
          <input type="text" class="input" name="username" >
       </div>  
        <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="password" >
       </div>         
      <div class="inputfield">
        <input type="submit" name="submit" value="login" class="btn">
      </div>
    </div>
</div>
</form>       
               
    <br>
    <br>
    </body>	
</html>