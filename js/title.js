const circle = document.querySelector('.circle');
const addClass = ()=>{
    circle.classList.toggle('is-animated');
}

circle.addEventListener('click',addClass ,false);