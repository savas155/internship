$(function() {
'use strict';
var Count = 0;
var Players = [];
var Scores = [];
var LatestGames = [];
var First_score = 0;
var Second_score = 0;
var HowManySets = 0;

$('#score1').on('click focusin', function() {
    this.value = '';
});
$('#score2').on('click focusin', function() {
    this.value = '';
});
$('#name').on('click focusin', function() {
    this.value = '';
});

function myFunction() {
$('#dropdown select').empty()
for(var i=0; i< Players.length;i++)
{
//creates option tag
  jQuery('<option/>', {
        value: Players[i],
        html: Players[i]
        }).appendTo('#dropdown select'); //appends to select if parent div has id dropdown
}
}

    $("#addPlayer").click(function(){
var bla = $('#name').val();

    if( bla.length === 0 ) {
       alert('Please fill the input.');
	   return false;
    }
	
Players.push(bla); 
myFunction();
alert('Successfully added.');
bla = $('#name').val('');
});
    $("#addSet").click(function(){
		var first = $('#first').val();
		var second = $('#second').val();
		var score1 = parseInt($('#score1').val());
		var score2 = parseInt($('#score2').val());
		
		if ((first == 'No data yet') && (second == 'No data yet'))
		{
			alert('You need to add players to start a match.');
			return false;
		}
		
		if((!$.isNumeric(score1)) || (!$.isNumeric(score2)))
		{
			alert('Please enter scores as a numbers (integers)');
			return false;
		}
		
		if (first == second)
		{
			alert('The player cannot play against himself.');
			return false;
		}
		if (score1 > score2){
			First_score = First_score + 1;
		}
		if (score1 < score2){
			Second_score = Second_score + 1;	
		}
		
		if (HowManySets > 5)
		{
			alert ('Max score up to 5.');
			return false;
		}else{
			alert('A set has been added! :)');
			HowManySets = HowManySets + 1;
		}
		score1 = $('#score1').val('');
		score2 = $('#score2').val('');
	});

    $(".marketingas").click(function(){
		alert('te');
	});
	
    $("#addGame").click(function(){
		var first = $('#first').val();
		var second = $('#second').val();
		
		if ((first == 'No data yet') && (second == 'No data yet'))
		{
			alert('You need to add players to start a match.');
			return false;
		}
		
		if (first == second)
		{
			alert('The player cannot play against himself.');
			return false;
		}
	
		
		if ((First_score == 0) && (Second_score == 0)){
			alert('Please enter some scores before adding a game.');
			return false;
		}

AddLatestGame(first, second, First_score, Second_score);

if(!FindPlayer(first)){
SavePlayer(first);
RefreshTable();
}

if(!FindPlayer(second)){
SavePlayer(second);
RefreshTable();
}
if (First_score > Second_score)
{
AddWin(first);
AddLost(second);
}else{
AddWin(second);
AddLost(first);
}

First_score = 0;
Second_score = 0;
HowManySets = 0;
});
	
function AddWin(player){
  for (var i = 0; i < Scores.length; i++) {
    if (Scores[i].name === player) {
      Scores[i].won = Scores[i].won + 1;
	  CalculateWinnings(player);
	  RefreshTable();
    }
  }
}

function AddLatestGame(first, second, First_score, Second_score) {
		 var LatestGam =  {player1: first, player1_score:First_score, player2:second, player2_score:Second_score};
        LatestGames.push(LatestGam);
		
		$( ".latest :not('.main')" ).empty();
	for(var i=0; i< LatestGames.length;i++)
{
	var myString3 =
'<div class="col-12 text-white text-center">' +
LatestGames[i].player1 +
' ' +
LatestGames[i].player1_score +
' - ' +
LatestGames[i].player2_score +
' ' +
LatestGames[i].player2 + 
'      <a href="#" aria-label="Close Account Info Modal Box">&times;</a>';
$(".latest").append(myString3);
}

}

function AddLost(player){
  for (var i = 0; i < Scores.length; i++) {
    if (Scores[i].name === player) {
      Scores[i].lost = Scores[i].lost + 1;
	  CalculateWinnings(player);
	  RefreshTable();
    }
  }
}

function SavePlayer(name){
	Count = Count + 1;
	 var KeyValuePair =  {id: Count, name:name, won:0, lost:0, winning:0, points:0};
        Scores.push(KeyValuePair);
}

function CalculateWinnings(player){
	  for (var i = 0; i < Scores.length; i++) {
    if (Scores[i].name === player) {
      Scores[i].winning = Math.round(((Scores[i].won/(Scores[i].won+Scores[i].lost)) * 100).toFixed(2)) + '%';
	  RefreshTable();
    }
  }
}

function FindPlayer(player){
	for (var i = 0; i < Scores.length; i++) {
    if (Scores[i].name === player) {
return true;
    }
  }
  return false;
}

function RefreshTable()
{
	$( ".players :not('.main')" ).empty();
	for(var i=0; i< Scores.length;i++)
{
	if (Scores[i].id == ''){
	return false;
	}
	var myString2 =
'<div class="col-2">' +
Scores[i].id +
'</div>' +

'<div class="col-2 name">' +
Scores[i].name +
'</div>' +

'<div class="col-2 won">' +
Scores[i].won +
'</div>' +

'<div class="col-2 lost">' +
Scores[i].lost +
'</div>' +

'<div class="col-2 winning">' +
Scores[i].winning +
'</div>' +

'<div class="col-2 points">' +
Scores[i].points +
'</div>';
$(".players").append(myString2);
}
	
}

});
