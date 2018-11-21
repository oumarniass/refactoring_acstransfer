<?php
$dossier = 'files';
$valeur = 0;

function count_files($dir)
      {
              $num = 0;

              $dir_handle = opendir($dir);
                 while($entry = readdir($dir_handle))
                      if(is_file($dir.'/'.$entry))
                                 $num++;
              closedir($dir_handle);

               return $num;
       }



$nbrfichier = count_files($dossier);
$fichier = scandir($dossier, 1);

while ($valeur <= $nbrfichier)
{

$filename = $dossier.'/'.$fichier[$valeur];
if (file_exists($filename)) {
   $dif =round((strtotime(date("Ymd")) - strtotime(date("Ymd", fileatime($filename))))/86400);

   if($dif > 0.25){
      unlink($filename);
   }
}

$valeur++;
}
?>
