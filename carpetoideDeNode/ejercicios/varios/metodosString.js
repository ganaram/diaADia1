let cadena1='Jose Maria '
let cadena2='es '
let cadena3='un '
let cadena4='crack '

let manolo = "Esta Clase seria una maravilla si fuera de día, ahora prefiero echar una siestecilla"

console.log(cadena1.concat(cadena2,cadena3,cadena4))

console.log(manolo.charCodeAt(17)===manolo.charCodeAt(1))

console.log(manolo.includes('Clase',1))

console.log(manolo.indexOf('una',33))

console.log(manolo.split(" "))

let ejemplo = "Este Es Él ejemplO"
let aux =""
for (i=0;i<ejemplo.length;i++){
    if (ejemplo[i].localeCompare(ejemplo[i].toLocaleLowerCase())) {
        aux+=ejemplo[i].toLowerCase();
    }else{aux+=ejemplo[i].toUpperCase();
    }
}
console.log(aux);

function manolo2 (cadena1,cadena2,pos){
    let aux=""
    aux+=
    aux+=cadena2
    aux+=cadena1.slice(pos)
    return aux;
}

console.log(manolo2('Aiva la  merche','leche',8))

function manolo3(cadena1,palabras){
    for(i=0;i<palabras;i++){
        
    }
}