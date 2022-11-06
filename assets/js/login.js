// sign in / sign up

var signUp = document.querySelector('.sign_up');
var signUpSwitch = document.querySelector('.sign_up_switch');
var signIn = document.querySelector('.sign_in');
var signInSwitch = document.querySelector('.sign_in_switch');
var modal = document.querySelector('.modal');
var modalSignUp = document.querySelector('.signup');
var modalSignIn = document.querySelector('.signin');
var modalOverlay = document.querySelector('.modal__overlay');
var modalReturns = document.querySelectorAll('.btnReturn');


signIn.onclick = function () {
    modal.style.display = "flex";
    modalSignIn.style.display = "block";
};

signUp.onclick = function () {
    modal.style.display = "flex";
    modalSignUp.style.display = "block";
};

signUpSwitch.onclick = function () {
    modalSignUp.style.display = "block";
    modalSignIn.style.display = "none";
};

signInSwitch.onclick = function () {
    modalSignIn.style.display = "block";
    modalSignUp.style.display = "none";
};


modalOverlay.onclick = function () {
    modalSignIn.style.display = "none";
    modalSignUp.style.display = "none";
    modal.style.display = "none";
};

for (var modalReturn of modalReturns) {

    modalReturn.onclick = function () {
        modalSignIn.style.display = "none";
        modalSignUp.style.display = "none";
        modal.style.display = "none";
    };
}
