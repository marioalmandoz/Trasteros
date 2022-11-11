const nombre=document.getElementById("nombre")
const apellidos=document.getElementById("apellidos")
const tfn=document.getElementById("telefono")
const dni=document.getElementById("dni")
const fech_nac=document.getElementById("fecha_nac")
const email=document.getElementById("email")
const pass1=document.getElementById("password1")
const pass2=document.getElementById("password12")
const form =document.getElementById("form")
const parrafo=document.getElementById("warnings")



form.addEventListener("submit",e=>{
    e.preventDefault()
    let fallo = false
	let nom = /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Letras y espacios, pueden llevar acentos.
    let apell = /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Letras y espacios, pueden llevar acentos.
	let password = /^[a-zA-Z0-9\_\-]{6,16}$/ // 6 a 12 digitos.
    let numPass='/[0-9]/'
	let telefono = /^\d{9}$/ // 9 números.
    let valorEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    let valorDNI = /^\d{8}[-][a-zA-Z]$/

    if(!nom.test(nombre.value)){
        alert('El nombre no es válido, recuerde solo letras y espacios')
        fallo=true
    }
    if(!apell.test(apellidos.value)){
        alert('Los apellidos no son válidos, recuerde solo letras y espacios')
        fallo=true
    }
    if(!valorEmail.test(email.value)){
        alert('El e-mail no es válido, recuerde ejemplo@servidor.extensión')
        fallo=true
    }
    if(valorDNI.test(dni.value)){
        numero = dni.value.substr(0,dni.value.length-2);
        letr = dni.value.substr(-1);
        numero = numero % 23;
        letra='TRWAGMYFPDXBNJZSQVHLCKET';
        letra=letra.substring(numero,numero+1);
        if(letr!=letra){
            alert(`El DNI no existe`)
            fallo=true
        }
    }else{
        alert('El DNI no cumple el formato 11111111-A')
        fallo=true
    }
    if(!telefono.test(tfn.value)){
        alert('El teléfono debe ser de 9 números')
        tfn.focus();
        fallo=true
    }
    if(pass1.value = email.value){
        fallo=true
        alert('El email y la contraseña no pueden ser iguales')
    }
    if((pass1.value).length()<8){
        fallo=true
        alert('La contraseña debe tener mínimo 8 carácteres')
        pass1.focus();
    }else if(!(/\d/.test(pass1.value))){
        fallo=true
        alert('La contraseña debe tener algún número')
    }else if(!(/a-z/).test(pass1.value)){
        fallo=true
        alert('La contraseña debe tener minúsculas')
    }else if(!(/A-Z/.test(pass1.value))){
        fallo=true
        alert('La contraseña debe tener mayúsculas')
    }
    if(pass2.value != pass1.value){
        alert('Las contraseñas no coinciden ')   
        fallo=true
    }
    
    if(!fallo){
        form.submit();
    }

})