export default function setContactForm() {
    try {
        const inputText = document.querySelector('.form__text input[type="text"]');
        const inputEmail = document.querySelector('.form__text input[type="email"]');
        const textarea = document.querySelector('.form__textarea textarea');

        inputText.addEventListener('focus', (event) => {
            event.target.closest(".form__text").classList.add('is-active');
        })
        inputText.addEventListener('blur', (event) => {
            if (event.target.value == "") {
                event.target.closest(".form__text").classList.remove('is-active');                
            }
        })
        inputEmail.addEventListener('focus', (event) => {
            event.target.closest(".form__text").classList.add('is-active');
        })
        inputEmail.addEventListener('blur', (event) => {
            if (event.target.value == "") {
                event.target.closest(".form__text").classList.remove('is-active');
            }
        })
        textarea.addEventListener('focus', (event) => {
            event.target.closest(".form__textarea").classList.add('is-active');
        })
        textarea.addEventListener('blur', (event) => {
            if (event.target.value == "") {
                event.target.closest(".form__textarea").classList.remove('is-active');
            }
        })
    }
    catch (error) {
        console.log(error)
    }
}