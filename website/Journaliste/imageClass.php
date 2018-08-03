<?php

/**
 * auteur: Houessinon Landry (Cutrix)
 * Classe Image pour la gestion d'une image
 */


class imageClass {
    
    //Je force la taille de l'image a 150px
    protected $ratio;


    /**
     * Traite une image au format JPG
     * @param array $image
     */
    public function __construct($rat = 65)
    {
        $this->ratio = $rat;
    }


    public function treatJPG(array $image, $path="images", $path_min="images/min", $nom="pics") {
        $ext = "";
        if (gettype($image) !== 'array')
        {
            trigger_error("Veuillez donner un tableau ($_FILES)", E_USER_WARNING);
        } else {
            $dimg = @getimagesize($image['tmp_name']);
        if (empty($image['type']))
        {
            trigger_error("Donner une image valide svp",E_USER_WARNING);
        } else {
            if (self::fileExists($path.'/'.$nom.$ext) && self::fileExists($path_min.'/'.$nom.$ext))
            {
                $inc = 1;
                $nom = $nom.'_'.$inc+1;
            } else {
                $nom = $nom;
            }
            if ($dimg[2] == 2)
            {
                //Ici un image jpg
                if (file_exists($path))
                {
                    copy($image['tmp_name'], $path.'/'.$nom.$ext);
                } else {
                    $this->createDir($path);
                    copy($image['tmp_name'], $path.'/'.$nom.$ext);
                }
                $src = imagecreatefromjpeg($image['tmp_name']);
                if ($dimg[0] > $dimg[1])
                {
                    $im = imagecreatetruecolor(round(($this->ratio/$dimg[1])*$dimg[0]), $this->ratio);
                    imagecopyresampled($im, $src, 0, 0, 0, 0, round(($this->ratio/$dimg[1])*$dimg[0]), $this->ratio, $dimg[0], $dimg[1]);
                } else {
                    $im = imagecreatetruecolor($this->ratio, round(($this->ratio/$dimg[0])*$dimg[1]));
                    imagecopyresampled($im, $src, 0, 0, 0, 0, $this->ratio, round($dimg[1]*($this->ratio/$dimg[0])), $dimg[0], $dimg[1]);
                }
                if (file_exists($path_min))
                {
                    imagejpeg($im, $path_min.'/'.$nom.$ext);
                } else {
                    $this->createDir($path_min);
                    imagejpeg($im, $path_min.'/'.$nom.$ext);
                }
                return true;
            }
        }
        }
        
    }
    
    /**
     * Permet de traiter une image png
     * @param array $image
     * @param string $path
     * @param string $path_min
     * @param string $nom
     */
    public function treatPNG($image, $path="images", $path_min="images/min", $nom="pics") {
         $ext = "";
        if (gettype($image) !== 'array')
        {
            trigger_error("Veuillez donner un tableau ($_FILES)", E_USER_WARNING);
        } else {
            $dimg = @getimagesize($image['tmp_name']);
        if (empty($image['type']))
        {
            trigger_error("Donner une image valide svp",E_USER_WARNING);
        } else {
            if (self::fileExists($path.'/'.$nom.$ext) && self::fileExists($path_min.'/'.$nom.$ext))
            {
                $inc = 1;
                $nom = $nom.'_'.$inc+1;
            } else {
                $nom = $nom;
            }
            if ($dimg[2] == 3)
            {
                //Ici un image jpg
                if (file_exists($path))
                {
                    copy($image['tmp_name'], $path.'/'.$nom.$ext);
                } else {
                    $this->createDir($path);
                    copy($image['tmp_name'], $path.'/'.$nom.$ext);
                }
                $src = imagecreatefrompng($image['tmp_name']);
                if ($dimg[0] > $dimg[1])
                {
                    $im = imagecreatetruecolor(round(($this->ratio/$dimg[1])*$dimg[0]), $this->ratio);
                    imagecopyresampled($im, $src, 0, 0, 0, 0, round(($this->ratio/$dimg[1])*$dimg[0]), $this->ratio, $dimg[0], $dimg[1]);
                } else {
                    $im = imagecreatetruecolor($this->ratio, round(($this->ratio/$dimg[0])*$dimg[1]));
                    imagecopyresampled($im, $src, 0, 0, 0, 0, $this->ratio, round($dimg[1]*($this->ratio/$dimg[0])), $dimg[0], $dimg[1]);
                }
                if (file_exists($path_min))
                {
                    imagejpeg($im, $path_min.'/'.$nom.$ext);
                } else {
                    $this->createDir($path_min);
                    imagepng($im, $path_min.'/'.$nom.$ext);
                }
                return true;
            }
        }
        }
    }
    
    /**
     * Cree un repertoire dans un dossier
     * @param string $path
     */
    
    public function createDir($path) {
        if(@mkdir($path, 755))
        {
            echo '';
        } else {
            trigger_error("Erreur lors de la creation du repertoire", E_USER_ERROR);
        }
        
        return $path;
    }
    
    /**
     * Verifie le format de l'image donnée
     * @param array $img
     * @return string
     */
    
    public function t_format(array $img) {
        if (gettype($img) !== 'array')
        {
            trigger_error("Vous devez donner un tableau en parametre : Ex ($_FILES[lenomdelimage])", E_USER_ERROR);
        }
        else {
            if ($img['type'] == 'image/jpeg')
        {
            return 'jpg_format';
        }
        elseif ($img['type'] == 'image/png')
        {
            return 'png_format';
        } else {
            return 'gif_format';
        }
        }
    }
    
    public static function fileExists($file)
    {
        if (file_exists($file))
        {
            return true;
        } else {
            return false;
        }
    }
    
    public function delImg($photo)
    {
        if (isset($photo))
        {
            unlink($photo);
            return true;
        }
    }
}
