var inputvalue = document.getElementById("inputfield");
var ulist = document.getElementById("unlist");




function addtodo(){
    var delbutton = document.createElement("span");
    delbutton.innerHTML = '<i class="fas fa-trash"></i>';
    if(inputvalue.value !==''){
    var list = document.createElement("li");
    list.innerText = (inputvalue.value);
    ulist.appendChild(list);
    list.appendChild(delbutton);
    inputvalue.value = '';
}else {
    alert("please input smth");
}
delbutton.addEventListener("click", function(){
    var parent = this.parentNode;
    parent.remove();
})
}