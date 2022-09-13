<?php
session_start();
$assignmentid = $_GET['id'];
require("../connection/config.php");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/calender.css">
    <link rel="stylesheet" type="text/css" href="assets/css/example.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" <script src="https://cdn.tailwindcss.com">
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
</head>

<body class="bg-gray-200">


    <?php
    require('inc/navbar.php')
    ?>

    <!-- strat wrapper -->
    <div class=" flex flex-row flex-wrap p-4  ">
        <?php
        require('inc/sidebar.php')
        ?>
        <div class=" flex-1 p-6 md:mt-16 bg-white ml-10 rounded-md">

            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <?php
                    if (isset($_GET['msg'])) {
                        $msg = $_GET['msg'];
                        if ($msg == 'dsuccess') {
                    ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Assignment is deleted successfully.</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                        <?php
                        } else if ($msg == 'derror') {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Assignment couldn't be deleted successfully.</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                        <?php
                        } else {
                        ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>News is created successfully.</strong>
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                    <?php
                        }
                    }
                    ?>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Upload Assignment</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <?php
                            $select_query = "SELECT * FROM assignments where assignments.id='$assignmentid'";
                            $select_result = mysqli_query($conn, $select_query);
                            $count = 0;
                            while ($data = mysqli_fetch_array($select_result)) {
                                $count += 1; //$count = $count + 1;
                            ?>
                                <div class="flex justify-between">
                                    <div>
                                        <span class="font-semibold">Assignment Tittle :</span><span class="ml-4"><?php echo $data['title']; ?></span>
                                    </div>
                                    <div>
                                        <span class="font-semibold">Assignment Marks :</span><span class="ml-4"><?php echo $data['marks']; ?></span>

                                    </div>
                                </div>
                                <table class="table table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">
                                    <tbody>

                                        <tr>
                                            <td class="font-semibold colspan=1">Subject</td>
                                            <td class="col-span-1"><?php echo $data['subject']; ?></td>
                                            <td class="font-semibold colspan=1">Assignmment Description</td>
                                            <td class="col-span-1"><?php echo $data['info']; ?></td>
                                        </tr>


                                    </tbody>
                                </table>
                                <table class="table table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">

                                    <tbody>
                                        <tr>
                                            <td class="colspan=2">View Assignment Paper</td>
                                            <td class="text-danger font-semibold"><a href="../../teachers/assignment/uploads?php echo $data['filelink']; ?>" target="_blank">View Assignment Paper</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered mt-4" id="dataTable" width="100%" cellspacing="0">

                                    <tbody>
                                        <tr>
                                            <td >Upload answer file</td>
                                            <td><input type="file"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-dark mt-4 float-right" name="submit">Submit</button>

                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
                <!-- end content -->

            </div>
        </div>
        <!-- strat content -->

        <!-- end content -->
    </div>
    <!-- end wrapper -->
</body>

</html>