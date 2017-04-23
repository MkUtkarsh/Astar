function setColor(btn, color){
    var count=1;
    var property = document.getElementById(btn);
    if (count == 0){
        property.style.backgroundColor = "#ff0000"
        count=1;        
    }
    else{
        property.style.backgroundColor = "#00ff00"
        count=0;
    }

}