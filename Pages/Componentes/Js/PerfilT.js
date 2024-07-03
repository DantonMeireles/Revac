(function() {
    $(this).addClass("active").siblings().remove
    Class('active');
})


const tabBtn = document.querySelectorAll('.nav ul li');
const tab = document.querySelectorAll('.tab');

function tabs(panelIndex) {
    tab.forEach(function(node) {
        node.style.display = 'none';
    });
    tab[panelIndex].style.display = 'block';
}
tabs(0);

/*Engrenagem que abre menu*/

function menudToggle() {
    const toggleMenud = document.querySelector(".menud");
    toggleMenud.classList.toggle("active");
  }


