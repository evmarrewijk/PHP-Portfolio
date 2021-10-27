const switchButtton = document.querySelectorAll('.switch_theme');
const theNav = document.querySelector('.topnav')
if(theNav){
    theNav.addEventListener('click',function(){
        theNav.classList.toggle('dark');
  });
}

for (let i = 0; i < switchButtton.length; i++) {
    switchButtton[i].addEventListener('click', function() {
      console.log("for loop worked");
      const theBody = document.body;
      theBody.classList.toggle('dark');
  });
}
  
const button = document.querySelector('#alert_button');
if(button){
    button.addEventListener('click', buttonFunction)
}

function buttonFunction(){
  alert("I shot my wife.");
}