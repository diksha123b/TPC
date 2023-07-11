<!DOCTYPE html>
<html>
  <head>
    <title>Admin Page</title>
    <style>
      body {
        background-image: url("https://149695847.v2.pressablecdn.com/wp-content/uploads/2021/10/3-1.jpg");
        background-size: 100%;
        background-repeat: no-repeat;
        background-position: center center;
      }

      .container {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
      }
      h1 {
        font-size: 50px;
        color: #131E3A;
      }
      .button-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
      }

      .button {
        background-color: #131E3A;
        border: none;
        color: white;
        padding: 15px 100px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1><b><u>Admin</u></b> </h1>
      <div class="button-container">
        <a href="student.php" class="button">Student</a>
        <a href="company.php" class="button">Company</a>
        <a href="logout.php" class="button">Logout</a>
      </div>
    </div>
  </body>
</html>


