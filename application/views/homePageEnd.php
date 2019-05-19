</div>

<div id='Personal Data' class='tabcontent' >
  <h3>Personal Data</h3>
  <p>Personal Data will be here.</p>
</div>

<?php  
   if($this->session->userdata('role') == 'HR')  
    { 
        echo "<div id='Employee List' class='tabcontent' style='display:block'>";
    }
    else
    {
        echo "<div id='Employee List' class='tabcontent' >";
    }  
 ?>
	<h3>Employee List</h3>
	<p>Employee List will be here.</p> 
</div>
		 
<div id="Add New Employee" class="tabcontent">
  <h3>Add New Employee</h3>
  <p>Add New Employee will be here.</p>
</div>

<div id="Add New User" class="tabcontent">
  <h3>Add New User</h3>
  	<form action="/hr/index.php/User_controller/add_user" method="post">
        <label>User Name  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  
        <label>Password   &nbsp;&nbsp;:</label><input type = "password" name = "password" class = "box" /><br/><br />
		
		<label>Role  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
		<select name="role" style="width: 165px;">
		    <option value="Admin">Admin</option>
		    <option value="Employee">Employee</option>
		    <option value="HR">HR</option>
		    <option value="Manager">Manager</option>
		</select>
		<br/><br />
		<label>Access   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
		<select name="access" style="width: 165px;">
		    <option value="1">1</option>
		    <option value="0">0</option>
		</select>
		<br/><br />
        <input type = "submit" value = " Add "  class="btn btn-primary" /><br />
                  <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?>
    </form>
</div>

<div id='Manage Users' class='tabcontent' style='display:block'>

  <h3>Manage Users</h3>
  <!-- <p>Manage Users will be here.</p> -->
  <!-- <a href = "/hr/index.php/User_controller/show_user">Show</a> -->
  <table border = "1" class="table table-bordered table-responsive">
<?php
    $i = 1;
    echo "<tr>";
    echo "<td>Serial</td>";
    echo "<td>User Name</td>";
    echo "<td>Email</td>";
    echo "<td>Access</td>";
    echo "<td>Edit</td>";
    echo "<td>Delete</td>";
    echo "</tr>";
    foreach($records as $r){
        echo "<tr>";
        echo "<td>".$i++."</td>";
        echo "<td>".$r->user_name."</td>";
        echo "<td>".$r->email."</td>";
        echo "<td>".$r->access."</td>";
        echo "<td><a href = '/hr/index.php/User_controller/edit/".$r->email."' class='btn btn-primary'>Edit</a></td>";
        $email= $r->email;
        echo "<td><a href = '/hr/index.php/User_controller/delete_user/".$email."' class='btn btn-danger'>Delete</a></td>"; 
        echo "<tr>"; 
    }
    ?>
    </table>

</div>

<!-- <div id="User List" class="tabcontent">
  <h3>User List</h3>
  <p>User List will be here.</p>
</div> -->

<!-- <div id="Arrange Roles" class="tabcontent">
  <h3>Arrange Roles</h3>
  <p>Arrange Roles will be here.</p>
</div> -->

<div id="Attendance" class="tabcontent">
	<h3>Attendance</h3>
	<p>Attendance will be here.</p> 
</div>

<div id="Payroll" class="tabcontent">
	<h3>Payroll</h3>
	<p>Payroll will be here.</p> 
</div>

<div id="Leave Management" class="tabcontent">
	<h3>Leave Management</h3>
	<p>Leave Management will be here.</p> 
</div>

<div id="Rank Setup" class="tabcontent">
	<h3>Rank Setup</h3>
	<p>Rank Setup will be here.</p> 
</div>
