// Mobile nav
const nav = document.getElementById("mainNav");
const toggle = document.querySelector(".nav-toggle");
if (nav && toggle) {
    toggle.addEventListener("click", () => {
        const open = nav.classList.toggle("is-open");
        toggle.setAttribute("aria-expanded", open ? "true" : "false");
    });
}

// Feedback widget
const panel = document.getElementById("feedbackPanel");
const thanks = document.getElementById("feedbackThanks");
const cancel = document.getElementById("feedbackCancel");
document.querySelectorAll("[data-feedback]").forEach(btn => {
    btn.addEventListener("click", () => {
        if (panel) panel.hidden = false;
        if (thanks) thanks.hidden = true;
    });
});
if (cancel && panel) {
    cancel.addEventListener("click", () => {
        panel.hidden = true;
    });
}

// Cookie banner
const cookie = document.getElementById("cookieBanner");
const accept = document.getElementById("cookieAccept");
const reject = document.getElementById("cookieReject");

function hideCookie(){ if(cookie) cookie.style.display = "none"; }

if (accept) accept.addEventListener("click", hideCookie);
if (reject) reject.addEventListener("click", hideCookie);