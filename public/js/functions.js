$(document).ready(function() {
  //check if username is taken
  $('#username').bind('keyup', function() {
    var usrcheck = $('#usernamecheck');
    if ($(this).val().length < 5) {
      usrcheck.html('too short');
    } else {
      usrcheck.html('checking...');
      $.getJSON('forms/checkusername/' + $(this).val(), function(data){
        if(data.available === 'true')
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
        if(emailaddressVal === '') {
            $('#emailcheck').html('empty!');
        }
        else if(!emailReg.test(emailaddressVal)){
          $('#emailcheck').html('please enter valid email');
        }
        else {
          $('#emailcheck').html('');
        }
 
    });
});