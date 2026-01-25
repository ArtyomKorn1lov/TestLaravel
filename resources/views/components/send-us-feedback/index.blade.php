<form class="contacts__form form" id="contactsForm" method="get">
    <div class="form__body">
        <h4 class="small-header uppercase-text">Send us message</h4>
        <span class="form__label">Full Name</span>
        <input name="name" class="form__field" type="text" placeholder="Full Name" minlength="4" required />
        <span class="form__error">Field "Full Name" is invalid! Enter min 4 symbols</span>
        <span class="form__label form__label_margine-top32">Email</span>
        <input name="email" class="form__field" type="email" placeholder="Email" required />
        <span class="form__error">Field "Email" is invalid!</span>
        <span class="form__label form__label_margine-top32">Message</span>
        <textarea name="message" class="form__field" cols="30" rows="3" placeholder="Message"></textarea>
        <div id="formResults" class="form__result-group result-group">
            <h5 class="result-group__title">Form result:</h5>
            <span id="nameValue" class="result-group__item"></span>
            <span id="emailValue" class="result-group__item"></span>
            <span id="messageValue" class="result-group__item"></span>
        </div>
    </div>
    <button class="primary-button form__submit" type="submit">Submit</button>
</form>
