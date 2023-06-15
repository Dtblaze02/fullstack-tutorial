<!DOCTYPE html>
<html>
<head>
  <title>Social Media Page</title>
  <style>
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
