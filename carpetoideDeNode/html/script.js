function mostrarnombreForIn(){
    let inputNombre = document.getElementsByName("pepito");
    for (const key in inputNombre) {
        //if (inputNombre.hasOwnProperty(key)) {
            console.log(key.value)
            
        //}
    }
}

function mostrarnombreForOf(){
    let inputNombre = document.getElementsByName("pepito");
    for (const key of inputNombre) {
        console.log(key.value)
    }
}

function mostrarnombreForEach(){
    let inputNombre = document.getElementsByName("pepito");
    inputNombre.forEach(key => {
        console.log(key.value)
    });
}

function mostrarnombreFor(){
    let inputNombre = document.getElementsByName("pepito");
    for (let i = 0;i<inputNombre.length;i++){
        console.log(inputNombre[i].value)
    }
}

function mostrarAlgo(){

    let inputNombre = document.querySelectorAll("#nombre1");
    inputNombre.forEach(key => {
        console.log(key)
    });

}