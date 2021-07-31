<!DOCTYPE html>

<head><link rel='icon' href='Pictures/9.png' />
<body bgcolor="#191D1E">
<body background="Pictures/5.jpg">


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
<style>
.container {
    position: relative;
    text-align: center;
    color: white;
}

.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}


.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}

.top-right {
    position: absolute;
    top: 8px;
    right: 16px;
}

.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>
<style>
.mySlides {display:none;}
</style>
<body>


<div class="w3-content w3-section" style="max-width:1366px,max-height:768px">
<div class="container">
  <img class="mySlides" src="Pictures/1.jpg" style="width:100%">
  <img class="mySlides" src="Pictures/2.jpg" style="width:100%">
  <img class="mySlides" src="Pictures/3.jpg" style="width:100%">

</div>


</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); 
}
</script>

</body>
</html>

<html>






<div class="slider_bg">
	<div class="container">
	<h1>Popular Questions</h1>
		<div id="da-slider" class="da-slider text-center">
			<div class="da-slide">
			
				<div class="container">
   
  

<div style="padding-left:16px">
					<img src="Pictures/x.jpg" style="width:500px;height:500px;">
  <h1>Spot Heart Attack, Stroke, and Angina Symptoms</h1>
				<p>Tightness in your chest, shortness of breath, feeling confused -- these could be warning signs of a heart attack, stroke, or angina. “If you’re experiencing symptoms that you’ve never had before, such as significant discomfort, then absolutely come into the emergency room and get it evaluated,” says Shikhar Saxena, MD, a cardiologist who teaches at the University of Nebraska Medical Center. Sure, no one likes to go to the ER, says Richard A. Stein, MD, a cardiologist with New York University Langone Medical Center.

But he suggests you call 911 if you have chest pain that:</p>
				  <a href="Heart.html">
  <img src="Pictures/9.jpg" style="width:150px;height:38px;">
</a>
</div>
			</div>
			<div class="da-slide">
											<img src="Pictures/z.jpg" style="width:500px;height:500px;">
				<h1>Chronic kidney disease</h1>
				<p>Chronic kidney disease, also called chronic kidney failure, describes the gradual loss of kidney function. Your kidneys filter wastes and excess fluids from your blood, which are then excreted in your urine. When chronic kidney disease reaches an advanced stage, dangerous levels of fluid, electrolytes and wastes can build up in your body.

In the early stages of chronic kidney disease, you may have few signs or symptoms. Chronic kidney disease may not become apparent until your kidney function is significantly impaired.

Treatment for chronic kidney disease focuses on slowing the progression of the kidney damage, usually by controlling the underlying cause. Chronic kidney disease can progress to end-stage kidney failure, which is fatal without artificial filtering (dialysis) or a kidney transplant.</p><div class="topnav1">
  <a href="Kedney.html">
  <img src="Pictures/9.jpg" style="width:150px;height:38px;">
</a>
			</div>
			<div class="da-slide">
								<img src="Pictures/y.png" style="width:500px;height:500px;">

<h1>Lung Diseases</h1>
				<p>Lung Diseases Affecting the Airways
Lung Diseases Affecting the Air Sacs (Alveoli)
Lung Diseases Affecting the Interstitium
Lung Diseases Affecting Blood Vessels
Lung Diseases Affecting the Pleura
Lung Diseases Affecting the Chest Wall
 

Lung diseases are some of the most common medical conditions in the world. Tens of millions of people suffer from lung disease in the U.S. Smoking, infections, and genetics are responsible for most lung diseases.

The lungs are part of a complex apparatus, expanding and relaxing thousands of times each day to bring in oxygen and expel carbon dioxide. Lung disease can result from problems in any part of this system.</p><div class="topnav1">
  <a href="Lung.html">
  <img src="Pictures/9.jpg" style="width:150px;height:38px;">
</a>
			</div>
			
	</div>
</div>

<div class="footer_bg">
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved | Design by&nbsp;<i>Tasnim Shahriar</i> </span></p>
			</div>
		</div>
	</div>

