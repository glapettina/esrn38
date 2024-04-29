<?php

	class Conexion{

		static public function conectar(){

			$link = new PDO("mysql:host=localhost;dbname=dbesrn38","root","");

			$link -> exec("set names utf8");

			return $link;
		}

	}