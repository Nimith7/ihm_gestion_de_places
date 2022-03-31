let count = 1;
function setColor(btn) {
    let property = document.getElementById(btn);
    if (count === 0) {
        property.style.brackgroundColor = "white"
        count = 1;
        console.log('SetColor Blanche !')
    }
    else {
        property.style.brackgroundColor = "brown"
        count = 0;
        console.log('SetColor Rouge !')
    }
}