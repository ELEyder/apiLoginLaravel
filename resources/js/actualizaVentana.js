// Cuando un contenido se coloca en absolute - relative, es como si lo sacaras del contenedor, por lo que no lo toma como si estuviera dentro,
//asi que por eso la altura se coloca en 0
const b1 = document.getElementById('b1')
const slider = document.getElementById('slider')

function alturaSlider() {
    var alturaBanner = b3.offsetHeight;
    slider.style.height = alturaBanner+"px"
}

b1.addEventListener('load', alturaSlider);

setTimeout(500, alturaSlider())

window.addEventListener('resize', function() {
    alturaSlider();
});