const btn = document.getElementById('hamburger');
const side = document.getElementById('sidebar');
const closeBtn = document.getElementById('closeSidebar');

btn.addEventListener('click', ()=> {
    side.classList.add('open');
});

closeBtn.addEventListener('click', ()=> {
    side.classList.remove('open');
});

document.addEventListener('click', (e)=>{
    if(side.classList.contains('open') && !side.contains(e.target) && e.target !== btn){
        side.classList.remove('open');
    }
});
