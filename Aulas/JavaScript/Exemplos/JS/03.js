let inputa=document.querySelector("#a");
let inputb=document.querySelector("#b");
let btn=document.querySelector("button");
let prst=document.querySelector("#rst")

btn.addEventListener("click",()=>{
    let numberA=Number.parseInt(inputa.value)
    let numberB=Number.parseInt(inputb.value)
    prst.innerHTML=numberA+numberB
})