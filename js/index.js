window.onload = function (){

    let check = document.querySelector("#check");
    let boton = document.querySelector("#enviar");

    check.addEventListener("change", function (){
        if(check.checked){
            boton.disabled = false;
        }else{
            boton.disabled = true;
        }
    })


}