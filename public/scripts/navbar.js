const logo = document.getElementById("logo")
const menu = document.getElementById("open")
const dropdown = document.getElementById("dropdown")
const to_booking = document.getElementsByClassName("booking")

logo.addEventListener("click", function(){
    window.location.href = "home"
})

menu.addEventListener("click", function(){
    if(dropdown.className == "nav-links") {
        dropdown.className = "nav-links--hide"
        menu.src = "menu.svg"
    } else {
        dropdown.className = "nav-links"
        menu.src = "cross.svg"
    }
})

for(let i = 0; i < to_booking.length; i++)
    to_booking[i].addEventListener("click", function(){
        window.location.href = "room-details"
    })