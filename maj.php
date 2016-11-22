<?php


if ($_SERVER['REQUEST_METHOD']=='POST') {
  $password = $_POST['password'];
  if ($password==file_get_contents('/srv/data/vero/password'))
    passthru('/srv/data/vero/maj.sh 2>&1');
  else
    echo 'Mot de passe incorrect';
  exit;
}
?>
<body style="text-align:center">
<form method="post" style="margin:200px">
<input type="password" name="password" placeholder="mot de passe"/>
<input type="submit" value="Mettre &agrave; jour"/>
</form>
</body>