const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');

registerLink.onclick = () => {
	wrapper.classList.add('active');
}

loginLink.onclick = () => {
	wrapper.classList.remove('active');
}


var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
if (!isChrome){
    $('#iframeAudio').remove()
}
else {
    $('#playAudio').remove() // just to make sure that it will not have 2x audio in the background 
}