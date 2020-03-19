<?php

$link = mysqli_connect("hostname", "database user", "password", "database name");

  if (mysqli_connect_error()) {
    echo "Sorry, there was an error accessing the database.";
  }

  // $query = "INSERT INTO `users` (`email`, `password`) VALUES('tommy@gmail.com', 'password3')";

  $query = "UPDATE `users` SET password = 'somenewpassword'
  WHERE email = 'robpercival80@gmail.com' LIMIT 1";

  mysqli_query($link, $query);

  $query = "SELECT * FROM users";

  if ($result = mysqli_query($link, $query)) {

    $row = mysqli_fetch_array($result);

    print("Your email is ".$row["email"]);

  }

?>