<?php
	session_start();
	if(isset($_SESSION['login_user']))
	{
		header("location: beginnings.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Dukhaan</title>
		<link href="new2.css" rel='stylesheet'>
		<script src="autoScrollTo.js"></script>
	</head>
		
	<body onload="autoScrollTo('div2');" onload="return false;" >
		<br>
		
		
		<img class="cent_disp" src="Seeds.png" width="400" height="492" alt="Seeds">
		
		
		<h1>We Are Seeds</h1>
		<br>
		<br>
		<hr>
		<h2>A game of life. In an atypical world. As the child of light.</h2>
		<hr> 	
		<div id='cssmenu'>
		<ul>
		   <li class='active'><a href='/Agomel/beginning.php'><span>The Beginning</span></a></li>
		   <li><a href='/Agomel/gameplay.php'><span>Gameplay</span></a></li>
		   <li><a href='/Agomel/register.php'><span>Register</span></a></li>
		   <li><a href='/Agomel/login.php'><span>Login</span></a></li>
		   <li><a href='/Agomel/dlclient.php'><span>Download Client</span></a></li>
		   <li><a href='/Agomel/contact.php'><span>Contact</span></a></li>
		</ul>
		</div>	
<ul class="slides">
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
		<div class="slide">
			<img src="/Agomel/monogatari/01.png" />
        </div>
		<div class="nav">
			<label for="img-27" class="prev">&#x2039;</label>
			<label for="img-2" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/02.png" />
        </div>
		<div class="nav">
			<label for="img-1" class="prev">&#x2039;</label>
			<label for="img-3" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <<img src="/Agomel/monogatari/03.png" />
        </div>
		<div class="nav">
			<label for="img-2" class="prev">&#x2039;</label>
			<label for="img-4" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/04.png" />
        </div>
		<div class="nav">
			<label for="img-3" class="prev">&#x2039;</label>
			<label for="img-5" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/05.png" />
        </div>
		<div class="nav">
			<label for="img-4" class="prev">&#x2039;</label>
			<label for="img-6" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-6" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/06.png" />
        </div>
		<div class="nav">
			<label for="img-5" class="prev">&#x2039;</label>
			<label for="img-7" class="next">&#x203a;</label>
		</div>
    </li>
	
	<input type="radio" name="radio-btn" id="img-7" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/07.png" />
        </div>
		<div class="nav">
			<label for="img-6" class="prev">&#x2039;</label>
			<label for="img-8" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-8" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/08.png" />
        </div>
		<div class="nav">
			<label for="img-7" class="prev">&#x2039;</label>
			<label for="img-9" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-9" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/09.png" />
        </div>
		<div class="nav">
			<label for="img-8" class="prev">&#x2039;</label>
			<label for="img-10" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-10" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/10.png" />
        </div>
		<div class="nav">
			<label for="img-9" class="prev">&#x2039;</label>
			<label for="img-11" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-11" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/11.png" />
        </div>
		<div class="nav">
			<label for="img-10" class="prev">&#x2039;</label>
			<label for="img-12" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-12" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/12.png" />
        </div>
		<div class="nav">
			<label for="img-11" class="prev">&#x2039;</label>
			<label for="img-13" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-13" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/13.png" />
        </div>
		<div class="nav">
			<label for="img-12" class="prev">&#x2039;</label>
			<label for="img-14" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-14" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/14.png" />
        </div>
		<div class="nav">
			<label for="img-13" class="prev">&#x2039;</label>
			<label for="img-15" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-15" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/15.png" />
        </div>
		<div class="nav">
			<label for="img-14" class="prev">&#x2039;</label>
			<label for="img-16" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-16" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/16.png" />
        </div>
		<div class="nav">
			<label for="img-15" class="prev">&#x2039;</label>
			<label for="img-17" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-17" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/17.png" />
        </div>
		<div class="nav">
			<label for="img-16" class="prev">&#x2039;</label>
			<label for="img-18" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-18" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/18.png" />
        </div>
		<div class="nav">
			<label for="img-17" class="prev">&#x2039;</label>
			<label for="img-19" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-19" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/19.png" />
        </div>
		<div class="nav">
			<label for="img-18" class="prev">&#x2039;</label>
			<label for="img-20" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-20" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/20.png" />
        </div>
		<div class="nav">
			<label for="img-19" class="prev">&#x2039;</label>
			<label for="img-21" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-21" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/21.png" />
        </div>
		<div class="nav">
			<label for="img-20" class="prev">&#x2039;</label>
			<label for="img-22" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-22" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/22.png" />
        </div>
		<div class="nav">
			<label for="img-21" class="prev">&#x2039;</label>
			<label for="img-23" class="next">&#x203a;</label>
		</div>
    </li>

	<input type="radio" name="radio-btn" id="img-23" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/23.png" />
        </div>
		<div class="nav">
			<label for="img-22" class="prev">&#x2039;</label>
			<label for="img-24" class="next">&#x203a;</label>
		</div>
    </li>
	
	<input type="radio" name="radio-btn" id="img-24" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/24.png" />
        </div>
		<div class="nav">
			<label for="img-23" class="prev">&#x2039;</label>
			<label for="img-25" class="next">&#x203a;</label>
		</div>
    </li>
		
	<input type="radio" name="radio-btn" id="img-25" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/25.png" />
        </div>
		<div class="nav">
			<label for="img-24" class="prev">&#x2039;</label>
			<label for="img-26" class="next">&#x203a;</label>
		</div>
    </li>
	
	<input type="radio" name="radio-btn" id="img-26" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/26.png" />
        </div>
		<div class="nav">
			<label for="img-25" class="prev">&#x2039;</label>
			<label for="img-27" class="next">&#x203a;</label>
		</div>
    </li>
	
	<input type="radio" name="radio-btn" id="img-27" />
    <li class="slide-container">
        <div class="slide">
          <img src="/Agomel/monogatari/27.png" />
        </div>
		<div class="nav">
			<label for="img-26" class="prev">&#x2039;</label>
			<label for="img-1" class="next">&#x203a;</label>
		</div>
    </li>


</ul>
		<div id="div2" class="contentbox">aisdnisfibadfisdabfi.onion</div>

		
	</body>

</html>