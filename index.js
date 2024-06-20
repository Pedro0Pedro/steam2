const clock = document.getElementById('clock');
const date = new Date();
setInterval(() => {
    const date = new Date();

    let hours = date.getHours();
    if (hours < 10) {
        hours = `0${hours}`;
    }

    let minutes = date.getMinutes();

    if (minutes < 10) {
        minutes = `0${minutes}`;
    }

    let seconds = date.getSeconds();
    if (seconds < 10) {
        seconds = `0${seconds}`;
    }


    const formattedTime = `${hours}:${minutes}:${seconds}`;
 
    clock.innerHTML = formattedTime;
}, 1000);

let day = document.getElementById('day');
let dia = date.getDate()

if (dia < 10) {
    dia = `0${dia}`;
}



let mes = date.getMonth() + 1 
if (mes < 10) {
    mes = `0${mes}`;
}

const ano = date.getFullYear()
day.innerHTML = `${dia}/${mes}/${ano}`;
