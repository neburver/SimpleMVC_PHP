<?php $this->layout('layout', ['title' => 'Errore 404']) ?>

<h1>Home page</h1>
<p>Benvenuti nella home page del framework PHP <a href="">SimpleMVC</a></p>
<p>SimpleMVC è un progetto didattico per insegnare le basi dell'architettura MVC</p>

<?php

echo "<div class=container>";
echo "<div class=row>";
foreach($userArticles as $row){
  echo "<a href=/".$row['id'].">";
  echo "<div class=col-md-6><h1>".$row['title']."</h1>";
  echo "<p>".$row['content']."</p>";
  echo "<p>".$row['date']."</p>";
  echo "<p>".$row['idUser']."</p></div></a>";
}
echo "</div>";
echo "</div>";

?>
