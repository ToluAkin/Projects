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

    function validation(reg) {
        str = document.reg;
        if (str.username.value.trim() == "") {
            alert("Enter your username");
            str.username.focus();
            return false;
        }
    }
    function validation(reg) {
        str = document.reg;
        if (str.firstname.value.trim() == "") {
            alert("Enter a correct name");
            str.firstname.focus();
            return false;
        }
    }
    function validation(reg) {
        str = document.reg;
        if (str.lastname.value.trim() == "") {
            alert("Enter a correct name");
            str.lastname.focus();
            return false;
        }
    }