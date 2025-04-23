// Down
function ScrollDownDown() {
    var ScrollDownDowns = document.querySelectorAll(".ScrollDownDown");

    for (var i = 0; i < ScrollDownDowns.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = ScrollDownDowns[i].getBoundingClientRect().top;
        var elementVisible = 1;

        if (elementTop < windowHeight - elementVisible) {
            ScrollDownDowns[i].classList.add("activeDown");
        } else {
            ScrollDownDowns[i].classList.remove("activeDown");
        }
    }
}
window.addEventListener("scroll", ScrollDownDown);


// Up
function ScrollDownUp() {
    var ScrollDownUps = document.querySelectorAll(".ScrollDownUp");

    for (var i = 0; i < ScrollDownUps.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = ScrollDownUps[i].getBoundingClientRect().top;
        var elementVisible = 1;

        if (elementTop < windowHeight - elementVisible) {
            ScrollDownUps[i].classList.add("activeUp");
        } else {
            ScrollDownUps[i].classList.remove("activeUp");
        }
    }
}
window.addEventListener("scroll", ScrollDownUp);

// Left
function ScrollDownLeft() {
    var ScrollDownLefts = document.querySelectorAll(".ScrollDownLeft");

    for (var i = 0; i < ScrollDownLefts.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = ScrollDownLefts[i].getBoundingClientRect().top;
        var elementVisible = 1;

        if (elementTop < windowHeight - elementVisible) {
            ScrollDownLefts[i].classList.add("activeLeft");
        } else {
            ScrollDownLefts[i].classList.remove("activeLeft");
        }
    }
}
window.addEventListener("scroll", ScrollDownLeft);

// Right
function ScrollDownRight() {
    var ScrollDownRights = document.querySelectorAll(".ScrollDownRight");

    for (var i = 0; i < ScrollDownRights.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = ScrollDownRights[i].getBoundingClientRect().top;
        var elementVisible = 1;

        if (elementTop < windowHeight - elementVisible) {
            ScrollDownRights[i].classList.add("activeRight");
        } else {
            ScrollDownRights[i].classList.remove("activeRight");
        }
    }
}
window.addEventListener("scroll", ScrollDownRight);

// Transparent
function ScrollDownTransparent() {
    var ScrollDownTransparents = document.querySelectorAll(".ScrollDownTransparent");

    for (var i = 0; i < ScrollDownTransparents.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = ScrollDownTransparents[i].getBoundingClientRect().top;
        var elementVisible = 1;

        if (elementTop < windowHeight - elementVisible) {
            ScrollDownTransparents[i].classList.add("activeTransparent");
        } else {
            ScrollDownTransparents[i].classList.remove("activeTransparent");
        }
    }
}
window.addEventListener("scroll", ScrollDownTransparent);