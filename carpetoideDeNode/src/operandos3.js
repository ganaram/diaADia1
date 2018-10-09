//Implementar las siguientes funciones para que pasen una serie de pruebas
//Usando solo estructuras de control para ello.

//Devuelves 1 si a es mayor que b
//Devuelves -1 si a es menor que b
//Devuelves 0 si a es igual b

const arr = [1,4,5,5,2,6,7,1,4,6]

function compruebanumero(a){
    if(typeof a !== "number" ||  a == Infinity || a <= Number.MIN_VALUE || a >= Number.MAX_VALUE ){
        return true;
}return false;
}

function quienEsMayor(a,b){
    let resultado;

    if(compruebanumero(a) || compruebanumero(b)  ){
        return "Mala asignacion, introduce numeros.";
    }

    resultado = a<b ? resultado = -1 : a>b ? resultado = 1 :resultado = 0

    return resultado

}
console.log(quienEsMayor(1.5,5.7))

//Dado un array de elementos, devuelve la suma de todos aquellos que los elementos sean pares
function sumarElementosPares(elemetos){
    let suma = 0;
    if(elemetos instanceof Array)
            for(let i =0;i<elemetos.lenght;i++){
                for(let elemento of elemetos){
                    if(elemento%2==0){
                        suma+=elemento
                    }
                }
            }
            return suma;
}

console.log(sumarElementosPares([1,5,6,2,6,5,4,6,1]));

//Dado un array de elementos devuelve el valor mas grande de todos ellos.
function escogerValorMasGrande(elemetos){
    let resultado = 0;
        if(elemetos instanceof Array){
            if(elemetos.length>0){}
        }


}

//Dada una palabra cualquier, devuelve la palabra alreves, por ejemplo: "HOLA" => "ALOH"
function invertirUnaPalabra(cad){
    let invertida = "";
    if(typeof(cad)==='string'){
        for(let x of cad){
            invertida = x+invertida
        }
        return invertida;
    }   

}

console.log(invertirUnaPalabra("chingchangchong"))

//Dada un array, cuenta el numero de elementos impares que contiene
function contarElementosImpares(elemetos){


}


function calculaDNI(DNI){
    esValido = false;
    if(typeof(DNI)==='string'){
        if(DNI.length === 9){
            
        }
    }
    return esValido;
}