document.addEventListener('DOMContentLoaded', function() {
    // Check username
    username = document.getElementById('username');
    username_span = document.getElementById('username-span');
    function check_username(){
        regex = new RegExp('^[a-zA-Z0-9_-]{3,12}$');
        if (!regex.test(username.value)){
            username_span.classList.add('invalid');
            return false;
        } else {
            username_span.classList.remove('invalid');
            return true;
        }
    }
    username.addEventListener('click', check_username);
    username.addEventListener('input', check_username);

    // Check password
    password = document.getElementById('password');
    password_span = document.getElementById('password-span');
    function check_password(){
        if (password.value === ""){
            password_span.classList.add('invalid');
            return false;
        } else {
            password_span.classList.remove('invalid');
            return true;
        }
    }
    password.addEventListener('click', check_password);
    password.addEventListener('input', check_password);

    // Check email
    email = document.getElementById('email');
    email_span = document.getElementById('email-span');
    function check_email(){
        regex = new RegExp('^[\\w.-]+@[a-zA-Z\\d.-]+\\.[a-zA-Z]{2,}$');
        if (email.value != "" && !regex.test(email.value)){
            email_span.classList.add('invalid');
            return false;
        } else {
            email_span.classList.remove('invalid');
            return true;
        }
    }
    email.addEventListener('click', check_email);
    email.addEventListener('input', check_email);

    // Check form
    form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        if (check_username() && check_password() && check_email()){
            form.submit();
        }
    });
});