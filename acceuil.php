<!DOCTYPE html>
<html>
    <head>
        <titre> Connexion </titre>
    </head>
 <body>
    <?php
        $largeur = 30;
        $hauteur = 30;
        $img = imagecreatetruecolor($largeur,$hauteur);
        $couleur = imagecolorallocate($img,109,7,26);
        imagerectangle($img,20,30,90,130,$couleur);
        //echo "Bonjour"
        //<img  alt="Logo Saclay">
        header('Content-type: text/plain');
        imagejpeg($img);
        imagedestroy($img);
    ?>
 </body>          

</html>