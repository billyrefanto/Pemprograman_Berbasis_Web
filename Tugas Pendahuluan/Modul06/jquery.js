$("#lihat").ready(show);
$("#button").click(function() {
  var data = $("#list").val();
  createList(data);
});

function createList(data) {
  $.post("xml/tambah.php", { list: data }, show);
  $("#list").val("");
}

function show() {
  $.get("xml/lihat.php", function(data) {
    $("#lihat").html(data);
  });
}
