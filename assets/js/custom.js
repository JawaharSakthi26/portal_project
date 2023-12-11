function select2(selector) {
  $(selector).select2();
}

function datatable(selector) {
  $(selector).DataTable();
}

function switchery(selector) {
  new Switchery($(selector)[0], $($(selector)[0]).data());
}
