document.addEventListener('DOMContentLoaded', function(){
    checkTime = setInterval(doTimeout, 1000);
});

function doTimeout(){

    document.location.href = "/";

}