const email=document.getElementById("email")
const pass=document.getElementById("contraseña")
const form=document.getElementById("form")

form.addEventListener("submit",e=>{
    e.preventDefault()
    let fallo = false
    let cadenaSinNumeros= /^[a-zA-Z\s]{1,40}$/ 
    let cadenaSinMayus =/^[a-z0-9\s]{1,40}$/ 
    let cadenaSinMinus =/^[A-Z0-9\s]{1,40}$/ 
	let password = /^[a-zA-Z0-9\_\-]{6,16}$/ // 6 a 12 digitos.
    
    if(!(pass.value != email.value)){
        fallo=true
        pass1.focus();
        alert('El email y la contraseña no pueden ser iguales')
    }
    if((pass.value).length<8){
        fallo=true
        alert('La contraseña debe tener mínimo 8 carácteres')
        pass1.focus();
    }else if (cadenaSinNumeros.test(pass.value)) {
      fallo=true
      alert('La contraseña debe tener algún número')
    }else if(cadenaSinMayus.test(pass.value)){
        fallo=true
      alert('La contraseña debe tener alguna mayúscula')
    }else if(cadenaSinMinus.test(pass.value)){
        fallo=true
        alert('La contraseña debe tener alguna minúscula')
    }
    
    if(!fallo){
        form.submit();
    }

})