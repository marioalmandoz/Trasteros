const email=document.getElementById("email")


form.addEventListener("submit",e=>{
    e.preventDefault()

    let valorEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    if(!valorEmail.test(email.value)){
        alert('El e-mail no es válido, recuerde ejemplo@servidor.extensión')
    }

})