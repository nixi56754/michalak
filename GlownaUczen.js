document.getElementById("najedz").addEventListener("mouseover", function(){
    document.getElementById("infoDiv").style.display = "block";
});
 
document.getElementById("najedz").addEventListener("mouseout", function(){
    document.getElementById("infoDiv").style.display = "none";
});

function B(){
    window.location.href="Startowa.php";
}

function R(){
    window.location.href="generowanie.php";
}
