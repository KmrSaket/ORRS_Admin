$('document').ready(function() {

    $.ajax({
      url: 'includes/users_inc.php',
      type: 'post',

      success:function(responsedata) {
        $('#response').html(responsedata);
      }
    });


    // code to read selected table row cell data (values).
    $("#myTable").on('click','.btnSelect',function(){
         // get the current row
         var currentRow=$(this).closest("tr");

         var col1=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
         var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
         var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
         var data=col1+"\n"+col2+"\n"+col3;

         alert(data);
    });


});
