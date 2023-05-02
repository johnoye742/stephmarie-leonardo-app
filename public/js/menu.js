window.addEventListener("load", (ev) => {
    const toggle = document.getElementById("menu-toggle")
    const navcon = document.getElementById("navcon")
    const cancel = document.getElementById("cancel-menu")
    toggle.addEventListener("click", () => {
        if(navcon.classList.contains("hidden")) {
            navcon.classList.replace("hidden", "flex")
        }
    })
    cancel.addEventListener("click", () => {
        if(navcon.classList.contains("flex")) {
            navcon.classList.replace("flex", "hidden")
        }
    })
})