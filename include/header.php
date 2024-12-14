
<?php
// Check if the function is already defined before declaring it
if (!function_exists('isActive')) {
    // Function to check if the current page is active
    function isActive($page) {
        $currentUri = $_SERVER['REQUEST_URI'];
        return $currentUri === $page ? 'current' : '';
    }
}
?>











<header class="header header-fixed header-2 stricky">
    <nav class="navbar navbar-default header-navigation ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-bar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">
                    <img src="fine/bglogo.png" alt="Awesome Image"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="main-nav-bar">               
                <ul class="nav navbar-nav navigation-box main-navigation mainmenu">
                    <li class="<?php echo isActive('/index.php'); ?>">
                        <a href="index.php">Home</a>
                        <!-- <ul class="sub-menu ">                           
                    
                            
                        </ul> -->
                        
                    </li>
                    <li class="<?php echo isActive('/about.php'); ?>">
                        <a href="about.php">About</a>
                        <!-- <ul class="sub-menu ">                           
                    
                            
                        </ul>/.sub-menu                      -->
                    </li>
                    
                    <li class="<?php echo isActive('/gallery.php'); ?>">
                        <a href="gallery.php">Gallery</a>                    
                        <!-- <ul class="sub-menu ">                           
                            
                            
                        </ul>/.sub-menu -->
                    </li>
                    <li class="<?php echo isActive('/blog-grid.php'); ?>">
                        <a href="blog-grid.php">Blog</a>
                        <!-- <ul class="sub-menu ">                           
                    
                            
                        </ul>/.sub-menu                     -->
                    </li>
                    <li class="<?php echo isActive('/contact.php'); ?>">
                        <a href="contact.php">Contact</a>    
                        <!-- <ul class="sub-menu ">                           
                            
                        </ul>/.sub-menu                 -->
                    </li>
                </ul>               
            </div><!-- /.navbar-collapse -->

            <!-- <div class="right-button-box">
                <a href="#"  data-toggle="modal" data-target=".search-form-modal" class="search-btn"><i class="icon icon-Search"></i></a>
            </div>/.right-button-box -->
        </div><!-- /.container -->
    </nav>  
</header>