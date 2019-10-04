<!DOCTYPE html>
<html>
<head>
	<title>Halaman WaliKelas </title>
  <link rel="icon" type="image/png" href="tc.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
body {
  font-family: "Lato", sans-serif;
  background: #aca5ac;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #8c878c;
  overflow-x: hidden;
  padding-top: 25px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-family: arial,sans-serif,helvetica;
  font-size: 20px;
  color: #f8ff00;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-bottom: 10px;
}

.dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-family: arial,sans-serif,helvetica;
  font-size: 20px;
  color: #f8ff00;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-bottom: 10px;
  transition:0.5s;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  opacity:0.5;
}

/* Main content */  
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  text-align: center;
  background: #8c878c;
  padding: 10px 5px 30px 20px;
  margin-top: -20px;
  border-right: 20px solid #fbff78;
  border-left: 20px solid #fbff78;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: lightgreen;
  padding-left: 8px;
}


/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 20px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 10px 6px;
  margin-right: 170px;
  float: right;
  width: 200px;
  text-align: center;

}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>


<div class="sidenav">
  <button class="dropdown-btn"> Leger
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="logininput.php">X RPL</a>
    <a href="logininput.php">X AKL</a>
    <a href="logininput.php">X OTKP</a> 
    <hr color=#4cd137 width=195px>
    <a href="logininput.php">XI RPL</a>
    <a href="logininput.php">XI AKL</a>
    <a href="logininput.php">XI OTKP</a>
  </div>
  
  <button class="dropdown-btn">Lihat Nilai
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="liatxrpl.php">X RPL</a>
    <a href="liatxakl.php">X AKL</a>
    <a href="liatxotkp.php">X OTKP</a> 
    <hr color=#4cd137 width=195px>
    <a href="liatxirpl.php">XI RPL</a>
    <a href="liatxiakl.php">XI AKL</a>
    <a href="liatxiotkp.php">XI OTKP</a>
  </div>
  <button class="dropdown-btn">Print Nilai
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="loginupdate.php">X RPL</a>
    <a href="loginupdate.php">X AKL</a>
    <a href="loginupdate.php">X OTKP</a>
    <hr color=#4cd137 width=195px>   
    <a href="loginupdate.php">XI RPL</a>
    <a href="loginupdate.php">XI AKL</a>
    <a href="loginupdate.php">XI OTKP</a>
  </div>
    <a href=logout.php>Log Out</a>
</div>

<div class="main">
    <h2><p><span class="blink">Welcome To Halaman WaliKelas<span></p></h2>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="tc.png" alt="Guru asuuu" width="600" height="400">
    <div class="desc">Guru-guru disini adalah guru pilihan yang handal dalam melaksanakan tugas jangan diragukan</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="tc.png" alt="Northern Lights" width="600" height="400">
    <div class="desc">Dan juga ada banyak kegiatan yang berbau dengan menolong sesama mahluk hidup</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="tc.png" alt="Mountains" width="600" height="400">
    <div class="desc">lebih dari 1000 perusahaan telah bergabung dengan tzu chi indonesia</div>
  </div>
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
<style>
.blink{
  -webkit-animation: blink. 75s linear infinite;
  -moz-animation: blink. 75s linear infinite;
  -ms-animation: blink. 75s linear infinite;
  -o-animation: blink. 75s linear infinite;
  animation: blink .75s linear infinite;
  color: #f8ff00;
  font-weight: bold;
}
@-webkit-keyframes-blink {
  0% { opacity:1 ;}
  50% { opacity:1 ;}
  50.01% { opacity:0 ;}
  100% { opacity:0 ;}
} 
@-moz-keyframes-blink {
  0% { opacity:1 ;}
  50% { opacity:1 ;}
  50.01% { opacity:0 ;}
  100% { opacity:0 ;}
} 
@-ms-keyframes-blink {
  0% { opacity:1 ;}
  50% { opacity:1 ;}
  50.01% { opacity:0 ;}
  100% { opacity:0 ;}
} 
@-o-keyframes-blink {
  0% { opacity:1 ;}
  50% { opacity:1 ;}
  50.01% { opacity:0 ;}
  100% { opacity:0 ;}
} 
@keyframes-blink {
  0% { opacity:1 ;}
  50% { opacity:1 ;}
  50.01% { opacity:0 ;}
  100% { opacity:0 ;}
} 
.main {
  font-weight: bold;
  height:150px;
  border-radius:15px;
}
</style>
</html> 