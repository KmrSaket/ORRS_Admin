$('document').ready(function() {

    $.ajax({
      url: 'includes/users_inc.php',
      type: 'post',

      success:function(responsedata) {
        $('#response').html(responsedata);
      }
    });



});
