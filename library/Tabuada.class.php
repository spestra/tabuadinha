<?php

/* 17:47 8/8/2012 */

class Tabuada {

	public $tabuada_num;
	public $tabuada_ate;

	
	public function setTabuada() { 
	
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
	




/* Verifica se o número inicial é menor que o nº final */
if(is_numeric($this->tabuada_num) AND is_numeric($this->tabuada_ate) 
 AND $this->tabuada_num <= $this->tabuada_ate 
  AND $this->tabuada_num > 0) {

/* Limite de tabuadas a serem exibidas */
if(($this->tabuada_ate - $this->tabuada_num) <= 10) {
  
	for($this->tabuada_num; $this->tabuada_num <= $this->tabuada_ate; $this->tabuada_num++) {

	echo "\n\n" . '<div class="tabuada_numero">';
	echo "\n<!-- tabuada do " . $this->tabuada_num . " -->\n<ul> \n";

		for($i=1; $i<=10; $i++) {
		$tab_res_multi = $this->tabuada_num * $i;
		echo '<li>' . $this->tabuada_num . ' X ' . $i . ' = ' . $tab_res_multi . "</li> \n";
		}

	echo "</ul> \n ";
	echo '</div><!-- div tabuada_numero -->';

	} /* fecha for */
}  else {
	$tabuada_num_msg_erro .= "\n ";
	$tabuada_num_msg_erro .= 'O limite de tabuadas a serem exibidas é maior que 10.<br > Só pode ser mostrado no máximo 10 tabuadas por vez.<br>';
} /* fecha Limite de tabuadas a serem exibidas */

} else {
	$tabuada_num_msg_erro .= "\n ";
	$tabuada_num_msg_erro .= 'Número inicial é maior que o número final<br>';
} /* fecha Verifica se o número inicial é menor que o nº final */ 


/* Mensagem de erro */
echo "\n" . '<div class="msg_error">' . $tabuada_num_msg_erro . "\n" . '</div><!-- div msg_error -->';




}/* close function setTabuada() */











}/* close class Tabuada */

