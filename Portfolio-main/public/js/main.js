document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        fetch('contact.php', {
            method: 'POST',
            body: new FormData(form)
        })
        .then(response => response.text())
        .then(data => {
            successMessage.style.display = 'block';
            form.reset();
        })
        .catch(error => console.error('Error:', error));
    });
});