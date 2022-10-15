const email=document.getElementById("email")
const form= document.getElementById("form")

form.addEventListener("submit",e=>{
    e.preventDefault()

    let valorEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ //formato nombre@servidor.extension
    if(!valorEmail.test(email.value)){
        alert('El e-mail no es válido, recuerde ejemplo@servidor.extensión')
    }else{
        form.submit();
    }

})