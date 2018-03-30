<!doctype html>
<html>
<head>
  <script src="jquery-3.3.1.min.js">
  </script>
<script src="jquery-3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="js.js"></script>

<link type="text/css" rel="stylesheet" href="css.css">
<meta charset="utf-8">
<title>Lukas's Test solution</title>
</head>

<body>
<h1 class="text-center text-white pb-3 blink">Ping Pong League</h1>
<div class="container text-white">
<div class="row players mb-3" id="main_table">

<div class="col-2 main">
#
</div>
<div class="col-2 main">
Name
</div>
<div class="col-2 main">
Won
</div>
<div class="col-2 main">
Lost
</div>
<div class="col-2 main">
Winning %
</div>
<div class="col-2 main">
Points
</div>


<div class="col-12 main">
<hr>
</div>
</div>
</div>

<div class="container">
<div class="row justify-content-between">
<div class="padding table">
<h2 class="text-center text-white pt-4">Add a new player</h2>

    <fieldset class="form-group mt-4">
    <div class="form-group mb-0 pb-0">
    <input placeholder="e.g Jimbo" type="text" name="name" id="name" class="form-control mb-1 tt">
    </div>
        <button type="submit" id="addPlayer" class="btn button-game text-white btn-responsive mt-2">Add player</button>
                    </fieldset>

</div>

<div class="table padding">
<h2 class="text-center text-white pt-4">Add games</h2>
    <div class="row">
    <div class="col-5" id="dropdown">
    	<select class="form-control form-control-sm select" id="first">
  		<option>No data yet</option>
		</select>
    </div>
        <div class="col-2">
        <p class="text-white">VS</p>
	    </div>
            <div class="col-5" id="dropdown">
    	<select class="form-control form-control-sm select" id="second">
  		<option>No data yet</option>
		</select>
    </div>
    </div>
    
    <h2 class="text-center text-white pt-4">Score (max. of 5)</h2>
    <div class="row justify-content-between">
    <div class="col-5">
    <div class="form-group mb-0 pb-0">
    <input placeholder="e.g 11" type="text" name="score1" id="score1" class="form-control mb-1 tt">
    </div>
    </div>
            <div class="col-5">
    <div class="form-group mb-0 pb-0">
    <input placeholder="e.g 9" type="text" name="score2" id="score2" class="form-control mb-1 tt">
    </div>
    </div>
            <button type="submit" id="addSet" class="btn button-set text-white btn-responsive mt-2">Add set</button>
            <button type="submit" id="addGame" class="btn button-game text-white btn-responsive mt-3">Add game</button>
    </div>
</div>

<div class="table latest padding">

<h2 class="text-center text-white pt-4 pb-3 main">Latest games</h2>

</div>
<div class="padding table">
            <a class="twitter-timeline"  href="https://twitter.com/hashtag/pingpong%E2%80%A8" data-widget-id="979480374253375488">#pingpong  Tweets</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<div class="padding table">
<h2 class="text-center text-white pt-4 pb-3 main">Search for player history</h2>

<div id="wrap"> 

    <h1 id="header"></h1> 
    <ul id="list"> 

    </ul> 
</div> 


</div>


</div>
</div>
</body>
</html>
