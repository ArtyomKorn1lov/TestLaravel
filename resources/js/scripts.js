document.addEventListener("DOMContentLoaded", function() {
    const formRef = document.getElementById('contactsForm');

    formRef.addEventListener('submit', async function (event)  {
        event.preventDefault();

        try {
            const feedbackObj = {
                'name': formRef.elements.name.value,
                'email': formRef.elements.email.value,
                'message': formRef.elements.message.value
            };
            const response = await fetch('/api/feedback', {
                method: 'POST',
                body: JSON.stringify(feedbackObj),
                headers: {
                    'Content-Type': 'application/json'
                }
            });

            const result = await response.json();
            if (!response.ok) {
                throw new Error(result?.message);
            }

            document.getElementById('formResults').style.display = 'flex';
            let elem = document.getElementById('message');
            elem.style.display = 'inline-block';
            elem.classList.add('result-group__item_success');
            elem.innerHTML = result?.message;

            formRef.reset();
        } catch (error) {
            document.getElementById('formResults').style.display = 'flex';
            let elem = document.getElementById('message');
            elem.style.display = 'inline-block';
            elem.classList.add('result-group__item_error');
            elem.innerHTML = error?.message;
        }
    });
});
