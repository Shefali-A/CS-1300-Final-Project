$(document).ready(function() {

  $("#contactForm").on("submit", function() {
    var formValid = true;

    var nameIsValid = $("#nameRegExp").prop("validity").valid;
    var nameRegEx = /^[a-zA-Z ]+$/;

    if(nameIsValid && (nameRegEx.test(document.getElementById('nameRegExp').value))) {
      $("#nameError").hide();
    } else {
      $("#nameError").show();
      formValid = false;
    }
    var emailIsValid = $("#email").prop("validity").valid;
    if(emailIsValid) {
      $("#emailError").hide();
    } else {
      $("#emailError").show();
      formValid = false;
    }
    var phoneIsValid = $("#number").prop("validity").valid;
    if(phoneIsValid) {
      $("#phoneError").hide();
    } else {
      $("#phoneError").show();
      formValid = false;
    }
    var subjectIsValid = $("#subject").prop("validity").valid;
    if(subjectIsValid) {
      $("#subjectError").hide();
    } else {
      $("#subjectError").show();
      formValid = false;
    }
    var messageIsValid = $("#message").prop("validity").valid;
    if(messageIsValid) {
      $("#messageError").hide();
    } else {
      $("#messageError").show();
      formValid = false;
    }
    return formValid;
  });

});
