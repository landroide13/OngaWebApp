

$(document).ready(function () {
  $("#form1").submit(function (event) {
    var formData = {
      sqa: $("#from").val(),
      sqb: $("#to").val(),
    };
    $.ajax({
      method: "POST",
      url: "ajax/search.ajax.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      var tbl = document.getElementById("t1");
      var rowCount = tbl.rows.length;
      for (var i = 1; i < rowCount; i++) {

        tbl.deleteRow(1);
      }
      
      for (var i = 0; i < data.length; i++) {
        var rn = data[i]["roomName"];
        var rt = data[i]["type"];
        var ch = data[i]["checkout"];

        tr = tbl.insertRow(-1);
        var tabCell = tr.insertCell(-1);
        tabCell.innerHTML = rn;
        var tabCell = tr.insertCell(-1);
        tabCell.innerHTML = rt;
        var tabCell = tr.insertCell(-1);
        tabCell.innerHTML = ch; 
      }
    });
    event.preventDefault();
  });
});




















