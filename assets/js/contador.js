var end = new Date('01/13/2022 12:30 AM');
var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var timer;


function showRemaining() {
    var now = new Date();
    var distance = end - now;
    if (distance < 0) {

        clearInterval(timer);
        //document.getElementById('countdown').innerHTML = 'EXPIRED!';
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Una oferta a caducado',
            showConfirmButton: false,
            timer: 1000
        })

        return;
    }
    var days = Math.floor(distance / _day);
    var hours = Math.floor((distance % _day) / _hour);
    var minutes = Math.floor((distance % _hour) / _minute);
    var seconds = Math.floor((distance % _minute) / _second);

    const contdias = document.getElementsByClassName('dias');
    const conthoras = document.getElementsByClassName('horas');
    const contminutos = document.getElementsByClassName('minutos');
    const contsegundos = document.getElementsByClassName('segundos');
    for (var i = 0; i < contdias.length; i++) {
        //document.getElementsByClassName('dias')[i].innerHTML = days;
        contdias[i].innerHTML = days;
        conthoras[i].innerHTML = hours;
        contminutos[i].innerHTML = minutes;
        contsegundos[i].innerHTML = seconds;
    }

    //console.log(document.getElementsByClassName('dias')[0].innerHTML = days);

}
timer = setInterval(showRemaining, 1000);

