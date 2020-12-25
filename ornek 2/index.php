<?php
include("conn.php"); 

$SQL=$db->prepare("SELECT DISTINCT name FROM words");
$SQL->execute();


?>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<section>
		<div class="cart">
			<div class="search">
				<form action="islem.php" method="POST">
					<i class="fa fa-search" aria-hidden="true"></i>
					<input type="text" name="name" placeholder="Search for everything">
					<input type="hidden" class="button" name="add">

				</form>
			</div>
			<hr>
			<div class="trending-shortcuts">
				<h2>TRENDING SHORTCUTS</h2>
				<button><i class="fa fa-commenting-o "></i> Messages</button>
				<button><i class="fa fa-paperclip "></i> Attachments</button>
				<button><i class="fa fa-users "></i> People</button>
			</div>
			<div class="recent-searches">
				<h2>RECENT SEARCHES</h2>
				<?php 
      			while($row=$SQL->fetch(PDO::FETCH_ASSOC)){
      			?>
      			
      			<div>
				<div onmouseover="this.style.backgroundColor='#EBEAF3'" onmouseout="this.style.backgroundColor='white'" class="recent"><i class="fa fa-clock-o" aria-hidden="true"></i>
 <?php echo $row['name']?></div><div class="delete"><a  href="islem.php?delete=ok&name=<?php echo $row['name'] ?>">X</a></div>
 <?php } ?>
			</div>
		</div>
		</div>
	</section>
	
</body>
<script src="https://use.fontawesome.com/a399d72800.js"></script>
</html>