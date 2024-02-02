var udateTime = function() {
    let currentDate = new Date(),
        hours = currentDate.getHours(),
        minutes = currentDate.getMinutes(), 
        seconds = currentDate.getSeconds(),
        weekDay = currentDate.getDay(), 
        day = currentDate.getDay(), 
        month = currentDate.getMonth(), 
        year = currentDate.getFullYear();

    const weekDays = [
        'DOMINGO',
        'LUNES',
        'MARTES',
        'MIERCOLES',
        'JUEVES',
        'VIERNES',
        'SABADO'
    ];

    document.getElementById('weekDay').textContent = weekDays[weekDay];
    document.getElementById('day').textContent = day;
    
    const months = [
        'ENERO',
        'FEBRERO',
        'MARZO',
        'ABRIL',
        'MAYO',
        'JUNIO',
        'JULIO',
        'AGOSTO',
        'SEPTIEMBRE',
        'OCTUBRE',
        'NOVIEMBRE',
        'DICIEMBRE'
    ];

    document.getElementById('month').textContent = months[month];
    document.getElementById('year').textContent = year;

    document.getElementById('hours').textContent = hours;

    if (minutes < 10) {
        minutes = "0" + minutes
    }

    if (seconds < 10) {
        seconds = "0" + seconds
    }

    document.getElementById('minutes').textContent = minutes;
    document.getElementById('seconds').textContent = seconds;
};

udateTime();

setInterval(udateTime, 1000);