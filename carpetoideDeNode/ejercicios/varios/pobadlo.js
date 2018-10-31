function incluirNavegador(listaNavegadores){
    listaNavegadores.push("Chrome")
}
 let misNavs=["Opera","Safari","Firefox"]


 function sumar(x){
     return x = x+5
 }
 function sumarNumeros(){
     let x = 10
     console.log(x)
     sumar(x)
     console.log(x)
 }

function multiply(multiplicador, ...valores){
    let i = 0
    console.log(arguments)
    for(i=0 ;i<valores.length;i++)
    valores[i] = valores[i] *multiplicador
    return valores
}

function creaSumador(x){
    return function(x){
        return x+x
    }
}

let sumador5=creaSumador(5)


// var a = 10;
// (function(){
//     var a =15
//     window.x = function(){
//         alert(a)
//     }
// })()
// x()

// console.log(x);


function div3(num){
    var res = num/3
    if(res===0 || res%3!==0){
        return res;
    }return div3(res/3)
}

function div4(num){
    var res = num/4
    if(res===0 || res%4!==0){
        return res;
    }return div4(res/4)
}

function div(num1,num2){
    if(num1%1!=0 && num2%1!=0){
        return num1+num2
    }else{
        return div(div3(num1),div4(num2))
    }
}
var manolo44 = div(100,32)
console.log(manolo44)