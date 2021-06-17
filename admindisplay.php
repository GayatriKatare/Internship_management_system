<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Display</title>
  <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
  <h2><b>Personal Details Of Student</b></h2>
<table id="customers">
	<th>S.No</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Email ID</th>
  <th>Date Of Birth</th>
  <th>Mobile Number</th>

    
    <?php
     $sno=1;
      $show = "select * from Personal_Details";
      $showdata = mysqli_query($con,$show);
      while($row = mysqli_fetch_array($showdata))
      {
      	$First_Name = $row['First_Name'];
      	$Last_Name  = $row['Last_Name'];
      	$Email_ID = $row['Email_ID'];
        $BDate = $row['BDate'];
        $Mobile_Number = $row['Mobile_Number'];
    
    ?>
<tr>
	<td><?php echo $sno ++ ;?></td>
	<td><?php echo $First_Name; ?></td>
	<td><?php echo $Last_Name;  ?></td>
  <td><?php echo $Email_ID;  ?></td>
  <td><?php echo $BDate;  ?></td>
  <td><?php echo $Mobile_Number;  ?></td>
</tr>
<?php } ?>
</table>
<br>
<br>
<br>
<h2><b>Educational Details Of Student</b></h2>
<table id="customers">
  <th>S.No</th>
  <th>Current Semester</th>
  <th>Current Semester Percentage</th>
  <th>Number Of Backlogs</th>
  <th>Name Of Subjects</th>

    
     <?php
     $sno=1;
      $show = "select * from degree";
      $showda = mysqli_query($con,$show);
      while($ro = mysqli_fetch_array($showda))
      {
        $current_Semester = $ro['current_Semester'];
        $current_Percentage  = $ro['current_Percentage'];
        $No_ofBacklogs = $ro['No_ofBacklogs'];
        $Name_ofBacklogs = $ro['Name_ofBacklogs'];
    
    ?>
<tr>
  <td><?php echo $sno ++ ;?></td>
  <td><?php echo $current_Semester; ?></td>
  <td><?php echo $current_Percentage;  ?></td>
  <td><?php echo $No_ofBacklogs;  ?></td>
  <td><?php echo $Name_ofBacklogs;  ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>