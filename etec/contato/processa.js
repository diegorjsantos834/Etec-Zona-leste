document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.formulario');
    const modal = document.getElementById("meuModal");
    const span = document.querySelector(".fechar");
    const respostaDiv = document.getElementById("mensagem-resposta");

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // ESSA LINHA evita que abra outra página

            const formData = new FormData(this);

            fetch('processa.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                respostaDiv.innerHTML = data; 
                modal.style.display = "block"; // Abre o modal
                form.reset(); 
            })
            .catch(error => {
                console.error('Erro:', error);
                alert("Erro ao enviar.");
            });
        });
    }

    // Fechar Modal
    if (span) {
        span.onclick = () => modal.style.display = "none";
    }

    window.onclick = (event) => {
        if (event.target == modal) modal.style.display = "none";
    }
});