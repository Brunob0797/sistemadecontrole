// JavaScript Document

                

//Comandos do carrinho
//Funções de ativação dos botões
			$(document).ready(function() {
					
				//Frente
				//Vai para frente quando o mouse é clicado
                $('#frente').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/frente.php");
						a.send();
					});
				//Para quando o mouse é solto
				$('#frente').mouseup(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/parar.php");
						a.send();
					});	
				
				
				//Trás
				//Vai para trás quando o mouse é clicado
				$('#tras').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/tras.php");
						a.send();
					});
				//Para quando o mouse é solto
				$('#tras').mouseup(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/parar.php");
						a.send();
					});
				
				//Esquerda
				//Vai para a esquerda quando o mouse é clicado
                $('#esquerda').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/esquerda.php");
						a.send();
					});
				//Para quando o mouse é solto
				$('#esquerda').mouseup(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/parar.php");
						a.send();
					});
					
				//Direita
				//Vai para direita quando o mouse é clicado
                $('#direita').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/direita.php");
						a.send();
					});
				//Para quando o mouse é solto
				$('#direita').mouseup(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/parar.php");
						a.send();
					});
					
					
				
				//Controle de velocidade
				//Direita
				//Vai para direita quando o mouse é clicado
                $('#baixa').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/baixa.php");
						a.send();
					});
				$('#media').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/media.php");
						a.send();
					});
				$('#alta').mousedown(function(){
					var a = new XMLHttpRequest();
						a.open("GET", "comandos/alta.php");
						a.send();
					});
            });