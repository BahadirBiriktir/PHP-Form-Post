<form action="index.php" method="POST">
     Name: <input type="text" name="Name">
     Surname: <input type="text" name="Surname"><br><br>
     Birthday: <input type="date" name="Birthday">
     Age: <input type="number" name="Age"><br><br>
     Tel: <input type="tel" name="Tel">
     FavColour: <input type="text" name="FavColour"><br><br>
     FavSport: <input type="text" name="FavSport">
     Password: <input type="password" name="password"><br><br>
     <input type="submit">
</form>

<?php
if (isset($_POST["Name"])) {
  echo $_POST["Name"] . "<br>";}

  if (isset($_POST["Surame"])) {
    echo $_POST["Surame"] . "<br>";}
  
    if (isset($_POST["Birthday"])) {
      echo $_POST["Birthday"] . "<br>";}

      if (isset($_POST["Age"])) {
        echo $_POST["Age"] . "<br>";}

        if (isset($_POST["Tel"])) {
          echo $_POST["Tel"] . "<br>";}

          if (isset($_POST["FavColour"])) {
            echo $_POST["FavColour"] . "<br>";}

            if (isset($_POST["FavSport"])) {
              echo $_POST["FavSport"] . "<br>";}

              if (isset($_POST["password"])) {
                echo $_POST["password"] . "<br>";}










?>
