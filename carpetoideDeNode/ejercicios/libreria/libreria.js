

let libro = class {
        constructor(titulo,ISDN,autor,fechaLanzamiento,genero,precio,votos){
            this.titulo = titulo
            this.ISDN = ISDN
            this.autor = autor
            this.fechaLanzamiento = fechaLanzamiento
            this.genero = genero
            this.precio = precio
            this.votos = votos
            }
            get titulo(){
                    return this._titulo
            }
            get ISDN(){
                    return this._ISDN
            }
            get libros(){
                    return this._libros
            }
            get autor(){
                    return this._autor
            }
            get fechaLanzamiento(){
                    return this._fechaLanzamiento
            }
            get genero(){
                    return this._genero
            }
            get precio(){
                    return this._precio
            }
            get votos(){
                    return this._votos
            }
            set titulo(titulo){
                    this._titulo = titulo
            }
            set ISDN(ISDN){
                    this._ISDN = ISDN
            }
            set fechaLanzamiento(fechaLanzamiento){
                    this._fechaLanzamiento = fechaLanzamiento
            }
            set autor(autor){
                    this._autor = autor
            }
            set genero(genero){
                    this._genero = genero
            }
            set precio(precio){
                    this._precio = precio
            }
            set votos(votos){
                    this._votos = votos
            }
    }
class Persona{
        constructor(nombre,apellidos){
                this.nombre=nombre
                this.apellidos=apellidos
        }
}
class Cliente extends Persona{
        constructor(nombre,apellidos,dni,telefono,direccion,gustos){
                super(nombre,apellidos)
                this.dni = dni
                this.telefono = telefono
                this.direccion = direccion
                this.gustos = gustos
        }
}
class Autor extends Persona{
        constructor(nombre,apellidos,libros){
                super(nombre,apellidos)
                this.libros = libros
        }
}
let tienda = class {
    constructor(nombre,clientes,libros,direccion,estado){
        this.nombre = nombre
        this.clientes = clientes
        this.libros = libros
        this.direccion = direccion
        this.estado = estado
        }
        get nombre(){
                return this._nombre
        }
        get clientes(){
                return this._clientes
        }
        get libros(){
                return this._libros
        }
        get estado(){
                return this._estado
        }
        set nombre(nombre){
                this._nombre = nombre
        }
        set clientes(clientes){
                this._clientes = clientes
        }
        set libros(libros){
                this._libros = libros
        }

        set direccion(direccion){
                this._direccion = direccion
        }
        set estado(estado){
                this._estado = estado
        }
}
