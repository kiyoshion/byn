export default function smoothScroll(data) {
    data.addEventListener("click", e => {
        const target = e.target;
        if (!target.classList.contains("js-smooth-scroll")) return;
        e.preventDefault();
        const targetId = target.hash;
        document.querySelector(targetId).scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    });
}
