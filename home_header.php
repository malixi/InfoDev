   <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                            
                

                    </button>
                    <a href="home.php"><img  class"navbar-brand" src="images/infor-logo.png"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                
                          <li>
                            <a class="not-active">
                                <p>InfoDev Product Assignment</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
              
                        <li>
                            <a>

                                <p>Welcome, <?php 

                                if(isset($_SESSION['user_id'])) 

                                {
                                echo $_SESSION['user_firstname'] ." ". $_SESSION['user_lastname'] ;
                                } ?></p>
                            </a>
                        </li>

                        <li>
                            <a href="logout.php">
                                <p>Sign Out</p>
                            </a>
                        </li>


                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>