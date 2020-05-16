<?php

    #akses config.php buat setting, dan auth buat session
    session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
<body class="loggedin">

<div class="container emp-profile">
    <tr>
                <a href="index.php"><i class="fas fa-home"></i>Home</a></td>
                <tab2><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></tab2>
    </tr>
                <form action="" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img class="img img-responsive rounded-circle mb-0" src="../img/<?php echo $_SESSION['photo'] ?>" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <p>
                                             <?php echo $_SESSION['username']; ?> <!--Tampilin nama dari tabel user yg aktif berdasarkan session-->
                                        </p>
                                    </h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                            <?php echo $_SESSION['bio']; ?> <!--Tampilin bio dari tabel user yg aktif berdasarkan session-->
                            <div class="row=6">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <?php  
                             $id = $_SESSION['id'];  #Simpan nilai username yg aktif berdasarkan session ke variabel username
                                {         
                                    echo "<td><a href='update.php?username=$id'>Edit Profile</a></td>"; 
                                    #Menuju update.php dengan get parameter username dengan nilai dari variabel username diatas
                                }    
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    <div class="profile-work">
                            <p>My Event</p>
                            <a href="profile.php">List All of My Event</a><br/>
                            <p>Kategori Favorit</p>
                            <a href="profile.php">Web Designer</a><br/>
                            <a href="profile.php">Web Developer</a><br/>
                            <a href="profile.php">WordPress</a><br/>
                            <a href="profile.php">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['username']; ?></p> <!--Tampilin username dari tabel user yg aktif berdasarkan session-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['email']; ?></p> <!--Tampilin email dari tabel user yg aktif berdasarkan session-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Instansi</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['instansi']; ?></p> <!--Tampilin instansi dari tabel user yg aktif berdasarkan session-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['phone']; ?></p> <!--Tampilin phone dari tabel user yg aktif berdasarkan session-->
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    </body>
    
<style type="text/css">

body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}

    tab1 { padding-left: 4em; }
    tab2 { padding-left: 11em; }
    tab3 { padding-left: 12em; }
    tab4 { padding-left: 16em; }
    tab5 { padding-left: 20em; }
    tab6 { padding-left: 24em; }
    tab7 { padding-left: 28em; }
    tab8 { padding-left: 32em; }
    tab9 { padding-left: 36em; }
    tab10 { padding-left: 40em; }
    tab11 { padding-left: 44em; }
    tab12 { padding-left: 48em; }
    tab13 { padding-left: 52em; }
    tab14 { padding-left: 56em; }
    tab15 { padding-left: 60em; }
    tab16 { padding-left: 64em; }

</style>

</html>

