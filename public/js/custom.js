$(function(){

	// Scroll to search for donors - START
	$('.goto-searchfordonors').click(function(){
		$('html, body').animate({
			scrollTop: $("#searchfordonors").offset().top - 80
		}, 800);
	});
	// Scroll to search for donors - END

	// Select box
	$('select123').select2();

	// Add/Remove more phone in signup page - START

	$('.add-more-phone').click(function(){
		$("#phone-fields").append('<span><input class="form-control" name="phone[]" type="text" style="margin-top: 5px; width: 95%; display:inline"><a class="remove-field" href="javascript:void(0)">&nbsp;x</a></span>');
	});

	$('body').on('click', '.remove-field', function(e){
		$(this).parent('span').remove();
	});
	// Add/Remove more phone in signup page - END

	// Add/Remove more email in signup page - START

	$('.add-more-email').click(function(){
		$("#email-fields").append('<span><input class="form-control" name="email[]" type="text" style="margin-top: 5px; width: 95%; display:inline"><a class="remove-field" href="javascript:void(0)">&nbsp;x</a></span>');
	});

	// Add/Remove more email in signup page - END

	//listing districts according to thier provinces - START

    $("body").on('change', '.province', function(){

	var province_code = $(this).val();
        $.ajax({
            type: "GET",
            url: "/province/districts/" + province_code, //
            success: function(districts){
                console.log(districts);
                $('.districts-select').empty();
                $('.districts-select').append('<option>Choose your district</option>');
                for(i = 0; i < districts[0].length; i++){
                	$('.districts-select').append('<option value="' + districts[1][i] + '">' + districts[0][i] + '</option>');
                }  
            },
            error: function(){
                alert("failure");
            }
        });
    });

	//listing districts according to thier provices - STOP

	//listing villages according to thier districts - START

    $("body").on('change', '.districts-select', function(){

	var district_code = $(this).val();
        $.ajax({
            type: "GET",
            url: "/district/villages/" + district_code, //
            success: function(villages){
                console.log(villages);
                $('.village-select').empty();
                $('.village-select').append('<option>Choose your village</option>');
                for(i = 0; i < villages[0].length; i++){
                	$('.village-select').append('<option value="'+ villages[1][i] +'">'+ villages[0][i] +'</option>');
                }
                  
            },
            error: function(){
                alert("failure");
            }
        });
    });

	//listing villages according to thier districts - STOP


});