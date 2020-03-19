<?php

  $link = mysqli_connect("hostname", "database user", "password", "database name");

  echo mysqli_connect_error();

  if (mysqli_connect_error()) {
    echo "Sorry, there was an error accessing the database.";
  }

  $query = "SELECT * FROM users";

  if ($result = mysqli_query($link, $query)) {

    $row = mysqli_fetch_array($result);

    print("Your email is ".$row["email"]);

  }

?>