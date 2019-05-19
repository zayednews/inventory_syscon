<script>
	function delete_emp(id){
            var flag=confirm("Are you sure to delete employee all data?");
           
            if(flag===true){
            	window.location.assign("http://localhost/syscon/index.php/User_controller/delete_emp/"+id);             
             }       
            else{
               window.location.assign("http://localhost/syscon/index.php/Login/emp_list");
            } 
        }
	 function openCity(evt, cityName) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " active";
      if(cityName == "Rank Setup")
      {
        window.location.assign("http://localhost/syscon/index.php/Login/rank_setup")
      }
      if(cityName == "Leave Management")
      {
        window.location.assign("http://localhost/syscon/index.php/Login/leave_management")
      }
      if(cityName == "Attendance")
      {
        window.location.assign("http://localhost/syscon/index.php/Login/attendance")
      }
      if(cityName == "Payroll")
      {
        window.location.assign("http://localhost/syscon/index.php/Login/payroll")
      }
      if(cityName == "Personal Data")
      {
        window.location.assign("http://localhost/syscon/index.php/Login/personal_data")
      }
      if(cityName == "Add New Employee")
      {
        window.location.assign("http://localhost/syscon/index.php/Login/add_emp")
      }
      if(cityName == "Employee List")
      {        
        window.location.assign("http://localhost/syscon/index.php/Login/emp_list")
      }
      if(cityName == "Add New User")
      {
        window.location.assign("http://localhost/syscon/index.php/Login/add_user")
      }
      if(cityName == "Manage Users")
      {
        //redirect(base_url().'index.php/Login/rank_setup');
        //alert('Rank Setup');
        window.location.assign("http://localhost/syscon/index.php/Login/enter")
      }
	 }
	 	document.getElementById('search_emp').onkeypress = function(e) {
		    if(e.keyCode == 13) {
		        showEmp();
		    }
		    if(e.keyCode == 32) {
		        showEmp();
		    }
		}
		 function showEmp()
		 {
		 	str=document.getElementById('search_emp').value;
		    //alert(str);
		    if (str != '')
		    {
		    	window.location.assign("http://localhost/syscon/index.php/Login/fetch_emp_list/"+str)
		    }
		    else
		    {
		    	window.location.assign("http://localhost/syscon/index.php/Login/emp_list/")
		    }
		 }
  
</script>
	
</div>
<p align="center"><a href="/hr/index.php/Login/logout" class="btn btn-primary">Logout</a></p>
</body>
</html>