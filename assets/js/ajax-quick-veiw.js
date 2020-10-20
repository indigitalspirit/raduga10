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
               $('#quick-view-modal-container .modal-body').text('Загрузка');
            },
            success:function(data){
				console.log("success data");
				console.log(data.id);
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