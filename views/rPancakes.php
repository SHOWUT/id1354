

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Pancakes - Tasty Recipes</title>
    <link rel="stylesheet" href="../../resources/css/reset.css">
    <link rel="stylesheet" href="../../resources/css/styleGeneral.css">
    <link rel="stylesheet" href="../../resources/css/styleRecipe.css">
</head>

<body>
        <div id="banner">
            <?php include 'resources/fragments/header.php' ?>
        </div>   

        <nav id="navbar">
            <?php include 'resources/fragments/nav.php' ?>
        </nav>

    <div class="header">
    <h1>Pancakes</h1>
    </div>

    <div class="picturePancakes"></div>

    <section class="block"> 
        <h3>INGREDIENTS</h3>
        <ul>
            <li>2 eggs</li>
            <li>3 dl milk</li>
            <li>2 dl flour</li>
            <li>2 tsp vanilla sugar</li>
            <li>1 sprinkle of salt</li>
            <li>3 tbs melted butter</li>
            <li>50 g butter</li>
            <li>2 blueberries</li>
        </ul>
    </section>

    <section class="block">
        <h3>INSTRUCTIONS</h3>
        <ol>
            <li>Mix flour, salt and vanilla sugar.</li>
            <li>Pour in milk and mix. Add egg and mix. Wait 10 min.</li>
            <li>Melt butter in pan.</li>
            <li>Insert 1 dl of the mix at a time into the pan. Turn it over when brown.</li>
            <li>Repeat step four until the mix is finished.</li>
            <li>Enjoy.</li>
        </ol>
    </section>

    <section class="comments">
        <h3>COMMENTS</h3>
        <ul>
        <?php
                if ($this->session->get('uid') != null) {
            ?>
                <div class='comment-form'>
                <form action="AddComment"  method="POST">
                <input type='hidden' name='rid' value='2'/>
                <input type='hidden' name='uid' value= '<?php echo $this->session->get('uid'); ?>'>
                <textarea name='message' placeholder='Type your comment in this box, then press the green button when done!'></textarea>
                <button type='submit' name='commentSubmit'>Comment</button>
                </form>
                </div>
            <?php     
            }
        
          
            echo "<form action='Recipe' method='POST'>
                <input type='hidden' name='rid' value='2'/>
                <button type='submit' name='seeCom'>Read</button>
                </form>";

            foreach($comments as $comment){
    
                if($this->session->get('uid') != null and $comment->getUid() === $this->session->get('uid')){						
                    echo("<div class='comment-box'>
                    <p>" . $comment->getUid() ."<br></p>
                    <p>" . $comment->getMessage() . "</p>
                        </div>
                        <form class='delete-form' method='POST' action='DeleteComment'>
                        <input type='hidden' name='cid' value='" . $comment->getCid() . "'/>
                        <button type='submit'>Delete</button>
                        </form>
                        ");
                    
                }else{
                    echo("<div class='comment-box'>
                    <p>" . $comment->getUid() ."<br></p>
                    <p>" . $comment->getMessage() . "</p>
                        </div>
                        ");
                }
                
                
            }
                
            ?>
        </ul>

    </section>
</body>
</html>