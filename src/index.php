<?php
require('dbconnect.php');

// $sql = 'SELECT name, color, calories FROM fruit ORDER BY name';
// foreach ($dbh->query($sql) as $row) {
// foreach ($db->query($sql) as $row) {
//     print $row['name'] . "\t";
//     print $row['color'] . "\t";
//     print $row['calories'] . "\n";
// }
$questions = $db->query("SELECT * FROM questions")->fetchAll(PDO::FETCH_ASSOC);
// print_r($questions);
echo('<pre>');
var_dump($questions);
echo('</pre>');

$choices = $db->query("SELECT * FROM choices")->fetchAll(PDO::FETCH_ASSOC);
// print_r($choices);
echo('<pre>');
var_dump($choices);
echo('</pre>');


foreach ($choices as $key => $choice) {
  $index = array_search($choice["question_id"], array_column($questions, 'id'));
  $questions[$index]["choices"][] = $choice;
}

// $array = array(
//   1    => "a",
//   "1"  => "b",
//   1.5  => "c",
//   true => "d",
// );
// var_dump($array);
?>

this is template