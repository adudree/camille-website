(function() {
    function updateWidth() {
        const vw = window.innerWidth;
        const carrousel = document.querySelector('.carrousel');
        if (carrousel) {
            carrousel.style.width = vw + 'px';
        }
        console.log('test');
    }

    // On window resize, update the width
    window.addEventListener('resize', updateWidth);

    // On initial load
    updateWidth();
})();
