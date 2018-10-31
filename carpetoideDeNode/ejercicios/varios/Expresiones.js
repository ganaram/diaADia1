function compruebaNombre(algo){
    if(algo.match(/([A-Z]{1}[a-z]{2,})(\s[A-Z]{1}[a-z]{2,})*/g)){
        return true
    }
}

// function compruebaTlf(algo){
//     if(algo.match(/^([6-7]{1}[0-9]{8}$/g)){
//         return true
//     }
// }


function manolo2 (frase){
    let expr = /^#(?:[0-9a-fA-F]{3}){1,2}$/
    let es = false
    if(expr.test(frase))
        es=true
    return es
}

console.log(manolo2("#242"))

function manolo3(frase){
    var suma = 0
    let palabras = frase.split(' ')
        for (const palabra of palabras) {
            if(isFinite(parseInt(palabra)))
                suma += parseInt(palabra)
        }
        return suma
}

function manolo4(frase1, frase2){
    var suma1 = ''
    var suma2 = ''
    let palabras1 = frase1.split('')
        for (const palabra of palabras1) {
            if(isFinite(parseInt(palabra)) && palabra!=' ')
                suma1 += (palabra)
        }
    let palabras2 = frase2.split('')
        for (const palabra of palabras2) {
            if(isFinite(parseInt(palabra)) && palabra!=' ')
                suma2 += (palabra)
        }
        let resultado = suma1/suma2
        try{
            if(!isFinite(resultado)){
            throw new Error("ERROR 43E.01")
            }
        }catch(err){
            resultado = ""
            console.log(err.message)
        }
    return resultado
}

console.log(manolo4("1 0mmm0","010"))