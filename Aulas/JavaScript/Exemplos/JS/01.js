
function alertaOlaMundo(){
    let p = "Hello World"
    console.log(p)
    alert(p)
    document.querySelector("p").innerHTML=p
}

var click=document.querySelector("#click");

function contaclique(){
    let num=Number.parseInt(click.innerHTML)
    click.innerHTML=num+1
}

click.addEventListener("click",contaclique)
