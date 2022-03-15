<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <title>SHOP ATN</title>
</head>
<body>
    <div class="wrapper">
        <!-- header menu start -->
            <div class="header">
                <div class="header-menu">
                    <div class="title">ATN <span>COMPANY</span> </div>
                    <div class="sidebar-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                        <ul>
                            <li><a href="#"><i class="fas fa-search"></i></a></li>
                            <li><a href="#"><i class="fas fa-bell"></i></a></li>
                            <li><a href="#"><i class="fas fa-power-off"></i></a></li>
                        </ul>
                </div>
            </div>
        <!-- header menu end -->
        <!-- Sidebar start -->
            <div class="sidebar">
                <div class="sidebar-menu"> 
                    <center class="profile">
                        <img src="image/avatar.jpg" alt="">
                        <p>Admin</p>
                    </center>
                    <li class="item" >
                        <a href="#" class="menu-btn">
                            <i class="fas fa-desktop"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="item" id="profile">
                        <a href="#profile" class="menu-btn">
                            <i class="fas fa-user-circle"></i><span>Profile <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-image"></i> <span>Picture</span> </a>
                            <a href="#"><i class="fas fa-address-card"></i> <span>Info</span> </a>
                        </div>
                    </li>
                    <li class="item" id="messages">
                        <a href="#messages" class="menu-btn">
                            <i class="fas fa-envelope"></i><span> Messages </span> <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-envelope"></i> <span>New</span> </a>
                            <a href="#"><i class="fas fa-envelope-square"></i> <span>Sent</span> </a>
                            <a href="#"><i class="fas fa-exclamation-circle"></i> <span>Spam</span> </a>
                        </div>
                    </li>
                    <li class="item" id="Setting">
                        <a href="#Setting" class="menu-btn">
                            <i class="fas fa-cog"></i><span>Setting <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-lock"></i> <span>Password</span> </a>
                            <a href="#"><i class="fas fa-language"></i> <span>Language</span> </a>
                        </div>
                    </li>
                    <li class="item" >
                        <a href="product.php" class="menu-btn">
                            <i class="fab fa-product-hunt"></i><span>Product</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-info-circle"></i><span>About</span>
                        </a>
                    </li>
                </div>
            </div>
        <!-- Sidebar end -->
        <!-- main container start-->
            <div class="main-container">
            </div>
        <!-- main container end-->
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapsed");
            });
        });
    </script>
</body>
</html>