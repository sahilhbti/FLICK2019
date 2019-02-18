<?php
   session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="animations.css"  media="only screen and (min-width: 601px)" type="text/css">
	<title>List of all events</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Pacifico|Kosugi|Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster|Righteous|Indie+Flower|Courgette" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Pacifico|Kosugi|Lato" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Pacifico|Kosugi|Lato|Black+Ops+One|Bubblegum+Sans|Fredericka+the+Great|Limelight|Monoton|Shojumaru" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster|Righteous|Indie+Flower|Courgette" rel="stylesheet">

  <style>
body {font-family: Arial, Helvetica, sans-serif;}




.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}




/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  #bd
	{
		height: 17.4vw;
	}
}
@media only screen and (min-width: 601px) {
	#bd
	{
		height: 17.4vw;
	}

  
}
</style>
</head>
<body>
      		<!--<div id="snackbar">Registrations are closed.</div>-->
    <nav class="navbar navbar-inverse navbar-fixed-top" >
	<div class="container-fluid">

	<div class="navbar-header">

	<a class="navbar-brand " href="index.php" style="padding:10px! important;">
	<!-- Change url when upload the website -->
	<p style="height:100%;font-family: 'Black Ops One', cursive;font-size:45px;padding:8px 0px 0px 0px;color: red;">AAGAZ-19</p></a>


	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
	</div>
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<ul class="nav navbar-nav navbar-right navLink">
	<li><a href="index.php"><b style="color: white;">HOME</b></a><li>
		<li><a href="events.php"><b style="color: white;">EVENTS</b></a> </li>
	
	<li><a href="gallery.php"><b style="color: white;">GALLERY</b></a></li>
		<li><a href="contactus.php"><b style="color: white;">CONTACT US</b></a></li>
		<li><a href="aboutus.php"><b style="color: white;">IDEOLOGY</b></a></li>
</ul>
</div>
	</div>
</nav><br><br><br><br>
<div align="right" hidden id="out"><button class="btn btn-danger" style="border-width: 4px;border-color: red;color: white;border-radius: 50%;"><a href="logout.php" >Log out</a></button></div>
<br>
  	
<h1 class="text-center w3-animate-zoom" class="display-1" style=" background-image: url(12.png);padding-top: 1vw;padding-bottom: 1vw;margin-top: 0.1vw;color: red;font-family: Black Ops One;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;"><b>Event Registration</b></h1><br>
  <center> <a href="payment.php" hidden="" id="pay1"><button class="btn btn-danger" style="border-radius: 50%;padding: 1vw;" ><h2>PAYMENT</h2></button></a> </center>

<div class="container">
  
  	<div class="row">
 <div class = "col-sm-4">
 
		<div class="animatedParent"><div class="animated bounceInLeft">   <h2 style="font-family: Lobster;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">Table Tennis</h2></div></div>
		  <div class="card">
		    <div class="animatedParent"><div class = "animated bounceInLeft"><img class="card-img-top" src="5.jpg" alt="Card image" style="width:100%"></div></div>
			    <div class="card-body">
			      <br>
		<div  class="animatedParent"><div class = "animated bounceInLeft">	<center><button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary">View Detail</button></center><hr>
			<center><a href="https://docs.google.com/forms/d/e/1FAIpQLSf7c-CRWAeLOD7jBaDCsYiNMyFv_EjgSc1f49VLeOHZBRPEbg/viewform"><button class="btn btn-danger" id="Table_Tennis" disabled="">Register</button></a></center></div></div>
		


					<div id="id01" class="modal">
					  
					  <form class="modal-content animate">
					   <pre style="font-size: 1.5vw;font-family: 'Roboto Slab'">TABLE TENNIS RULE

-The rules of the tournament of the International Table Tennis Federation asp adopted from 
time to time by the Table Tennis Federation of India shall apply unless otherwise modified.

-Each team will have maximum 3boys and minimum 2 boys . Maximum 3 girls and minimum 2 girls .
-The team can decide  who all from thier team will be playing :
*Singles(boys)
*Singles(girls)
*Doubles(boys)
*Doubles(girls)
*Mixed Doubles 
-each match will be played following a best of five games format, based with each game of 11 
points.
-In case of tie during league stage:-
In case of tie (in number of matches won) between two teams, the winner of their match 
will proceed to the next round.
-In case of tie between more than two teams, the difference of team score between each 
team will be considered (team with bigger margin would proceed to the next round).If tie still continues the difference in
 score line of each match would be considered for the 
decision.
-The team competition will follow a Group and Knockout (single elimination) format. The 
teams will be divided into four groups. In each group, every team will play against each of 
their opponents (in the same group) once. The top two teams will qualify for the knockout 
phase. In the knockout phase, the winners of the group will play with one of the runners-up
from other groups.
-The score standings, when the match is decided, shall be considered for the calculations 
indicated above. The tally for all matches played among the tied teams in the league fixture 
will be considered.
-The decision of the referees and the umpires will be final and binding. No protests would be 
entertained. Therefore, any team leaving the field of play as a mark of protest and conceding 
a walk -over shall be deemed to have lost the fixture and will be eliminated from rest of the 
event.
-The match will be played with the new STAG 3-star PLASTIC BALLS as recommended under 
ITTF rules and regulations.
-Teams are allowed to cheer their player but there should not be any hooting or jeering 
against other teams’ players. Shouting in between the rallies is strictly not allowed.

-Each single shall be played on best of five games basis with each game of 11 points.
	--------------------------------------------------------------------------------------------------------------------------
					</pre>
					</form>
					</div>
					    </div>
					  </div>


</div>
 
 <div class = "col-sm-4">
 	
		<div class="animatedParent"><div class="animated bounceInDown ">     <h2 style="font-family: Lobster;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">Athletics</h2></div></div>
		  <div class="card" >
		<div class="animatedParent"><div  class="animated bounceInDown ">    <img class="card-img-top" src="4.jpg" alt="Card image" style="width:100%"></div></div>
			    <div class="card-body">
			      <br>
			<div class="animatedParent"><div  class="animated bounceInDown "><center><button onclick="document.getElementById('id02').style.display='block'" class="btn btn-primary">View Detail</button></center><hr>
			<center><a href="https://docs.google.com/forms/d/e/1FAIpQLSfvp4KiaU9kks-7LNL63pkHvCjjn_ytz6VgERvyzMzNBTMGng/viewform"><button class="btn btn-danger" id="Athletics" disabled="">Register</button></a></center></div></div>
			


					<div id="id02" class="modal">
					  
					  <form class="modal-content animate">
					   <pre style="font-size: 1.5vw;font-family: 'Roboto Slab'"><b>Athletics Rules:</b>
Athletics is the collective name for a collection of sporting events that involve competitors running, 
throwing, walking and jumping. The roots of athletic events are prehistoric, with ancient communities
competing with each other in various running, jumping and throwing events.

Athletic events were prevalent in the ancient Olympics in Greece, starting originally with just a running
race and gratefully expanding over time to include various running, jumping and throwing events. To this 
day, success at the Olympic Games is still seen as the pinnacle of achievement in the sport of Athletics
 – although there  are also World Championships and various national and continental championships both
indoors and outdoors.

<b>Men's Athletics:</b>
Modern day men's athletics includes the following activities:
100 metres
200 metres
400 metres
800 metres
1500metres
4 × 100 metres relay
4 × 400 metres relay
High jump
Long jump
Shot put
Discus throw
Javelin throw

<b>Women's Athletics: </b>
Modern day women's’ athletics include:
100 metres
200 metres
400 metres
800 metres
4 × 100 metres relay
4 × 400 metres relay
Long jump
Shot put
Discus throw
Javelin throw

<b>Object of the Game:</b>
The objective in all athletics disciplines is to win the event. Depending upon the event, this involves
 running or walking faster, throwing further, jumping higher or jumping further than your competitors.

<b>Players & Equipment:</b>
The basic equipment for athletics consists of a vest, shorts and training shoes. Some events require
 specific pieces of equipment as follows:

Shot Put: Shot
Discus Throw: Discus
Javelin Throw: Javelin

<b>Winning:</b>
Fo involves completing the race in the quickest time possible. For throwing events, it involves
 throwing the furthest and, in jumping events, it involves jumping further or higher than your 
 competitors (depending upon the particular event). In athletics, winners are given a gold medal, 
 those who are second are given a silver medal and bronze medals are given to those who come third.
  Those athletes finishing outside of the top three are not awarded.

<b>Rules of Athletics:</b>
Each individual discipline has its own specific set of rules and competitors are expected to abide 
by these to ensure that the competition is fair.
	--------------------------------------------------------------------------------------------------------------------------
					</pre>
					</form>
					</div>
					    </div>
					  </div>

</div>


  <div class="col-sm-4">
 
	<div  class="animatedParent"><div  class="animated bounceInRight ">	 <h2 style="font-family: Lobster;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">Chess</h2></div></div>
			  <div class="card" >
		<div class="animatedParent"><div class="animated bounceInRight ">	    <img class="card-img-top" src="6.jpg" alt="Card image" style="width:90%"></div></div>
			    <div class="card-body">
			       <br>
		<div class="animatedParent"><div  class="animated bounceInRight ">	<center><button onclick="document.getElementById('id03').style.display='block'" class="btn btn-primary">View Detail</button></center><hr>
			<center><a href="https://docs.google.com/forms/d/e/1FAIpQLSf3ox7B2SCnn_Sb3f-zJ1t0fHsekIfX2ibn6sKWdMQMjtE7rw/viewform"><button class="btn btn-danger" id="Chess" disabled="">Register</button></a></center></div></div>
			


				<div id="id03" class="modal">
				  
				  <form class="modal-content animate">
				      <pre style="font-size: 1.5vw;font-family: 'Roboto Slab'">
      	  <b>Chess Rules:</b><br>
         - Tournament will be conducted as per FIDE LAWs of chess .

         - Each player will be provided with 30 minutes plus 20 second increment
           from move 1

         - Walk over will be given after 15 minutes

         - Team should be of 4 players with atleast one girl  

   --------------------------------------------------------------------------------------------------------------------------------
			</pre>
			</form>
			</div>
			    </div>
			  </div>
			</div>

    </div><br><br>
    <div class="container">
  
  	<div class="row">
 <div class = "col-sm-4">
 	
		<div class="animatedParent"><div class="animated bounceInLeft">     <h2 style="font-family: Lobster;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">Badminton</h2></div></div>
		  <div class="card" >
	<div  class="animatedParent"><div  class="animated bounceInLeft">	    <img class="card-img-top" src="9.jpg" alt="Card image" id="bd" style="width:100%;"></div></div>
			    <div class="card-body">
			      <br>
		<div  class="animatedParent"><div class="animated bounceInLeft">	<center><button onclick="document.getElementById('id04').style.display='block'" class="btn btn-primary">View Detail</button></center><hr>
			<center><a href="https://docs.google.com/forms/d/e/1FAIpQLSd7gljgCZLfmnnuE-yrNCw9MqTVnOVV4gj9jpQROtlucZLV_w/viewform"><button class="btn btn-danger" id="badminton" disabled="">Register</button></a></center></div></div>
			


					<div id="id04" class="modal">
					  
					  <form class="modal-content animate">
					   <pre style="font-size: 1.5vw;font-family: 'Roboto Slab'">•All players should come in proper kits.
•Interchange of players between two teams will lead to serious consequences and in that case the decision of the referee will be final.
•All the rules apart from mentioned are according to the World Badminton Federation’s rule book.
•Use of abusive or foul language during the play can lead to technical fouls or expulsion depending on the referee and the organisation team.
•Teams must arrive at the court 20 minutes before the scheduled start time.
•Walkover will be given to a team if the opponent team is not able to reach the ground within 15 minutes of the scheduled time.
•The age limit is 24.
•The decision of the referee and organizing committee will be final in all case.

FORMAT :
•Each Clash (between teams) will have 3 matches
•In case of tie during league stage:-
-In case of tie (in number of matches won) between two teams, the winner of their 
match will proceed to the next round.
-In case of tie between more than two teams, the difference of team score between 
each team will be considered (team with bigger margin would proceed to the next 
round).If tie still continues the difference in scoreline of each match would be 
considered for the decision.

Matches Configuration :
Men's Singles 
Men's Doubles 
Women's Singles/Mixed Doubles
Women's Doubles
Participation :
Maximum of 1 team per college
•Each team must consist of a minimum of 3 to maximum 5  players in a men’s team and a minimum of 2 to maximum of 4 players in a women’s team.
•Only one player can play a maximum of two matches.
	--------------------------------------------------------------------------------------------------------------------------
					</pre>
					</form>
					</div>
					    </div>
					  </div>
				

</div>
 
 <div class = "col-sm-4">
 	
	<div class="animatedParent"><div class="animated bounceInDown">	     <h2 style="font-family: Lobster;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">BasketBall</h2></div></div>
		  <div class="card" >
		<div class="animatedParent"><div class="animated bounceInDown">    <img class="card-img-top" src="10.jpg" alt="Card image" style="width:100%"></div></div>
			    <div class="card-body">
			      <br>
		<div class="animatedParent"><div class="animated bounceInDown">	<center><button onclick="document.getElementById('id05').style.display='block'" class="btn btn-primary">View Detail</button></center><hr>
			<center><a href="https://docs.google.com/forms/d/e/1FAIpQLSdBcWmXxmYkq9XvWVmElaw0zKqwNRJAW3u5bj6BQc2zv-zVPQ/viewform"><button class="btn btn-danger" id="BasketBall" disabled="">Register</button></a></center></div></div>
			


					<div id="id05" class="modal">
					  
					  <form class="modal-content animate">
					   <pre style="font-size: 1.5vw;font-family: 'Roboto Slab'">Basketball Rules :
1) Tears will be divided into two pools Pool First' and 'Pool Second consisting of 4 tears each through lottery system .
2) Pool First will consist of teams A B, C and D Pool Second will consist of leams E,F,G and H.
3) Matches will be played on league basis within the pool.
 4) Top two teams from each pool will qualify for the semifinals (Pool First-Team 1 Team 2 and Pool Second - Team 3, Team 4).
5) The top team from each pool will play the second team from the other pool on knockout basis for a spot in the finals 
(Team 1 vs Team 4, Team 2 vs Team 3).
6) The two finalists will compete for the top spot.
7) Each match will consist of 8 minute quarters except for the finals which will consist of 10 minute quarters.
8) All games will be played as per latest FIBA basketball rules
	--------------------------------------------------------------------------------------------------------------------------
					</pre>
					</form>
					</div>
					    </div>
					  </div>
				

</div>


  <div class="col-sm-4">
  
	<div class="animatedParent"><div class="animated bounceInLeft">			 <h2 style="font-family: Lobster;-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;">VolleyBall</h2></div></div>
			  <div class="card" >
		<div class="animatedParent"><div class="animated bounceInLeft">	    <img class="card-img-top" src="6.jpg" alt="Card image" style="width:90%"></div></div>
			    <div class="card-body">
			       <br>
		<div class="animatedParent"><div class="animated bounceInLeft">	<center><button onclick="document.getElementById('id06').style.display='block'" class="btn btn-primary">View Detail</button></center><hr>
			<center><a href="https://docs.google.com/forms/d/e/1FAIpQLSdNsqYfCuensn2gDESX-edGXWzVRvEmQAy67hgVIx8kOa1nsQ/viewform"><button class="btn btn-danger" id="VolleyBall" disabled="">Register</button></a></center></div></div>
			

				<div id="id06" class="modal">
				  
				  <form class="modal-content animate">
				      <pre style="font-size: 1.5vw;font-family: 'Roboto Slab'">
      	 VolleyBall Rules :

1. There should be 10 members in each team. 
2. It is a league tournament. 
3. Each match is of 3 sets. 
4. Each set is of 21 points.
5. Semifinals and final will be of 3 sets( 25 points each). 
NOTE:  Rest details will be given prior to each match.(if necessary).

   --------------------------------------------------------------------------------------------------------------------------------
			</pre>
			</form>
			</div>
		</div>
	</div>
			  
</div>
  
    </div>
   <br><br><br>
   

       
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');
var modal2 = document.getElementById('id03');
var modal3 = document.getElementById('id04');
var modal4 = document.getElementById('id05');
var modal5 = document.getElementById('id06');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
      if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
      if (event.target == modal3) {
        modal3.style.display = "none";
    }
      if (event.target == modal4) {
        modal4.style.display = "none";
    }
     if (event.target == modal5) {
        modal5.style.display = "none";
    }
}

</script>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="css3-animate-it.js"></script>
        <?php
        
        
         if(isset($_SESSION["username1"]))
         {
         	?>
         <script>
         	$("#pay1").attr('hidden',false);
         	$("#out").attr('hidden',false);
         	$(".btn").attr('disabled',false);
         </script>
         <?php
        }
        else
        	{
        		?>
        		<script>
        			alert("Please Login then you will be able to register for events");
        		</script>
        		<?php
        	} ?>
</html>