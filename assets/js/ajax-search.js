jQuery(document).ready(function ($) {
  $('#searchform input[name="s"]').on('keyup', function () {
      // var search = $('#searchform input[name="s"]').val();
      var search = $(this).val();
      console.log('typing');
      console.log('search: '+search);
      console.log($('#searchform input[name="s"]'));

      if (search.length < 4) {
        $('#searchform .search-result').removeClass('active');
        $('#searchform .search-result').html('');

        return false;
      }
      var data = {
          s:search,
          action: 'search_action',
          nonce : searchform.nonce

      };
      console.log('data'+data);
      console.log('data.nonce'+data.nonce);

      function appendResult(object, address) {
        var out = "";
        if(object && typeof(object) == "object"){
          for (var i in object) {
            //out += i + ": " + object[i] + "\n";
            out += object[i];
          }
        } else {
          out = object;
        }
          console.log(out);
          $(address).append(out);
      }
    

      $.ajax({
          url: searchform.url,
          data :data,
          type:'POST',
          dataType:'json',
          beforeSend:function(xhr){
          },
          success:function(data){
            console.log('data out:');
            //objDump(data);
            if(data.length>0){
              $('#searchform .search-result').addClass('active');
            }
            
            appendResult(data, '#searchform .search-result');
              //$('#searchform .search-result').html(data.out);
             // var heightResilt = $('#searchform .search-result').height();
             // $('#searchform').css('height', heightResilt);
              //.log($('.search_form .search-result').height());
          }
      });

  });

  $(document).on("click", function (e) {
    if ($(e.target).is("#searchform .search-result a") === false) {
        $('#searchform .search-result').removeClass('active');
        $('#searchform .search-result').html('');
    }
});
});