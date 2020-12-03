<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./scss/reset.css">
    <link rel="stylesheet" href="./scss/style.css">
    <link rel="stylesheet" href="./scss/forum_block.css">
    <link rel="stylesheet" href="./scss/post_container.css">
    <link rel="stylesheet" href="./scss/read_more.css">
    <link rel="stylesheet" href="./scss/header.css">
    <link rel="stylesheet" href="./scss/form.css">
    <title>Forums tread list</title>
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
            <h1>добро пожаловать в форумы bolt</h1>
        </div>
        <main class="main">
            <div class="forum_block">
                <div class="forum_block_name">
                    <span>Forum</span>
                </div>
                <div class="forum_block_header">
                    <div>First Message</div>
                    <div>Last Message</div>
                    <div>FM date<br/> LM date</div>
                    <div>Statistics</div>
                </div>
                <div class="forum_content">
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

                    
                    // while($row = mysqli_fetch_assoc($retval)) {
                    //     echo 
                    //     "<a href=\"\" class=\"forum_tread\">
                    //     <span>{$first_massage}</span>
                    //     <span>{$last_message}</span>
                    //     <span>{$first_massage_date}<br/>{$last_massage_date}</span>
                    //     <span>{$post_count}</span>
                    //     </a>";
                    // } //TODO допиши в хреф

                    $tables = mysqli_query($conn, "SHOW TABLES");
                    if (!$tables) {
                        die ("Failed to connect to MySQL: " . mysqli_connect_error());
                        echo "DB Error, could not list tables\n";
                        echo 'MySQL Error: ' . mysql_error();
                        exit;
                    }
                    while ($table = mysqli_fetch_row($tables)) {
                        // echo $table[0];
                        if (!(strpos($table[0], 'no_show'))) {
                            $first_message_list = mysqli_query($conn, "SELECT * FROM `{$table[0]}` ORDER BY id LIMIT 1;" );
                            if(! $first_message_list ) {
                                die('Could not get data: ' . mysqli_error().'<br>');
                            }
                            $last_message_list = mysqli_query($conn, "SELECT * FROM `{$table[0]}` ORDER BY id DESC LIMIT 1;" );
                            if(! $last_message_list ) {
                                die('Could not get data: ' . mysqli_error().'<br>');
                            }
                            while(($firstrow = mysqli_fetch_assoc($first_message_list)) and ($lastrow = mysqli_fetch_assoc($last_message_list))) {
                                echo 
                                "<a href=\"./forum_page.php?tread={$table[0]}\" class=\"forum_tread\">
                                    <span>{$firstrow['message']}</span>
                                    <span>{$lastrow['message']}</span>
                                    <span>{$firstrow['datetime']}<br/>{$lastrow['datetime']}</span>
                                    <span>{$lastrow['id']} posts</span>
                                </a>";
                            }}                        }// echo "Table: {$table[0]}\n";
                        
                   
                    //echo "Fetched data successfully\n";
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
            <div class="form_wrapper">
                "<form action="./create_tread.php" method="POST">
                    <input name="tread_name" type="text" placeholder="Enter new forum tread name" maxlength="20" size="22">
                    <br>
                    <input name="nickname" type="text" placeholder="Enter your nickname" maxlength="20" size="22">
                    <br>
                    <textarea name="message" rows="10" cols="30"  maxlength="16777215" placeholder="Enter first message"></textarea>
                    <br>
                    <input type="submit" value="Create new tread">
                </form>
            </div>

        </main>
    </div>
    <footer class="footer">legal information here</footer>


    <script src="./js/show_nav.js"></script>
</body>

</html>