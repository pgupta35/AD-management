<div class="btn-group-vertical">
Zaznaczeni:<br>
<br><button type="submit" class="btn btn-danger btn-block btn-sm" name="usun" formaction="index.php?podstrona=usun" onclick="return confirm('Czy na pewno chcesz usunąć wszystkich wybranych użytkowników\nz Active Directory<?php if ($_SESSION['enableZimbra']){echo " oraz zamknąć konto w ZIMBRA";}?>?');">Usuń</button>
<br><button type="submit" class="btn btn-info btn-block btn-sm" name="obiegowka" formaction="index.php?podstrona=obiegowka" onclick="return confirm('Czy na pewno chcesz zablokować wszystkich wybranych użytkowników za 30 dni w Active Directory?');">Zablokuj za 30 dni</button>
<br><button type="submit" class="btn btn-warning btn-block btn-sm" name="blokuj" formaction="index.php?podstrona=blokuj" onclick="return confirm('Czy na pewno chcesz zablokować wszystkich wybranych użytkowników\nw Active Directory<?php if ($_SESSION['enableZimbra']){echo " i w ZIMBRA";}?>?');">Zablokuj</button>
<br><button type="submit" class="btn btn-success btn-block btn-sm" name="odblokuj" formaction="index.php?podstrona=odblokuj" onclick="return confirm('Czy na pewno chcesz odblokować wszystkich wybranych użytkowników\nw Active Directory<?php if ($_SESSION['enableZimbra']){echo " i w ZIMBRA";}?>?');">Odblokuj</button>
</div>