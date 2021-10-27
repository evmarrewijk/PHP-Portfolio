console.log('Javascript loaded');

const switchButtton = document.querySelectorAll('.switch_theme');

for (let i = 0; i < switchButtton.length; i++) {
    switchButtton[i].addEventListener('click', function() {
      document.body.classList.toggle('dark');
  });
}
  