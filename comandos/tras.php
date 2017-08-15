<?php
	/*
		Motor Direito;
		Identificação de pinos BCM;
		Pinos 23 e 24;
		Ligado = 1; Desligado = 0;
	*/
	system("gpio -g write 17 0");
	system("gpio -g write 27 1");
	/*
		Motor Esquerdo;
		Identificação de pinos BCM;
		Pinos 23 e 24;
		Ligado = 1; Desligado = 0;
	*/
	system("gpio -g write 23 0");
	system("gpio -g write 24 1");
?>