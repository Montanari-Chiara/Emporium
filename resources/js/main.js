// console.log('hello word');
let typewriter1 = document.querySelector('.typewriter1');
let typewriter2 = document.querySelector('.typewriter2');

setTimeout(() => {
    typewriter1.classList.add('typewriter');
    typewriter1.classList.remove('invisible');
}, 2000);
setTimeout(() => {
    typewriter1.style.border = 'none';
}, 4850);
setTimeout(() => {
    typewriter2.classList.add('typewriter');
    typewriter2.classList.remove('invisible');
}, 5000);
setTimeout(() => {
    typewriter2.style.border = 'none';
}, 7600);
