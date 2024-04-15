<?php
session_start();
$connection=include('includes/dbconnection.php');
if($connection){
  echo "connected";  
}
error_reporting(0);
// if (strlen($_SESSION['basicaid']==0)) {
    
//     echo'HI, INSIDE THE ELSE';
//   header('location:logout.php');
//   } else{
    
//     echo'Hi inside the if ';
//     {
//         $aname=$_POST['aname'];
//         $statustype=$_POST['statustype'];
//         $abirthyear=$_POST['abirthyear'];
//         $buildingnumber=$_POST['abuildingnumber'];
//         $species=$_POST['aspecies'];
//         $query=mysqli_query($con, "insert into  animal(aname,astatus,abirthyear,abuildingnumber, aspecies) value ('$aname','$statustype','$abirthyear','$buildingnumber', '$species')");
//       }
$animalname=$_POST['aname'];
$statustype=$_POST['statustype'];
$abirthyear=$_POST['abirthyear'];
$abuildingnumber=$_POST['abuildingnumber'];
$aspecies=$_POST['aspecies'];
echo $animalname;
echo $statustype;
echo $abirthyear;
echo $abuildingnumber;
echo $aspecies;


   


?>

<!DOCTYPE html>
<html>
<head>
<title>Animal Page Details</title>
<body>
    <div>
        <div>
            <div>
                
            <form  method="post" enctype="multipart/form-data" action="animal.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Animal Name</label>
                    <input type="text" class="form-control" id="aname" name="aname" aria-describedby="emailHelp" placeholder="Enter animal Name" value="" required="true">
                </div>
            
            <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select class="form-select mb-3" name="statustype" id="statustype" required > 
                        <option selected>Please select</option>
                        <option value="Excellent">Excellent</option>
                        <option value="Weak">Weak</option>
                        <option value="Hospitalized">Hospitalized</option>
                        <option value="Recovery">Recovery</option>
                        <option value="Maternity">Maternity  </option>
                    </select>             
                    <li>Excellent</li><li>Weak</li><li>Hospitalized</li><li>Recovery</li><li>Maternity</li>
                </div> 
                <div class="form-group">
                    <label for="exampleInputEmail1">Birth Year</label>
                    <input type="date" class="form-control" id="abirthyear" name="abirthyear" aria-describedby="emailHelp" placeholder="Enter feed number" value="" required="true" maxlength="6">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Building Number</label>
                    <input type="text" class="form-control" id="abuildingnumber" name="abuildingnumber" aria-describedby="emailHelp" placeholder="Enter breed" value="" required="true">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Species Type</label>
                    <input type="text" class="form-control" id="aspecies" name="aspecies " aria-describedby="emailHelp" placeholder="Enter Description of animal" value="" required="true">
                </div>
                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" name="submit">Submit</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php  ?>