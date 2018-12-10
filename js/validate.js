var pswd = 
    document.getElementById("pswd"), 
    cpswd = 
    document.getElementById("cpswd");

    function validatepswd(){
    if(pswd.value != cpswd.value) {
        cpswd.setCustomValidity("Passwords Don't Match");
    } else {
        cpswd.setCustomValidity('');
    }
    }

    pswd.onchange = validatepswd;
    cpswd.onkeyup = validatepswd;