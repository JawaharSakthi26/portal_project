function select2(selector) {
  $(selector).each(function () {
    let value = $(this).data("placeholder");
    $(this).select2({
      placeholder: value,
    });
  });
}

function datatable(selector) {
  $(selector).DataTable();
}

function switchery(selector) {
  new Switchery($(selector)[0], $(selector).data());
}

function formWizard(selector) {
  $(selector).steps({
    headerTag: "h6",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    showFinishButtonAlways: true,
    labels: {
      next: "Next",
      previous: "Previous",
      finish: "Submit",
    },
    onFinished: function (event, currentIndex) {
      // $(selector).submit();
      toastr("Form Submitted Successfully!");
    },
  });
}

function toastr(message) {
  $.toast({
    text: message,
    position: "top-right",
    loaderBg: "#e3e3e3",
    icon: "success",
    hideAfter: 2000,
    showHideTransition: "slide",
  });
}

function texteditor(selector) {
  tinymce.init({
    selector: selector,
    height: 250,
  });
}

function datepicker(selector) {
  $(selector).datepicker({
    autoclose: true,
    todayHighlight: true,
    format: "dd/mm/yyyy",
  });
}
