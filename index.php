<?php

$answer = '';
if (isset($_GET['question'])) {

}
$question = mb_strtolower($_GET['question']);


$answers = [
    'перемен' => 'answer/variables.php',
    'цикл'     => 'answer/for.php',
];

foreach ($answers as  $searchpart => $filename) {
if (strstr($question,  $searchpart)){
    $answer .= file_get_contents($filename) .PHP_EOL;
  }

  /*if (empty($answer)) {
    $answer =
    file_get_contents('https://www.php.net/manual-lookup.php?pattern='.$question);


  }
  */
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Робот - помощник</title>
  </head>
  <body>
    <?php if (isset($question)) { ?>
    <p>Ваш вопрос: <b><?=$question ?></b></p>
    <?php } ?>
    <p><?highlight_string($answer)?></p>
    <p>Место для вывода ответа</p>
    <hr>
    <h1>Спроси у меня - я тебе подскажу</h1>

    <form action="" method="get">
      <input placeholder="Введите ваш вопрос" name="question">
      <button type="submit">Спросить</button>
    </form>

  </body>
</html>
