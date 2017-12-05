<?php
header('Content-Type: text/html; charset=utf-8');
// var_dump($GLOBALS);



//cette fonction renvoie un nom de fichier unique en lien avec celui fourni en paramètre en vérifiant dans le répértoire images/
//@param string $nom : le nom de fichier à tester
//@return : un nom de fichier n'existant pas dans le répértoire
// function getUniqueFilename($nom){
//     if (file_exists('imagesexo/'.$nom)) {
//         echo "Le nom " .$nom. " est déjà utilisé ..";
//         //il va falloir trouver un nom unique 
//         //quelques fonctions php peuvent etre utiles : str_pad, mt_rand, microtime
//         //piste : extraction du nom : 
//         $image = explode(".",$nom);
//         //var_dump($image);

        
//         $longueurImg = strlen($image[0])+3;
//         $modif = str_pad($image[0], $longueurImg , mt_rand());
//         $nouveauNom = $modif.".".$image[1];

//         //var_dump($image[1]);
//         echo $nouveauNom;
//         return $nouveauNom;  
//     }
//     else{
//         return $nom;
//     }
// }

// function ecrasementScandir(){
//     $scanImg = scandir('imagesexo/');                    
//     foreach ($scanImg as $key => $value) {
//         if(is_file('imagesexo/'.$value)){
//             unlink('imagesexo/'.$value);
//         }
//     }
// }


$message = '';
if(isset($_FILES['image'])){
    //test qui va verifier le nom de l'image
    //il va empecher l'upload d'un tableau vide
    //pour qu'il marche, il faut mettre le meme lors de l'insersion de l'image dans la base de donnée
    if($_FILES['image']['name'] != ''){

        // echo "post : ";
        // var_dump($_POST);
        // echo "files : ";
        // var_dump($_FILES);
        $image = explode(".",$_FILES['image']['name']);

        if($_FILES['image']['error'] == UPLOAD_ERR_OK){
      
            try{
                if ($image[1] == 'jpg' || $image[1] == 'jpeg' || $image[1] == 'png' || $image[1] == 'bmp') {
                    
                        var_dump($_FILES);
                        // ecrasementScandir();
                        $message = 'Le fichier a bien été uploadé';
                        //on créer un objet Imagick
                        $image = new Imagick($_FILES['image']['tmp_name']);

                        //création d'une mignature
                        // $image->cropThumbnailImage(200,200);

                        //récupération du nom de fichier depuis $_FILES
                        $nom_fichier = $_FILES['image']['name'];

                        //création du fichier
                        $image->writeImage('../parties/img/'.$nom_fichier);

                        //mise à jour du message
                        $message .= '<img src="../parties/img/'.$nom_fichier. '"/>';
                        }
                    

                else{
                echo "Error format. Try with : JPG, JPEG, PNG or BMP";
                }   
            }catch(ImagickException $e){
                    var_dump($e);
                    $message = "Erreur : ".$e->getMessage()."</br>";
                }
            }    
         


        else{
            //codes erreurs :

            // remplir $message en fonction du code erreur
            switch($_FILES['image']['error']){
                // UPLOAD_ERR_INI_SIZE
                // UPLOAD_ERR_FORM_SIZE
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    $message = 'O_O <br/> Votre fichier est trop grooos !';
                    break;

                // UPLOAD_ERR_PARTIAL
                case UPLOAD_ERR_PARTIAL:
                    $message = 'Le fichier a été envoyé partiellement, veuillez réessayer ';
                    break;

                // UPLOAD_ERR_NO_FILE
                case UPLOAD_ERR_NO_FILE:
                    $message = '>_< <br/> Aucun fichier séléctionné';
                    break;


                // autres erreurs non gérées 
                default:
                    $message = 'Une erreur est survenue lors de l\'envoi du fichier<br/>';
                    $message .= 'code reçu : ' . $_FILES['image']['error'];
                    break;

            }
        }


    }
}
   

