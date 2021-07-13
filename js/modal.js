var acancel = document.querySelector('[a-cancel]').addEventListener('click', ()=>{
    var modal = document.querySelector('.modal-total')
    modal.classList.remove('visible')
})

var aopen = document.querySelector('[a-open]').addEventListener('click', ()=>{
    var modal = document.querySelector('.modal-total')
    modal.classList.add('visible')
})
