function myFunction2() {
    var x = document.getElementById("pass2");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
         