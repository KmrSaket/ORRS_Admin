$('document').ready(function() {


    //ajax call for fetching users list
    $.ajax({
      url: 'includes/users/users_fetch.php',
      type: 'post',

      success:function(responsedata_fetch) {
        //alert(this.url);
       $('#response').html(responsedata_fetch);
      }
    });


    //ajax call for Update
    $('#update').click(function(){
      $.post("includes/users/user_update.php",
      { uname: $('#uname').val(), psw: $('#password').val() , phone: $('#phone').val() } ,
       function(data, status){
        document.getElementById("userform").reset();
        $('#userModal').modal('toggle');
        $('#errormodal').modal();
        $('#error').text(data);
      });
      $('#errormodal').on('hidden.bs.modal', function () {
        location.reload();
      });
    });


    //ajax call for Delete
    $('#delete').click(function(){
      $.post( "includes/users/user_delete.php" ,
            { uname: $('#uname').val() },
            function(data, status){
             document.getElementById("userform").reset();
             $('#userModal').modal('toggle');
             $('#errormodal').modal();
             $('#error').text(data);
           });
           $('#errormodal').on('hidden.bs.modal', function () {
             location.reload();
           });
    });


    // code to read selected table row cell data (values).
    $("#userTable").on('click','.rowSelect',function(){
         // get the current row
         var currentRow=$(this).closest("tr");
         //get values of column
         var un=currentRow.find("td:eq(0)").text().trim();
         var ph=currentRow.find("td:eq(4)").text().trim();
         // setting values of inputs in form of modal
         document.getElementById("uname").value=un;
         // setting placeholder values of inputs in form of modal
         $('#phone').attr('placeholder', ph);
         // launch modal
         $("#userModal").modal();
    });

});
