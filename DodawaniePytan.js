function f(){
    window.location.href="GlownaNauczyciel.php";
}
document.getElementById("najedz").addEventListener("mouseover", function(){
    document.getElementById("infoDiv").style.display = "block";
});
 
document.getElementById("najedz").addEventListener("mouseout", function(){
    document.getElementById("infoDiv").style.display = "none";
});