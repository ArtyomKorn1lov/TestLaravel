document.addEventListener("DOMContentLoaded", function(event) {
    console.log(event);
    const urlParams = new URLSearchParams(window.location.search);
    const nameValue = urlParams.get('name');
    const emailValue = urlParams.get('email');
    const messageValue = urlParams.get('message');
    let elemResult = document.getElementById('formResults');
    if (!!nameValue || !!emailValue || !!messageValue) {
        elemResult.style.display = 'flex';
    }
    if (!!nameValue) {
        let elem = document.getElementById('nameValue');
        elem.style.display = 'inline-block';
        elem.classList.add('result-group__item_name');
        elem.innerHTML = nameValue;
    }
    if (!!emailValue) {
        let elem = document.getElementById('emailValue');
        elem.style.display = 'inline-block';
        elem.classList.add('result-group__item_email');
        elem.innerHTML = emailValue;
    }
    if (!!messageValue) {
        let elem = document.getElementById('messageValue');
        elem.style.display = 'inline-block';
        elem.classList.add('result-group__item_message');
        elem.innerHTML = messageValue;
    }
});
