<?php include("includes/header.php"); ?>

<?php if (!$session->is_signed_in()) {redirect('login.php');} ?>


<?php 

// var_dump($_FILES['file_upload']);

     $message = "";
    if (isset($_POST['submit'])) {
        $photo = new Photo();
        $photo->title = $_POST['title'];
        $photo->set_file($_FILES['file_upload']);


        if ($photo->save()) {
            $message = "Photo was uploaded sucessfully";
        } else{
            $message = join("<br>", $photo->errors);
        }
    }
?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php include("includes/top_nav.php") ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           <?php include("includes/sidebar.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Upload
                        </h1>
                            <div class="row">
                            <div class="col-md-6">

                            <?php echo $message ?>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control">
                            </div>
                              <div class="form-group">
                                <input type="file" name="file_upload">
                            </div>
                            <input type="submit" name="submit">
                        </form>
                        </div>
                    </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="upload" class="dropzone"></form>
                </div>
            </div>
                <!-- /.row -->
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>