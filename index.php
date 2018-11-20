<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <form method="post">
    <select name="check">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
    <input type="submit" name="button" value="Valider">
  </form>
  <a href="http://PHP/"><button type="button" class="btn btn-danger" name="button">Accueil</button></a>
  <?php
  $magnitude = (isset($_POST['check']));
  if (isset($_POST['button'])){
    switch ($magnitude){
      case 1:
      echo 'Micro-séisme impossible à ressentir.';
      break;
      case 2:
      echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
      break;
      case 3:
      echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
      case 4:
      echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
      break;
      case 5:
      echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
      break;
      case 6:
      echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
      break;
      case 7:
      echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
      break;
      case 8:
      echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
      break;
      case 9:
      echo 'Séisme capable de tout détruire sur une très vaste zone.';
      break;
      default:
      echo 'raté';
      break;
    }
  }
  ?>
</body>
</html>
