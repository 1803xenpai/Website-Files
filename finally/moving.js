const sign_in_btn = document.querySelector('#sign-in-button')
const sign_up_btn = document.querySelector('#sign-up-button')
const container = document.querySelector('.container')

sign_up_btn.addEventListener('click', ()=>{
    container.classList.toggle('sign-up-mode');
})