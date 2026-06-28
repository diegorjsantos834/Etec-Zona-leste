document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.formulario');
    const modal = document.getElementById("meuModal");
    const span = document.querySelector(".fechar");
    const respostaDiv = document.getElementById("mensagem-resposta");

    
    //função para ajudar na troca de cor na hora de vaildar o forms
    function aplicarValidacao(input, status) {
    if (status === 'sucesso') {
        input.classList.add('campo_valido');
        input.classList.remove('campo_invalido');
    } else if (status === 'erro') {
        input.classList.add('campo_invalido');
        input.classList.remove('campo_valido');
    } else {
        input.classList.remove('campo_valido', 'campo_invalido');
    }
}

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // evita que abra outra pagina

            //Pega o campo e valida
            const nomeInput = this.querySelector('[name="nome"]');
            const emailInput = this.querySelector('[name="email"]');
            const temaInput = this.querySelector('[name="tema"]');
            const assuntoInput = this.querySelector('[name="msg"]');

            // Verifica se os inputs existem
            if (!nomeInput || !emailInput || !temaInput || !assuntoInput ) {
               console.error("Os campos do formulário não foram encontrados pelo JavaScript.");
               return;
            }

            const nome = nomeInput.value.trim();
            const email = emailInput.value.trim();
            const tema = temaInput.value.trim();
            const assunto = assuntoInput.value.trim();

            let formularioValido = true;

                // Validação do Nome
                if (nome === "" || nome.length < 3) {
                    aplicarValidacao(nomeInput, 'erro');
                    formularioValido = false;
                } else {
                    aplicarValidacao(nomeInput, 'sucesso');
                }

                
                if (email === "" || !email.includes("@")) {
                    aplicarValidacao(emailInput, 'erro');
                    formularioValido = false;
                } else {
                    aplicarValidacao(emailInput, 'sucesso');
                }

                // Validação do Tema
                if (tema === "") {
                    aplicarValidacao(temaInput, 'erro');
                    formularioValido = false;
                } else {
                    aplicarValidacao(temaInput, 'sucesso');
                }

                // Validação do Assunto/Mensagem
                if (assunto === "") {
                    aplicarValidacao(assuntoInput, 'erro');
                    formularioValido = false;
                } else {
                    aplicarValidacao(assuntoInput, 'sucesso');
                }
        
            //para o codigo se as condições acima não forem cumpridas
            if (!formularioValido) {
                return;
            }
            


            

            //

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