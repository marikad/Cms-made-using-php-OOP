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

             // $user = User::find_id(4);
             // $user->username = "heyyyy";
             // $user->save();

             $user = new User();
             $user->username = "helllo";
             $user->create();


             // $user = User::find_id(3);
             // $user->destroy();




            $user = new User();
            $user->username = "lela"; 
            // $user->id = 4; 
            $user->passowrd = "dedew"; 
            $user->first_name = "eloise"; 
            $user->last_name = "Harrison"; 
            $user->create();

            ?>



        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>