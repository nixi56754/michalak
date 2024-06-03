function F(){
    window.location.href='GlownaUczen.html';
}
function S(){
    window.location.href='Login.php';
}
document.getElementById("najedz").addEventListener("mouseover", function(){
    document.getElementById("infoDiv").style.display = "block";
});
 
document.getElementById("najedz").addEventListener("mouseout", function(){
    document.getElementById("infoDiv").style.display = "none";
});