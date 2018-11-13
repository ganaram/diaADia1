function argo(){

    let form = document.createElement("form");

    document.body.appendChild(form);    

    for (let counter = 0; counter < 10; counter++) {
        let div = document.createElement("div");
        div.setAttribute("id",counter);
        form.appendChild(div);
        for (let index = 0; index < counter+1; index++) {
            let input = document.createElement("input")
            input.setAttribute("id",index);
            input.setAttribute("onmouseover","ejecutar2("+index+")");
            if(index%2==0){
                 input.className = "berde";
                 input.tagName = "berde";
            }else{
                input.className = "rogo";
                input.tagName = "rogo";
            }
            div.appendChild(input);
        }    
    }

    let boton = document.createElement("input");
    boton.setAttribute("type","button");
    boton.setAttribute("value","PULSAR AKI")
    boton.setAttribute("onclick","ejecutar1()");
    form.appendChild(boton);
    
}

// function cambiaColore(){
//     for (let index = 0; index < 10; index++) {
//         let div = document.getElementById(index);
//         for (let count = 0; count < index; incountdex++) {
//             let inputAux = document.createElement("index");
//             inputAux.setAttribute("id",count);
//             if()
//         }
        
//     }
// }

function ejecutar1(){
    alert("eY b0Ss");
}

function ejecutar2(id){
    let elemento = document.getElementById(id);
    elemento.style.backgroundColor = "pink";
}