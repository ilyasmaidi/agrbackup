<?php 
// include("../config/dbcon.php");
$dataEditTop = GetAll("topheader");
$newData = mysqli_fetch_array($dataEditTop);
?>

<!-- Start Navbar Area -->
 <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.php">
                                <h1 class="logo-text">Agri<span>Tech</span></h1>
                                <!-- <img src="assets/img/logo.png" class="black-logo" alt="image"> -->
                                <!-- <img src="assets/img/logo-2.png" class="white-logo" alt="image"> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <?php
                            
                            
                                ?>
                                <img src="uploads/<?=$newData['image']?>" width="100px" height="100px"?>
                                <?php
                            
                            ?>
                            <!-- <h1 class="logo-text text-light">Agri<span>Tech</span></h1> -->
                            <!-- <img src="assets/img/logo.png" class="black-logo" alt="image">
                            <img src="assets/img/logo.png" class="white-logo" alt="image"> -->
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link active">
                                        Home 
                                        <!-- <i class='bx bx-chevron-down'></i> -->
                                    </a>
                                    <!-- <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link">
                                                Home One
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link active">
                                                Home Two
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">
                                                Home Three
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-4.html" class="nav-link">
                                                Home Four
                                            </a>
                                        </li>
                                    </ul> -->
                                </li>

                                <li class="nav-item">
                                    <a href="#aboutus" class="nav-link">
                                        About 
                                    </a>


                                </li>

                                <li class="nav-item">
                                    <a href="#services" onclick="scrollToSection('#services')" class="nav-link">
                                        Services 
                                    </a>

                                    
                                </li>

                                

                                

                                <li class="nav-item  ms-1">
                                    <a href="./contact.php" class="nav-link">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                            <?php if(isset($_SESSION['auth'])){
                                ?>

                                
                                        <div class="dropdown ms-1">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?= $_SESSION['auth_user']['name']; ?>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="admin/index.php">Dashboard</a></li>
                                            <li><a class="dropdown-item" href="#">New Blog</a></li>
                                            <li><a class="dropdown-item" href="logout.php">lOGOUT</a></li>
                                        </ul>
                                        </div>






                                <?php
                            }
                            else{
                                ?>

                                    
<div class="others-options d-flex align-items-center">
                                
                                
                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="login.php">
                                        <i class="fa-solid fa-user"></i>
                                           
                                        </a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="register.php">
                                        <i class="fa-solid fa-user-plus"></i>
                                           
                                        </a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <form class="search-box">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>

                                <div class="option-item">
                                    <div class="burger-menu">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                               </div>

                                <?php
                            }

                            ?>
                           

                            
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <div class="languages-list">
                                        <select>
                                            <option value="1">Eng</option>
                                            <option value="2">Ger</option>
                                            <option value="3">Span</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="cart.html">
                                            <i class='flaticon-shopping-cart'></i>
                                            <span>0</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <form class="search-box">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>

                                <div class="option-item">
                                    <div class="burger-menu">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>