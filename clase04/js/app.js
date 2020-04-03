console.log("Declaracion de Arrays");
var origen= [];
var destino=[];

function generar(prev, next){
  return Math.floor(Math.random() * (prev-next) + next);
}

for( var i=0; i<=9; i++){
    origen.unshift(generar(1, 100));
 }

 console.log("Origen: " + origen);
 destino = origen.sort();
  console.log("El orden de los arreglos son:");
 console.log("Destino: "+ destino);
