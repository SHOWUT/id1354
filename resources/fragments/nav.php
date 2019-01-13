            <ul>
                <li><a href="FirstPage">Front page</a></li>
                <li><a href="ShowCalendar">Calendar</a></li>
                <li><a href="ShowMeatballs">Meatballs</a></li>
                <li><a href="ShowPancakes">Pancakes</a></li>
                <li><a href="ShowSignup">Signup</a></li> 
            </ul>
            
            <?php
            /*
                if( isset($_SESSION['userUid']) ) {
                    echo 'Welcome back! <form action="resources/includes/logout.inc.php" method="post">
                    <button type="submit" name="logout">Logout</button>
                    </form>';
                }
                else {
                    echo ' <div class="logIn">
                    <form class="logIn" action="resources/includes/login.inc.php" method="post"> 
                    User name <input type="text" name="mailuid" placeholder="Enter username here">
                    Password <input type="password" name="pwd" placeholder="Enter password here">
                    <input class="login-button" type="submit" value="Login" name="login-submit">
                    </form>
                    </div>';
                }
                */
                $this->session->restart();
                if ($this->session->get('uid') == null){
                    echo ' <div class="logIn">
                    <form class="logIn" action="LoginUser" method="post"> 
                    User name <input type="text" name="mailuid" placeholder="Enter username here">
                    Password <input type="password" name="pwd" placeholder="Enter password here">
                    <input class="login-button" type="submit" value="Login" name="loginSubmit">
                    </form>
                    </div>';
                    }
                    else{
                        echo 'Welcome back! <form action="LogoutUser" method="post">
                    <button type="submit" name="logout">Logout</button>
                    </form>';
                    }
            ?>
            