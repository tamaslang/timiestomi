<?php

  $search = htmlspecialchars($_GET["gyereel"]);

  $attendees = array();
  $attendees["tomiszulok"] = "Anyu és Apu";                // www.timiestomi.hu?gyereel=tomiszulok
  $attendees["krisztidavid"] = "Kriszti és Dávid";         // www.timiestomi.hu?gyereel=krisztidavid
  $attendees["marilali"] = "Mariann, Lala és Kristóf";     // www.timiestomi.hu?gyereel=marilali
  $attendees["ildigergo"] = "Ildikó, Gergő és Lili";       // www.timiestomi.hu?gyereel=ildigergo
  $attendees["ancsi"] = "Anikó";                           // www.timiestomi.hu?gyereel=ancsi
  $attendees["keresztszuleim"] = "Marika és Béla";          // www.timiestomi.hu?gyereel=keresztszuleim
  $attendees["kovariek"] = "Magdi és Anti";                // www.timiestomi.hu?gyereel=kovariek
  $attendees["katrin"] = "Katalin és Géza";                // www.timiestomi.hu?gyereel=katrin
  $attendees["juci"] = "Judit és Legénye";                 // www.timiestomi.hu?gyereel=juci
  $attendees["hombre"] = "Gábor és Szilvi";                // www.timiestomi.hu?gyereel=hombre
  $attendees["janniamama"] = "Mama";                       // www.timiestomi.hu?gyereel=janniamama
  $attendees["langmama"] = "Mama";                        // www.timiestomi.hu?gyereel=langmama
  $attendees["atiek"] = "Reni, Ati és Viki";               // www.timiestomi.hu?gyereel=atiek
  $attendees["zoliek"] = "Brigi, Zoli, Dóri és Levente";   // www.timiestomi.hu?gyereel=zoliek
  $attendees["nagyati"] = "Attila";                        // www.timiestomi.hu?gyereel=nagyati
  $attendees["detti"] = "Detti";                           // www.timiestomi.hu?gyereel=detti
  $attendees["krisztian"] = "Krisztián és Szilvia";        // www.timiestomi.hu?gyereel=krisztian
  $attendees["szandiek"] = "Ági, Gyuri és Robi";           // www.timiestomi.hu?gyereel=szandiek

  $attendees["gyulajucus"] = "Jucus és Gyula";             // www.timiestomi.hu?gyereel=gyulajucus
  $attendees["beketuncsi"] = "Beke, Tüncsi és Bercel";     // www.timiestomi.hu?gyereel=beketuncsi
  $attendees["orsipeti"] = "Orsi és Peti";                 // www.timiestomi.hu?gyereel=orsipeti
  $attendees["galileo"] = "Galileók és Galilák";           // www.timiestomi.hu?gyereel=galileo
  $attendees["sooskati"] = "Kati";                         // www.timiestomi.hu?gyereel=sooskati
  $attendees["lakosadam"] = "Ádám";                        // www.timiestomi.hu?gyereel=lakosadam
  $attendees["padtars"] = "Ricsi";                         // www.timiestomi.hu?gyereel=padtars
  $attendees["bencevirag"] = "Bence, Virág és Samu";       // www.timiestomi.hu?gyereel=bencevirag
  $attendees["arpiek"] = "Árpi, Herti és a kiscsalád";     // www.timiestomi.hu?gyereel=arpiek
  $attendees["zso"] = "Zsófi és Peti";                     // www.timiestomi.hu?gyereel=zso
  $attendees["janianna"] = "Anna és Jani";                 // www.timiestomi.hu?gyereel=janianna
  $attendees["szabocsalad"] = "Jennifer, Szabi és Sisi";   // www.timiestomi.hu?gyereel=szabocsalad
  $attendees["marozman"] = "Marozman";                     // www.timiestomi.hu?gyereel=marozman

  $attendees["segito"] = "Szakács, DJ, Házigazda és minden segítő";  // www.timiestomi.hu?gyereel=segito

  $attendees["kicsitimi"] = "Szerelmem";                     // www.timiestomi.hu?gyereel=kicsitimi


  $attendees["timiszulok"] = "Anyu és Apu";                     // www.timiestomi.hu?gyereel=timiszulok
  $attendees["hugi"] = "Dóri";                                  // www.timiestomi.hu?gyereel=hugi
  $attendees["mamipapi"] = "Mama és Papa";                      // www.timiestomi.hu?gyereel=mamipapi
  $attendees["martiek"] = "Márti és Jani";                      // www.timiestomi.hu?gyereel=martiek
  $attendees["vikiek"] = "Viki, Tomi, Ádám, Alíz és Donát";     // www.timiestomi.hu?gyereel=vikiek
  $attendees["attiek"] = "Eszter, Attila, Marcell és Ármin";    // www.timiestomi.hu?gyereel=attiek
  $attendees["krisztianek"] = "Hugi, Krisztián és Csenge";      // www.timiestomi.hu?gyereel=krisztianek
  $attendees["szabiek"] = "Anita, Szabi, Ikrek";                // www.timiestomi.hu?gyereel=szabiek
  $attendees["keresztanyu"] = "Keresztanyu";                    // www.timiestomi.hu?gyereel=keresztanyu

  $attendees["adri"] = "Adri";                                  // www.timiestomi.hu?gyereel=adri
  $attendees["kri"] = "Kri";                                    // www.timiestomi.hu?gyereel=kri
  $attendees["krisztina"] = "Kriszti";                          // www.timiestomi.hu?gyereel=krisztina
  $attendees["kati"] = "Kati";                                  // www.timiestomi.hu?gyereel=kati
  $attendees["dzsiniek"] = "Dzsini, Laci és Noel";              // www.timiestomi.hu?gyereel=dzsiniek
  $attendees["martigergo"] = "Márti és Gergő";                  // www.timiestomi.hu?gyereel=martigergo
  $attendees["hajniek"] = "Hajni és Laci";                      // www.timiestomi.hu?gyereel=hajniek
  $attendees["moniek"] = "Móni és Davide";                      // www.timiestomi.hu?gyereel=moniek
  $attendees["liluek"] = "Lilu, Balázs és Bence";               // www.timiestomi.hu?gyereel=liluek
  $attendees["cenceek"] = "Ági, Bence és Marcell";              // www.timiestomi.hu?gyereel=cenceek
  $attendees["kuxiek"] = "Kuxi és Melinda";                     // www.timiestomi.hu?gyereel=kuxiek
  $attendees["adamek"] = "Timi és Ádám";                        // www.timiestomi.hu?gyereel=adamek
  $attendees["adriek"] = "Adri és Jac";                         // www.timiestomi.hu?gyereel=adriek
  $attendees["rituek"] = "Rita, Tamás, Balázs és Bence";        // www.timiestomi.hu?gyereel=rituek

  if(array_key_exists($search, $attendees)){
    $ID = $search;
    $GYEREEL = $attendees[$search];

    include 'index_known.php';
  } else {
    include 'index_unknown.php';
  }
?>
