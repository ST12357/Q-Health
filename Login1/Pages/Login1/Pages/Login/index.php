<?php

require('db.php');
include("auth.php"); ?>
<!DOCTYPE html>
<!DOCTYPE html>

<head><link rel='icon' href='Pictures/9.png' />
<body bgcolor="#191D1E">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #3B3B3B;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #red;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float:right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: ;
  padding: 6px;
  margin-top: 0px;
  margin-right: 0px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>




<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #191D1E;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: black;
}
</style>
</head>
<body>

<ul>

<a href="Home.html">
  <img src="Pictures/Screenshot (241).png" style="width:91px;height:46px;">
</a>


        <li><a href="About.html">About</a></li>
  				<li><a href="Login1/logout.php">Log Out</a></li>

        <li><a href="Home.html">Home</a></li>


</ul>


<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

.navbar {
    overflow: hidden;
    background-color: #3B3B3B;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: black;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content .header {
    background: red;
    padding: 16px;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    background-color: #ccc;
    height: 250px;
}

.column a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.column a:hover {
    background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
        height: auto;
    }
}

</style>


<div class="navbar">
 <a href="Home.html">
  <img src="Pictures/Screenshot (240).png" style="width:100px;height:22px;">
</a>
<div class="dropdown">
    <button class="dropbtn">Experts
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">  
      <div class="row">
        <div class="column">
          <h3>Heart</h3>
          <a href="Profile.html">Dr.John</a>
          <a href="#">Dr.Stacy</a>
          <a href="#">Dr.Laura</a>
        </div>
        <div class="column">
          <h3>Kidney</h3>
          <a href="#">Dr.Jonathon</a>
          <a href="#">Dr.Kimberley</a>
          <a href="#">Dr.Bert</a>
        </div>
        <div class="column">
          <h3>Lungs</h3>
          <a href="#">Dr.William</a>
          <a href="#">Dr.Willson</a>
          <a href="#">Dr.Willbert</a>
        </div>
      </div>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Topics 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">   
      <div class="row">
        <div class="column">
          <h3>Heart</h3>
          <a href="Heart.html">Heart Attack</a>
          <a href="#">Topic 2</a>
          <a href="#">Topic 3</a>
        </div>
        <div class="column">
          <h3>Kedney</h3>
          <a href="Kedney.html">Diseases</a>
          <a href="#">Topic 2</a>
          <a href="#">Topic 3</a>
        </div>
        <div class="column">
          <h3>Lungs</h3>
          <a href="Lung.html">Diseases</a>
          <a href="#">Topic 2</a>
          <a href="#">Topic 3</a>
        </div>
      </div>
    </div>
  </div> 
  

    <a href="Login1/index.php">Profile</a>
  
  <div class="topnav">

  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="How Can We Help You?" name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>


</div>




</body>
</html>

<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #;
}
</style>
</head>
<body>



<table>
  <tr>
    <th><font color="#ffffff">Attribute Name</font></th>
    <th><font color="#ffffff">Value</font></th>
  </tr>
  <tr>
    <td><font color="#ffffff">Username</font></td>
    <td><p><font color="#ffffff"><?php echo $_SESSION['username']; ?></font></p></td>
  </tr>
  <tr>
    <td><font color="#ffffff">Email</font></td>
    <td><p><font color="#ffffff"> shahriartasnim12357@gmail.com </font></p></td>
  </tr>
</table>

</div>
</body>
</html>



