@if(session()->has('addEmpresa'))
<script>
	console.log('empresa agregada');
	$(document).ready(function(){
		$.notify("Empresa agregada con exito!", "success");
	});
</script>
@endif