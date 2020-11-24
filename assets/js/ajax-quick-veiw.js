jQuery(document).ready(function ($) {
	$('a.quick-view-modal-container').on('click', function () {
			var productId = $(this).attr('data-product-id');
			console.log("productId", productId);
			var data = {
					id:productId,
					action:'ajax_quick_view',
					nonce: ajax_quick.nonce
			};
	console.log(data);
	console.log("ajax_quick.url" + ajax_quick.url);
	
	function objDump(object) {
		var out = "";
		if(object && typeof(object) == "object"){
			for (var i in object) {
				out += i + ": " + object[i] + "\n";
			}
		} else {
			out = object;
		}
			console.log(out);
	}
	
			$.ajax({
					url:ajax_quick.url,
					data:data,
					type: 'POST',
					dataType: 'json',
					beforeSend:function(xhr){
						 $('#quick-view-modal-container .modal-body').css('opacity', '.1');
					},
					success:function(data){
						console.log("success data", data.sale_price);
						objDump(data);

						$('#quick-view-modal-container .modal-body').css('opacity', '1');

						// $('#quick-view-modal-container .modal-body').html(data.product);
				
						 $("#quick-view-modal-container .modal-body img.img-responsive").attr("src", data.product_thumb);
						$("#quick-view-modal-container .modal-body img.img-responsive").attr("alt", data.product_name);
			
						$('#quick-view-modal-container .modal-body h2.product-title').html(data.product_name);



						//$('#quick-view-modal-container .modal-body .main-price').html(data.regular_price);
						//$('#quick-view-modal-container .modal-body .discounted-price').html(data.sale_price);

		

						if(data.sale_price) {
							$('#quick-view-modal-container .modal-body .product-price').append('<span class="main-price discounted">'+data.regular_price+' р.</span>');	
							
							$('#quick-view-modal-container .modal-body .product-price').append('<span class="discounted-price">'+data.sale_price+' р.</span>');

							$('#quick-view-modal-container .modal-body .product-price').append('<span class="discount-percentage">Распродажа!</span>');
						}

						else {
							$('#quick-view-modal-container .modal-body .product-price').append('<span class="discounted-price">'+data.price+' р.</span>');
						}


						$('#quick-view-modal-container .modal-body .product-description').append(data.product_descr);
			
			//$('#quick-view-modal-container .modal-body .product-image-slider').append(data.product_thumb);

						//$('#quick-view-modal-container .modal-body .product-image-slider').append('<img src="'+data.product_thumb+'" alt=" " class="'+data.product_name+'" />');
						//
						
						$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("href", data.product_add_to_cart);
						$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("class", 'button add_to_cart_button ajax_add_to_cart w3ls-cart fl-btn '+data.cart_button_class);
						$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("data_product_id", data.data_product_id);
						$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("data_product_sku", data.data_product_sku);
						$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("aria-label", data.data_product_label);

						
						
					

						

					
					///	console.log(data.attachment_id);
										//console.log(jQuery.parseJSON(data));
						//var obj = jQuery.parseJSON(result);
										//$('#quick-view-modal-container .modal-body').html(data.id);
						$('#quick-view-modal-container .modal-body').html(data.product);

					},
					error: function(XMLHttpRequest, textStatus, errorThrown) { 
						//alert("Status: " + textStatus); alert("Error: " + errorThrown); 
						console.log("Status: " + textStatus); 
						console.log("Error: " + errorThrown); 
						console.log("XMLHttpRequest.responseText: " + XMLHttpRequest.responseText); 
						//objDump(XMLHttpRequest);
					}  
			});
	})
});