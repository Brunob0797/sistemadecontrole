<?php
	/*
		Motor Direito;
		Identificação de pinos BCM;
		Pinos 23 e 24;
		Ligado = 1; Desligado = 0;
	*/
	system("gpio -g write 17 1");
	system("gpio -g write 27 0");
	/*
		Motor Esquerdo;
		Identificação de pinos BCM;
		Pinos 23 e 24;
		Ligado = 1; Desligado = 0;
	*/
	system("gpio -g write 23 1");
	system("gpio -g write 24 0");
?>