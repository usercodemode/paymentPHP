<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="/paymentProcess.php" method="POST">
    <input type="email" name="email" placeholder="email"><br>
    <input type="text" name="name" placeholder="name"><br>
    <input type="number" name="number" placeholder="number"><br>
    <input type="number" name="amount" placeholder="amount"><br>
    
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>