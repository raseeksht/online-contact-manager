$('.table-load').load("ajax/gettable.php");
function show(id,number){
	$.post('ajax/get_user.php',{
		id : id
	},function(data,status){
		$('.modal-body').html(data);
	});
}
function show_message(){
	
	$('.modal').hide();
	$('.modal-backdrop').hide();
	$('.table-load').load('ajax/gettable.php');
	$('body').removeClass();
}
$('#save').click(function(){
	var name = $('.usr_name').val();
	var number = $('.usr_number').val();
	var id = $('#id').val();

	$.post('ajax/edit_data.php',{
		id : id,
		name : name,
		number : number
	},function(data,status){
		if (status == 'success'){
			$('.alert').html(data);
			show_message();
		}else{
			$('.alert').html("<div class='alert-fail'>Failed</div>");
		}
		
	});
});
$('#delete').click(function(){
	var this_is_id = $('#id').val();
	$.post('ajax/delete.php',{
		id : this_is_id
	},function(data,success){
		$('.alert').html(data);
		show_message();

	});
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}