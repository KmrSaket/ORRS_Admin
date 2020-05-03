$('document').ready(function() {

    //ajax call for fetching users list
    $.ajax({
      url: 'includes/trains/trains_fetch.php',
      type: 'post',

      success:function(responsedata_fetch) {
        //alert(this.url);
       $('#response').html(responsedata_fetch);
      }
    });



    // launsh modal for insert button
    $('#insert').click(function(){
      $("#insertTrainModal").modal();
    });



    //ajax call for Insert
    $('#insertTrain').click(function(){
      $.post( "includes/trains/train_insert.php" ,
              { tnumber: $('#insertTrainNumber').val(), tname: $('#insertTrainName').val(), source: $('#insertTrainsource').val(), destination: $('#insertTraindestination').val(), runningDays: $('#insertrunningDays').val() } ,
            function(data) {
              console.log(data);
            }
          );
    });





    //ajax call for Update
    $('#update').click(function(){
      $.post( "includes/trains/train_update.php" ,
              { tnumber: $('#tnumber').val(), tname: $('#tname').val(), source: $('#source').val(), destination: $('#destination').val(), runningDays: $('#runningDays').val() } ,
            function(data) {
              console.log(data);
            }
          );
    });

    //ajax call for Delete
    $('#delete').click(function(){
      $.post( "includes/trains/train_delete.php" ,
            { tnumber: $('#tnumber').val() } ,
            function(data) {
              console.log(data);
            }
          );
    });

    // code to read selected table row cell data (values).
    $("#trainTable").on('click','.rowSelect',function(){
         // get the current row
         var currentRow=$(this).closest("tr");
         //get values of column
         var tno=currentRow.find("td:eq(0)").text().trim();
         var tname=currentRow.find("td:eq(1)").text().trim();
         var source=currentRow.find("td:eq(2)").text().trim();
         var destination=currentRow.find("td:eq(3)").text().trim();
         var rdays=currentRow.find("td:eq(4)").text().trim();

         // setting values of inputs in form of modal
         document.getElementById("tnumber").value=tno;
         document.getElementById("tname").value=tname;
         // setting placeholder values of inputs in form of modal
         $('#source').attr('placeholder', source);
         $('#destination').attr('placeholder', destination);
         $('#runningDays').attr('placeholder', rdays);
         // launch modal
         $("#trainModal").modal();
    });

});
