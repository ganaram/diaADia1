describe('#suma', function() { // Nombre de la prueba. 
    it('Debe devolver la suma de los dos valores introducidos', function(){ 
    //con it, describimos lo que hace la prueba. 
    expect(suma(1,1)).to.equal(2);
    //expect no servirá para indicar el caso de prueba, incluimos por parámetro, el resultado a la función,
    // y debemos indicar a que sería igual su valor. En este caso, comprobamos que sumar 1 y 1 
    // el  resultado debería ser igual a 2. 
}); 
    describe('#suma', function() {  
        it('Debe devolver algo diferente a la suma', function(){
        expect(suma(1,1)).not.equal(3141); 
        });
    }); 

});