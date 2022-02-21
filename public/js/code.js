function validar() {
    var email = document.getElementById('email_user').value;
    var password = document.getElementById('password_user').value;

    if (email == "" || password == "") {

        if (email == "" && password != "") {

            document.getElementById('mensaje').innerHTML = "<p>No se ha especificado ningun Email</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('email_user').style.border = "2px solid red";
            document.getElementById('password_user').style.border = "2px solid grey";
            return false;

        } else if (email != "" && password == "") {

            document.getElementById('mensaje').innerHTML = "<p>No se ha especificado ninguna Contraseña</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('password_user').style.border = "2px solid red";
            document.getElementById('email_user').style.border = "2px solid grey";
            return false;

        } else {

            document.getElementById('mensaje').innerHTML = "<p>No se ha especificado ningun Valor</p>";
            document.getElementById('mensaje').style.color = "red";
            document.getElementById('password_user').style.border = "2px solid red";
            document.getElementById('email_user').style.border = "2px solid red";
            return false;
        }
    } else {
        return true;
    }
}