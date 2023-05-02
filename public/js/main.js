window.addEventListener("load", (ev) => {
    const c = document.getElementsByClassName("w-card")
    for(const c1 of c) {
        c1.classList.add("transition-all", "ease-in-out", "duration-5000")
        c1.addEventListener("mouseover", () => {
            c1.classList.add("-translate-y-2")
            c1.classList.replace("shadow-lg", "shadow-xl")
        })
        c1.addEventListener("mouseout", () => {
            c1.classList.remove("-translate-y-2")
            c1.classList.replace("shadow-xl", "shadow-lg")
        })
    }
    if(window.scrollY > 85) {
        navbar.classList.replace("bg-transparent", "bg-white")
        navbar.classList.replace("text-white", "text-black")
    } else {
        navbar.classList.replace("bg-white", "bg-transparent")
        navbar.classList.replace("text-black", "text-white")
    }
})

window.addEventListener("scroll", (ev) => {
    const navbar = document.getElementById("navbar")
    if(window.scrollY > 85) {
        navbar.classList.replace("bg-transparent", "bg-white")
        navbar.classList.replace("text-white", "text-black")
    } else {
        navbar.classList.replace("bg-white", "bg-transparent")
        navbar.classList.replace("text-black", "text-white")
    }
})