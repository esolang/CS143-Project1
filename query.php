<!DOCTYPE html>
<html>
<body>

<h1>IMDb III: Tokyo Drift</h1>

<form action="query.php" method="GET">
      <textarea name="query" cols="60" rows="8"><?php print "$query" ?></textarea><br />
      <input type="submit" value="Submit" />
</form>

<?php
  $db_connection = mysql_connect("localhost", "cs143", "");
  mysql_select_db("CS143", $db_connection);
  $query = $_GET["query"];
  echo $_GET["query"];
  $rs = mysql_query($query, $db_connection);
  print "<table>";
  while($row = mysql_fetch_row($rs)) {
      print "<tr>";
      foreach($row as $value) {
        print "<td>$value</td>";
      }
      print "</tr>";
  }
  print "</table>";
  mysql_close($db_connection);
?>

</html>
