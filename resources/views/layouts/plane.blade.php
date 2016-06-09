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
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css">


	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
</head>
<body>
	@yield('body')
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('assets/scripts/jquery.bootstrap.wizard.js') }}" ></script>
	<script>
		$(document).ready(function() {
			$('#rootwizard').bootstrapWizard();
		});
	</script>
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
		$('#sureProductClass').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget);// Button that triggered the modal
			var id = button.data('id');
			var name = button.data('name');
			var form = $('#form-delete');
			var url = 'class/'+id;





			// Extract info from data-* attributes

			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this);
			modal.find('.modal-body').html("Está seguro que quiere borrar la clase <b>"+name+"</b>");
			form.attr('action', url)




		})
	</script>
	<script type="text/javascript">
		$('#sureProductCompany').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget);// Button that triggered the modal
			var id = button.data('id');
			var name = button.data('name');
			var form = $('#form-delete');
			var url = 'company/'+id;





			// Extract info from data-* attributes

			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this);
			modal.find('.modal-body').html("Está seguro que quiere borrar la compañia <b>"+name+"</b>");
			form.attr('action', url)




		})
	</script>

	<script type="text/javascript">
		$('#sureProduct').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget);// Button that triggered the modal
			var id = button.data('id');
			var name = button.data('name');
			var form = $('#form-delete');
			var url = 'products/'+id;





			// Extract info from data-* attributes

			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this);
			modal.find('.modal-body').html("Está seguro que quiere borrar el producto <b>"+name+"</b>");
			form.attr('action', url)




		})
	</script>


<script type="text/javascript">
	$('tbody tr')
			.mouseover(function(){
				$(this).css('background-color','#F5F5F5')
			})
			.mouseout(function(){
				$(this).css('background-color','white')
			});

	$('tbody tr #link').on("click", function() {
		if($(this).attr('href') !== undefined){
			document.location = $(this).attr('href');
		}
	})

</script>
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('table.display').DataTable( {
				"language": {
					"url": "http://cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
				}
			} );
		} );
	</script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	var ctx = document.getElementById('linechart').getContext('2d');
	var data = {
		labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"],
		datasets: [
			{
				label: "My First dataset",
				fillColor: "rgba(220,220,220,0.5)",
				strokeColor: "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data: [65, 59, 80, 81, 32]
			},
			{
				label: "My Second dataset",
				fillColor: "rgba(151,187,205,0.5)",
				strokeColor: "rgba(151,187,205,0.8)",
				highlightFill: "rgba(151,187,205,0.75)",
				highlightStroke: "rgba(151,187,205,1)",
				data: [28, 48, 40, 19, 86, 27, 90]
			}
		]
	};
	var myNewChart = new Chart(ctx).Bar(data)


</script>

<script type="text/javascript">
	$('#clients').on('show.bs.modal');
	$('tr').on("click", function() {

		id = $(this).data('id');
		name = $(this).data('name');
		$('#clientInput').val(id);
		$('#selection').attr('class', 'alert alert-info').html('Cliente selecionado : <strong>'+name+'</strong>');
		$('#change').html('Cambiar');
		$('#clients').modal('hide');




	});
	$('#products').on('show.bs.modal')
</script>
</body>
</html>