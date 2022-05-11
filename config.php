<?php 

	// $email_adm = 'emailtestehomeoffice@gmail.com';
	// $url_site = 'http://localhost/Cursos/Sistema_Delivery/Sistema/delivery';
	// $url_site = 'http://www.controlecne.tech/';

	// DADOS PARA CONEXAO COM O BD LOCAL
	/*
	$banco = 'central_de_analise';
	$host = 'localhost';
	$usuario = 'root';
	$senha = '';
	*/

 	// DADOS PARA CONEXAO COM O BD HOSPEDADO
	
    $banco = 'u349490601_gestaoeqtl';
	$host = 'localhost';
	$usuario = 'u349490601_gestaoeqtl';
	$senha = 'Gest@o*eqtl_2021'; 
  	
	// DADOS PARA CONEXAO DE TESTE COM O BD HOSPEDADO
	/*
    $banco = 'u349490601_teste_gestao';
	$host = 'localhost';
	$usuario = 'u349490601_teste_gestao';
	$senha = 'Gest@o*eqtl_2021'; 
	*/

	// CONFIGURAÇÃO PARA PAGINAÇÃO DE INTENS NO PAINEL DO ADMIN, SERÁ CHAMADA NO ARQUIVO listar.php
	//VALOR PADRAO PARA PAGINAÇÃO
	$itens_por_pagina = 25;
	$itens_por_pagina_trafo_equipe = 500;
	$itens_por_pagina_trafo_cadastro = 10;

	//VALOR QUE O USUARIO PODE ALTERAR PARA MOSTRAR A PAGINAÇÃO
	$itens_por_pagina_1 = 10;
	$itens_por_pagina_2 = 25;
	$itens_por_pagina_3 = 50;
	$itens_por_pagina_4 = 100;
	$itens_por_pagina_5 = 500;

	//VARIAVEL COM OS NIVEIS DE USUARIO
	$nivel_master = 'master';
	$nivel_master_ma = 'master-ma';
	$nivel_master_al_le = 'master-al-le';
	$nivel_adm = 'admin';
	$nivel_lider = 'lider';
	$nivel_fiscal = 'fiscal';
	$nivel_fiscal_pros = 'fiscal_pros';
	$nivel_backoffice_adm = 'backoffice_adm';
	$nivel_supervisor = 'supervisor';
	$nivel_backoffice_bx = 'backoffice_bx';
	$nivel_equipe = 'equipe';
	$nivel_equipe_perda = 'equipe_perda';
	$nivel_superv_bx = 'superv_bx';
	$nivel_back_ret = 'backoffice_ret';
	$nivel_back_rel_adm = 'back_rel_adm';
	$nivel_assistent = 'assistent';
	$nivel_prosp = 'prospector';

	$niveis = $nivel_master || $nivel_adm || $nivel_lider || $nivel_backoffice || $nivel_supervisor || $nivel_adm_backoffice || $nivel_equipe;
	$local_user_al = 'Alagoas';
	$local_user_ma = 'Maranhao';

	//===================================================>>>>>>>>>>

	//VARIAVEIS PARA OCULTAR DADOS
	/*$dnome_adm = 'd-none';
	$dnone_lider = 'd-none';
	$dnone_backoffice = 'd-none';
	$dnone_adm_backoffice = 'd-none';
	$dnone_supervisor = 'd-none';
	$dnone_equipe = 'd-none';
	*/
	//===================================================>>>>>>>>>>>

	?>