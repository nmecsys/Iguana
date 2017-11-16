<!DOCTYPE html>
<html lang="en">

<?php include("includes/header.php");?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<?php include("includes/topo.php"); ?>






<?php 
if(isset ($_GET['acao'])){
	$acao= $_GET['acao'];
	if($acao=='guide'){include("includes/guide.php");}
  
	//para as noticias do site
	
	
	}else{
		include("includes/home.php");
		}

?>


<!-- Container (Contact Section) -->

<?php include('includes/footer.php'); ?>

</body>
</html>