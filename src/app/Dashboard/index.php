<?php
include_once "../../assets/PHP/header.php";
?>

<body>
    <nav class="header navbar fixed-top navbar-expand-sm navbar-light mb-3 flex-row d-flex">
        <div class="container-fluid head" >
        <div class="flex-start  text-white" id="side1">
        <input type="checkbox" id="check1">
            <label for="check1">
                <i class="bi bi-list" ></i>
            </label>
        </div>
            <a href="" title="Admin panel" class="nav-brand text-warning" style="margin-left: 49px;">
                <h3>Admin Template</h3>
            </a>
            <span class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </span>

                <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active text-white" aria-current="page" href="#">
                        <i class="bi bi-house-fill"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-grid-fill"></i> more
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-white " href="#">
                            <i class="bi bi-table"></i> Tables
                        </a>
                        </a>
                    </li> -->


                </ul>

                <!-- user account -->
                <span class="d-flex">
                    <a href="" class="nav-link text-white" title="Account">
                        <i class="bi bi-person-circle"></i> 
                        </a>
                </span>
            </div>
        </div>
    </nav>



    <!-- bottom nav -->
  
    <div class="bottom-nav container-fluid flex-row d-flex fixed navbar-expand-md navbar-light mb-3 justify-content-center align-item-center" >

        <div class="flex-start " id="sidenav_icon">
            <label for="check">
                <i class="bi bi-list" id="sidebar-btn"></i>
            </label>
        </div>
        <div class="flex-row d-flex flex-end justify-content-center align-item-center" id="searchbar">
            <input type="text" name="" id="search" placeholder="search the web">
                <i class="bi bi-search" id="search_icon"></i>
        </div>
    </div>


    <!-- container with sidebar and maincontainer -->
<div class="flex-container">

    <!-- sidebar start -->
    <div class="sidebar" >

        <a href="#" class="nav nav-link active">
            <i class="bi bi-speedometer2"></i><span>  &nbsp; Dashboard</span>
        </a>

        <div class="accordion accordion-flush" id="accordionFlush nav nav-link">
            <a class="accordion-item">
                <a class="accordion-header " id="accordion-headingOne">
                    <a href="#" class="nav nav-link  collapsed " data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false">
                         <i class="bi-people-fill"></i>
                       <span>  &nbsp; Class</span>
                       <i class="bi bi-caret-down-fill" id="dropclass"></i>
                    </a>
                    
                </a>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flushheadingOne" data-bs-parent="#accordionFlush">
                    <div class="accordion-body mb-0 ">

                        <a href="#" class="nav nav-link " id="tech" style="margin-left:-18px;">
                            <i class="bi bi-laptop" ></i>
                            <span>&nbsp;Technology</span>
                        </a>
                        <a href="#" class="nav nav-link flex-row d-flex"style="margin-left:-18px;">
                            <i class="bi bi-binoculars-fill"></i>
                            <span>&nbsp;Science</span>
                        </a>

                    </div>
                </div>
            </a>

        </div>
        <a href="#" class="nav nav-link">
            <i class="bi bi-stopwatch"></i><span>  &nbsp; Last Activity</span>
        </a>
       
        <a href="#" class="nav nav-link d-flex flex-row">
            <i class="bi bi-chat-right-fill"></i>
            <!-- <i class="material-icons">forum</i> -->
            
            <span>  &nbsp; forum</span>
        </a>
        <a href="#" class="nav nav-link">
            <i class="bi bi-collection-fill"></i><span>  &nbsp; Library</span>
        </a>
        <a href="#" class="nav nav-link justify-content-lg-end align-items-center">
            <i class="bi bi-person-circle"></i><span> &nbsp; Account</span>
        </a>

    </div>

    <!-- sidebar end -->

    <!-- main container -->
    <div class="contain">
            
        <div class="mt-2 mb-3 border-bottom my-12" style="overflow-y:hidden;">
            <span class="card-title" style="padding:30px;">Home>Dashboard>Learn</span>
        </div>

        <div class="container ">
                
            <div class="row">
                    <!-- card 1 -->
                <div class="col-md-6 col-lg-4 col-sm-12" >
                    <div class="card-box alert alert-primary">
                        <div class="card-body card-body-expand-md">
                            <h2 class="card-title text-center text-dark">science</h2>
                            <p>
                                <h4 class="card-subtitle text-center">Learning Activity
                                </h4>
                                <ul class="list-group card-text text-center">
                                    <li class="list-group-item border-0">50 Experiments</li>
                                    <li class="list-group-item border-0 ">60 projects</li>
                                    <li class="list-group-item border-0">10 challanges</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                    <!-- end of crd1  -->

                    <!-- card2  begin-->
                <div class="col-md-6 col-lg-4">
                    <div class="card-box alert alert-primary ">
                        <div class="card-body">
                            <h2 class="card-head text-center text-dark card-title">technology</h2>
                            <p>
                                <h4 class="card-subtitle text-center">
                                                Learning Activity
                                </h4>
                                <ul class="list-group card-text text-center">
                                    <li class="list-group-item border-0">50 Experiments</li>
                                    <li class="list-group-item border-0 ">10 projects</li>
                                    <li class="list-group-item border-0">70 challanges</li>
                                </ul>
                            </p>         
                        </div>
                    </div> 
                </div> 
                  <!-- card2 end  -->


                  <!-- card3 begin -->
                  <div class="col-md-6 col-lg-4">
                    <div class="card-box alert alert-primary ">
                        <div class="card-body">
                            <h2 class="card-head text-center text-dark card-title">engineering</h2>
                            <p>
                                <h4 class="card-subtitle text-center">
                                                Learning Activity
                                </h4>
                                <ul class="list-group card-text text-center">
                                    <li class="list-group-item border-0">50 Experiments</li>
                                    <li class="list-group-item border-0 ">10 projects</li>
                                    <li class="list-group-item border-0">70 challanges</li>
                                </ul>
                            </p>         
                        </div>
                    </div> 
                </div> 
                <!-- card 3 end -->

                <!-- card4 begin -->

                <div class="col-md-6 col-lg-4">
                    <div class="card-box alert alert-primary ">
                        <div class="card-body">
                            <h2 class="card-head text-center text-dark card-title">arts</h2>
                            <p>
                                <h4 class="card-subtitle text-center">
                                                Learning Activity
                                </h4>
                                <ul class="list-group card-text text-start">
                                    <li class="list-group-item border-0">50 Experiments</li>
                                    <li class="list-group-item border-0 ">20 projects</li>
                                    <li class="list-group-item border-0">100 challanges</li>
                                </ul>
                            </p>         
                        </div>
                    </div> 
                </div> 

                <!-- card4 4nds -->

                <!-- card5 begin -->

                <div class="col-md-6 col-lg-4">
                    <div class="card-box alert alert-primary ">
                        <div class="card-body">
                            <h2 class="card-head text-center text-dark card-title">mathematics</h2>
                            <p>
                                <h4 class="card-subtitle text-center">
                                                Learning Activity
                                </h4>
                                <ul class="list-group card-text  text-center">
                                    <li class="list-group-item border-0">150 Experiments</li>
                                    <li class="list-group-item border-0 ">20 projects</li>
                                    <li class="list-group-item border-0">350 challanges</li>
                                </ul>
                            </p>         
                        </div>
                    </div> 
                </div> 


                <!-- card5 end -->


                <!-- card6 begin -->

                <div class="col-md-6 col-lg-4">
                    <div class="card-box alert alert-primary ">
                        <div class="card-body">
                            <h2 class="card-head text-center text-dark card-title">robottics</h2>
                            <p>
                                <h4 class="card-subtitle text-center">
                                                Learning Activity
                                </h4>
                                <ul class="list-group card-text text-center">
                                    <li class="list-group-item border-0">50 Experiments</li>
                                    <li class="list-group-item border-0 ">50 projects</li>
                                    <li class="list-group-item border-0">50 challanges</li>
                                </ul>
                            </p>         
                        </div>
                    </div> 
                </div> 

                <!-- card6 end -->

                


            </div>
        </div>        
    </div>
</div>


        <?php
        include_once "../../assets/PHP/footer.php";
    ?>


