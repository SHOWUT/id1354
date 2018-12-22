            <ul>
                <li><a href="index.php">Front page</a></li>
                <li><a href="calendar.php">Calendar</a></li>
                <li><a href="rMeatballs.php">Meatballs</a></li>
                <li><a href="rPancakes.php">Pancakes</a></li>
                <li><a href="signup.php">Signup</a></li> 
            </ul>
            <?php
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
            ?>
            