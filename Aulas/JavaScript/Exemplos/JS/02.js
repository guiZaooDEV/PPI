let contador=0
let button=document.querySelector("button");
button.addEventListener("keypress",(evento)=>{
    console.log(evento.log)
    contador++;
    button.innerHTML=contador+evento.key+" KeyCode"+evento.keycode
})
