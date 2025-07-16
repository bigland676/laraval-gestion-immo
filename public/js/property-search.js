function initPropertySearch() {
    const searchForm = document.querySelector('.search-form');

    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            // Validation basique
            const location = this.querySelector('input[name="location"]').value;
            const type = this.querySelector('select[name="type"]').value;

            if (!location && !type) {
                e.preventDefault();
                alert('Veuillez saisir au moins un critère de recherche');
                return false;
            }
        });
    }

    // Effet parallax pour le hero
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const heroBackground = document.querySelector('.hero-background img');

        if (heroBackground) {
            heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
    });
}
