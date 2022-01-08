var input = document.getElementById("input");
var statusn = document.getElementById("status");
var degree = document.getElementById("degree");
var city = document.getElementById("city");

input.addEventListener("keyup", e =>{
    if(e.key == "Enter" && input.value != ""){
        fetchdata(input.value);
    }
    else if(e.key == "Enter" && input.value == ""){
        alert("please input smth");
    }
});

function fetchdata(cityname){

    const key ="04ea793743c39016b5feb7d1791117d4";
    let api = `https://api.openweathermap.org/data/2.5/weather?q=${cityname}&units=metric&appid=${key}`;
    fetch(api).then(response => response.json()).then(result => weatherdetails(result));

    }
    
function weatherdetails(info){

        var element = document.getElementById("container");
        element.classList.add("active");
        
        const description = info.weather[0]["description"];
        const name = info.name;
        const temp = info.main["temp"];

        statusn.innerText = description;
        degree.innerHTML = temp +"&deg;C";
        city.innerText = name;
}