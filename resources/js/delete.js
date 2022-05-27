const del = document.querySelectorAll('.deleted');



del.forEach(btn => {
    btn.addEventListener('click', () => {
        confirm('Are you sure?');
    })
});


function ciao() {
    console.log('ciao');
}

// ciao();
