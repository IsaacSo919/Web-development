
const more = document.querySelector('.index-button button');

const beepOne = document.getElementById('game-start');

console.log(more);
console.log(beepOne);

more.addEventListener('click', () => {
    beepOne.play();
    const preload = document.createElement('link');
    preload.rel = 'preload';
    preload.as = 'document';
    preload.href = 'pairs.php';
    document.head.appendChild(preload);
    document.body.classList.add('transition'); // Add 'transition' class immediately after audio file is played
    setTimeout(() => {
      window.location.href = 'pairs.php';
    }, 2000);
  });

document.addEventListener('DOMContentLoaded', () => {
document.body.classList.remove('transition');
});