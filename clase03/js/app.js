
function escribirTablaMultiplicar(j){

	console.log("Tabla de multiplicar del " + j);

	//i++ significa i=i+1;
	for(i = 1; i<=10; i++){
		console.log(j + "x" + i + "= " + j * i);
  }
}
n1=prompt("ingrese un numero");
n2=prompt("Ingrese otro numero");
if(n1<n2){
  escribirTablaMultiplicar(n1);
    console.log("========================================");
  escribirTablaMultiplicar(n2);
    console.log("========================================");
}else{
  alert("No se puede imprimir");
}
