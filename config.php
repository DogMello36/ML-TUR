<?php


/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/');	

	
/** Template do cabeçaho e do rodapé das páginas **/ 
const HEADER_TEMPLATE = ABSPATH . 'inc/header.php';
const FOOTER_TEMPLATE = ABSPATH . 'inc/footer.php';