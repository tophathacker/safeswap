

<hr>

<div class="footer">
  <p>&copy; Safe Swap 2013</p>
</div>

</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
<script src="<?php echo ROOTPATH; ?>public/js/bootstrap.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#username').bind('keyup', function() {
      if ($(this).val().length < 5)
        $('#usernamecheck').html('too short');
      else {
        $('#usernamecheck').html('checking...');
        alert('program in json check here from /forms/checkusername/usertocheck should return a json true or false');
      }
    });
  });
</script>
</body>
</html>
