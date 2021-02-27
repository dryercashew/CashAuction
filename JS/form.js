const form = document.querySelector('.sign-up');

const feedback = document.querySelector('.feedback');

document.getElementById("Submit").addEventListener("click", function(event){
    event.preventDefault();
    const fname = form.fname.value;
    const lname = form.lname.value;
    const email = form.email.value;
    const password = form.password.value;
    const conPass = form.conPass.value;
    console.log(conPass);
    const zip = form.zip.value;
    const phone = form.phone.value;
    const city = form.city.value;

    
    const nameCheck = /^[A-Za-z]{3,50}$/;
    const emailCheck = /^[a-z0-9_]{3,}@[a-z]{3,}[.]{1}[a-z]{2,6}$/;
    const phoneCheck = /^[0-9]{10}$/;
    const zipCheck = /^[0-9]{5}$/;

    if (!nameCheck.test(fname)) {
        feedback.innerHTML = '** Invalid First Name';
        form.fname.style.border = '1px solid red';
        form.fname.focus();

    }
    else if (!nameCheck.test(lname)) {
        feedback.innerHTML = '** Invalid Last Name';
        form.lname.style.border = '1px solid red';
        form.lname.focus();
    }
    else if (!phoneCheck.test(phone)) {
        feedback.innerHTML = '** Invalid Phone Number';
        form.phone.style.border = '1px solid red';
        form.phone.focus();
    }
    else if (!zipCheck.test(zip)) {
        feedback.innerHTML = '** Invalid Zip Code';
        form.zip.style.border = '1px solid red';
        form.zip.focus();
    }
    else if (!(password === conPass)) {
        feedback.innerHTML = '** Passwords Do Not Match';
        form.conPass.style.border = '1px solid red';
        form.conPass.focus();
    }
    else {
        form.submit();
    }
});