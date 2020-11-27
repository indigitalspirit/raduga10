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

	console.log('galery: ');
	//objDump(data.product_images);

	function insertProductData(productObject) {
		if(productObject.gallery_images) {
			console.log('NEED SLIDER');

			$('#quick-view-modal-container .modal-body .product-image-slider__wrapper').append('<div class="product-image-slider__nav"></div>');

			// $('#quick-view-modal-container .modal-body .product-image-slider__wrapper').append('<button type="button" class="slick-prev slider-arrow_left"><i class="fa fa-chevron-left"></i></button>');
			// $('#quick-view-modal-container .modal-body .product-image-slider__wrapper').append('<button type="button" class="slick-next slider-arrow_right"><i class="fa fa-chevron-right"></i></button>');

			for (var i in productObject.gallery_images) {
				$('#quick-view-modal-container .modal-body .product-image-slider').append('<div class="product-image-slider__item"><img src="'+productObject.gallery_images[i]+'" alt="'+i+'" class="img-responsive" /></div>');

				$('#quick-view-modal-container .modal-body .product-image-slider__nav').append('<div class="product-image-slider__nav-item"><img src="'+productObject.gallery_images[i]+'" alt="'+i+'" class="img-responsive" /></div>');

				//productObject.gallery_images[i];
			}

			//product-image-slider

			/*** quick view products gallery slider ***/
			var galleryProductsSlider = $('#quick-view-modal-container .product-image-slider');

			var galleryProductsSliderNav = $('#quick-view-modal-container .product-image-slider__nav');

			galleryProductsSlider.slick({
				//prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
				//nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
				// arrows: true,
				// autoplay: true,
				// autoplaySpeed: 4000,
				// dots: false,
				// pauseOnFocus: false,
				// pauseOnHover: false,
				// infinite: true,
				// slidesToShow: 3
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				fade: true,
				asNavFor: '.product-image-slider__nav'
			});

	
			galleryProductsSliderNav.slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.product-image-slider',
				//dots: true,
				//centerMode: true,
				arrows: true,
				prevArrow: '<button type="button" class="slick-prev slider-arrow_left"><i class="fa fa-chevron-left"></i></button>',
				nextArrow: '<button type="button" class="slick-next slider-arrow_right"><i class="fa fa-chevron-right"></i></button>',
				focusOnSelect: true
			});
	

		}

		else {
			$('#quick-view-modal-container .modal-body .product-image-slider').append('<img src="'+productObject.product_thumb+'" alt="'+productObject.product_name+'" class="img-responsive" />');
			
		}

		// $("#quick-view-modal-container .modal-body img.img-responsive").attr("src", productObject.product_thumb);
		// $("#quick-view-modal-container .modal-body img.img-responsive").attr("alt", productObject.product_name);

		$('#quick-view-modal-container .modal-body h2.product-title').html(productObject.product_name);


		if(productObject.sale_price) {
			$('#quick-view-modal-container .modal-body .product-price').append('<span class="main-price discounted">'+productObject.regular_price+' р.</span>');	
			
			$('#quick-view-modal-container .modal-body .product-price').append('<span class="discounted-price">'+productObject.sale_price+' р.</span>');

			$('#quick-view-modal-container .modal-body .product-price').append('<span class="discount-percentage">Распродажа!</span>');
		}

		else {
			$('#quick-view-modal-container .modal-body .product-price').append('<span class="discounted-price">'+productObject.price+' р.</span>');
		}


		$('#quick-view-modal-container .modal-body .product-description').append(productObject.product_descr);

		$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("href", productObject.product_add_to_cart);

		$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("class", 'button add_to_cart_button ajax_add_to_cart w3ls-cart fl-btn '+productObject.cart_button_class);

		$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("data_product_id", productObject.data_product_id);

		$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("data_product_sku", productObject.data_product_sku);

		$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("aria-label", productObject.data_product_label);


	}

	function cleanProductData() {
		// $("#quick-view-modal-container .modal-body img.img-responsive").attr("src", 'https://raduga10.ru/wp-content/uploads/woocommerce-placeholder-300x300.png');
		// $("#quick-view-modal-container .modal-body img.img-responsive").attr("alt", '');

		$("#quick-view-modal-container .modal-body .product-image-slider").html('');

		$('#quick-view-modal-container .modal-body h2.product-title').html('');


		
			$('#quick-view-modal-container .modal-body .product-price span.main-price').remove();	
			
			$('#quick-view-modal-container .modal-body .product-price span.discounted-price').remove();
			$('#quick-view-modal-container .modal-body .product-price span.discount-percentage').remove();



		$('#quick-view-modal-container .modal-body .product-description').append('');

		$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("href", "#");

		$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("class", 'button add_to_cart_button ajax_add_to_cart w3ls-cart fl-btn ');

		$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("data_product_id", "");

		$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("data_product_sku", "");

		$("#quick-view-modal-container .modal-body a.add_to_cart_button").attr("aria-label", "");


	}
	
			$.ajax({
					url:ajax_quick.url,
					data:data,
					type: 'POST',
					dataType: 'json',
					beforeSend:function(xhr){
						 $('#quick-view-modal-container .modal-body').css('opacity', '.1');

						 cleanProductData();

					},
					success:function(data){
						console.log("success data", data.sale_price);
						console.log('data recieved: ');
						objDump(data);


						insertProductData(data);

						$(document.body).trigger('wc_fragment_refresh');
						

						$('#quick-view-modal-container .modal-body').css('opacity', '1');

					
						//$('#quick-view-modal-container .modal-body').html(data.product);

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