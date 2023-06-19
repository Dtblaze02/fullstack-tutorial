<?php require('../auth/auth.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Social Media Page</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="#" id="fb">
                            <img src="../assets/images/logo.png" alt="logo" width="70">
                        </a>
                    </li>
                    <li>
                        <button id="search_btn" class="tooltip" data-tooltip="Search">
                            <i class="fas fa-search    "></i>
                        </button>
                    </li>

                    <li id="space2"></li>

                    <li>
                        <a class="tooltip active" data-tooltip="Home" href="#" id="home">
                            <i class="fas fa-home    "></i>
                        </a>
                    </li>
                    <li>
                        <a class="tooltip" data-tooltip="Group" href="#" id="group">
                            <i class="fas fa-user-friends    "></i>
                        </a>
                    </li>
                    <li>
                        <a class="tooltip" data-tooltip="Watch" href="#" id="tv">
                            <i class="fas fa-tv    "></i>
                        </a>
                    </li>
                    <li>
                        <a class="tooltip" data-tooltip="Friend" href="#" id="friend">
                            <i class="fas fa-user-alt    "></i>
                        </a>
                    </li>
                    <li id="space1"></li>
                    <li>
                        <button class="tooltip" data-tooltip="Add" id="btn_plus">
                            <i class="fas fa-plus    "></i>
                        </button>
                    </li>
                    <li>
                        <button class="tooltip" data-tooltip="Message" id="btn_msg">
                            <i class="fab fa-facebook-messenger    "></i>
                        </button>
                    </li>
                    <li>
                        <button class="tooltip" data-tooltip="Notification" id="btn_bell">
                            <i class="fas fa-bell    "></i>
                        </button>
                    </li>
                    <li>
                        <button class="tooltip" data-tooltip="Profile" id="btn_profile">
                            <i class="fas fa-user-cog    "></i>
                        </button>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <h2>Welcome,
                <?php echo $_SESSION['username']; ?>
            </h2>
            <div class="post">
                <div class="author">John Doe</div>
                <div class="timestamp">June 15, 2023 10:00 AM</div>
                <div class="content">
                    <p>This is my first post! #excited</p>
                </div>
                <div class="actions">
                    <a href="#">Like</a>
                    <a href="#">Comment</a>
                </div>
            </div>
            <div class="post">
                <div class="author">Jane Smith</div>
                <div class="timestamp">June 14, 2023 2:30 PM</div>
                <div class="content">
                    <p>Just came back from an amazing vacation! Check out the photos:</p>
                    <img src="vacation1.jpg" alt="Vacation Photo">
                    <img src="vacation2.jpg" alt="Vacation Photo">
                </div>
                <div class="actions">
                    <a href="#">Like</a>
                    <a href="#">Comment</a>
                </div>
            </div>
            <!-- Add more posts here -->
            <a href="../auth/logout.php">Logout</a>
        </div>
    </body>
</html>