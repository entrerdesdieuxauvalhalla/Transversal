<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ajout d'article</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
include ('auth.php');
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['nom_article'])){
    $nom_article = stripslashes($_REQUEST['nom_article']);
    $nom_article = mysqli_real_escape_string($con,$nom_article);
    $code_type_article = stripslashes($_REQUEST['code_type_article']);
    $code_type_article = mysqli_real_escape_string($con,$code_type_article);
    $auteur = stripslashes($_REQUEST['auteur']);
    $auteur = mysqli_real_escape_string($con,$auteur);
    $lien = stripslashes($_REQUEST['lien']);
    $lien = mysqli_real_escape_string($con,$lien);
    $description_article = stripslashes($_REQUEST['description_article']);
    $description_article = mysqli_real_escape_string($con,$description_article);
    $code_article1 = stripslashes($_REQUEST['code_article1']);
    $code_article1 = mysqli_real_escape_string($con,$code_article1);

    $code_article='arti_'.$code_article1;
    $lien1="images/image_article/";
    $lien2=$_FILES['fichier']['name'];

    $image_article=$lien1.$lien2;


    $annee = $_POST['annee'];
    $mois = $_POST['mois'];
    $jour = $_POST['jour'];



    $date = $_POST['annee'].'-'.$_POST['mois'].'-'.$_POST['jour'];


    $query = "INSERT into `articles` (code_article, nom_article, code_type_article, `date`, auteur, lien, description_article, image_article) VALUES ('$code_article','$nom_article', '$code_type_article', '$date', '$auteur', '$lien', '$description_article', '$image_article')";
    $result = mysqli_query($con,$query);



    $destination = '../images/image_article/'; // dossier où sera déplacé le fichier



    $fichier = $_FILES['fichier']['tmp_name'];

    if( !is_uploaded_file($fichier) )
    {
        exit("Veuiller selectionner une image");
    }

    // on vérifie maintenant l'extension
    $type_fichier = $_FILES['fichier']['type'];

    if( !strstr($type_fichier, 'jpg') && !strstr($type_fichier, 'jpeg') && !strstr($type_fichier, 'bmp') && !strstr($type_fichier, 'gif') )
    {
        exit("Ce n'est pas une image");
    }

    // on copie le fichier dans le dossier de destination
    $nom_fichier = $_FILES['fichier']['name'];

    if( !move_uploaded_file($fichier, $destination . $nom_fichier) )
    {
        exit("Impossible de sauvegarde dans $destination");
    }

    echo "<div class='form'>Le fichier (image) a bien été envoyé</div>";


    if($result){
        echo "<div class='form'><h3>Ajout reussi.</h3><br/>Clique ici pour retourner a la page d'<a href='index.php'>administration</a></div>";
    }
}else{
    ?>






    <div class="form">
        <h1>Ajout d'article</h1>
        <form name="Ajout article" action="addarticles.php" enctype="multipart/form-data" method="post">
            <input type="text" class="addmenu" name="code_article1" placeholder="Id de l'article (arti_XXX)" maxlength="3" required />
            <input type="text" name="nom_article" placeholder="Nom" required />
            <select name="code_type_article">
                <option value="TYPART01">Communiqué</option>
                <option value="TYPART02">Blog</option>
                <option value="TYPART03">Presse</option>
            </select>
            <br>
            <select name="jour">
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <select name="mois">
                <option value="01">janvier</option>
                <option value="02">février</option>
                <option value="03">mars</option>
                <option value="04">avril</option>
                <option value="05">mai</option>
                <option value="06">juin</option>
                <option value="07">juillet</option>
                <option value="08">aout</option>
                <option value="09">septembre</option>
                <option value="10">octobre</option>
                <option value="11">novembre</option>
                <option value="12">decembre</option>
            </select>
            <select name="annee">
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
                <option value="1924">1924</option>
                <option value="1923">1923</option>
                <option value="1922">1922</option>
                <option value="1921">1921</option>
                <option value="1920">1920</option>
                <option value="1919">1919</option>
                <option value="1918">1918</option>
                <option value="1917">1917</option>
                <option value="1916">1916</option>
                <option value="1915">1915</option>
                <option value="1914">1914</option>
                <option value="1913">1913</option>
                <option value="1912">1912</option>
                <option value="1911">1911</option>
                <option value="1910">1910</option>
                <option value="1909">1909</option>
                <option value="1908">1908</option>
                <option value="1907">1907</option>
                <option value="1906">1906</option>
                <option value="1905">1905</option>
                <option value="1904">1904</option>
                <option value="1903">1903</option>
                <option value="1902">1902</option>
                <option value="1901">1901</option>
                <option value="1900">1900</option>
            </select>
            <br>
            <input type="text" name="auteur" placeholder="Auteur" required />
            <input type="text" name="lien" placeholder="Lien du blog" required />
            <input type="text" name="description_article" placeholder="Description de l'article" required />
            <input type="file" name="fichier" size="30">
            <input type="submit" name="submit" value="Ajouter" />
        </form>
    </div>
    <br><br/>
    <h2 style="text-align: center">Les articles déjà présent :</h2>
    <div style="text-align: center"><?php
        $sql = 'SELECT code_article, nom_article, description_article FROM articles';
        // on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
        $req = mysqli_query($con,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

        // on va scanner tous
        while ($data = mysqli_fetch_array($req)) {
            // on affiche les résultats
            echo 'Article :</br>';
            echo 'code_article : '.$data['code_article'].'<br />';
            echo 'nom_article : '.$data['nom_article'].'<br />';
            echo 'description_article : '.$data['description_article'].'<br /><br />';
        }
        ?></div>
<?php } ?>
</body>
</html>
