            <ul>
                <li><a href="index.php">Front page</a></li>
                <li><a href="calendar.php">Calendar</a></li>
                <li><a href="rMeatballs.php">Meatballs</a></li>
                <li><a href="rPancakes.php">Pancakes</a></li>
            </ul>
            <?php
                if( isset($_SESSION['uName']) ) {
                    echo 'Welcome back! <form action="logout.php" method="get">
                    <button type="submit" name="logout">Logout</button>
                    </form>';
                }
                else {
                    echo ' <div class="logIn">
                    <form class="logIn" action="login.php" method="get"> 
                    User name <input type="text" name="uName" placeholder="Enter username here">
                    Password <input type="password" name="pass" placeholder="Enter password here">
                    <input type="submit" value="Login" name="Submit">
                    </form>
                    </div>';
                }
            ?>
            