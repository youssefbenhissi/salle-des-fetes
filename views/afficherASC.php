<?PHP

include "core/clientC.php";
$client1=new clientC();
$listeAdmin=$client1->afficherclientASC();


?>

<center>
    
<div class="dixan" >
    

    <table border="4" class="hamza" >
<tr>
<td><h2>Cin</h2></td>
<td><h2>Nom</h2></td>
<td><h2>Prenom</h2></td>
<td><h2>Email</h2></td>
<td><h2>Mot De Passe</h2></td>
<td><h2>Date De Naissance</h2></td>
<td><h2>Telephone</h2></td>
<td><h2>Active</h2></td>

</tr>


<?PHP
foreach($listeAdmin as $row){
    ?>
    <tr>
    <td><?PHP echo $row['cin']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['prenom']; ?></td>
    <td><?PHP echo $row['Email']; ?></td>
    <td><?PHP echo $row['mdp']; ?></td>
    <td><?PHP echo $row['daten']; ?></td>
    <td><?PHP echo $row['tel']; ?></td>
    <td><?PHP echo $row['active']; ?></td>
    
    
    </tr>
    <?PHP
}
?>
</table>


</div>

</center>