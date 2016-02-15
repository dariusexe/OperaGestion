<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Opergaestion</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<link rel="shortcut icon" href="{{ asset('favicon.png') }}">

	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
</head>
<body>
	@yield('body')
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
    <script type="text/javascript">
$('#sure').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('whatever')
  var form = $('#form-delete')
  var url = form.attr('action').replace(':USER_ID', id)
  var data = form.serialize();
  

  $.post(url, data, function(result){
  		var nombre = result
  		
 	modal.find('.modal-body').html('Esta a punto de borrar al usuario '+ nombre +' ¿Está seguro?')
    modal.find('.btn-danger').attr('href', "/userDelete/"+id)
 
  })




var modal = $(this)

   
  // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  

 // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
 
  
})
</script>
</body>
</html>