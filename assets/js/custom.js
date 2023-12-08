function select2(selector) {
  $(selector).select2();
}

function datatable(selector) {
  $(selector).DataTable();
}

function toggle(selector) {
  $(selector).each(function () {
    new Switchery($(this)[0], $(this).data());
  });
}
