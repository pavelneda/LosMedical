const burger = document.querySelector(".burger-menu")
const cross = document.querySelector(".cross")
const nav = document.querySelector(".nav")
const lang = document.querySelector(".header-lang")
const headerTop = lang.parentNode

const call = document.querySelector(".call")
let scrollButtons = document.querySelectorAll(".scroll-btn")

window.addEventListener('resize', function() {
    changeLang()
})

burger.onclick = function(){ 
    changeBurgerStatus()
}

cross.onclick = function(){
    changeBurgerStatus()
}


/* added smooth scroll to form */
scrollButtons.forEach( item => item.onclick = function(){
    call.scrollIntoView({behavior : "smooth"})
})

/*first call in loading page*/
changeLang()



function changeBurgerStatus(){
    lang.classList.toggle("block")
    burger.classList.toggle("hiden")
    cross.classList.toggle("block")
    nav.classList.toggle("block")
    
}


function changeLang() {
    let w = window.innerWidth
    if (w <= 768) {
        nav.append(lang)
    }else{
        headerTop.append(lang)
    }
  }
  
  


