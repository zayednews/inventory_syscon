<h3>Please Login!</h3>
 	<form action="/syscon/index.php/Login/logInCheck" method="post">
                  <label>Email  :</label><input type = "text" name = "email" class = "box"/><br /><br />
                  
                  <label>Password   &nbsp;&nbsp;:</label><input type = "password" name = "password" class = "box" />
                  
				  <br/><br />
                  <input type = "submit" value = " Submit "  class="btn btn-primary" /><br />
                  <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?>
    </form>
	
</div>

</body>
</html>