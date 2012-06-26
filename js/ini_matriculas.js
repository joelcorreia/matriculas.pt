$(function(){
	commonTemplate = function(item) {
		return "<option value='" + item.Value + "'>" + item.Text + "</option>";
	};
	commonMatch = function(selectedValue) {
		return this.When == selectedValue;
	};
	data_copy = function()
	{
		$('#Matriculas_nomecompletoee').val($('#Matriculas_nomecompleto').val());
		$('#Matriculas_residenteee').val($('#Matriculas_residente').val());
		$('#Matriculas_localidadeee').val($('#Matriculas_localidade').val());
		$('#Matriculas_codpostalee').val($('#Matriculas_codpostal').val());
		$('#Matriculas_telefoneresidenciaee').val($('#Matriculas_telefone').val());

	};
	data_copye1 = function()
	{
		$('#Matriculas_nomecompletoee').val($('#Matriculas_filhoA').val());
		$('#Matriculas_profissaoee').val($('#Matriculas_profissaoA').val());
	};
	data_copye2 = function()
	{
		$('#Matriculas_nomecompletoee').val($('#Matriculas_filhoB').val());
		$('#Matriculas_profissaoee').val($('#Matriculas_profissaoB').val());
	};
});



$().ready(function() {


	$("#matriculas-form").validate();
	$("#Matriculas_embarque").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_n_cartao_estudante").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_nomecompleto").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_nacionalidade").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_naturaldafreguesia").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_concelho").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_distrito").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_datanasc").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_bi").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_segsocial").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_identificacao_fiscal").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_utente_saude").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_email").rules("add",{required: true,email:true,messages: {required: "Preencher"}});
	$("#Matriculas_residente").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_localidade").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_codpostal").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_telefone").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_filhoA").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_profissaoA").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_filhoB").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_profissaoB").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_nomecompletoee").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_profissaoee").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_residenteee").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_localidadeee").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_codpostalee").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_telefoneresidenciaee").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_telefonetrabalhoee").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_parentescoee").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_ultimoanoescolaridade").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_ultimoanoturma").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_ultimoanocurso").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_ultimoanoescola").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_estrangeira").rules("add",{required: true,messages: {required: "Preencher"}});
	$("#Matriculas_estrangeiraa").rules("add",{required: true,messages: {required: "Preencher"}});

});