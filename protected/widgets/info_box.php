<?php
class info_box extends CWidget{		
   public $mensagem_info;
   public $mensagem_alerta;
   
   public function run(){      

   	$this->render('info_box',array('mensagem_info' => $this->mensagem_info,'mensagem_alerta' => $this->mensagem_alerta));       	
  }

}
?>