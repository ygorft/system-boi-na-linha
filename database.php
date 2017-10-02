<?php
  function DBCreate($table, array $data){
    $table = DB_PREFIX.'_'.$table;
    $data = DBEscape($data);
    $fields = implode (',', array_keys($data));
    $values = "'".implode("', '", $data)."'";

    $query = "INSERT INTO {$table} ( {$fields} ) VALUES ( {$values} ) ";

    return DBExecute($query);
  }

  function DBExecute($query){
    $link  = DBConnect();
    $result = @mysqli_query($link, $query) or die(mysqli_error());

    DBClose($link);
    return $result;
  }
 ?>
