var width = document.body.clientWidth;
console.log(width);
if (width <= 767) {
    console.log("Kiwi");
    var height_li = document.getElementById('ligne2').offsetHeight;
    
    console.log(height_li);
    document.getElementById('lien-logo').style.height = height_li + "px";
    
    var width_li_logo = (document.getElementById('logoMenu-li').offsetWidth/2)-(document.getElementById('logoMenu').offsetWidth/2) ;
    document.getElementById('logoMenu').style.left = width_li_logo + "px";
    
    var height_li_logo = (document.getElementById('logoMenu-li').offsetHeight/2)-(document.getElementById('logoMenu').offsetHeight/2) ;
    document.getElementById('logoMenu').style.top = height_li_logo + "px";
}



console.log("script menu : OK");