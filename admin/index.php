<?php include("includes/header.php"); ?>
<?php if (!$session->is_signed_in()) {redirect('login.php');} {
    # code...
} ?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php include("includes/top_nav.php") ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           <?php include("includes/sidebar.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <!-- /.container-fluid -->

             <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <?php 


            // $user = new User();

            // $result_set = User::find_all_users();

            // while ($row = mysqli_fetch_array($result_set)) {
            //     echo $row["username"] . "<br>";
            // }

;
            // $found_user = User::find_id(1)

            // $user = User::instant($the_record);
           
        // $users = User::find_all_users();

        // foreach ($users as $user) {
        //     echo $user->username . "<br>";
        // }

$found_user = User::find_id(1);

echo $found_user->username;

            ?>

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>