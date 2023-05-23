import MemoryGame from './MemoryGame.js';

const board_game_container = document.body.querySelector('ul[id="board_game_container"]'); 

const repeated_images = [
    './card/Aya.jpg',
    './card/Damien.png', 
    './card/Kevin.png', 
    './card/Clement.png',
    './card/Ghazi.png', 
    './card/Florian.jpg',
    './card/Yanis.png',
    './card/Hristina.png',
    './card/Rayan.png',
    './card/Meijuan.png',
    './card/Angelo.png',
    './card/Khaoula.png',
    './card/Nohe.png',
    './card/Clency.png',
    './card/Emre.png',
    './card/Antoine.png'
  ];
  
  const images_links = repeated_images.concat(repeated_images);



const attempts_count_paragraph = document.body.querySelector('p[data-attempts-count]');

const pair_found_paragraph = document.body.querySelector('p[data-pair-found]'); 

const score_paragraph = document.body.querySelector('p[data-score]');

const timer_paragraph = document.body.querySelector('p[data-timer]');

new MemoryGame({
    board_game_container,
    images_links,
    attempts_count_paragraph,
    pair_found_paragraph,
    score_paragraph,
    timer_paragraph
}); 

let refresh = document.getElementById('NewGame');
refresh.addEventListener('click', function() {
    location.reload();
}, false);