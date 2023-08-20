$(document).ready(function() {
    $("#bookTicket").submit(function(e) {
      e.preventDefault();
  
      var data = {
        from: $("#from").val(),
        to: $("#to").val(),
        date: $("#date").val(),
        time: $("#time").val(),
        passengers: $("#passengers").val()
      };
  
      $.ajax({
        type: "POST",
        url: "reservation.php",
        data: data,
        success: function(response) {
          if (response == "success") {
            alert("Your ticket has been booked!");
            $("#bookTicket").reset();
          } else {
            alert(response);
          }
        }
      });
    });
  });
  