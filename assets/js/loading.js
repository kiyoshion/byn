export default function loading() {
    window.onload = function () {
        const loading = document.querySelector('.loading');
        this.setTimeout(function () {
            loading.classList.add('is-loaded');
            resolve();
        }, 5000)
    }
}