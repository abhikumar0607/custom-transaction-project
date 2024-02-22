$(document).ready(function(){
    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });
    $('div.setup-panel div a.btn-primary').trigger('click');

    //Remove item from cart
    $('.remove-button').on('click', function() {
        var cart_item_id = $(this).data('cart_item_id');
        
        //Call ajax
        $.ajax({
            type: 'GET',
            url: base_url+'/cart/remove',
            data: {
                cart_item_id: cart_item_id
            },
            success: function(response) {
                $(".remove_cart_res").html(response);
            },
        });
    });

    //for change shipping type
    $('body').on('change', '.shipping_type', function() { 
        var shipping_type = $('.shipping_type :selected').val();
    
        // check shipping type
        if (shipping_type == "Paid") {
            $("#free_shipping").hide();
            $("#paid_shipping").show();
        } else if (shipping_type == "Free") {
            $("#paid_shipping").hide();
            $("#free_shipping").show();
        } else {
            $("#paid_shipping").hide();
            $("#free_shipping").show();
        }
    });
    

    //Submit chechckout from
    $("#submit_checkout_form").validate({
        rules: {
            name: {
                required: true,
            },
            contact_number: {
                required: true,
            },
            email: {
                required: true,
            },
            street_address: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
            pincode: {
                required: true,
            },
            payment_method: {
                required: true,
            },
            shipping_type: {
                required: true,
            },
        },
        submitHandler: function (form,e) {
            e.preventDefault();
            var formDataArray = $(form).serializeArray();

            // Iterate through the array to find the payment_method
            var paymentMethod;
            for (var i = 0; i < formDataArray.length; i++) {
                if (formDataArray[i].name === 'payment_method') {
                    paymentMethod = formDataArray[i].value;
                    break;
                }
            }

            //Ajax call
            jQuery.ajax({  
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }, 
                url: base_url+'/process/order', 
                data: formDataArray,
                beforeSend: function () {
                    $(".disable-button").prop('disabled', true);
                },
                mimeType: "multipart/form-data",
                success: function(response) {
                    $('.checkout_form_responce').html(response);
                    $(".disable-button").prop('disabled', false);
                }
            });
        }
    });
   
    // Function to handle add to cart
    $('#addToCartButton').on('click', function() {
        var rolledPrice = $('#rolledPriceDiv').text();
        var imagePath = $('#uploadImage').data('image');
        var selectedWrapType = $('input[name="wrap_type"]:checked').val();
        if (selectedWrapType === "rolled") {
            var rolledAttr = $('#RolledAttr').val();
        
            // Use rolledAttr as needed
        } else if (selectedWrapType === "gallery") {
        var galleryAttr = $('#GalleryAttr').val();
        }
        if (selectedWrapType === "Rolled Canvas") {
        var acutalPrice = $('#discountedRolledPrice').val();
        } else if (selectedWrapType === "Gallery Wrap") {
        var acutalPrice = $('#discountedGalleryPrice').val();
        }
        var resultTable = $('#resultTable span.active').text();
        var intValue = parseInt(resultTable, 10);
        var quantity = $('.quantity').val();
        var uniqueId = Math.floor(Math.random() * 10) + '_' + Date.now();
        // AJAX request
        $.ajax({
            type: 'POST',
            url: base_url+'/add-to-cart', 
            data: {
            uniqueId: uniqueId,
            rolledPrice: acutalPrice,
            selectedWrapType: selectedWrapType,
            resultTable: resultTable,
            quantity: quantity,
            image_path: imagePath,
            _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
            if(response.success){
            window.location.href = base_url+'/cart';
            }else if (response.error) {
            // Display error message in the error-message <div>
            $('#error-message').text(response.error).show();
        }
            },
            error: function(error) {
                console.error(error);
            }
        });
    }); 
});
  