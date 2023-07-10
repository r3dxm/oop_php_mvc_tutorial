<?php

class UsersView extends Users
{
  public function showUsers($firstname)
  {
    $results = $this->getUsers($firstname);

    foreach ($results as $name) {
      echo "full name : " . $name['users_firstname'] . $name['users_lastname'];
    }
  }
}
