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
        $('li > a[href="#previous"]').parent().attr("style", "display:none");
        $('li > a[href="#next"]').parent().attr("style", "margin-left:0px");
      }
    },
    onStepChanged: function (event, currentIndex, priorIndex) {
      if (currentIndex > 0) {
        $('li > a[href="#previous"]').parent().attr("style", "");
        $('li > a[href="#next"]').parent().attr("style", "margin-left:10px");
      } else {
        $('li > a[href="#previous"]').parent().attr("style", "display:none");
        $('li > a[href="#next"]').parent().attr("style", "margin-left:0px");
      }
    },
    onFinished: function (event, currentIndex) {
      // $(selector).submit();
      $.toast({
        text: "Form Submitted Successfully!",
        position: "top-right",
        loaderBg: "#e3e3e3",
        icon: "success",
        hideAfter: 2000,
        showHideTransition: "slide",
      });
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
