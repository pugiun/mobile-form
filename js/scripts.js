$(document).ready(function() {
	var root, sigdiv, signature;
	if($(window).width() < 400) {
		sigdiv = $("#signature").jSignature({'UndoButton':true, width:300,height:130}); 
		$('#birthdate-container').html('<input type="date" class="form-control input-lg"  id="birthdate" placeholder="Birth Date"/>');
	} else {
		sigdiv = $("#signature").jSignature({'UndoButton':true, width:600,height:200}); 
		$('#birthdate-container').html('<input type="text" class="form-control input-lg"  id="birthdate" placeholder="Birth Date"/>');		
		$("#birthdate").datepicker({format: 'dd/mm/yyyy'});
	}	
	root = location.protocol + '//' + location.host;   
	$('.carousel').carousel('pause');   	
    $('#info-form').bootstrapValidator({
        message: 'This value is not valid',
		submitHandler: function() {
			$('.carousel').carousel('next');
			firstName = $('[name=first_name]').val();
			$('.txt-first-name').text(' ' + firstName);
			//console.log($("#birthdate").val());
		 },	
		live: 'disabled',        
        fields: {
          first_name  : {
                message: 'First name is not valid',
                validators: {
                    notEmpty: {
                        message: 'First name is required'
                    },
                    stringLength: {
                        min: 2,
                        max: 20,
                        message: 'First name must be 1 to 20 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.']+$/,
                        message: 'First Name can only consist of alphabetical, number, dot and underscore'
                    }
                }
           },
          last_name  : {
                message: 'Last name is not valid',
                validators: {
                    notEmpty: {
                        message: 'Last name is required'
                    },
                    stringLength: {
                        min: 2,
                        max: 20,
                        message: 'Last name must be 1 to 20 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.']+$/,
                        message: 'Last Name can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },	 
          member_number  : {
                message: 'Memeber number is not valid',
                validators: {
                    notEmpty: {
                        message: 'Member number is required'
                    },
                    stringLength: {
                        min: 5,
                        max: 20,
                        message: 'Member number must be 5 to 20 characters long'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'Member number can only consist of numbers '
                    }
                }
            },		             	                      
        }
    });	
    $('#contact-form').bootstrapValidator({
        message: 'This value is not valid',
		submitHandler: function(validator, form) {
			$('.carousel').carousel('next');
		 },	 
		live: 'disabled',       
        fields: {
          email  : {
                message: 'Email is not valid',
                validators: {
                    notEmpty: {
                        message: 'Email is required'
                    },
                    emailAddress: {
                        min: 2,
                        max: 20,
                        message: 'Email is not valid '
                    },
                    remote: {
                    	url: root + '/rest/email',
                    	message: 'Email already in use.'
                    	
                    }
                }
           },
          phone_number  : {
                message: 'Phone number is not valid',
                validators: {
                    stringLength: {
                        min: 7,
                        max: 15,
                        message: 'Phone must be 6 to 15 characters long'
                    },
                    digits: {
                        message: 'Phone number is not valid'
                    }
                }
            },	 
          mobile  : {
                message: 'Mobile is not valid',
                validators: {
                    stringLength: {
                        min: 7,
                        max: 15,
                        message: 'Mobile must be 6 to 15 characters long'
                    },
                    digits: {
                        message: 'Mobile is not valid '
                    }
                }
            },		             	                      
        }
    });	
	/*url: "http://localhost/quick4m/rest/account",*/
	$('#sign-button').click(function() {
		var firstName, lastName, datapair, data, name_of_fund;
		firstName = $('[name=first_name]').val();
		lastName = $('[name=last_name]').val();
		name_of_fund = $('[name=name_of_fund_1]').val();
		if($('[name=name_of_fund_2]').val().trim()!=''){
			name_of_fund = name_of_fund + ', ' + $('[name=name_of_fund_2]').val().trim();
		}
		if($('[name=name_of_fund_3]').val().trim()!=''){
			name_of_fund = name_of_fund + ', ' + $('[name=name_of_fund_3]').val().trim();
		}
		if($('[name=name_of_fund_4]').val().trim()!=''){
			name_of_fund = name_of_fund + ', ' + $('[name=name_of_fund_4]').val().trim();
		}
		if($('[name=name_of_fund_5]').val().trim()!=''){
			name_of_fund = name_of_fund + ', ' + $('[name=name_of_fund_5]').val().trim();
		}						
		//firstName = 'Manuel';
		//lastName = 'Soriano';
		datapair = sigdiv.jSignature("getData", "svgbase64");
		$("#signature_capture").val(data);
       	data = $('#signature').jSignature('getData');	
		$.ajax({
			type: "POST", 		
			url: root + "/rest/signature",
			cache: false,
			dataType: 'json',
			data: { first_name: firstName, last_name: lastName, data: data },
          	complete: function (response) {
          		if (response.responseText != '') {
            		signature = response.responseText;
            		$('#text-member-number').text($('[name=member_number]').val());
            		$('#text-name').text($('[name=first_name]').val()+' '+$('[name=last_name]').val());
            		$('#text-birthdate').text($('#birthdate').val());
            		$('#text-phone-number').text($('[name=phone_number]').val());
            		$('#text-mobile-number').text($('[name=mobile]').val());
            		$('#text-address').text($('[name=address]').val());
            		$('#text-email').text($('[name=email]').val());
            		$('#text-name-of-fund').text(name_of_fund);
            		$('#text-previous-name').text($('[name=previous_name]').val());
            		$('#text-previous-address').text($('[name=previous_address]').val());
            		$("#image-signature").attr("src", root + "/signatures/" + signature);
            		$('.carousel').carousel('next');
            	}
            }						
		});
	});	 
	$('#submit-button').click(function() {
		var firstName, lastName, address, memberNumber, email, phoneNumber, mobile, birth_date, name_of_fund, previous_name, previous_address;
		firstName = $('[name=first_name]').val();
		lastName = $('[name=last_name]').val();
		address = $('[name=address]').val();
		memberNumber = $('[name=member_number]').val();
		email = $('[name=email]').val();
		phoneNumber = $('[name=phone_number]').val();
		mobile = $('[name=mobile]').val();
		birth_date = $('#birthdate').val();
		name_of_fund_1 = $('[name=name_of_fund_1]').val();
		name_of_fund_2 = $('[name=name_of_fund_2]').val();
		name_of_fund_3 = $('[name=name_of_fund_3]').val();
		name_of_fund_4 = $('[name=name_of_fund_4]').val();
		name_of_fund_5 = $('[name=name_of_fund_5]').val();
		if($('input[name=radio-fund]:checked').val()=='y'){
			previous_name = $('[name=previous_name]').val();
			previous_address = $('[name=previous_address]').val();	
		} else {
			previous_name = $('[name=first_name]').val()+' '+$('[name=last_name]').val();
			previous_address = $('[name=address]').val();				
		}
		$.ajax({
			type: "POST", 		
			url: root + "/rest/account",
			cache: false,
			dataType: 'json',
			data: { first_name: firstName, last_name: lastName, address: address, birth_date: birth_date, 
				member_number: memberNumber, email: email, phone_number: phoneNumber, mobile: mobile, name_of_fund_1: name_of_fund_1, 
				name_of_fund_2: name_of_fund_2, name_of_fund_3: name_of_fund_3, name_of_fund_4: name_of_fund_4, name_of_fund_5: name_of_fund_5, 
				previous_name: previous_name, previous_address: previous_address, signature: signature },
          	complete: function (response) {
          		if (response.responseText == 'success') {
            		$('.carousel').carousel('next');
            	}
            }						
		});
	});	 
		
	$('#btn-add-fund').click(function() {		
		if($('[name=name_of_fund_2]').parent().is(":hidden")){
			$('[name=name_of_fund_2]').parent().removeClass('hidden');
		}
		else if($('[name=name_of_fund_3]').parent().is(":hidden")){
			$('[name=name_of_fund_3]').parent().removeClass('hidden');
		}
		else if($('[name=name_of_fund_4]').parent().is(":hidden")){
			$('[name=name_of_fund_4]').parent().removeClass('hidden');
		}
		else if($('[name=name_of_fund_5]').parent().is(":hidden")){
			$('[name=name_of_fund_5]').parent().removeClass('hidden');
			$('#btn-add-fund').parent().hide();
		}						
	});
	
    $('input:radio').click(
        function(){
        	    $('#previous-name-row').toggle();
            	$('#previous-address-row').toggle();
            if($('input[name=radio-fund]:checked').val()=='n'){
            	$('[name=previous_name]').val("");
            	$('[name=previous_address]').val("");
            }
        }
    );  
    	       				
});		