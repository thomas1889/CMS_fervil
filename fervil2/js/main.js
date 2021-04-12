const height = document.body.scrollHeight - window.innerHeight;
const background = document.getElementById('background');

window.onscroll = () => {
  const widthBackground = (window.pageYOffset / height) * 350;
  if (widthBackground<=100) {
    background.style.width = widthBackground + '%';
  }
}
