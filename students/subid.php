<?php
session_start();
$subid = $_GET['id'];
$name = $_GET['name'];
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
    <link rel="stylesheet" type="text/css" href="assets/css/tabs.css">
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
        <div class=" flex-1 p-6 md:mt-16 bg-white rounded-lg ml-10">
            <?php
            $select_query = "SELECT * FROM subjects where subjects.id='$subid' ";
            $select_result = mysqli_query($conn, $select_query);
            $count = 0;
            while ($data = mysqli_fetch_array($select_result)) {
                $count += 1; //$count = $count + 1;
            ?>
                <div class="flex justify-between">
                    <span class="rounded-lg text-gray-800 text-lg p-1  font-semibold ">
                        <?php echo $data['name']; ?>
                    </span>
                    <button class="flex flex-wrap items-center  justify-center ">
                        <div class="rounded-full">
                            <i class="fas fa-fw fa-user"></i>
                        </div>

                        <div class="ml-2 capitalize flex ">
                            <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 "><?php echo $data['teacher']; ?></h1>
                        </div>
                    </button>
                </div>
            <?php
            }
            ?>

            <div class="pl-4 pt-4">
                <div class="wrapper">
                    <div class="title">
                        Files
                    </div>
                    <div class="tabs_wrap">
                        <ul>
                            <li data-tabs="files" class="active">Class Materials</li>
                            <li data-tabs="upload">Upload Files</li>
                        </ul>
                    </div>
                    <div class="container">
                        <ul>
                            <li class="item_wrap files online">
                                <div class="item">

                                    <div class="item_left">
                                        <div class="">
                                            <i class="fas fa-fw fa-file"></i>
                                        </div>
                                        <div class="data">

                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="item_wrap upload online">
                                <div class="item">
                                    <?php
                                    if (isset($_POST['submit'])) {

                                        $dataFile = $_FILES['dataFile'];
                                        //$dataFile consit info like hello.jpg
                                        $filesize = $_FILES['dataFile']['size'];
                                        $explode_values = explode('.', $dataFile);
                                        //$explode_values become array having data in the form $explode_values = ['hello','jpg']
                                        $name = $explode_values[0];
                                        $fname = str_replace(' ', '', $name);
                                        $finalname = strtolower($fname . time());
                                        $ext = $explode_values[1];

                                        $finalfile = $finalname . '.' . $ext;

                                        if ($filesize < 2000000) {

                                            $query = "INSERT INTO subjects (files) VALUES('$finalfile')";
                                            $result = mysqli_query($conn, $query);
                                            if ($result) {
                                                echo "File is uploaded successfully.";
                                            } else {
                                                echo "File couldn't uploaded successfully.";
                                            }
                                        } else {
                                            echo "File size exceeded.";
                                        }
                                    }
                                    ?>
                                    <div class="item_left">

                                        <div class="data">
                                            <form action="#" method="POST" enctype="multipart/form-data">
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <input type="file" name="dataFile" placeholder="">
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- strat content -->

        <!-- end content -->
    </div>
    <!-- end wrapper -->
</body>

</html>

<script>
    var tabs = document.querySelectorAll(".tabs_wrap ul li");
    var males = document.querySelectorAll(".files");
    var females = document.querySelectorAll(".upload");
    var all = document.querySelectorAll(".item_wrap");

    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            tabs.forEach((tab) => {
                tab.classList.remove("active");
            })
            tab.classList.add("active");
            var tabval = tab.getAttribute("data-tabs");

            all.forEach((item) => {
                item.style.display = "none";
            })

            if (tabval == "files") {
                males.forEach((files) => {
                    files.style.display = "block";
                })
            } else {
                females.forEach((upload) => {
                    upload.style.display = "block";
                })
            }

        })
    })
</script>