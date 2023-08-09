 


let count = setInterval(countdown, 1)
let count2 = setInterval(countdown2, 1)
let count3 = setInterval(countdown3, 1)
let count4 = setInterval(countdown4, 100)
let counting1 = 1000;
let counting2 = 500;
let counting3 = 1200;
let counting4 = 0;
function countdown() {
    counting1++;
    document.querySelector("#count1").innerHTML =
        counting1;
    if (counting1 == 3000) {
        clearInterval(count)
    }
}


function countdown2() {
    counting2++;
    document.querySelector("#count2").innerHTML =
        counting2;
    if (counting2 == 2000) {
        clearInterval(count2)
    }
}

function countdown3() {
    counting3++;
    document.querySelector("#count3").innerHTML =
        counting3;
    if (counting3 == 2300) {
        clearInterval(count3)
    }
}

function countdown4() {
    counting4++;
    document.querySelector("#count4").innerHTML =
        counting4;
    if (counting4 == 11) {
        clearInterval(count4)
    }
}
