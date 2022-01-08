var hour = document.getElementById("hour");
var min = document.getElementById("min");
var sec = document.getElementById("sec");
var milsec = document.getElementById("milsec");

var milseconds = 00;
var seconds = 00;
var minutes = 00;
var hours = 00;

function timer(){
    milseconds++;
    if(milseconds<10){
        milsec.innerHTML = "0"+ milseconds;
    }
    if(milseconds>10){
        milsec.innerHTML = milseconds;
    }
    if(milseconds>99){
        seconds++;
        sec.innerHTML = "0"+seconds;
        milseconds = 0;
    }
    if(seconds>9){
        sec.innerHTML = seconds;
    }
    if(seconds>59){
        seconds = 0;
        minutes++;
        min.innerHTML= "0" + minutes;
    }
    if(minutes>9){
        min.innerHTML = minutes;
    }
    if(minutes>59){
        minutes = 0;
        hours++;
        hour.innerHTML = "0" + hours;
    }
    if(hours>9){
        hour.innerHTML = hours;
    }
}

function start(){
    interval = setInterval(timer,10);
    document.getElementById("start").disabled = true;
}

function stop(){
    clearInterval(interval);
    document.getElementById("start").disabled = false;
}

function resettimer(){
    clearInterval(interval);
         milseconds = 00;
         seconds = 00;
         minutes = 00;
         hours = 00;
    milsec.innerHTML='00';
    sec.innerHTML="00";
    min.innerHTML="00";
    hour.innerHTML='00';
    document.getElementById("start").disabled = false;
}