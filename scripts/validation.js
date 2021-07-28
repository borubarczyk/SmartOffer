function validate() {
    var pass_f , pass_s , message;
    pass_f = document.getElementById("password_f");
    pass_s = document.getElementById("password_s");
    message = document.getElementById("warning-js");
    if (pass_f.value == "" || pass_s == "") {
        message.innerHTML = "Pola są puste";
        return false;
    }else{
    if( pass_f.value != pass_s.value ){
        message.innerHTML = "Hasła nie są takie same !";
        message.style.display = "block";
        message.style.opacity = "1"; 
        console.log("fail");
        pass_f.value = "";
        pass_s.value = "";
        pass_f.style.border = "1px solid red";
        pass_s.style.border = "1px solid red";
        return false;
    }else{
        console.log("pass");
        message.style.display = "none";
        pass_f.style.border = "1px solid green";
        pass_s.style.border = "1px solid green";
        return true;
    }}
}