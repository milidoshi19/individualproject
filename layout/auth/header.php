<?php
session_start();
include('connection.php');
if(!isset($_SESSION['user_id'])){
  header("location:login.php");
}
include('components/query.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Remote Tutoring</title>
  <!-- plugins:css -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="assets2/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets2/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets2/css/style.css">
  <!-- End layout styles -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include('components/top-navbar.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include('components/left-navbar.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">