export function toggleModal() {
    try {
        const elBtn = document.querySelector('.menu-toggle');
        const elModal = document.querySelector('.modal-menu');
        elBtn.addEventListener('click', function () {
            if (elBtn.classList.contains('is-active')) {
                elBtn.classList.remove('is-active');
                elModal.classList.remove('is-active');
            } else {
                elBtn.classList.add('is-active');
                elModal.classList.add('is-active');
            }
        })
    }
    catch (error) {
        console.log(error);
    }
}

export function resetModal() {
    try {
        const elBtn = document.querySelector('.menu-toggle');
        const elModal = document.querySelector('.modal-menu');
        elBtn.classList.remove('is-active');
        elModal.classList.remove('is-active');
    }
    catch (error) {
        console.log(error);
    }
}