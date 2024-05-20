// Scroll Reveal
const sr = ScrollReveal ({
    origin: 'top',
    distance: '40px',
    duration: 2000,
    reset: true
});
 
 
sr.reveal(`.home-text, .home-img,
            .about-img, .about-text,
            .box, .s-box,
            .btn, .connect-text,
            .contact-box`, {
    interval: 200
})