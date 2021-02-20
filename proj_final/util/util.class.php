<?php

	class Util{

	public function testarExpressaoRegular($expressao, $atributo){
		return preg_match($expressao,$atributo);
	}

}
?>
