<?php if(strlen($mensagem_info)>0){ ?>
<div class="ui-widget">
	<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0pt 0.7em;"> 
		<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: 0.3em;"></span>
		<strong><?php echo $mensagem_info ?></strong></p>
	</div>
</div><br>
<?php }?>
<?php if(strlen($mensagem_alerta)>0){ ?>
<div class="ui-widget">
	<div class="ui-state-error ui-corner-all" style="padding: 0pt 0.7em;"> 
		<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: 0.3em;"></span> 
		<strong><?php echo $mensagem_alerta ?></strong></p>
	</div>
</div><br>
<?php }?>
