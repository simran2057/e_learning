<?php
if ($_SESSION['role'] != 'teacher') {
    header("location:../index.php");
}
?>
<!-- start navbar -->
<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center h-40 p-4 border-b border-gray-300" style="background-color: #470FF4  ;">

    <!-- logo -->
    <div class="flex-none flex flex-row items-center z-30 ml-72 -mt-10">
        <strong class="capitalize text-white font-bold flex-1">E-Learning</strong>
    </div>
    <!-- end logo -->

    <!-- navbar content toggle -->
    <!-- <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
        <i class="fad fa-chevron-double-down"></i>
    </button> -->
    <!-- end navbar content toggle -->

    <!-- navbar content -->
    <!-- <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center"> -->
    <!-- left -->
    <!-- <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">

        </div> -->
    <!-- end left -->

    <!-- right -->
    <!-- <div class="flex flex-row-reverse items-center"> -->

    <!-- user -->
    <!-- <div class="dropdown relative md:static">

                <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img class="w-full h-full object-cover" src="../assets/img/user.svg">
                    </div>

                    <div class="ml-2 capitalize flex ">
                        <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none"><?php echo $_SESSION['name']  ?></h1>
                        <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                    </div>
                </button>

                <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster"> -->

    <!-- item -->
    <!-- <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                        <i class="fad fa-user-edit text-xs mr-1"></i>
                        edit my profile
                    </a> -->
    <!-- end item -->

    <!-- item -->
    <!-- <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                        <i class="fad fa-inbox-in text-xs mr-1"></i>
                        my inbox
                    </a> -->
    <!-- end item -->



    <!-- item -->
    <!-- <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                        <i class="fad fa-comment-alt-dots text-xs mr-1"></i>
                        chats
                    </a> -->
    <!-- end item -->
    <!-- 
                    <hr> -->

    <!-- item -->
    <!-- <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                        <i class="fad fa-user-times text-xs mr-1"></i>
                        log out
                    </a> -->
    <!-- end item -->

    <!-- </div> -->
    <!-- </div> -->
    <!-- end user -->


    <!-- </div> -->
    <!-- end right -->
    <!-- </div>  -->
    <!-- end navbar content -->

</div>
<!-- end navbar -->