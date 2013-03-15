<div id="signup" class="modal hide fade in" style="display: none; ">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3>Ready to Sign Up?!</h3>
  </div>
  <form id="signupform">
    <div class="modal-body">
      <div class="row">
        <div class="span5">
          <label>Username</label>
          <input id="signupusername" type="text" class="span3" placeholder="Desired Username"><p id="usernamecheck" class="span2 pull-right">...</p>
          <label>Password</label>
          <input type="password" id="password1" class="span3" placeholder="******"><p id="passwordcheck" class="span2 pull-right"></p>
          <input type="password" id="password2" class="span3" placeholder="******">
          <label>Full Name</label>
          <input type="text" class="span3" placeholder="John Doe">
          <label>Email Address</label>
          <input id="email" type="text" class="span3" placeholder="Your email address"><p id="emailcheck" class="span2 pull-right"></p>
          <label>Some kind of captcha here</label>
        </div>


      </div>
    </div>
    <div class="modal-footer">
      <button id="formsubmit" type="submit" class="btn btn-primary" data-dismiss="modal">Signup</button>
      <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
  </form>
</div>


<div id="signupalert" class="alert success fade" data-alert="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Thanks for registering! check your e-mail!</strong>
</div>