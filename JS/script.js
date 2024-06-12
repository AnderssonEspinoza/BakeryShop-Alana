// Selecciona el navbar
let navbar = document.querySelector('.menu-nav');

// Agrega un evento de scroll a la ventana
window.addEventListener('scroll', function() {
    // Verifica si el desplazamiento vertical es mayor que 50px
    if (window.scrollY > 50) {
        // Si es así, añade la clase 'scrolled' al navbar
        navbar.classList.add('scrolled');
    } else {
        // Si no, quita la clase 'scrolled' del navbar
        navbar.classList.remove('scrolled');
    }
});

//Agrandar las imagenes
document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.products-items');
    const backdrop = document.querySelector('.backdrop');
    
    cards.forEach(card => {
        card.addEventListener('click', (event) => {            
            event.stopPropagation();
            card.classList.toggle('enlarged');
            backdrop.classList.toggle('active');
        });
    });
    //cuando se hace click en la imagen
    backdrop.addEventListener('click', () => {
        const enlargedCard = document.querySelector('.products-items.enlarged');
        if (enlargedCard) {
            enlargedCard.classList.remove('enlarged');
        }
        // Oculta el backdrop
        backdrop.classList.remove('active');
    });

    // Para cerrar la tarjeta agrandada al hacer clic fuera de ella
    document.addEventListener('click', (event) => {
        if (!event.target.closest('.products-items.enlarged')) {
            const enlargedCard = document.querySelector('.products-items.enlarged');
            if (enlargedCard) {
                enlargedCard.classList.remove('enlarged');
            }
            backdrop.classList.remove('active');
        }
    });
});