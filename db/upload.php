<?php
include("conexao.php");


if(isset($_POST["submit"]))
{
    $folder_path = '../arquivos/';

    $filename = basename($_FILES['healthfile']['name']);
    $newname = $folder_path . $filename;

    $FileType = pathinfo($newname, PATHINFO_EXTENSION);

    $str = $filename;
    $search = 'hiatagan';
    if(preg_match("/{$search}/i", $str)) {
        echo 'A palavra '.$search.' existe na string!';
    }else{
        echo "Não existe palavra.";
    }
    
    /*

    if($FileType == "pdf")
    {
        if (move_uploaded_file($_FILES['healthfile']['tmp_name'], $newname))
        {

            $filesql = "INSERT INTO pdfs (pdfs) VALUES('$filename')";
            $fileresult = mysqli_query($conn, $filesql);

            if (isset($fileresult)){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Arquivo salvo com sucesso!')
                    window.location.href='../index.php';
                    </SCRIPT>");
            
            }else{
                echo "Erro 02 - Arquivo não foi salvo.";
            }
        }
        else
        {
            echo "Erro 01 - Arquivo não foi salvo.";
        }
    }
    else
    {
        echo "<p>Arquivo não está no formato PDF.</p>";
    }
*/
}else{
    echo "Não foi possível realizar o Upload.";
}

?>