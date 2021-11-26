
$(document).ready(function () {
  $.datepicker.setDefaults({
    dateFormat: "yy-mm-dd",
  });
  $(function () {
    $("#checkin").datepicker();
    $("#checkout").datepicker();
  });
  $("#filter").click(function () {
    var checkin = $("#checkin").val();
    var checkout = $("#checkout").val();

    if (checkin != "" && checkout != "") {
      $.ajax({
        url: "book.php",
        method: "POST",
        data: { checkin: checkin, checkout: checkout },
        success: function (data) {
          $("#t1").html(data);
        },
      });
    } else {
      alert("Please Select Date");
    }
  });
});






// $("button").click(function () {
//   $.get(
//     "demo_test_post.asp",
//     {
//       name: "Donald Duck",
//       city: "Duckburg",
//     },
//     function (data, status) {
//       alert("Data: " + data + "\nStatus: " + status);
//     }
//   );
// });












