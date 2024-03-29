<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Css -->
    <!-- <link rel="stylesheet" href="./css/Dashbord.css"> -->
    <link rel="stylesheet" href="./css/Dashbord.css?=<php echo time();?>">
        <link rel="stylesheet" href="../admin/css/Dashbord.css">
    <!-- Link font awsome -->
    <link rel="stylesheet" href="./css/all.css">
    <!-- Link icon siteweb -->
    <link rel="icon" href="../admin/images/icons8-medical-50.png">
    <!-- Link google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Poppins:wght@300;400;500;600;700;800;900&family=Public+Sans:wght@400;700&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
zzz

    <div class="Dach">
        <div class="sidebar">
            <h3>doctor</h3>
            <div class="nav-links">
            <a href="./doctor.php">
                <img src="../admin/images/icons8-home-48(1).png" alt="">
                    <span>Home</span>
            </a>
            <a href="./patients.php">
            <img src="../admin/images/icons8-patients-48.png" alt="" srcset="">
                    <span>patients</span>
            </a>
            <a href="#">
                <img src="../admin/images/icons8-search-48.png" alt="">
                    <span>Research</span>
            </a>
            
            <form action="" method="POST">
                <a href="#" id="logout">
                <img src="../admin//images/icons8-logout-48.png" alt="">
            <button id="logoutt" name="logout">Logout</button>
                </a>
            </form>
            <!-- <button name="logout"><span>Logout</span></button> -->
        </div>

        </div>
        <!-- SCRIPT PHP -->
        <?php 
        include('connection.php');
        // Calculate the number of rows in the patient_details table
        $patientCountQuery = $database->query("SELECT COUNT(*) FROM patient_details");
        $patientCount = $patientCountQuery->fetchColumn();

        // Retrieve the number of doctors from the Doctor table
        $doctorCountQuery = $database->query("SELECT COUNT(*) FROM Doctor");
        $doctorCount = $doctorCountQuery->fetchColumn();
        ?>
        <div class="content">
            <!--  Start Head  -->
            <div class="head">
                <div class="box">
                    <div class="box-1">
                        <h4><span>Hey</span>,<?php echo $doctor->Full_name;?></h4>
                        <h5>Doctor</h5>
                    </div>
                        <img src="../admin/images/profil.png" alt="" class="bx bx-menu" id="menu-icon">
                            <ul class="sub_navbar">
                                <li><a href="#Profil">Profil</a></li>
                                <li><a href="./Edit Profile.php">Eidite Profil</a></li>
                            </ul>
                    </div>
            </div>
            <!-- end Head -->
            <h1 class="p-relative">Dashboard</h1>

            <div class="container">
                <div class="card">
                    <img src="../admin/images/icons8-admin-settings-male-50.png" alt="">
                    <h4>Administration des médecins</h4>
                    <h3><?php echo $doctorCount; ?></h3>
                </div>
                <div class="card">
                    <img src="../admin/images/icons8-pharmacist-skin-type-3-50.png" alt="">
                    <h4>Gestion des patients</h4>
                    <h3><?php echo $patientCount; ?></h3>
                </div>
                <div class="card">
                    <img src="../admin/images/icons8-graph-report-50.png" alt="">
                    <h4>rapports</h4>
                    <h3>23</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Link JS -->
    <script src="../admin/main.js"></script>
</body>
</html>




