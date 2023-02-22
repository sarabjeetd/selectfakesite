<?php 

include("connection.php");
session_start();
if(empty($_SESSION["user_id"])) {
    header("Location: ./sign-in.php");
    
    exit();
} 

$years = [
    "2020",
    "2019",
    "2018",
    "2017",
    "2016",
    "2015",
    "2014",
    "2013",
    "2012",
    "2011",
    "2010",
    "2009",
    "2008",
    "2007",
    "2006",
    "2005",
    "2004",
    "2003",
    "2002",
    "2001",
    "2000",
    "1999",
    "Other"
];
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <title>Select Auto Protect</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="javascript:void(0)"><strong> Select Auto Protect</strong></a>
            </div>
        </nav>
        <?php if(!empty($_SESSION["user_id"])) {
          
          ?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="home-menu" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="car-list.php"><i class="fa fa-fw fa-file"></i>Car List</a>
                    </li>
                     <li>
                        <a href="logout.php"><i class="fa fa-fw fa-file"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    <?php } ?>
        <div id="page-wrapper">
            <div class="header"> 
                <h1 class="page-header">
                   Dashboard <small>Welcome Admin</small>
               </h1>
            </div>