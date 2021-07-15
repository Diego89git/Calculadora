<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	
	.btnExterno{
		width:  30pt; 
		height: 25pt; 
		background-color: rgb(224, 224, 224); 
		border-color: white;
	}

	.btnInterno{
		width:  30pt; 
		height: 25pt; 
		background-color: rgb(250, 250, 250); 
		border-color: white;
	}

	.btnResultado{
		width:  30pt; 
		height: 25pt; 
		color: white; 
		background-color: rgb(66, 165, 245); 
		border-color: white;

	}		

	</style>
	<script src="js/jquery_3.5.0.js"></script>
	<script type="text/javascript">


		


		$(document).ready(function(){

		var operador="";
		var sumando=0;
		var result=$("result");
			
		var v1= $("#bt1").val();
		var v2= $("#bt2").val();
		var v3= $("#bt3").val();
		var v4= $("#bt4").val();
		var v5= $("#bt5").val();
		var v6= $("#bt6").val();
		var v7= $("#bt7").val();
		var v8= $("#bt8").val();
		var v9= $("#bt9").val();
		var v0= $("#bt0").val();
		var res= $("#res").val();

		function anotar1(){	$("#res").val(res+=v1);	}
		function anotar2(){	$("#res").val(res+=v2);	}
		function anotar3(){	$("#res").val(res+=v3);	}
		function anotar4(){	$("#res").val(res+=v4);	}
		function anotar5(){	$("#res").val(res+=v5);	}
		function anotar6(){	$("#res").val(res+=v6);	}
		function anotar7(){	$("#res").val(res+=v7);	}
		function anotar8(){	$("#res").val(res+=v8);	}
		function anotar9(){	$("#res").val(res+=v9);	}
		function anotar0(){	$("#res").val(res+=v0);	}

		$("#bt1").click(anotar1);
		$("#bt2").click(anotar2);
		$("#bt3").click(anotar3);
		$("#bt4").click(anotar4);
		$("#bt5").click(anotar5);
		$("#bt6").click(anotar6);
		$("#bt7").click(anotar7);
		$("#bt8").click(anotar8);
		$("#bt9").click(anotar9);
		$("#bt0").click(anotar0);


		function suma(){ var primer=parseFloat(res);	if(sumando=0){ sumando=primer;} else{  sumando+=primer;	} $("#res").val(""); res=""	; operador="s";;}
		function resta(){ var primer=parseFloat(res);	if(res="0"){ sumando=primer;} else{  sumando-=primer;	}  $("#res").val(""); res=""	;;	operador="r";;}
		function multiplicacion(){	var primer=parseFloat(res);	if(res="0"){ sumando=primer;} else{  sumando*=primer;	}  $("#res").val(""); res=""	;;	operador="m";;}
		function division(){		var primer=parseFloat(res);	if(res="0"){ sumando=primer;} else{  sumando/=primer;	}  $("#res").val(""); res=""	;;	operador="d";;}

		function mostrarRes(){
			var segundo=parseFloat(res);
			if(sumando==0){ 
				sumando=segundo;
			} 
				else{
					switch (operador) {
							  case 's':
							    sumando+=segundo;
							    break;
							  case 'r':
							    sumando-=segundo;
							    break;
							  case 'm':
							    sumando=sumando*segundo;
							    break;
							  case 'd':
							    sumando/=segundo;
							    break;
							  default:
							    sumando=segundo;
							}
					}
			res="";
			operador="";
			$("#result").val(sumando);
			sumando=0;
			;}


		$("#bts").click(suma);
		$("#bt-").click(resta);
		$("#btm").click(multiplicacion);
		$("#btd").click(division);

		$("#bti").click(mostrarRes);



		});
	</script>
</head>
<body>
	<H5>CALCULADORA ESTANDAR</H5>

	<tr>
		<td colspan="5"><input type="int" name="Valor" id="res" style="  border: none;" ></td>
		<br>
		<td colspan="5"><input type="int" name="Valor" id="result" style="margin-top: 5px; width: 170px; height: 25px; font-size: 20px;" ></td>
	</tr>
	<br/>
	<br/>
	<tr>
		<td><button style="width: 24pt; border-color: white">MC</button></td>
		<td><button style="width: 24pt; border-color: white">MR</button></td>
		<td><button style="width: 24pt; border-color: white">M+</button></td>
		<td><button style="width: 24pt; border-color: white">M-</button></td>
		<td><button style="width: 24pt; border-color: white">MS</button></td>
	</tr>

	<table border="2">

		<tr >
			<td><button class="btnExterno">%</button></td>
			<td><button class="btnExterno">CE</button></td>
			<td><button class="btnExterno">C</button></td>
			<td><button class="btnExterno"><<</button></td>
		</tr>
		<tr >
			<td><button class="btnExterno">1/x</button></td>
			<td><button class="btnExterno">Pot.(2)</button></td>
			<td><button class="btnExterno">Raiz.(2)</button></td>
			<td><input type="button" name=""id="btd" class="btnExterno" value="/"></td>
		</tr>
		<tr>
			<td><input type="button" name=""id="bt7" class="btnInterno" value="7"></td>
			<td><input type="button" name=""id="bt8" class="btnInterno" value="8"></td>
			<td><input type="button" name=""id="bt9" class="btnInterno" value="9"></td>
			<td><input type="button" name=""id="btm" class="btnExterno" value="X"></td>
		</tr>
		<tr>
			<td><input type="button" name=""id="bt4" class="btnInterno" value="4"></td>
			<td><input type="button" name=""id="bt5" class="btnInterno" value="5"></td>
			<td><input type="button" name=""id="bt6" class="btnInterno" value="6"></td>
			<td><input type="button" name=""id="bt-" class="btnExterno" value="-"></td>
		</tr>
		<tr>
			<td><input type="button" name=""id="bt1" class="btnInterno" value="1"></td>
			<td><input type="button" name=""id="bt2" class="btnInterno" value="2"></td>
			<td><input type="button" name=""id="bt3" class="btnInterno" value="3"></td>
			<td><input type="button" name=""id="bts" class="btnExterno" value="+"></td>
		</tr>
		<tr>
			<td><button class="btnInterno">+/-</button></td>
			<td><input type="button" name=""id="bt0" class="btnInterno" value="0"></td>
			<td><button class="btnInterno">,</button></td>
			<td><input type="button" name=""id="bti" class="btnResultado" value="="></td>
		
		</tr>
	</table>
</body>
</html>