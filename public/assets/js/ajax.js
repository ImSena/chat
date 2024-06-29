$.ajax({
    type: 'POST',
    url: '/chat/scripts/processa_form.php',
    data: {
        acao: 'cadastrar', // ou 'cadastrar'
        email: email,
        password: password
    },
    success: function(response) {
        if (response) {
            console.log(response)
        } else {
            console.log(response)
        }
    },error:function(response){
        console.log(response);
    }
});