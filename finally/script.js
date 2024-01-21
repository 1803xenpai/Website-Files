const sign_up = document.querySelector('#sign-up-form')
let isClicked = true;

let toggleForm = function(){
    if(isClicked){
        sign_up.style.display = 'block';
        isClicked = false;
    }else{
        sign_up.style.display = 'none';
        isClicked = true;
    }
}




