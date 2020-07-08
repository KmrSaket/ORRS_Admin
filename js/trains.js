$('document').ready(function() {

    //ajax call for fetching trains list
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



      // converting running days from checkbox to string (start)
      var days="1";
      var insertSuday = document.getElementById('insertsunday');
      var insertMday = document.getElementById('insertmonday');
      var insertTuday = document.getElementById('inserttuesday');
      var insertWday = document.getElementById('insertwednesday');
      var insertThday = document.getElementById('insertthursday');
      var insertFday = document.getElementById('insertfriday');
      var insertSaday = document.getElementById('insertsaturday');



      if(insertSuday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }

      if(insertMday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }

      if(insertTuday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }

      if(insertWday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }

      if(insertThday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }

      if(insertFday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }

      if(insertSaday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }

      // converting running days from checkbox to string (end)






      $.post( "includes/trains/train_insert.php" ,
              { tnumber: $('#insertTrainNumber').val(), tname: $('#insertTrainName').val(), source: $('#insertTrainsource').val(), destination: $('#insertTraindestination').val(), runningDays: days , destination: $('#insertTraindestination').val(), runningDays: days, fare: $('#insertTrainfare').val(), distance: $('#insertTraindistance').val()} ,
              function(data, status){
               document.getElementById("trainform").reset();
               $('#insertTrainModal').modal('toggle');
               $('#errormodal').modal();
               $('#error').text(data);
               if ($('#error').text() == "Train inserted Successfully!") {
                 $('#errormodal').on('hidden.bs.modal', function () {
                   location.reload();
                 });
               }
             });


           });





    //ajax call for Update
    $('#update').click(function(){



            // converting running days from checkbox to string (start)
            var updatedays="1";
            var updateSuday = document.getElementById('updatesunday');
            var updateMday = document.getElementById('updatemonday');
            var updateTuday = document.getElementById('updatetuesday');
            var updateWday = document.getElementById('updatewednesday');
            var updateThday = document.getElementById('updatethursday');
            var updateFday = document.getElementById('updatefriday');
            var updateSaday = document.getElementById('updatesaturday');



            if(updateSuday.checked == true){
              updatedays=updatedays+"1";
            }
            else {
              updatedays=updatedays+"0"
            }

            if(updateMday.checked == true){
              updatedays=updatedays+"1";
            }
            else {
              updatedays=updatedays+"0"
            }

            if(updateTuday.checked == true){
              updatedays=updatedays+"1";
            }
            else {
              updatedays=updatedays+"0"
            }

            if(updateWday.checked == true){
              updatedays=updatedays+"1";
            }
            else {
              updatedays=updatedays+"0"
            }

            if(updateThday.checked == true){
              updatedays=updatedays+"1";
            }
            else {
              updatedays=updatedays+"0"
            }

            if(updateFday.checked == true){
              updatedays=updatedays+"1";
            }
            else {
              updatedays=updatedays+"0"
            }

            if(updateSaday.checked == true){
              updatedays=updatedays+"1";
            }
            else {
              updatedays=updatedays+"0"
            }
            // converting running days from checkbox to string (end)



            // run different ajax for different combinations of input

            if($('#updatedestination').val().trim().length==0  &&  $('#updatesource').val().trim().length==0){
              $.post( "includes/trains/train_update.php" ,
                      { tnumber: $('#tnumber').val(), tname: $('#tname').val(), source: $('#updatesource').attr('placeholder'), destination: $('#updatedestination').attr('placeholder'), runningDays: updatedays } ,
                    function(data,success) {
                      functionName(data,success);
                    }
                  );
            }
            else if ($('#updatedestination').val().trim().length==0) {
              $.post( "includes/trains/train_update.php" ,
                      { tnumber: $('#tnumber').val(), tname: $('#tname').val(), source: $('#updatesource').val(), destination: $('#updatedestination').attr('placeholder'), runningDays: updatedays } ,
                    function(data,success) {
                      functionName(data,success);
                    }
                  );
            }
            else if ($('#updatesource').val().trim().length==0) {
              $.post( "includes/trains/train_update.php" ,
                      { tnumber: $('#tnumber').val(), tname: $('#tname').val(), source: $('#updatesource').attr('placeholder'), destination: $('#updatedestination').val(), runningDays: updatedays } ,
                    function(data,success) {
                      functionName(data,success);
                    }
                  );
            }
            else {
              $.post( "includes/trains/train_update.php" ,
                      { tnumber: $('#tnumber').val(), tname: $('#tname').val(), source: $('#updatesource').val(), destination: $('#updatedestination').val(), runningDays: updatedays } ,
                    function(data,success) {
                      functionName(data,success);
                    }
                  );
            }


    });

    function functionName(data,success) {
      document.getElementById("updateTrainForm").reset();
      $('#trainModal').modal('toggle');
      $('#errormodal').modal();
      $('#error').text(data);
      if ($('#error').text() == "Train Updated Successfully!") {
        $('#errormodal').on('hidden.bs.modal', function () {
          location.reload();
        });
      }
    }





    //ajax call for Delete
    $('#delete').click(function(){
      $.post( "includes/trains/train_delete.php" ,
            { tnumber: $('#tnumber').val() } ,
            function(data) {
              $('#trainModal').modal('toggle');
              $('#errormodal').modal();
              $('#error').text(data);
              $('#errormodal').on('hidden.bs.modal', function () {
                  location.reload();
                });
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
         var rdays=currentRow.find("td:eq(5)").text().trim();
         // setting values of inputs in form of modal
         document.getElementById("tnumber").value=tno;
         document.getElementById("tname").value=tname;
         // setting placeholder values of inputs in form of modal
         $('#updatesource').attr('placeholder', source);
         $('#updatedestination').attr('placeholder', destination);

         var updateSuday = document.getElementById('updatesunday');
         var updateMday = document.getElementById('updatemonday');
         var updateTuday = document.getElementById('updatetuesday');
         var updateWday = document.getElementById('updatewednesday');
         var updateThday = document.getElementById('updatethursday');
         var updateFday = document.getElementById('updatefriday');
         var updateSaday = document.getElementById('updatesaturday');

         if(rdays[1]==1){
           updateSuday.checked = true;
         }
         else {
           updateSuday.checked = false;
         }
         if(rdays[2]==1){
           updateMday.checked = true;
         }
         else {
           updateMday.checked = false;
         }
         if(rdays[3]==1){
           updateTuday.checked = true;
         }
         else {
           updateTuday.checked = false;
         }
         if(rdays[4]==1){
           updateWday.checked = true;
         }
         else {
           updateWday.checked = false;
         }
         if(rdays[5]==1){
           updateThday.checked = true;
         }
         else {
           updateThday.checked = false;
         }
         if(rdays[6]==1){
           updateFday.checked = true;
         }
         else {
           updateFday.checked = false;
         }
         if(rdays[7]==1){
           updateSaday.checked = true;
         }
         else {
           updateSaday.checked = false;
         }
         $("#trainModal").modal();
    });

});
