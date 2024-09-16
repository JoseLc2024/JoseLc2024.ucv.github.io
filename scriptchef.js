document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.chef img');

    images.forEach(img => {
        img.addEventListener('mouseover', () => {
            img.style.transform = 'scale(1.1)'; // Agranda la imagen al 120%
            img.style.transition = 'transform 0.3s ease'; // Transición suave
        });

        img.addEventListener('mouseout', () => {
            img.style.transform = 'scale(1)'; // Vuelve al tamaño original
        });
    });
});
