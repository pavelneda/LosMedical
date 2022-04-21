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


/* make mask for input tel */

let inputs = document.querySelectorAll('input[type="tel"]')
let im = new Inputmask('38 (999) 999 99 99')
im.mask(inputs)




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
  
  


