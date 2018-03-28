$(function() {
'use strict';
var Count = 0;
var Players = [];
var First_score = 0;
var Second_score = 0;

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
Players.push(bla); 
myFunction();
});
    $("#addSet").click(function(){

		var score1 = $('#score1').val();
		var score2 = $('#score2').val();

		if (score1 > score2){
			First_score = First_score + 1;
		}else{
			Second_score = Second_score + 1;		
		}
		alert('A set has been added! :)');
	});

    $("#addGame").click(function(){
		Count = Count + 1;
		var first = $('#first').val();
		var second = $('#second').val();
		
var latestGame = '<div class="col-12 text-white text-center pb-2">' +
first +
' ' + 
First_score +
' - ' +
Second_score +
' ' + 
second +
'<button type="button" class="close" id="closebtn"><span aria-hidden="true">&times;</span></button>' +
'</div>';

var myString2 = 
'<div class="col-2">' +
Count +
'</div>' +

'<div class="col-2">' +
first +
'</div>' +

'<div class="col-2">' +
'0' +
'</div>' +

'<div class="col-2">' +
'0' +
'</div>' +

'<div class="col-2">' +
'0' +
'</div>' +

'<div class="col-2">' +
'0' +
'</div>';

for(var i=0; i< Players.length;i++)
{
}

$(".latest").append(latestGame);


$(".players").append(myString2);
First_score = 0;
Second_score = 0;
});

});
