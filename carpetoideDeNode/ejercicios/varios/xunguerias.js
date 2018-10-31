var edades = [15,22,16,18,3,7];

var numeros1 = [1,2,undefined,null,1/0,'prueba','1'];

function esAdulto(edad){
    return edad>=18
}

class Voto{
    constructor(bueno){
        this.bueno=bueno
    }
}

var votos = [new Voto(true),new Voto(false),new Voto(true)];

var cadenas = ['AN AMARIA','ANAMARIA','MA DEJAO','ANAMARIA','ANAMARIA','NO ME QUIERE']

console.log(edades.filter(esAdulto));

console.log(edades.filter(x=>x>=18));

console.log(edades.filter(x=>x%2!==0));

console.log(numeros1.filter(x=>isFinite(x)));

console.log(votos.filter(x=>x.bueno===true));

console.log(cadenas.find(x=>x.match(/\s+/)))

console.log(


)