<?php

namespace App\Database;

class AdapterSQLite implements AdapterInterface
{

  public function open()
  {
    echo "<br>Adapter SQLite: open()</br>";
  }
  public function close()
  {
    echo "<br>Adapter SQLite: close()</br>";
  }
  public function get()
  {
    echo "<br>Adapter SQLite: get()</br>";
  }
}
