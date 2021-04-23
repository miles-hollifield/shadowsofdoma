//img1
const CLOSE = document.querySelector('.close');
const BOXOUT = document.querySelector('.modalOuterBox');
const BOXIN = document.querySelector('.modalContent');
const IMG1 = document.querySelector('#img1');
const MODAL1 = document.querySelector('#modal1');
IMG1.addEventListener('click', function(e){
    MODAL1.style.display = 'block';
});
CLOSE.addEventListener('click', () => BOXOUT.style.display = 'none');
BOXOUT.addEventListener('click', function(e){
    if(e.target.matches('.modalOuterBox')){
        BOXOUT.style.display = 'none';
    }
});

//img2
const CLOSE2 = document.querySelector('.close2');
const BOXOUT2 = document.querySelector('.modalOuterBox2');
const BOXIN2 = document.querySelector('.modalContent2');
const IMG2 = document.querySelector('#img2');
const MODAL2 = document.querySelector('#modal2');
IMG2.addEventListener('click', function(e){
    MODAL2.style.display = 'block';
});
CLOSE2.addEventListener('click', () => BOXOUT2.style.display = 'none');
BOXOUT2.addEventListener('click', function(e){
    if(e.target.matches('.modalOuterBox2')){
        BOXOUT2.style.display = 'none';
    }
});

//img3
const CLOSE3 = document.querySelector('.close3');
const BOXOUT3 = document.querySelector('.modalOuterBox3');
const BOXIN3 = document.querySelector('.modalContent3');
const IMG3 = document.querySelector('#img3');
const MODAL3 = document.querySelector('#modal3');
IMG3.addEventListener('click', function(e){
    MODAL3.style.display = 'block';
});
CLOSE3.addEventListener('click', () => BOXOUT3.style.display = 'none');
BOXOUT3.addEventListener('click', function(e){
    if(e.target.matches('.modalOuterBox3')){
        BOXOUT3.style.display = 'none';
    }
});

//img4
const CLOSE4 = document.querySelector('.close4');
const BOXOUT4 = document.querySelector('.modalOuterBox4');
const BOXIN4 = document.querySelector('.modalContent4');
const IMG4 = document.querySelector('#img4');
const MODAL4 = document.querySelector('#modal4');
IMG4.addEventListener('click', function(e){
    MODAL4.style.display = 'block';
});
CLOSE4.addEventListener('click', () => BOXOUT4.style.display = 'none');
BOXOUT4.addEventListener('click', function(e){
    if(e.target.matches('.modalOuterBox4')){
        BOXOUT4.style.display = 'none';
    }
});

//img5
const CLOSE5 = document.querySelector('.close5');
const BOXOUT5 = document.querySelector('.modalOuterBox5');
const BOXIN5 = document.querySelector('.modalContent5');
const IMG5 = document.querySelector('#img5');
const MODAL5 = document.querySelector('#modal5');
IMG5.addEventListener('click', function(e){
    MODAL5.style.display = 'block';
});
CLOSE5.addEventListener('click', () => BOXOUT5.style.display = 'none');
BOXOUT5.addEventListener('click', function(e){
    if(e.target.matches('.modalOuterBox5')){
        BOXOUT5.style.display = 'none';
    }
});