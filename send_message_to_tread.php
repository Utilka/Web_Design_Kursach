<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./scss/reset.css">
    <link rel="stylesheet" href="./scss/style.css">
    <link rel="stylesheet" href="./scss/header.css">
    <link rel="stylesheet" href="./scss/forum_messages_block.css">
    <link rel="stylesheet" href="./scss/form.css">

    <style>
        .main {
            padding: 30px 0;
            text-align: center;
            font-size:2rem;
        }
        
        .main>:nth-child(1) {
            padding-bottom: 0;
        }
    </style>
    <title>Forum tread</title>
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
        <main class="main">
            <!-- <div class="forum_tread"> -->
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
                    // INSERT INTO `forum3` (`id`, `sender`, `message`, `datetime`) VALUES (NULL, 'dfsdf', 'sdfsgdhwetwetsdfsd', CURRENT_TIMESTAMP);
                    // echo "INSERT INTO `{$_POST['table']}` (`id`, `sender`, `message`, `datetime`) VALUES (NULL, '{$_POST['nickname']}', '{$_POST['message']}', CURRENT_TIMESTAMP);";
                    $result = mysqli_query($conn,  "INSERT INTO `{$_POST['table']}` (`id`, `sender`, `message`, `datetime`) VALUES (NULL, '{$_POST['nickname']}', '{$_POST['message']}', CURRENT_TIMESTAMP);");
                    echo "Sent message successfully\n";
                    
                    // if(! $resuld ) {
                    //     die('Could not send data: ' . mysqli_error().'<br>');
                    // }                    
                    mysqli_close($conn);
                    ?>
            <!-- </div> -->
            

        </main>
    </div>
    <footer class="footer">legal information here</footer>


    <script src="./js/show_nav.js"></script>
</body>

</html>