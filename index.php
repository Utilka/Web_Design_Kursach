<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./scss/reset.css">
    <link rel="stylesheet" href="./scss/style.css">
    <link rel="stylesheet" href="./scss/post_container.css">
    <link rel="stylesheet" href="./scss/read_more.css">
    <link rel="stylesheet" href="./scss/header.css">
    <title>Головна сторінка</title>
</head>

<body>
    <div class="aside_menu"></div>
    <div class="wrapper">
        <header class="header">
            <div class="">
                <div class="logo"></div>
                <div id="show-nav"></div>
            </div>
            <nav class="nav" id="main_nav">
                <div class="nav__link-container">
                    <a href="./index.php" class="link nav__link active">Home</a>
                </div>
                <div class="nav__link-container">
                    <a href="./forums.php" class="link nav__link">Forums</a>
                </div>
                <div class="nav__link-container">
                    <a href="./forum_page.php?tread=forum1" class="link nav__link">About bolts</a>
                </div>
                <div class="nav__link-container">
                    <a href="./more_links.html" class="link nav__link">More</a>
                </div>
            </nav>
        </header>
        <div class="welcome">
            <h1>добро пожаловать в общество bolt</h1>
        </div>
        <main class="main">
            <div class="block_new_in">
                <h2>Новое в <span>Форуме</span></h2>
                <div class="news_container">
                <?php
                    $servername = "remotemysql.com";
                    $username = "3AdKaQDWmB";
                    $password = "w4fEKDIwQn";
                    $dbname = "3AdKaQDWmB";
                    $port = "3306";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);

                    // Check connection
                    if (mysqli_connect_errno())
                    {
                        die ("Failed to connect to MySQL: " . mysqli_connect_error());
                    }

                    mysqli_set_charset($conn, "utf8");

                    // $sql = "SHOW TABLES FROM {$dbname}";
                    $tables = mysqli_query($conn, "SHOW TABLES");
                    if (!$tables) {
                        die ("Failed to connect to MySQL: " . mysqli_connect_error());
                        echo "DB Error, could not list tables\n";
                        echo 'MySQL Error: ' . mysql_error();
                        exit;
                    }
                    while ($table = mysqli_fetch_row($tables)) {
                        if (!(strpos($table[0], 'no_show'))) {
                        // echo "Table: {$table[0]}\n";
                        $last_message_list = mysqli_query($conn, "SELECT * FROM `{$table[0]}` ORDER BY id DESC LIMIT 1;" );
                        if(! $last_message_list ) {
                            die('Could not get data: ' . mysqli_error().'<br>');
                        }
                        $first_post=true;
                        if ($first_post){
                            while($row = mysqli_fetch_assoc($last_message_list)) {
                            echo 
                            "<div class=\"post_container hide\">
                                <img src=\"./img/panda.png\" alt=\"\" class=\"img\">
                                <div class=\"text_area\">
                                    <h4>
                                    {$row['sender']}
                                    </h4>
                                    <p>
                                    {$row['message']}
                                    </p>
    
                                    <a href=\"./forum_page.php?tread={$table[0]}\" class=\"read_more_container\"> 
                                        <span>Read more</span>
                                        <div class=\"arrow_icon_container\">
                                            <div class=\"arrow_icon\"></div>
                                        </div>
    
                                    </a>
                                </div>
                            </div>";
                            $first_post=false;
                        }}
                        else
                            {while($row = mysqli_fetch_assoc($last_message_list)) {
                                echo 
                                "<div class=\"post_container hide\">
                                    <img src=\"./img/panda.png\" alt=\"\" class=\"img\">
                                    <div class=\"text_area\">
                                        <h4>
                                        {$row['sender']}
                                        </h4>
                                        <p>
                                        {$row['message']}
                                        </p>
        
                                        <a href=\"./forum_page.php?tread={$table[0]}\" class=\"read_more_container\"> 
                                            <span>Read more</span>
                                            <div class=\"arrow_icon_container\">
                                                <div class=\"arrow_icon\"></div>
                                            </div>
        
                                        </a>
                                    </div>
                                </div>";}
                        } 
                    }
                    }
                   
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </main>
    </div>
    <footer class="footer">legal information here</footer>


    <script src="./js/show_nav.js"></script>
</body>

</html>