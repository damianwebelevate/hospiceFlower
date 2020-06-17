jQuery(document).ready(function($) {

	// change the text on the buttons
	// sunflower
	$("[data-product_id=48]").html('SUNFLOWER');
	// $("[value='48']").html('SUNFLOWER');
	// camillia
	$("[data-product_id=1748]").html('CAMILLIA');
	// $("[value='1748']").html('CAMILLIA');
	// daisy
	$("[data-product_id=1955]").html('DAISY');
	// $("[value='1955']").html('DAISY');
	// Gardenia
	$("[data-product_id=1963]").html('GARDENIA');
	// $("[value='1963']").html('GARDENIA');
	// Red rose
	$("[data-product_id=1970]").html('RED ROSE');
	// $("[value='1970']").html('RED ROSE');
	// Tulip
	$("[data-product_id=1975]").html('TULIP');
	// $("[value='1975']").html('TULIP');
	// Lilly
	$("[data-product_id=1981]").html('LILLY');
	// $("[value='1981']").html('LILLY');


	// generic function to set all text fields to blank
	$('#donation_amount_field').val('');
	$('[name="add-to-cart"]').on('click', function(evt) {
		let oldValue = $('#donation_amount_field').val();
		let newVal = 1;
		if((oldValue <= 0) || (oldValue <= 0.00) || (oldValue == "") ){
			evt.preventDefault();
			alert("Please enter a value greater than zero");
			$('#donation_amount_field').focus();
			$('#donation_amount_field').val(newVal +'.00');
		}
	});








});
