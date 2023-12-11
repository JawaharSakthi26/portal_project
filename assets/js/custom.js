function select2(selector) {
  $(selector).select2();
}

function datatable(selector) {
  $(selector).DataTable();
}

function toggle(selector) {
  var element = $(selector)[0];
  new Switchery(element, $(element).data());
}
