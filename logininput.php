<html>
<head>
 <title>Login Sederhana Dengan MySqli</title>
</head>
<body>  
  <form class="box" action="cek_logininput.php" method="post">
    <img src="tc.png" class=gambar>
<h1>Log-In</h1>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>

 </form>

</div>

</body>
</html>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 <style>
   .gambar{
     width:350px;
     height:200px;
     transform: translate(-50%,55%);

   }
body{
  margin: 0;
  padding: 0;
  font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  background: #bebebe;
  background-repeat: no-repeat;
  background-position:center center;
    width: 100% ;
    height: 100%;
    background-size:100%;
}


.box{
  width: 800px;
  height: 450px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #aca5ac;
  text-align: center;
  border-radius:24px;
  
}
.box h1{
  margin-top:-110px;
  margin-left:345px;
  color: #000;
  font-size: 40;
  font-family: Georgia, 'Times New Roman', Times, serif;
  font-weight: bold;
}
.box h2{
  margin-top:60px;
  margin-left:345px;
  color: #000;
  font-size: 20;
  font-family: 'Permanent Marker', cursive;
  font-weight: bold;
}
.box select{
  margin-top:0px;
  margin-left:345px;
  color: #000;
  font-size: 20;
  font-family: 'Permanent Marker', cursive;
  font-weight: bold;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: snow;
  display: block;
  margin: 20px auto;
  margin-left:469px;
  text-align: center;
  border: 2px solid black;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: BLACK;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 200px;
  border-color: #2ecc71;
}
.box input[type = "submit"]{
  border:0;
  background: #b9bc49;
  display: block;
  margin: 20px auto;
  margin-left:469px;
  text-align: center;
  padding: 14px 40px;
  width: 200px;
  outline: none;
  color: #8c878c;
  transition: 0.25s;
  cursor: pointer;
  font-weight:bolder;
}
.box input[type = "submit"]:hover{
  opacity:0.5;
}

.box a{
    border:0;
  background: none;
  display: block;
  margin: 20px auto;
  margin-left:469px;
  text-align: center;
  border: 2px;
  padding: 12px 40px;
  width: 120px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
  text-decoration:none;
}
.box a:hover{
    background: none;
    border: solid black;
    width:113;
    
}
.check{
  transform: translate(2700%,10%);
  margin-right:0px;
}
.label{
  margin-left:350px;
}
  </style>