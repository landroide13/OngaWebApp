function activate() {
  $("#btn").fadeIn();
}

function showTable() {
  $("#t1").removeClass("not");
}

$("#btn").click(function () {
  $("#room1").load("./resources/rooms.html #r1");
  $("#room2").load("./resources/rooms.html #r2");
  $("#room3").load("./resources/rooms.html #r3");

  $("#type1").load("./resources/rooms.html #t1");
  $("#type2").load("./resources/rooms.html #t2");
  $("#type3").load("./resources/rooms.html #t3");

  $("#out1").load("./resources/rooms.html #o1");
  $("#out2").load("./resources/rooms.html #o2");
  $("#out3").load("./resources/rooms.html #o3");
});



$("#form1").submit(function (event) {
  event.preventDefault();
  showTable();
});





