'use strict';

function isNumeric(n){
    return !isNaN(parseFloat(n)) && isFinite(n);
}

calculate.onclick = function() {
let cs = Number(document.getElementById("cs").value);
let ls  = document.getElementById("ls").value;

    let error = 0;
    if (!isNumeric(ls))
        {
            alert("Введите корректную длину стороны")
            return;
        }
    if (cs >= 10000 || ls >= 10000)
        {
            alert("Введите меньшее значение числа и/или длины сторон")
            return;
        }
    if (ls <= 0)
        {
            alert("Длина стороны должна принимать положительное значение")
            return;
        }
    if (cs<3 || !Number.isInteger(cs))
        {
            alert("Введите корректное число сторон")
            return;
        }
    
let num = (cs * ls * ls) / (4 * Math.tan(Math.PI / cs));
alert("Площадь многоугольника равна "+num.toFixed(2));
}





