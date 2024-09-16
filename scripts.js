document.addEventListener("DOMContentLoaded", function() {
    // Función que se activa al hacer scroll para las imágenes de contenido
    const scrollEffect = () => {
        const images = document.querySelectorAll('.fade-in');
        images.forEach(image => {
            const imagePosition = image.getBoundingClientRect().top;
            const screenHeight = window.innerHeight;
            if (imagePosition < screenHeight - 100) {
                image.classList.add('visible');
            }
        });
    };

    // Efecto de aparición suave para el logo al cargar la página
    const logo = document.querySelector('.logo');
    if (logo) {
        setTimeout(() => {
            logo.classList.add('visible');
        }, 500); // Espera 0.5 segundos antes de activar el efecto en el logo
    }

    // Escucha el evento scroll para activar el efecto de las imágenes de contenido
    window.addEventListener('scroll', scrollEffect);
    scrollEffect(); // Llamar inmediatamente para revisar imágenes en la pantalla inicial
});
