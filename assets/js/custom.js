function select2(selector) {
  $(selector).select2();
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
    onStepChanged: function (event, currentIndex, priorIndex) {
      if (selector == "#project-create" && currentIndex == "3") {
        $(".add-user").trigger("click");
      }
    },
    onFinished: function (event, currentIndex) {
      $(selector).submit();
      Swal.fire("Form Submitted!", "Your data has been saved!");
    },
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
  });
}