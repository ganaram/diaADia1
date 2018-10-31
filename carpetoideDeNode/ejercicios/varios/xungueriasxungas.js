class Voto{
    constructor(puntuacion){
        this.puntuacion=puntuacion
    }
}

var votosMas1 = [new Voto(2),new Voto(4),new Voto(1),new Voto(2),new Voto(5),new Voto(3),new Voto(3),new Voto(2)];

var votos = [new Voto(2),new Voto(4),new Voto(1),new Voto(2),new Voto(5),new Voto(3),new Voto(3),new Voto(2)];

console.log(votos.some(x=>x.puntuacion>4));

votosMas1.forEach(x=> x.puntuacion+=1)

console.log(votos.map(x=>x.puntuacion*-1));

var media = 0;

for (let i = 0; i < votos.length; i++) {
    media+=votos[i].puntuacion;
}

console.log(votos.reduce(x=> media/votos.length))

console.log(votos.reduceRight((x,y) => x>y))