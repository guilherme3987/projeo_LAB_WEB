var btn = document.querySelector('#send');

btn.addEventListener("click",(event)=>{
    event.preventDefault();

    var testeEmail = document.getElementById("email").value;
    var testePass = document.getElementById("pass").value;

    /*    
   console.log(testeEmail);
   console.log(testePass);
    */

   if(((testePass === " ") || (testePass.length <8)) || (testeEmail === " ") || !(EmailValidacao(testeEmail))){
    alert("Preencha os campos corretamente");

}
   else{
    var xhr = new XMLHttpRequest();
     
    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            alert("Dados cadastrados");
        }
     };
     var formData = new FormData();
     formData.append("email",testeEmail);
     formData.append("pass",testePass);

     xhr.open("POST","dados_login.php",true);
     xhr.send(formData);
   }


});
//Validação de email com regex
function EmailValidacao (Email){
    const emailRegex = new RegExp(
        // a até z minúsculo,a a z maiusculo e traços seguidos por @ e .com
        /^[a-zA-z0-9._-]+@[a-zA-z0-9._-]+\.[a-zA-Z]{2,}$/
    );
    if(emailRegex.test(Email)){
        return true;
    }
    else{
        return false;
    }
}