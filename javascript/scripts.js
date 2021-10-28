function login(){

    if (document.getElementById("name").value != document.getElementById("nameaut").value){
        alert("Nome do usuário incorreto");
        return false
    }
     if (document.getElementById("pass").value != document.getElementById("passaut").value){
         alert("Senha incorreta");
         return false
     }  

    return true
}

function perfil(){
     if (document.getElementById("nome").value == ""){
        alert('Preencha o Nome');
        document.getElementById("nome").focus();
        return false;
    }
    if (document.getElementById("sobrenome").value == ""){
        alert('Preencha o Sobrenome');
        document.getElementById("sobrenome").focus();
        return false;
    }
    if (document.getElementById("email").value == ""){
        alert('Preencha o Email');
        document.getElementById("email").focus();
        return false;
    }
    if (document.getElementById("experiencia").value == false){
        alert('Preencha Sobre Sua Experiência');
        return false;
    }
    if (document.getElementById("senioridade").value == false){
        alert('Selecione a Senioridade');
        return false;
    }

    if(confirm("Nome: " + document.getElementById("nome").value +
        "\nSobrenome: " + document.getElementById("sobrenome").value +
        "\nEmail: " + document.getElementById("email").value +
        "\nSenioridade: " + document.getElementById("senioridade").value +
        "\nLinguagem: " + document.querySelector("input[name='devweb']:checked").value +
        "\nConte um pouco mais da sua experiência: " + document.getElementById("experiencia").value +
        "\nOs dados preenchidos estão corretos?")){
            return true
        }else{
            return false
        } 
    
}
