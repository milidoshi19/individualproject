<?php 
session_start();
include('connection.php');
if(isset($_SESSION['user_id'])){
    header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Website Title -->
    <title>Remote Learning</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/fontawesome-all.css" rel="stylesheet">
    <link href="assets/css/swiper.css" rel="stylesheet">
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<?php include('components/preloader.php'); ?>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <?php include('components/navigation.php'); ?>
    <!-- end of navigation -->