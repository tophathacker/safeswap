$(document).ready(function() {
  //check if username is taken
  $('#signupusername').bind('keyup', function() {
    var usrcheck = $('#usernamecheck');
    if ($(this).val().length < 5) {
      usrcheck.html('too short');
    } else {
      usrcheck.html('checking...');
      $.getJSON('forms/checkusername/' + $(this).val(), function(data) {
        if (data.available === 'true')
          usrcheck.html("Username Available");
        else
          usrcheck.html("Username Taken!");
      });
    }
  });

  //check for valid email
  $('#email').bind('keyup', function() {

    var emailaddressVal = $(this).val();
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var emailcheck = $('#emailcheck');
    if (emailaddressVal === '') {
      emailcheck.html('empty!');
    }
    else if (!emailReg.test(emailaddressVal)) {
      emailcheck.html('please enter valid email');
    }
    else {
      emailcheck.html('');
    }

  });

  $('#password1').bind('keyup', checkPasswords);
  $('#password2').bind('keyup', checkPasswords);
  function checkPasswords() {
    var pass1 = $('#password1');
    var pass2 = $('#password2');
    var passcheck = $('#passwordcheck');
    if (pass1.val().length < 5)
      passcheck.html('Password too short!');
    else if (pass1.val() !== pass2.val())
      passcheck.html('Passwords don\'t match');
    else
      passcheck.html('');


  }

  //for some reason forms don't work in modal, so send json to server
  // and expect a json back.
  $('#loginbutton').bind('click', function() {
    $.post("forms/login_action", {json: JSON.stringify({"username": $('#username').val(), "password": $('#password').val()})})
            .done(function(data) {
      var json = $.parseJSON(data);
      if (json.id == '1')
        $('#login-modal').modal('hide');
    });
  });

});