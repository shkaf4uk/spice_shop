<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/header-links.php';

	include $_SERVER['DOCUMENT_ROOT'] .'/parts/header-index.php';

	include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';

	
	$sql = "SELECT * FROM users WHERE id=" . $_COOKIE["login"];
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

?>
	
	<div class="profile">
		<form method="POST" action="edit_profile.php">
		  <div class="form-group">
		    <label>Ваше ФИО</label>
		    <input value="<?php echo $user["name"]?>" name="name" class="form-control">
		  </div>
		  <div class="form-group">
		    <label>Ваш email</label>
		    <input value="<?php echo $user["email"]?>" name="email" class="form-control">
		  </div>
		  <div class="form-group">
		    <label>Ваш номер телефона</label>
		    <input value="<?php echo $user["phone"]?>" name="phone" class="form-control">
		  </div>
		  
		  <div class="form-group">
		    <label>Ваш адрес</label>
		    <input value="<?php echo $user["address"]?>" name="address" class="form-control">
		  </div>
		  <button type="submit" class="btn btn-warning">Сохранить изменения</button>
		</form>
	</div>
	


<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/footer.php';
?>