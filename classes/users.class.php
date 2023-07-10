<?php

class Users extends Dbh
{
  protected function getUsers($firstname)
  {
    $sql = "SELECT * FROM users WHERE users_firstname = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$firstname]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function setUser($firstname, $lastname, $dateofbirth)
  {
    $sql = "INSERT INTO users (users_firstname, users_lastname, users_dateofbirth) VALUES (?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$firstname, $lastname, $dateofbirth]);
  }
}
