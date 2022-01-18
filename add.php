<? php
	include('conn.php');
 
	$nume=$_POST['nume'];
	$email=$_POST['email'];
       $nrper=$_POST['nrper'];
    $data=$_POST['data'];
    $ora=$_POST['ora'];
    $tipmenu=$_POST['tipmenu'];
   
	mysqli_query($conn,"insert into `comanda` (nume,email,nrper,data,ora,tipmenu) values ('$nume','$email','$nrper','$data','$ora','$tipmenu')");
	header('location:exam.php');
 
?>