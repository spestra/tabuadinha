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



	public function setTabuada($tabuada_inicio=NULL, $tabuada_fim=NULL) { 

			$this->tabuada_inicio = $tabuada_inicio;
			$this->tabuada_fim = $tabuada_fim;

	}/* close function setTabuada() */

	

	
	public function getTabuada() {



	/* --------- tratamento inicio --------- */

	
	/* Faz a limpeza dos dados do input tabuada in�cio */
	if(isset($this->tabuada_inicio)) {
		$this->tabuada_inicio = strip_tags(trim($this->tabuada_inicio));
		$this->tabuada_inicio = preg_replace("/[^0-9]+/", "", $this->tabuada_inicio);
		/* Verifica se tem n�mero */
		if(!is_numeric($this->tabuada_inicio)) {
			$tabuada_inicio_msg_erro = 'Valor inv�lido. Informar n�mero inteiro positivo. (1, 2, 3, 4, 5, 6...)';
		}
	}
	/* Faz a limpeza dos dados do input tabuada fim */
	if(isset($this->tabuada_fim)) {
		$this->tabuada_fim = strip_tags(trim($this->tabuada_fim));
		$this->tabuada_fim = preg_replace("/[^0-9]+/", "", $this->tabuada_fim);
		if(!is_numeric($this->tabuada_fim)) {
			$tabuada_inicio_msg_erro = 'Valor inv�lido. Informar n�mero inteiro positivo. (1, 2, 3, 4, 5, 6...)';
		}
	}
	
	
	
	/* Se o n� da tabuada in�nio for informado e o final n�o,
	 mostra s� uma tabuada na tela. Final recebe valor de inicio */
	if(isset($this->tabuada_inicio)) {
		if((!isset($this->tabuada_fim)) OR ($this->tabuada_fim == false)) {
					$this->tabuada_fim = $this->tabuada_inicio;	
				}
	}
	
	/* Informou o final e N�O informou o in�cio	*/
	if((!isset($this->tabuada_inicio)) OR ($this->tabuada_inicio == false)) {
		if(isset($this->tabuada_fim)) {
					$this->tabuada_inicio = $this->tabuada_fim;	
				}
	}
	
	/* Se tudo estiver vazio */
	if((!isset($this->tabuada_inicio)) OR ($this->tabuada_inicio == false)) {
		if((!isset($this->tabuada_fim)) OR ($this->tabuada_fim == false)) {
					$this->tabuada_inicio = 2;
					$this->tabuada_fim = 10;	
				}
	}
	
	
	/*  */
	$tabuada_inicio_msg_erro = '  ';
	

	/* --------- tratamento fim --------- */




	/* Verifica se o n�mero inicial � menor que o n� final */
	if(is_numeric($this->tabuada_inicio) AND is_numeric($this->tabuada_fim) 
	 AND $this->tabuada_inicio <= $this->tabuada_fim 
	  AND $this->tabuada_inicio > 0) {

	/* Limite de tabuadas a serem exibidas */
	if(($this->tabuada_fim - $this->tabuada_inicio) <= 10) {
	 









// $tabuada_inicio = 2;
// $tabuada_fim = 10;
$tabuada_completa = array();


for($i = $this->tabuada_inicio; $i <= $this->tabuada_fim; $i++) {
$tabuada_titulo_texto = 'Tabuado do n� ' . $i;

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
	$tabuada_inicio_msg_erro .= "\n ";
	$tabuada_inicio_msg_erro .= 'O limite de tabuadas a serem exibidas � maior que 10.<br > S� pode ser mostrado no m�ximo 10 tabuadas por vez.<br>';
} /* fecha Limite de tabuadas a serem exibidas */

} else {
	$tabuada_inicio_msg_erro .= "\n ";
	$tabuada_inicio_msg_erro .= 'N�mero inicial � maior que o n�mero final<br>';
} /* fecha Verifica se o n�mero inicial � menor que o n� final */ 


	return $this->tabuada_array;



	} /* fecha function getTabuada */









} /* fecha class Tabuada */

