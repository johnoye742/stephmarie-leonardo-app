window.addEventListener("load", () => {
    const mm = document.querySelectorAll("#mm")
    const sub = document.querySelectorAll("#sub")
    mm.forEach((el, index) => {
        const sb = sub[index];
        const ic = el.querySelector("#ic")
        el.addEventListener("click", () => {
            if(sb.classList.contains("hidden")) {
                sb.classList.replace("hidden", "block")
                ic.classList.add("transform", "rotate-180")
            } else {
                sb.classList.replace("block", "hidden")
                ic.classList.remove("transform", "rotate-180")
            }
        })
    })

    const tg = document.getElementById("m-slider")
    const sidebar = document.getElementById("sidebar")
    const navcon = document.getElementById("navc")
    const cancel = document.getElementById("cancel-men")
    tg.addEventListener("click", () => {
        console.log("dwr")
        if(navcon.classList.contains("hidden")) {
            navcon.classList.replace("hidden", "block")
            
            sidebar.classList.add("scale-[100%]")
        }
    })

    cancel.addEventListener("click", (ev) => {
        if(navcon.classList.contains("block")) {
            navcon.classList.replace("block", "hidden")
        }
    })
})