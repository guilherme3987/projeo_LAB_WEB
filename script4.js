const novaSenha = document.querySelector("#nova_pass");
const confirmSenha = document.querySelector("#pass");
const form = document.querySelector("form");


form.addEventListener("submit", function(event) {
  event.preventDefault();

  var testeEmail = document.getElementById("email").value;
  var testeNsenha = document.getElementById("nova_pass").value;
  var testePass = document.getElementById("pass").value;

  if((testeNsenha != testePass ) || (!(EmailValidacao(testeEmail))) || (testeEmail == " ") || (testeNsenha == " ") || (testePass == " ")){
    alert("Preencha os campos corretamente: Senhas diferentes ou espaços em branco");
  }else{
   // teste de requisições e envio de dados para php
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        alert("Dados Cadastrados");
      }
      var formData = new FormData();
      formData.append("email",testeEmail);
      formData.append("pass",testePass);

      xhr.open("POST","dados_troca.php",true);
      xhr.send(formData);
    }; 
  }

});


   /*

   if(((testePass === " ") || (testePass.length <8)) || (testeEmail === " ") || !(EmailValidacao(testeEmail))){
    alert("Preencha os campos corretamente");
    return false;
   }
   else{
    alert("Dados enviados");
    formulario.submit();
   }
*/


//Validação de email com regex
function EmailValidacao (email){
    const emailRegex = new RegExp(
        // a até z minúsculo,a a z maiusculo e traços seguidos por @ e .com
        /^[a-zA-z0-9._-]+@[a-zA-z0-9._-]+\.[a-zA-Z]{2,}$/
    );
    if(emailRegex.test(email)){
        return true;
    }
    else{
        return false;
    }
}