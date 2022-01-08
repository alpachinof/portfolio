const pageBody = document.querySelector("body");

function changecolor(){
    let changeco = Math.floor(Math.random()*0xFFFFFF<<0).toString(16);
    pageBody.style.backgroundColor = changeco;
    
}