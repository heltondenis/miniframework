<?php 

$this->get('noticias', function($arg){
	echo 'Entrou em notícias';
});

$this->get('noticias/{id}', function($arg) {
	echo 'Quero ver uma notícia específica...';
});
