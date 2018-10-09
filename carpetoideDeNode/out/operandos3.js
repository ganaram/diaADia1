"use strict";

//Implementar las siguientes funciones para que pasen una serie de pruebas
//Usando solo estructuras de control para ello.

//Devuelves 1 si a es mayor que b
//Devuelves -1 si a es menor que b
//Devuelves 0 si a es igual b

var arr = [1, 4, 5, 5, 2, 6, 7, 1, 4, 6];

function compruebanumero(a) {
    if (typeof a !== "number" || a == Infinity || a <= Number.MIN_VALUE || a >= Number.MAX_VALUE) {
        return true;
    }return false;
}

function quienEsMayor(a, b) {
    var resultado = void 0;

    if (compruebanumero(a) || compruebanumero(b)) {
        return "Mala asignacion, introduce numeros.";
    }

    resultado = a < b ? resultado = -1 : a > b ? resultado = 1 : resultado = 0;

    return resultado;
}
console.log(quienEsMayor(1.5, 5.7));

//Dado un array de elementos, devuelve la suma de todos aquellos que los elementos sean pares
function sumarElementosPares(elemetos) {
    var suma = 0;
    if (elemetos instanceof Array) for (var i = 0; i < elemetos.lenght; i++) {
        var _iteratorNormalCompletion = true;
        var _didIteratorError = false;
        var _iteratorError = undefined;

        try {
            for (var _iterator = elemetos[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                var elemento = _step.value;

                if (elemento % 2 == 0) {
                    suma += elemento;
                }
            }
        } catch (err) {
            _didIteratorError = true;
            _iteratorError = err;
        } finally {
            try {
                if (!_iteratorNormalCompletion && _iterator.return) {
                    _iterator.return();
                }
            } finally {
                if (_didIteratorError) {
                    throw _iteratorError;
                }
            }
        }
    }
    return suma;
}

console.log(sumarElementosPares([1, 5, 6, 2, 6, 5, 4, 6, 1]));

//Dado un array de elementos devuelve el valor mas grande de todos ellos.
function escogerValorMasGrande(elemetos) {
    var resultado = 0;
    if (elemetos instanceof Array) {
        if (elemetos.length > 0) {}
    }
}

//Dada una palabra cualquier, devuelve la palabra alreves, por ejemplo: "HOLA" => "ALOH"
function invertirUnaPalabra(cad) {
    var invertida = "";
    if (typeof cad === 'string') {
        var _iteratorNormalCompletion2 = true;
        var _didIteratorError2 = false;
        var _iteratorError2 = undefined;

        try {
            for (var _iterator2 = cad[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
                var x = _step2.value;

                invertida = x + invertida;
            }
        } catch (err) {
            _didIteratorError2 = true;
            _iteratorError2 = err;
        } finally {
            try {
                if (!_iteratorNormalCompletion2 && _iterator2.return) {
                    _iterator2.return();
                }
            } finally {
                if (_didIteratorError2) {
                    throw _iteratorError2;
                }
            }
        }

        return invertida;
    }
}

console.log(invertirUnaPalabra("chingchangchong"));

//Dada un array, cuenta el numero de elementos impares que contiene
function contarElementosImpares(elemetos) {}

function calculaDNI(DNI) {
    esValido = false;
    if (typeof DNI === 'string') {
        if (DNI.length === 9) {}
    }
    return esValido;
}