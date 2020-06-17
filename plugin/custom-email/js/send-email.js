console.log("included...plugin written by https://damianorourke.info");

function validateEmail(sEmail) {
var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,6})+$/;
if (regex.test(sEmail)) {
return true;
}
else {
return false;
}
}


jQuery(document).ready(function($) {

	// remove next line
	$('.wcpay-notice').hide();


  // set the button as disabled
	$('#getMeData').attr('disabled', true);

	// look for keydown and get a valid email address before submission
	$('#inputEmail').on('keyup', function(evt){
		if(evt.keyCode == 13){
			evt.preventDefault();
			return false;
		}
		let valid = validateEmail($(this).val());
		if(!valid){
			$(this).addClass('red');
			$('#getMeData').attr('disabled', true);
		}else{
			$(this).removeClass('red');
			$('#getMeData').attr('disabled', false);
		}
	});


  //listen for click event and then submit data after error checking
	$('#getMeData').on('click', function(evt){
		evt.preventDefault();
		let email = $('#inputEmail').val();
		let valid = validateEmail(email);
		let data = {
			'action': 'getEmailAddress',
		};
		if(!valid){
			$('#inputEmail').addClass('red');
			$('#inputEmail').focus();
			$(this).attr('disabled', true);
		}else{
			$('#inputEmail').removeClass('red');
			$(this).attr('disabled', false);
			data['whosEmail'] = email;

			//url type data

				$.ajax({
					url : send_email_ajax.ajax_url,
					type : 'post',
					data : data,
					success : function(response){
						// console.log(response);
						let obje = $.parseJSON(response);
						let str = "";
						console.table(obje);
						if(obje.iscustomer){
							$('#sendEmailInput').hide();
							$('#output').attr('style', 'display: block;');
							str += "<td>"+obje.orders+"</td>";
							str += "<td>"+obje.fName+"</td>";
							str += "<td>"+obje.sName+"</td>";
							str += "<td>"+obje.billingEmail+"</td>";
							str += "<td>"+obje.amountPaid+"</td>";
							str += "<td>"+obje.dateCreated+"</td>";
							str += "<td>"+obje.productId+"</td>";
							str += "<td>"+obje.productName+"</td>";
							$('#hiddenFirstName').val(obje.fName);
							$('#hiddenEmailAddress').val(obje.billingEmail);
							$('#hiddenOrderName').val(obje.productName);
							$('#hiddenOrderNumber').val(obje.productId);
							$('#outputRow').html(str);
						}else{
							$('#sendEmailInput').hide();
							$('#messageArea').show();
							$('#messageArea').html('<p>Sorry, cannot find order details by that email address.</p><p>The email address you entered is: '+obje.emailEntered+'.</p><p>Are you sure this is correct?</p>');
							$('#dismissError').show('slow');
						}

					},
					error : function(xhr, status, error){
						let errorMessage = "email address not found or valid";
						console.log(errorMessage);
					}
				});

		}

		$('#sendEmail').attr("disabled", true);
		// found results for email address now do the remaing functionality
		$('#checkme').on("change", function(evt){
			if($(this).is(':checked')){
				$('#sendEmail').attr("disabled", false);
			}else{
				$('#sendEmail').attr("disabled", true);
			}
		});

		$('#sendEmail').on('click', function(evt){
			evt.preventDefault();
			$('#output').hide();
			$('#loadingScreen').show();
			let data = {
				'action': 'sendCustomerReceipt',
			};
			data['hiddenFirstName'] = $('#hiddenFirstName').val();
			data['hiddenEmailAddress'] = $('#hiddenEmailAddress').val();
			data['hiddenOrderName'] = $('#hiddenOrderName').val();
			data['hiddenOrderNumber'] = $('#hiddenOrderNumber').val();
			data['checkme'] = $('#checkme').val();

			$.ajax({
				url : do_send_email_ajax.do_ajax_url,
				type : 'post',
				data : data,
				success : function(response){
					// console.log(response);
					let obje = $.parseJSON(response);
					// console.log(obje);
					// console.log(obje.whatsInDidEmail['sent']);
					if(obje.whatsInDidEmail){
						$('#loadingScreen').hide();
						$('#outputRow').empty();
						$('#messageArea').html('<p>Email Sent</p>');
						$('#dismissError').show('slow');
					}
				},
				error : function(xhr, status, error){
					let errorMessage = "Some other message for this";
					console.log(errorMessage);
				}
			});

		});

		$('#dismissError').on('click', function(){
			$('#messageArea').hide();
			$(this).hide();
			$('#inputEmail').val('');
			$('#sendEmailInput').show();
			$('#checkme').prop('checked', false);
			$('#checkme').attr('checked', false);
		})

	});



});
