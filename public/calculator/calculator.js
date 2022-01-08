let livescreen = document.getElementById("screen");

function clearscreen(){
    livescreen.value = "";
}

function addscreen(x){
    livescreen.value += x;
}
function evalu(){
    livescreen.value = eval(livescreen.value);
}