<?php
  require "inc/_header.php";
?>

<?php
  
  $name = $_POST['name'];
  echo $name;
?>

  <header>
    <h1>Contact</h1>
  </header>

  <!--
    form-action bestimmt, Wohin die Daten geschickt werden
    name-attribut eines INPUTS bestimmt den FELD-Namen, über den sich der Wert abrufen lässt.
  -->
  <form class="form" method="post" action="contact.php">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name">
      </div>
      
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email">
      </div>

      <div class="form-group">
        <label for="">Message</label>
        <textarea name="message"></textarea>
      </div>
      <input type="submit" name="submit" value="Los gehts" class="button">
  </form>

<?php
  require "inc/_footer.php";
?>
