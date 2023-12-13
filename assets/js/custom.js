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
    onInit: function (event, currentIndex) {
      if (currentIndex == 0) {
        $(".actions > ul > li:first-child").attr("style", "display:none");
        $(".actions > ul > li:nth-child(2)").attr("style", "margin-left:0px");
      }
    },
    onStepChanged: function (event, currentIndex, priorIndex) {
      if (currentIndex > 0) {
        $(".actions > ul > li:first-child").attr("style", "");
        $(".actions > ul > li:nth-child(2)").attr("style", "margin-left:10px");
      } 

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
    format: "dd/mm/yyyy",
  });
}
