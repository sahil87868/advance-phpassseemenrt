
 
   <?php
if(!($_SESSION['admin']))
   {
    echo "<script>
    window.location='admin';
    </script>";

              }   
?>   


        <nav class="navbar-default navbar-side " role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Jhon Deo Alex
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="dashboard"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Category <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_cat"><i class="fa fa-toggle-on"></i>Add Category</a>
                            </li>
                            <li>
                                <a href="manage_cat"><i class="fa fa-bell "></i>Manage Category</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i> <span class="fa arrow"></span>Products</a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_prod"><i class="fa fa-coffee"></i>Add Products</a>
                            </li>
                            <li>
                                <a href="manage_prod"><i class="fa fa-flash "></i>Manage Products</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="manage_cust"><i class="fa fa-flash "></i>Customers </a>
                        
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Employee <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="add_emp"><i class="fa fa-desktop "></i>Add Employee </a>
                            </li>
                             <li>
                                <a href="manage_emp"><i class="fa fa-code "></i>Manage Employee</a>
                            </li>
                             
                           
                        </ul>
                    </li>
                    <li>
                        <a href="manage_feed"><i class="fa fa-anchor "></i>Feedback</a>
                    </li>
                    <li>
                        <a href="manage_cont"><i class="fa fa-anchor "></i>manage contacts</a>
                    </li>
                    <li>
                        <a href="admin_logout"><i class="fa fa-anchor "></i>logout</a>
                    </li>
                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        