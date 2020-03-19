<?php

  mysqli_connect("hostname", "database name", "password");

  echo mysqli_connect_error();

  if (mysqli_connect_error()) {
    echo "Sorry, there was an error accessing the database.";
  } else {
    echo "The connection to the database was succesfull.";
  }

?>