const banners = document.getElementById('banners')
const btn1 = document.getElementById('btn1')
const btn2 = document.getElementById('btn2')
const btn3 = document.getElementById('btn3')
const btn4 = document.getElementById('btn4')
const btn5 = document.getElementById('btn5')

btn1.addEventListener('click', () =>{
    banners.style.left = "0"
    btn1.style.background = "#d9000d"
    btn2.style.background = "#eeeeee"
    btn3.style.background = "#eeeeee"
    btn4.style.background = "#eeeeee"
    btn5.style.background = "#eeeeee"
})
btn2.addEventListener('click', () =>{
    banners.style.left = "-100%"
    btn1.style.background = "#eeeeee"
    btn2.style.background = "#d9000d"
    btn3.style.background = "#eeeeee"
    btn4.style.background = "#eeeeee"
    btn5.style.background = "#eeeeee"
})
btn3.addEventListener('click', () =>{
    banners.style.left = "-200%"
    btn1.style.background = "#eeeeee"
    btn2.style.background = "#eeeeee"
    btn3.style.background = "#d9000d"
    btn4.style.background = "#eeeeee"
    btn5.style.background = "#eeeeee"
})
btn4.addEventListener('click', () =>{
    banners.style.left = "-300%"
    btn1.style.background = "#eeeeee"
    btn2.style.background = "#eeeeee"
    btn3.style.background = "#eeeeee"
    btn4.style.background = "#d9000d"
    btn5.style.background = "#eeeeee"
})
btn5.addEventListener('click', () =>{
    banners.style.left = "-400%"
    btn1.style.background = "#eeeeee"
    btn2.style.background = "#eeeeee"
    btn3.style.background = "#eeeeee"
    btn4.style.background = "#eeeeee"
    btn5.style.background = "#d9000d"
})