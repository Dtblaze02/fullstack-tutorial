<!DOCTYPE html>
<html>
<head>
  <title>Social Media Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    *{
              box-sizing: border-box;
            }
            :root{
                --btn-width-100: 100px;
            }
            nav{
                margin: 0;
                padding: 0;
            }
            nav ul {
                margin: 0;
                padding: 8px 15px;
                list-style: none;
                display: flex;
                box-shadow: 0 1px 8px rgba(0,0,0,0.3);
            }
            nav ul li {
                padding: 3px;
            }
            nav ul li a{
                display: inline-block;
                text-decoration: none;
            }
            nav ul li #fb{
                background: #0B84ED;
                color: #fff;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 2rem;
            }
            nav ul li #search_btn{
                border: none;
                outline: none;
                background: rgba(0, 0, 0, 0.068);
                padding: 8px;
                color: #888;
                width: 40px;
                height: 40px;
                font-size: 1rem;
                border-radius: 50%;
                cursor: pointer;
 
            }
            nav ul li#space1{
                flex: 1;
            }
            nav ul li#space2{
                flex: 2;
            }
            nav ul li a{
                height: 40px;
                width: var(--btn-width-100);
                font-size: 1.5rem;
                display: flex;
                justify-content: center;
                align-items: center;
                color: rgb(158, 158, 158);
                transition: .5s;
 
            }
            nav ul li #btn_plus,
            nav ul li #btn_msg,
            nav ul li #btn_bell,
            nav ul li #btn_profile{
                height: 40px;
                width: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 1rem;
                color: #444;
                background: rgba(0, 0, 0, 0.068);
                border: none;
                outline: none;
                border-radius: 50%;
                cursor: pointer;
            }
 
 
            nav ul li:hover #home, 
            nav ul li:hover #group, 
            nav ul li:hover #tv, 
            nav ul li:hover #friend{
                background: rgba(0, 0, 0, 0.138);
                color: #444;
                border-radius: 5px;
 
            } 
 
 
 
            .active{
                color: #0B84ED!important; 
            }
 
            .tooltip{
                position: relative;
            }
            .tooltip::after{
                content: attr(data-tooltip);
                height: 30px;
                background: rgba(0,0,0,0.4);
                color: #fff;
                font-size: 1rem;
                text-align: center;
                position: absolute;
                bottom: -150%;
                padding: 5px 12px;
                line-height: 30px;
                border-radius: 3px;
                opacity: 0;
                transition: .3s;
                pointer-events: none;
                user-select: none;
            }
            .tooltip:hover::after{
                opacity: 1;
            }
            nav ul li #btn_profile::after{
               margin-left: -20px;
            }
 
 
            @media  screen and (max-width: 700px){
                nav ul li#space1,
                nav ul li#space2{
                    display: none;
                }
                nav ul{
                    min-width: 600px;
                    padding: 8px 12px;
                  justify-content: space-between;
                }
                :root{
                    --btn-width-100: 60px;
                }
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .post {
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 1px solid #ccc;
    }
    .post .author {
      font-weight: bold;
    }
    .post .timestamp {
      font-size: 12px;
      color: #888;
    }
    .post .content {
      margin-top: 10px;
    }
    .post .actions {
      margin-top: 10px;
    }
    .post .actions a {
      margin-right: 10px;
    }
  </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li> <a href="#" id="fb"> <i class="fab fa-facebook-f    "></i> </a> </li>
                <li> <button id="search_btn" class="tooltip" data-tooltip="Search"> <i class="fas fa-search    "></i> </button> </li>
 
                <li id="space2"></li>
 
                <li> <a class="tooltip active" data-tooltip="Home" href="#" id="home"> <i class="fas fa-home    "></i> </a> </li>
                <li> <a class="tooltip" data-tooltip="Group" href="#" id="group"> <i class="fas fa-user-friends    "></i> </a></li>
                <li> <a class="tooltip" data-tooltip="Watch" href="#" id="tv"> <i class="fas fa-tv    "></i> </a> </li>
                <li> <a class="tooltip" data-tooltip="Friend" href="#" id="friend"> <i class="fas fa-user-alt    "></i> </a> </li>
                <li id="space1"></li>
                <li> <button class="tooltip" data-tooltip="Add" id="btn_plus"><i class="fas fa-plus    "></i></button> </li>
                <li> <button class="tooltip" data-tooltip="Message" id="btn_msg"><i class="fab fa-facebook-messenger    "></i></button></li>
                <li> <button class="tooltip" data-tooltip="Notification" id="btn_bell"> <i class="fas fa-bell    "></i></button></li>
                <li>  <button class="tooltip" data-tooltip="Profile" id="btn_profile"><i class="fas fa-user-cog    "></i></button>  </li>
            </ul>
        </nav>
    </header>
  <div class="container">
    <h2>My Social Media Page</h2>
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
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>