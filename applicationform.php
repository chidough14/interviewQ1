<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div style="margin-left:400px;">
  <h2 style="color: red;">Application Form</h2> 

    <form action="apply.php" method="post">
        <input type="text" placeholder="First Name" name="first_name"><br><br><br>

        <input type="text" placeholder="Surname" name="surname"><br><br><br>
        <input type="text" placeholder="Phone number" name="phone"><br><br><br>
        <input type="text" placeholder="Email"  name="email"><br><br><br>

        Passport Photograph <input type="file" name="passport"><br><br><br>
        Resume <input type="file" name="resume"><br><br>

        <input type="submit" value="Apply">
    </form>
  </div>
   
</body>
</html>