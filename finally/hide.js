const sign_up = document.querySelector('#sign-up-form')
const sign_in = document.querySelector('#sign-in-form')
let isClicked = true;

let toggleForm = function(){
    if(isClicked){
        sign_up.style.display = 'block';
        sign_in.style.display = 'none';
        isClicked = false;
    }else{
        sign_up.style.display = 'none';
        sign_in.style.display = 'block';
        isClicked = true;
    }
}




