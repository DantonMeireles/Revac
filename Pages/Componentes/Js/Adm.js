document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault();
    var date = document.querySelector('input[name="inDate"]').value;
    var time = document.querySelector('input[name="inTime"]').value;
    to = new Date(date + ' ' + time);
});

function update() {
    var from = new Date();
    diff = to - from;
    if (diff > 0) {
        var dias = (Math.floor(diff / 1000 / 60 / 60 / 24)),
            horas = (Math.floor(diff / 1000 / 60 / 60) % 24),
            minutos = (Math.floor(diff / 1000 / 60) % 60),
            segundos = (Math.floor(diff / 1000) % 60)
        document.querySelector('#dias').innerText = dias
        document.querySelector('#horas').innerText = horas
        document.querySelector('#minutos').innerText = minutos
        document.querySelector('#segundos').innerText = segundos
    } 
}
var interval = setInterval(update, 1000)