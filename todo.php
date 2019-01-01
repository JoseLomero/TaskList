<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ToDo</title>
  </head>
  <?php
  $db = parse_url(getenv("DATABASE_URL"));
$PDO = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));
//$Query = $PDO -> ("SELECT * FROM mytask;");
 ?>
  <body>
    <h1>ToDo - - Task List</h1>
    <?php echo "
    <div>
    <form>
        New Task:
        <input type='text' name='nom'>
        <input type='submit'>
    </form>
    </div>
    "; ?>
</body>