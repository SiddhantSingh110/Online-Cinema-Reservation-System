<?
// ----------------------------------------------------------------------
// CinRes - Cinema Reservatin
// Copyright (C) 2003 by Georg Knoerr
// georg-knoerr@gmx.de
// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
include ("includes/header.php");
?>

<h1>Nachtr�glich eine Vorstellung hinzuf�gen</h2><p>

<?php
include ("includes/mysql.kino.php");

  echo "Lieber Kinobetreiber, hier sehen sie die eingetragenen Filme,<br>
  w�hlen sie einen aus, um noch eine Vorstellung hinzuzuf�gen:<p>";


    $abfrage = "SELECT namen FROM filme ";
  $ergebnis = mysql_query($abfrage);


while($l = mysql_fetch_assoc($ergebnis))
{

         foreach ($l as $var)
         {
            echo "<b>$var</b> <br>";
            echo "<form action=addtime1.php><input type=hidden name=\"filmname\" value=\"$var\"><input type=submit value=\"Vorstellung hinzuf�gen\"></form>";
         }

}
?>
<p><a href=index_admin.php>zur�ck zum Admin-Bereich</a>