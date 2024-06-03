function formhash(form, password) {
    // Crie um novo elemento de input, o qual será o campo para a senha com hash.
    var p = document.createElement("input");

    // Adicione um novo elemento ao nosso formulario
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Cuidado para não deixar que a senha em texto simples não seja enviada.

    password.value = "";

    // Finalmente, envie o formulario.
    form.submit();
}

function regformhash(form, uid, email, password, conf) {
    // Confira se cada campo tem um valor
    if (uid.value == ''      || 
        email.value == ''        || 
        password.value == ''         || 
        conf.value == ''){

        alert('Você deve fornecer todos os detalhes solicitados. Por favor, tente novamente');
        return false;
    }

    // Verifique o nome de usuario

    re = /^\w+$/;

    if(!re.test(form.username.value)) {
        alert("O nome de usuário deve conter apenas letras, números e sublinhados. Tente novamente");
        form.username.focus();
        return false;
    }

    // Confira se a senha é comprida o suficiente (no mínimo, 6 caracteres)
    // A verificação é duplicada abaixo, mas o cuidado extra é para dar mais
    // orientações especificas ao usuário

    if (password.value.legth < 6) {
        alert('A senha precisa ter no minimo 6 caracteres. Tente novamente');
        form.password.focus();
        return false;
    }

    // Pelo menos um numero, uma letra minuscula e outra maiuscula
    // Pelo menos 6 caracteres
               
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
     
    if (!re.test(password.value)) {
        alert('As palavras-passe devem conter pelo menos um número, uma letra minúscula e uma letra maiúscula. Por favor, tente novamente');
        return false;
    }
    // Verificar se a senha e a confirmação são as mesmas
    if (password.value != conf.value) {
        alert('As senhas não se condizem. Tente novamente');
        form.password.focus();
        return false;
    }

    // Crie um novo elemento de input, o qual será o campo para a senha com hash.
    var p = document.createElement("input");

    // Adicione o novo elemento ao nosso formulario.
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden"; 
    p.value = hex_sha512(password.value);

    // Cuidado para não deixar que a senha em texto simples não seja enviada.

    password.value = "";
    conf.value = "";

    // Finalizando,envie o formulario.
    form.submit();
    return true;
}