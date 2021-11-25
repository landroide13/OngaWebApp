
$(document).ready(function () {
  $.datepicker.setDefaults({
    dateFormat: "yy-mm-dd",
  });
  $(function () {
    $("#from_date").datepicker();
    $("#to_date").datepicker();
  });
  $("#filter").click(function () {
    var from_date = $("#from_date").val();
    var to_date = $("#to_date").val();

    if (from_date != "" && to_date != "") {
      $.ajax({
        url: "filter.php",
        method: "POST",
        data: { from_date: from_date, to_date: to_date },
        success: function (data) {
          $("#ticket_table").html(data);
        },
      });
    } else {
      alert("Please Select Date");
    }
  });
});  



$("button").click(function () {
  $.get(
    "demo_test_post.asp",
    {
      name: "Donald Duck",
      city: "Duckburg",
    },
    function (data, status) {
      alert("Data: " + data + "\nStatus: " + status);
    }
  );
});












