const form = document.querySelector('.sign-up');

const feedback = document.querySelector('.feedback');
console.log("man");

form.addEventListener('submit', e => {
    e.preventDefault();
    console.log("gg");

    const name = form.name.value;
    const email = form.email.value;

    const nameCheck = /^[A-Za-z]{3,50}$/;
    const emailCheck = /^[a-z0-9_]{3,}@[a-z]{3,}[.]{1}[a-z]{2,6}$/;

    if (!nameCheck.test(name)) {
        feedback.innerHTML = '** Invalid Name';
        form.name.style.border = '1px solid red';
        form.name.focus();
    }
    else if (!emailCheck.test(email)) {
        feedback.innerHTML = '** Invalid Name';
        form.name.style.border = '1px solid red';
        form.name.focus();
    }

    form.submit(); 
});