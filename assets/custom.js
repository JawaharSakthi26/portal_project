$(".select2").select2();
$("table").each(function () {
  var tableId = $(this).attr("id");
  if (tableId) {
    $("#" + tableId).DataTable();
  } else {
    console.log("Table does not have an ID");
  }
});
