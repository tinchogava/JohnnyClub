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
	$("#showContent").on( "click", function() {
        check = document.getElementById("showContent");
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

    $("#showContent2").on( "click", function() {
        check = document.getElementById("showContent2");
        if (check.checked) {
        	for(i = 0; i < 100; i ++){
        		$('#2content'+i).show();
        	}   
        }
        else {
            for(i = 0; i < 100; i ++){
        		$('#2content'+i).hide();
        	}   
        }
    });

});