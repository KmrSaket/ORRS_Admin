$('document').ready(function() {

    $.ajax({
      url: 'includes/users_inc.php',
      type: 'post',

      success:function(responsedata) {
        $('#response').html(responsedata);
      }
    });


    // code to read selected table row cell data (values).
    $("#myTable").on('click','.rowSelect',function(){
         // get the current row
         var currentRow=$(this).closest("tr");

         var col1=currentRow.find("td:eq(0)").text().trim(); // get current row 1st TD value
         var col2=currentRow.find("td:eq(1)").text().trim(); // get current row 2nd TD
         var col3=currentRow.find("td:eq(2)").text().trim(); // get current row 3rd TD
        

         // launch modal
         document.getElementById("uid").value=col1;
         document.getElementById("uname").value=col2;
         document.getElementById("email").value=col3;
         $("#userModal").modal();
    });


});
