<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Form</title>
    <!-- Latest compiled and minified CSS -->
<<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      
    <?php include 'link.php';
    ?>
      <h1>Rigester Your Self</h1>

      <form  method="post" action="insert.php">
        <label for="name"> Enter Your name</label>
        <input
        
          type="text"
          name="name"
          id="name"
          placeholder="Enter Your name"
        />
        <label for="dob"> Enter Your dob</label>
        <input
          type="date"
          name="dob"
          id="dob"
          placeholder="Enter your date of birth"
        />
        <button class="btn btn-primary m-2" type="submit" name="submit" id="submit" value="submit">  Submit</button>
        <button class="btn btn-info" type="view" name="view" id="view" value="view"> <a href="listing.php">view</a> </button>
      </form>
      <?php include "insert.php"; ?>
  
    </div>
  </body>
</html>
