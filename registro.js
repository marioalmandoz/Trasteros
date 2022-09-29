const nombre=document.getElementById("nombre")
const apellidos=document.getElementById("apellidos")
const tfn=document.getElementById("telefono")
const dni=document.getElementById("dni")
const fech_nac=document.getElementById("fecha_nac")
const email=document.getElementById("email")
const pass1=document.getElementById("password1")
const pass2=document.getElementById("password2")
const form =document.getElementById("form")
const parrafo=document.getElementById("warnings")


form.addEventListener("submit",e=>{
    e.preventDefault()
    let fallo = false
    let warnings=""
	let nom = /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Letras y espacios, pueden llevar acentos.
    let apell = /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Letras y espacios, pueden llevar acentos.
	let password = /^[a-zA-Z0-9\_\-]{6,16}$/ // 6 a 12 digitos.
	let telefono = /^\d{8}$/ // 8 números.
    let valorEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    let valorDNI = /^\d{8}[a-zA-Z]$/

    if(!nom.test(nombre.value)){
        warnings +=`El nombre no es válido, recuerde solo letras y espacios <br>`
    }
    if(!apell.test(apellidos.value)){
        warnings +=`Los apellidos no son válidos, recuerde solo letras y espacios<br>`
    }
    if(!valorEmail.test(email.value)){
        warnings+= `El e-mail no es válido, recuerde ejemplo@servidor.extensión <br>`
        fallo=true
    }
    if(!valorDNI.test(dni.value)){
        warnings +=`El DNI no es válido, recuerde 8 letras y letra en mayúscula <br>`
        fallo=true
    }
    if(!telefono.test(tfn.value)){
        warnings +=`El teléfono debe ser de 8 números <br>`
        fallo = true
    }
    if(!password.test(pass1.value)){
        warnings+= `La contraseña no es válida, solo se pueden letras, números, - y _<br>`            
        fallo= true
    }
    if(pass2.value != pass1.value){
        warnings += `Las contraseñas no coinciden <br>`    
        fallo = true
    }
    
    
    if(fallo){
        parrafo.innerHTML = warnings
    }


})