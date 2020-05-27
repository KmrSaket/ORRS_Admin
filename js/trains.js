$('document').ready(function() {




  // insert train form validation
      //train number
      // var tnumber = document.getElementById('insertTrainNumber');
      //     tnumber.oninvalid = function(event) {
      //     event.target.setCustomValidity('5 digit train number!');
      //     }
      //     tnumber.oninput = function(event) {
      //     event.target.setCustomValidity('');
      //     }









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




      console.log(days);
      // converting running days from checkbox to string (end)




      $.post( "includes/trains/train_insert.php" ,
              { tnumber: $('#insertTrainNumber').val(), tname: $('#insertTrainName').val(), source: $('#insertTrainsource').val(), destination: $('#insertTraindestination').val(), runningDays: days } ,
            function(data) {
              console.log(data);
            }
          );
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
            //console.log(updatedays);
            // converting running days from checkbox to string (end)



            // run different ajax for different combinations of input

            if($('#updatedestination').val().trim().length==0  &&  $('#updatesource').val().trim().length==0){
              // console.log($('#updatesource').attr('placeholder'));
              $.post( "includes/trains/train_update.php" ,
                      { tnumber: $('#tnumber').val(), tname: $('#tname').val(), source: $('#updatesource').attr('placeholder'), destination: $('#updatedestination').attr('placeholder'), runningDays: updatedays } ,
                    function(data) {
                      console.log(data);
                    }
                  );
            }
            else if ($('#updatedestination').val().trim().length==0) {
              $.post( "includes/trains/train_update.php" ,
                      { tnumber: $('#tnumber').val(), tname: $('#tname').val(), source: $('#updatesource').val(), destination: $('#updatedestination').attr('placeholder'), runningDays: updatedays } ,
                    function(data) {
                      console.log(data);
                    }
                  );
            }
            else if ($('#updatesource').val().trim().length==0) {
              $.post( "includes/trains/train_update.php" ,
                      { tnumber: $('#tnumber').val(), tname: $('#tname').val(), source: $('#updatesource').attr('placeholder'), destination: $('#updatedestination').val(), runningDays: updatedays } ,
                    function(data) {
                      console.log(data);
                    }
                  );
            }
            else {
              $.post( "includes/trains/train_update.php" ,
                      { tnumber: $('#tnumber').val(), tname: $('#tname').val(), source: $('#updatesource').val(), destination: $('#updatedestination').val(), runningDays: updatedays } ,
                    function(data) {
                      console.log(data);
                    }
                  );
            }


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
         var rdays=currentRow.find("td:eq(5)").text().trim();
         // console.log(rdays[2]);
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
         $('#runningDays').attr('placeholder', rdays);
         // launch modal
         $("#trainModal").modal();
    });

});
