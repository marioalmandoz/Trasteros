const nombre=document.getElementById("nombre")
const apellidos=document.getElementById("apellidos")
const tfn=document.getElementById("telefono")
const dni=document.getElementById("dni")
const fech_nac=document.getElementById("fecha_nac")
const email=document.getElementById("email")
const pass1=document.getElementById("password1")
const pass2=document.getElementById("password2")

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^[a-zA-Z0-9\_\-]{6,16}$/, // 6 a 12 digitos.
	telefono: /^\d{8}$/ // 8 números.
}

const form=document.getElementById("form")
const parrafo=document.getElementById("warnings")

form.addEventListener("submit",e=>{
    e.preventDefault()
    let warnings=""
    let valorEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/"






})