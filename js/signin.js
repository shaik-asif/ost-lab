var signin = function() {
    
    var email = document.getElementById("signinEmail").innerHTML;
    var password = document.getElementById("signinPassword").innerHTML;
    
    var request = new XMLHttpRequest();
    var url = "../letuscode/php/signin.php";
    
    request.open("POST",url,true);
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    request.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            alert("Success!");
        }
    };
    
    request.send("email="+email+"&pwd="+password);
};