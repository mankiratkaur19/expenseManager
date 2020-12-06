<nav class="navbar navbar-inverse" style="height: 15vh; margin: 0;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="image" style="margin-top: 11px;margin-left:20px;">
                    <img src="<?php if($filename!="homepage") echo ".";?>./images/logo.png" alt="" style="width: 60px; height: 50px;">
                    <span class="brand-name" style="position: relative;top: 6px;margin-left: 15px;color: white;">
                        Expense Manager
                    </span>
                </div>
              
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right" style="margin-right: 8px; margin-top: 12px; font-size: 24px;">
                <?php    
                    if(isset($_SESSION['name']))
                    {
                        if($filename == "homepage")
                            echo'<li><a href="./php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
                        else
                            echo'<li><a href="../php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
                        }
                    else
                    {
                        if($filename == "register")
                            echo '<li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                        else if($filename == "login")
                            echo '<li><a href="./register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>';
                        else{
                            echo '<li><a href="./php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                            echo '<li><a href="./php/register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>';
                        }
                    }
                ?>
                </ul>
            </div>
        </div>

    </nav>