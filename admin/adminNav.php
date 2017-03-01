<?php 
include "../Managers/profilManager.php";
if(isset($_GET['level'])){
	$nb = $_GET['level'];
}
else{
	session_destroy();
	header('Location: ../actu.php');
}

if($nb == 0){
?>
	<div id="menu">
		<ul>
			<?php echo '<li><a href="admin.php?level='.$_SESSION['level'].'">Profil</a></li>'?>
			<li><a href="forum.php">Visiter le Forum</a></li>
			<li><a href="disconnection.php">Déconnexion</a></li>
		</ul>
	</div>
<?php
}
elseif($nb == 1){
?>
	<div id="menu">
		<ul>
			<?php echo '<li><a href="admin.php?level='.$_SESSION['level'].'">Profil</a></li>'?>
			<li><a href="posts.php">Posts</a></li>
			<li><a href="forum.php">Visiter le Forum</a></li>
			<li><a href="disconnection.php">Déconnexion</a></li>
		</ul>
	</div>
<?php
}
elseif($nb == 2){
?>
	<div id="menu">
		<ul>
			<?php echo '<li><a href="admin.php?level='.$_SESSION['level'].'">Profil</a></li>'?>
			<li><a href="categories.php">Catégories</a></li>
			<li><a href="articles.php">Articles</a></li>
			<li><a href="posts.php">Posts</a></li>
			<li><a href="forum.php">Visiter le Forum</a></li>
			<li><a href="disconnection.php">Déconnexion</a></li>
		</ul>
	</div>
<?php
}
elseif($nb == 3){
?>
	<div id="menu">
		<ul>
			<?php echo '<li><a href="admin.php?level='.$_SESSION['level'].'">Profil</a></li>'?>
			<li><a href="categories.php">Catégories</a></li>
			<li><a href="articles.php">Articles</a></li>
			<li><a href="posts.php">Posts</a></li>
			<li><a href="forum.php">Visiter le Forum</a></li>
			<li><a href="habilitation.php">Habilitations</a></li>
			<li><a href="disconnection.php">Déconnexion</a></li>
		</ul>
	</div>
<?php
}
?>

