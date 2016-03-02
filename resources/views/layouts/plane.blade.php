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
	<link rel="stylesheet" type="text/css" href="{{asset("assets/stylesheets/dataTables.bootstrap4.css")}}">


	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
</head>
<body>
	@yield('body')
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
    <script type="text/javascript">
$('#sure').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);// Button that triggered the modal
  var id = button.data('id');
  var name = button.data('name');
  var form = $('#form-delete');
	var url = button.data('source')+'/'+id;
  


 
  
 // Extract info from data-* attributes
  
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  modal.find('.modal-body').html("Está seguro que quiere borrar al usuario <b>"+name+"</b>");
  form.attr('action', url)



  
})
</script>
<script type="text/javascript">
	$('tbody tr #link').on("click", function() {
		if($(this).attr('href') !== undefined){
			document.location = $(this).attr('href');
		}
	})
			.mouseover(function(){
				$(this).css('background-color','#F5F5F5')
			})
			.mouseout(function(){
				$(this).css('background-color','white')
			})

</script>
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('#list').dataTable( {
				"language": {
					"url": "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
				},
				dataLenght: false
			} );
		} );
	</script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>