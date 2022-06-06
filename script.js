const menuButton = document.querySelector(".menuButton")
const navMenu = document.querySelector(".nav-menu")

menuButton.addEventListener("click", () => {
    menuButton.classList.toggle("active")
    navMenu.classList.toggle("active")
})

function openPopup(){
    const popup = document.getElementById('pop-up')
    popup.classList.add('show')
}

function closePopup(){
    const popup = document.getElementById('pop-up')
    popup.classList.remove('show')
}