//document.querySelector('p').addEventListener('click', closeBox);
document.querySelector('#galllery-grid img').addEventListener('click', function(e){
  if(e.target.matches('#galllery-grid img')){
    showBox();
  }
});

function closeBox(){
  document.querySelector('#modal').style.display = 'none';
}

function showBox(){
  document.querySelector('#modal').style.display = 'block';
}

