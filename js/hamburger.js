const btn = document.getElementById('btn');
const nav = document.getElementById('nav');

btn.addEventListener('click', function(){
    nav.classList.toggle('show');
})

window.addEventListener('click',(e)=>{
	if(nav.classList.contains('show') && e.target != nav && e.target != btn){
        nav.classList.toggle('show');
	}
})
