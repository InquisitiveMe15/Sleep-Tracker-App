let hr = 0;
let min = 0;
let sec = 0;
let timer = true;

const start = () => {
    if (timer == true){
        timer = false;
        click();
    }
}

function stop () {
    if (timer == false ){
        timer = true;
    }
}

function click () {
    if (timer == false){
        sec = parseInt(sec);
        min = parseInt(min);
        hr = parseInt(hr);
        sec += 1;
        if (sec == 60) {
            min += 1;
            sec = 0;
            if (min == 60) {
              hr += 1;
              min = 0;
            }
        }
    }
}


const reset = () => {
    hr = 0;
    min = 0;
    sec = 0;
}




