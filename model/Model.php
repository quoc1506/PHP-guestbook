<?php

require_once "Connection.php";
define('TIMEZONE', 'Asia/Ho_Chi_Minh');
date_default_timezone_set(TIMEZONE);
class Model
{
  private $perPage = 10;
  private $page = 1;

  public function perPage($perPage)
  {
    $this->perPage = $perPage;
    return $this;
  }

  public function get()
  {
    $data = [];
    $offset = ($this->page - 1) * $this->perPage;
    $query = "SELECT * FROM $this->table ORDER BY updated_at DESC LIMIT $offset, $this->perPage ";
    $con = DbConn::getDbConn();
    $count = $con->query("SELECT COUNT(*) as total FROM $this->table");
    $count = mysqli_fetch_assoc($count);
    $count = $count['total'];
    $result = $con->query($query);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
    }
    return [
      'total' => ceil($count / $this->perPage),
      'data' => $data,
    ];
  }

  public function pagination($page)
  {
    $this->page = $page;
    return $this;
  }

  public function create($key, $val, $binds)
  {
    $query = "INSERT INTO $this->table ($key) VALUES ($val)";
    return $this->execute($query, $binds);
  }


  public function update($binds, $id)
  {
    $time = date("Y-m-d H:i:s");
    $query = "UPDATE $this->table SET name = ?, message = ?, updated_at = '$time' WHERE id='$id'";
    return $this->execute($query, $binds);
  }

  public function delete($id)
  {
    $con = DbConn::getDbConn();
    $query = "DELETE FROM $this->table WHERE id='$id'";
    return $con->query($query);
  }

  private function execute($query, $binds)
  {
    try {
      $con = DbConn::getDbConn();
      $stmt = $con->prepare($query);
      $stmt->bind_param("ss", $binds[0], $binds[1]);
      $stmt->execute();
      $err = $stmt->error;
      $con->close();
      $stmt->close();
      if ($err !== "")
        return $err;
      return true;
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }
}
