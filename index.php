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
<h1 class="text-center text-white pb-3">Ping Pong League</h1>
<div class="container text-white">
<div class="row table players">
<div class="col-2">
#
</div>
<div class="col-2">
Name
</div>
<div class="col-2">
Won
</div>
<div class="col-2">
Lost
</div>
<div class="col-2">
Winning %
</div>
<div class="col-2">
Points
</div>

<div class="col-12">
<hr>
</div>

</div>
</div>

<div class="container">
<div class="row justify-content-between">
<div class="col-3 table">
<h2 class="text-center text-white pt-4">Add a new player</h2>

    <fieldset class="form-group mt-4">
    <div class="form-group mb-0 pb-0">
    <input value="e.g Jimbo" type="text" name="name" id="name" class="form-control mb-1 tt">
    </div>
        <button type="submit" id="addPlayer" class="btn button-game text-white btn-responsive mt-4">Add player</button>
                    </fieldset>

</div>

<div class="col-3 table">
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
    <input value="e.g 11" type="text" name="score1" id="score1" class="form-control mb-1 tt">
    </div>
    </div>
            <div class="col-5">
    <div class="form-group mb-0 pb-0">
    <input value="e.g 9" type="text" name="score2" id="score2" class="form-control mb-1 tt">
    </div>
    </div>
            <button type="submit" id="addSet" class="btn button-set text-white btn-responsive mt-2">Add set</button>
            <button type="submit" id="addGame" class="btn button-game text-white btn-responsive mt-3">Add game</button>
    </div>
</div>

<div class="col-3 table latest">

<h2 class="text-center text-white pt-4 pb-3">Latest games</h2>


</div>
</div>
</div>
</body>
</html>
