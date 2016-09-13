console.log("success");

var c = document.getElementById("hours");
var ctx = c.getContext("2d");
ctx.moveTo(250,250);
ctx.lineTo(250,080);
ctx.stroke();

var c = document.getElementById("minutes");
var ctx = c.getContext("2d");
ctx.moveTo(250,250);
ctx.lineTo(250,00);
ctx.stroke();

var c = document.getElementById("seconds");
var ctx = c.getContext("2d");
ctx.moveTo(250,250);
ctx.lineTo(250,00);
ctx.strokeStyle = "#FF0000";
ctx.stroke();


$(function(){

  var myVar = setInterval(myMinutes, 1000);
  var counter = 0;

  function myMinutes() {
    $("#seconds").css({'transform' : 'rotate('+ counter +'deg)'});
    counter += 6;;
    }

});
