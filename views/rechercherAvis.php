<html>

<head></head>

<body>
    <?PHP
    include "../entities/avis.php";
    include "../core/avisC .php";
    if (isset($_GET['cin'])) {
        $avis1C = new AvisC();
        $listeAvis = $avis1C->rechercherAvis($_GET['cin']);
        //var_dump($listeEmployes->fetchAll());
        ?>
    <table border="1">
        <tr>
            <td>nom</td>
            <td>prenom</td>
            <td>email</td>
            <td>nombre</td>
            <td>avis1</td>
            <td>avis2</td>
        </tr>
        <?PHP
        foreach ($listeAvis as $row) {
            ?>
        <tr>
            <td>
                <?PHP echo $row['nom']; ?>
            </td>
            <td>
                <?PHP echo $row['prenom']; ?>
            </td>
            <td>
                <?PHP echo $row['email']; ?>
            </td>
            <td>
                <?PHP echo $row['nombre']; ?>
            </td>
            <td>
                <?PHP echo $row['avis1']; ?>
            </td>
            <td>
                <?PHP echo $row['avis2']; ?>
            </td>
        </tr>
        <?PHP

    }
}
?>
    </table>
</body>

</html> 