$(document).ready(function() {
	$('#products').pinterest_grid({
		no_columns: 4,
		padding_x: 10,
		padding_y: 10,
		margin_bottom: 50,
		single_column_breakpoint: 700
	});

	// Update item cart
	$(".btn-update-item").on('click', function(e){
		e.preventDefault();
		
		var id = $(this).data('id');
		var href = $(this).data('href');
		var quantity = $("#product_" + id).val();

		window.location.href = href + "/cart/update/" + id + "/" + quantity
	});

	//$("#changeAddress").checkboxpicker();
	$("#changeAddress").on( "click", function() {
        check = document.getElementById("changeAddress");
        if (check.checked) {
        	for(i = 0; i < 100; i ++){
        		$('#content'+i).show();
        	}   
        }
        else {
            for(i = 0; i < 100; i ++){
        		$('#content'+i).hide();
        	}   
        }
    });

});