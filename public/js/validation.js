$(function() {

  $("input, textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      console.log("success");
      $form.submit();
    },
    filter: function() {
      return $(this).is(":visible");
    },
  });


});

