document.getElementById('contact-form').addEventListener('submit', function(event){
    event.preventDefault();

    emailjs.sendForm('service_0kapzad', 'template_566szl8', this)
        .then(function() {
            document.getElementById('status-msg').textContent = "Mensagem enviada com sucesso!";
        }, function(error){
                document.getElementById('status-msg').textContent = "Erro ao enviar a mensagem.";
                console.error('Erro:', error);
        });
});


