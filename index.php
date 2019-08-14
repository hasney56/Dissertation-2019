<?php session_start(); ?>
<!DOCTYPE html>
<html>
<header>
<body background="grey.jpg">
<ul>
<li><a href= "findaboutFilms.php" >Browse Films</a></li>
<li><a href= "../public/findstars.php" >Browse Stars</a></li>
<li><a href= "../public/chatrooms.php" >Chatrooms</a></li>
<li><a href= "../public/addReview.php" >Add Basic Review</a></li>
<li><a href= "../public/videorev.php" >Add Video Review</a></li>
<li><a href= "../public/viewReviews.php" >View Basic Reviews</a></li>
<li><a href= "../public/viewvideos.php" >View Video Reviews</a></li>
<li><a href= "../public/registeracc.php" >Register</a></li>
</ul>
</div>
<div>
<a style ="background-color: transparent;float:right" href="login.php">
  <img src="log.png" style="width:60px;height:60px;border:0;float:right">
</a>
</div>
  <?php
$host = "elephant.ecs.westminster.ac.uk";
$user = "w1594245";
$password = "Myjy8rw5NGSG";
$database = "w1594245_0";
include ("detectlogin.php");

$connection = new mysqli($host, $user, $password, $database);
if ($connection->connect_error)
	die("Database connection failed" .mysqli_connect_error().mysqli_connect_errno());
    ?>
  <br>
    <br>
	<br>
<form id="frmSearch" class="search2" method="get" action="default.html" />
<input class="search2" id="txtSearch" type="text" name="serach_bar" size="31" maxlength="255"       
value="" style="left: 396px; top: 153px; width: 293px; height: 26px;" />
<input class="search1" type="submit" name="submition" value="Search" style=" padding-  
bottom:20px; left: 691px; top: 153px; height: 23px" />
<input class="search2" type="hidden" name="sitesearch" value="default.html" />
</form>
</p>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
	display: inline;
	width: 2000px;
}

li {
    float: left;
    border-right:1px solid #bbb;
	text-align: center;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	
}

li a:hover:not(.active) {
    background-color: green;
}

	header {
  background-color: 	#6495ED;
  padding: 0px;
  text-align: center;
  font-size: 15px;
  color: red;
}

body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.header {
color: red;
}

#div {
	width: 300px;
  border: 25px solid green;
  padding: 25px;
  margin: 25px;
}
</style>
<br>
<hr>
<p><big><big><big><big><center><h1><font color="red">CinemaMania</h1></center></big></big></big></big></p></font>
</header>
<link rel="stylesheet" a href="styles.css">
<body>
<body bgcolor="#DCDCDC">
<center>
<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="vice.png" width="315" height="350">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="darkn.jpg" width="315" height="350">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="asib.png" width="315" height="350">
  </div>
  
    <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="veno.jpg" width="315" height="350">
  </div>
  
  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="aqp.png" width="315" height="350">
  </div>
  
    <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="glass.png" width="315" height="350">
  </div>

    
  <a class="prev" onclick="plusSlides(-1)" style="position:absolute;left:-10px;">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container" style=" width: 20%;">
    <p id="caption"></p>
  </div>
<br>
</center>
  <div class="row">
    <div class="column">
	<center>
      <img class="demo cursor" src="vice.png" style="width:55%" onclick="currentSlide(1)" alt="Underwhelming">
    </div>
    <div class="column">
      <img class="demo cursor" src="darkn.jpg" style="width:54%" onclick="currentSlide(2)" alt="Masterpiece">
    </div>
    <div class="column">
      <img class="demo cursor" src="asib.png" style="width:57%" onclick="currentSlide(3)" alt="Masterpiece">
    </div>
	 <div class="column">
      <img class="demo cursor" src="veno.jpg" style="width:58%" onclick="currentSlide(4)" alt="Good">
    </div>
	 <div class="column">
      <img class="demo cursor" src="aqp.png" style="width:58%" onclick="currentSlide(5)" alt="Masterpiece">
    </div>
	 <div class="column">
      <img class="demo cursor" src="glass.png" style="width:58%" onclick="currentSlide(6)" alt="Missed Opportunity">
    </div>
    </div>
    </div>
  </div>
</div>
</center>
</center>
<br>
<br>

<p><big><big><big><big><center><h2><font color="blue">Coming soon!</h2></center></big></big></big></big></p></font>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
 
 <script type="text/javascript">
    document.getElementById('frmSearch').onsubmit = function() {
        window.location = 'http://www.google.com/search?q=site:yoursitename.com ' + document.getElementById('txtSearch').value;
        return false;
    }
   }
</script>
<?php
$host = "elephant.ecs.westminster.ac.uk";
$user = "w1594245";
$password = "Myjy8rw5NGSG";
$database = "w1594245_0";

$connection = new mysqli($host, $user, $password, $database);
if ($connection->connect_error)
	die("Database connection failed" .mysqli_connect_error().mysqli_connect_errno());

$SQL="select * from NewMovies";
//Create a new variable containing the execution of the SQL query i.e. select the records or get out
$exeSQL = $connection->query($SQL);
if ($exeSQL->num_rows > 0) {
	//populate it with the records retrieved by the SQL query previously executed. 
	//loop through the array i.e while the end of the array has not been reached go through it
	while ($arrayfilm = $exeSQL->fetch_assoc())
	{
			echo "<div class='imagebox'>";
		echo "<div style='float: left'>";
		echo "<strong></strong> &nbsp; "  .$arrayfilm ['Username'];
echo "<video width='240' height='230' style='padding: 9' hspace='70' type=videos/mp4 controls src=videos/" .$arrayfilm['Trailer'].">"; 
echo "</video>";
echo "<center><a style='background-color: transparent' href=newfilm.php?u_FilmID=".$arrayfilm['FilmID']."></center";
echo "<center><big><strong>".$arrayfilm ['Title']. "</center></strong></big>";
echo "</a>";

echo "<center><big><strong>".$arrayfilm ['ReleaseDate']. "</center></strong></big>";
echo "<br><br>";
echo "<br><br>";
	echo "</div>";
        echo "</form>";
	}
} else {
    echo "0 results";
}
?>
<br>
<br>
</body>
</html>
<br>
<br>
<br>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}
</style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<center><a href="https://www.facebook.com/CinemaMania-612708155861561/?modal=admin_todo_tour" class="fa fa-facebook"></a>
<a href="https://twitter.com/mania_cinema" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/results?search_query=movie+review+channels+" class="fa fa-youtube"></a></center>
<br>
<br>
<a style="color:white" href="contact.php">Contact Us</a>
</body>
</html> 