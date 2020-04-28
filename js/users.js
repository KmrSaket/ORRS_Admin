$('document').ready(function() {

    $.ajax({
      url: 'http://localhost/ORRS_Admin/includes/users_inc.php',
      type: 'post',

      success:function(responsedata) {
        //alert(this.url);
       $('#response').html(responsedata);
      }
    });


    // code to read selected table row cell data (values).
    $("#myTable").on('click','.rowSelect',function(){
         // get the current row
         var currentRow=$(this).closest("tr");

         var un=currentRow.find("td:eq(0)").text().trim();
         var ph=currentRow.find("td:eq(4)").text().trim(); // get current row 1st TD value
         // var col2=currentRow.find("td:eq(1)").text().trim(); // get current row 2nd TD
         // var col3=currentRow.find("td:eq(2)").text().trim(); // get current row 3rd TD


         // launch modal
         document.getElementById("uname").value=un;
         $('#phone').attr('placeholder', ph);





         $("#userModal").modal();
    });


});
