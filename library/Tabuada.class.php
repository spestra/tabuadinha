<?php
/* 17:47 8/8/2012 */
/* 16:06 18/8/2012 */

/* 21/8/2012 */
/* 12:54 22/8/2012 */

class Tabuada {
	private $tabuada_inicio;
	private $tabuada_fim;
	private $titulo_tabuada;
	private $tabuada_array = array();
	private $tabuada_operacao;




	

	
	public function getTabuada() {



	/* --------- tratamento inicio --------- */

	
	/* Faz a limpeza dos dados do input tabuada início */
	if(isset($this->tabuada_num)) {
		$this->tabuada_num = strip_tags(trim($this->tabuada_num));
		$this->tabuada_num = preg_replace("/[^0-9]+/", "", $this->tabuada_num);
		/* Verifica se tem número */
		if(!is_numeric($this->tabuada_num)) {
			$tabuada_num_msg_erro = 'Valor inválido. Informar número inteiro positivo. (1, 2, 3, 4, 5, 6...)';
		}
	}
	/* Faz a limpeza dos dados do input tabuada fim */
	if(isset($this->tabuada_ate)) {
		$this->tabuada_ate = strip_tags(trim($this->tabuada_ate));
		$this->tabuada_ate = preg_replace("/[^0-9]+/", "", $this->tabuada_ate);
		if(!is_numeric($this->tabuada_ate)) {
			$tabuada_num_msg_erro = 'Valor inválido. Informar número inteiro positivo. (1, 2, 3, 4, 5, 6...)';
		}
	}
	
	
	
	/* Se o nº da tabuada inínio for informado e o final não,
	 mostra só uma tabuada na tela. Final recebe valor de inicio */
	if(isset($this->tabuada_num)) {
		if((!isset($this->tabuada_ate)) OR ($this->tabuada_ate == false)) {
					$this->tabuada_ate = $this->tabuada_num;	
				}
	}
	
	/* Informou o final e NÃO informou o início	*/
	if((!isset($this->tabuada_num)) OR ($this->tabuada_num == false)) {
		if(isset($this->tabuada_ate)) {
					$this->tabuada_num = $this->tabuada_ate;	
				}
	}
	
	/* Se tudo estiver vazio */
	if((!isset($this->tabuada_num)) OR ($this->tabuada_num == false)) {
		if((!isset($this->tabuada_ate)) OR ($this->tabuada_ate == false)) {
					$this->tabuada_num = 2;
					$this->tabuada_ate = 10;	
				}
	}
	
	
	/*  */
	$tabuada_num_msg_erro = '  ';
	

	/* --------- tratamento fim --------- */




	/* Verifica se o número inicial é menor que o nº final */
	if(is_numeric($this->tabuada_num) AND is_numeric($this->tabuada_ate) 
	 AND $this->tabuada_num <= $this->tabuada_ate 
	  AND $this->tabuada_num > 0) {

	/* Limite de tabuadas a serem exibidas */
	if(($this->tabuada_ate - $this->tabuada_num) <= 10) {
	 



	 
	 




/* 12:54 22/8/2012 */

$tabuada_inicio = 2;
$tabuada_fim = 10;
$tabuada_completa = array();


for($i = $tabuada_inicio; $i <= $tabuada_fim; $i++) {
$tabuada_titulo_texto = 'Tabuado do nº ' . $i;

$calculo_atual = array();
	for($j=1; $j<=10; $j++) {
		$calculo_texto = $i . ' * ' . $j . ' = ';
		$calculo_atual[] = $calculo_texto . $i * $j;
	}
$tabuada_completa[] = array($tabuada_titulo_texto => $calculo_atual);

} // fecha for 

$lululalau = ' ';
  
foreach ($tabuada_completa as $k1 => $k2) {
    foreach ($k2 as $titulo_tabuada => $tabuada_array) {
		$this->tabuada_array[] = $tabuada_array;
		//	print_r($tabuada_array);
        $lululalau .= '<h1>' . $titulo_tabuada . '</h1><br>';
    } $lululalau .=  "\n<ul>\n";
		foreach($tabuada_array as $tabuada) {
			$lululalau .= '<li>' . $tabuada . "</li>\n";
		} $lululalau .= "</ul>\n\n";
}
  




}  else {
	$tabuada_num_msg_erro .= "\n ";
	$tabuada_num_msg_erro .= 'O limite de tabuadas a serem exibidas é maior que 10.<br > Só pode ser mostrado no máximo 10 tabuadas por vez.<br>';
} /* fecha Limite de tabuadas a serem exibidas */

} else {
	$tabuada_num_msg_erro .= "\n ";
	$tabuada_num_msg_erro .= 'Número inicial é maior que o número final<br>';
} /* fecha Verifica se o número inicial é menor que o nº final */ 


	return $this->tabuada_array;



	} /* fecha function getTabuada */









} /* fecha class Tabuada */

