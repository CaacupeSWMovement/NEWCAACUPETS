@if(session()->has('Mascota'))
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$.notify("Mascota agregada con exito!", "success");
	});
</script>
@endif