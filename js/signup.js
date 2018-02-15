var signup = function() {
    var email = document.getElementById("signupEmail");
    var password = document.getElementById("signupPassword");
    var username = document.getElementById("signupUsername");
    var phone = document.getElementById("signupPhone");
    
    var request = new XMLHttpRequest();
    var url = "../letuscode/php/signup.php";
    
    request.open("POST",url,true);
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    request.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            alert("Success!");
        }
    };
    request.send("username="+username.innerHTML+"&email="+email.innerHTML+"&pwd="+password.innerHTML+"&phone="+phone.innerHTML);    
}