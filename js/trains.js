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
      var Suday = document.getElementById('sunday');
      var Mday = document.getElementById('monday');
      var Tuday = document.getElementById('tuesday');
      var Wday = document.getElementById('wednesday');
      var Thday = document.getElementById('thursday');
      var Fday = document.getElementById('friday');
      var Saday = document.getElementById('saturday');



      if(Suday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }
      
      if(Mday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }

      if(Tuday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }

      if(Wday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }

      if(Thday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }

      if(Fday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }

      if(Saday.checked == true){
        days=days+"1";
      }
      else {
        days=days+"0"
      }




      console.log(days);
      // converting running days from checkbox to string (start)




      $.post( "includes/trains/train_insert.php" ,
              { tnumber: $('#insertTrainNumber').val(), tname: $('#insertTrainName').val(), source: $('#insertTrainsource').val(), destination: $('#insertTraindestination').val(), runningDays: days } ,
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
