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
            <!-- <div class="forum_tread">
                <div class="forum_tread_name">
                    <span>Forum #1</span>
                </div>
                <div class="forum_tread_content">
                    <div class="forum_message">
                         сделай огрничение по количевству символов в нике 
                        <span>12:10:00 29/10/2019<br/>Sender: Lorem ipsum dolor sit amet.</span>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, quo! Iusto laborum labore ut illo distinctio quo voluptatum itaque enim earum culpa omnis excepturi, facere soluta quae quisquam corrupti ducimus!</span>
                    </div>
                    <div class="forum_message">
                        <span>12:10:00 29/10/2019<br/>Sender: Lorem ipsum dolor sit amet.</span>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, quo! Iusto laborum labore ut illo distinctio quo voluptatum itaque enim earum culpa omnis excepturi, facere soluta quae quisquam corrupti ducimus!</span>
                    </div>
                    <div class="forum_message">
                        <span>12:10:00 29/10/2019<br/>Sender: Lorem ipsum dolor sit amet.</span>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, quo! Iusto laborum labore ut illo distinctio quo voluptatum itaque enim earum culpa omnis excepturi, facere soluta quae quisquam corrupti ducimus!</span>
                    </div>
                    <div class="forum_message">
                        <span>12:10:00 29/10/2019<br/>Sender: Lorem ipsum dolor sit amet.</span>
                        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt placeat similique, quisquam sequi dicta in perferendis! Corrupti debitis atque tempora praesentium error nostrum. Quam atque non velit laborum neque aut reprehenderit enim incidunt sed corporis ex vel odit at fuga sint asperiores, ducimus provident in ab quis laboriosam. Tempora molestias qui repudiandae exercitationem illum provident tempore dolorem repellat nihil enim ex hic eos dolore, laudantium ut amet necessitatibus illo architecto eaque dicta perspiciatis. Dolor excepturi nostrum, eaque, voluptatum at, perferendis suscipit porro voluptate aspernatur vero et sint beatae veniam accusamus? Nesciunt omnis impedit neque voluptatum nisi, quibusdam nam. Voluptate totam similique culpa quisquam cum officiis illo ad ullam, ex magnam non temporibus maiores, obcaecati vel. Culpa pariatur ipsum incidunt minus ex officia, excepturi fuga possimus quae tenetur odio? Dicta, nobis molestias, quidem odio odit porro ut explicabo sunt quos saepe perspiciatis! Quae vel distinctio at repudiandae voluptate excepturi voluptas, delectus aspernatur exercitationem asperiores nemo, veniam eos. Corrupti sequi vitae neque facilis minima eveniet numquam error ad saepe fugit reprehenderit quia voluptates itaque iusto, illo odio omnis. Alias sit quas, error sed nam doloribus dolore delectus voluptate accusamus tenetur nostrum, tempora impedit repellat sint quia? Neque a autem, est esse culpa similique vitae tempora libero corporis, voluptatibus veniam illum quidem rem odio nobis, aliquam nostrum totam facere itaque. Eius aut, incidunt tenetur nam exercitationem facere nulla facilis voluptatem illum error quisquam voluptatum deserunt atque quos quas nostrum itaque esse, autem vel at suscipit ea iure ipsa est! Iste corporis eligendi debitis? Autem numquam id harum provident, quo rem eligendi, quidem doloribus sapiente eaque error dicta nam consequuntur est quae! Modi, suscipit voluptas cupiditate libero architecto rem aut in iusto reiciendis totam commodi necessitatibus cum, sapiente veniam corrupti consequuntur quo. Laborum dolores eaque, ratione nisi consectetur dolorem veritatis officiis dignissimos facilis cumque!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, quo! Iusto laborum labore ut illo distinctio quo voluptatum itaque enim earum culpa omnis excepturi, facere soluta quae quisquam corrupti ducimus!</span>
                    </div>
                    <div class="forum_message">
                        <span>12:10:00 29/10/2019<br/>Sender: Lorem ipsum dolor sit amet.</span>
                        <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, quo! Iusto laborum labore ut illo distinctio quo voluptatum itaque enim earum culpa omnis excepturi, facere soluta quae quisquam corrupti ducimus!</span>
                    </div>
                </div>
            </div> -->
            <div class="forum_tread">
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

                    $needed_table = $_GET['tread'];
                    // $needed_table = "forum1";

                    $tread_messages = mysqli_query($conn,  "SELECT * FROM `{$needed_table}` ORDER BY id;");

                    if(! $tread_messages ) {
                        die('Could not get data: ' . mysqli_error().'<br>');
                    } 
                    echo 
                    "<div class=\"forum_tread_name\">
                        <span>Forum {$needed_table}</span>
                    </div>
                    <div class=\"forum_tread_content\">";
                    while($row = mysqli_fetch_assoc($tread_messages)) {
                        echo 
                        "<div class=\"forum_message\">
                            <div>{$row['datetime']}<br/>Sender: {$row['sender']}</div>
                            <div>{$row['message']}</div>
                        </div>";
                    } //TODO допиши в хреф рид мора   
                    echo "</div>";
                   
                    //echo "Fetched data successfully\n";
                    mysqli_close($conn);
                    ?>
            </div>
            <div class="form_wrapper">
                <?php
                echo 
                "<form action=\"./send_message_to_tread.php\" method=\"POST\">                
                    <input type=\"hidden\" name=\"table\" value=\"{$needed_table}\">
                    <input name=\"nickname\" type=\"text\" placeholder=\"Enter your nickname\" maxlength=\"20\" size=\"22\">
                    <br>
                    <textarea name=\"message\" rows=\"10\" cols=\"30\" placeholder=\"Enter message\"></textarea>
                    <br>
                    <input type=\"submit\" value=\"Send Message\">
                </form>";
                ?>
            </div>

        </main>
    </div>
    <footer class="footer">legal information here</footer>


    <script src="./js/show_nav.js"></script>
</body>

</html>