<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G2R STOCK_EMPRUNT</title>
    <link rel="stylesheet" href="styleform.css">
</head>
<body>
    <h1>G2R STOCK</h1>
   <form action="" method="post">
    <table>
        <tr><td colspan="2" id="titre"> Modification d'un appareil</td></tr>
        <tr><td class="gauche"><label for=""> Modèle du  PC :</label> </td><td> <input type="text" placeholder="modèle du PC"> </td></tr>
        <tr><td class="gauche"><label for="">Adresse MAC :</label> </td><td><input type="text" placeholder="adresse MAC du PC"></td></tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="modifier un matériel supplimentaire" id="btn">
            </td>
        </tr>
        
        <tr><td  class="gauche"><label for="">Disponibilité :</label>
            </td>
            <td class="gauche" id="et"><label for="">Etat :</label>
                </td></tr>
                <tr><td><select name="dispo" id="disponible">
                
                    <option value="null">inconnu</option>
                    <option value="disponible">disponible</option>
                    <option value="indisponible">non disponible</option>
            
                </select></td> <td><select name="etat" id="etatordi">
                    
                    <option value="null">inconnu</option>
                    <option value="">en bon état</option>
                    <option value="indisponible"> endommagé</option>
                    <option value="indisponible"> en réparation </option>
                    <option value="indisponible"> déja réparé</option>
                </select></td></tr>
        <tr><td class="gauche"><label for="">commentaire:</label></td>
           <td> <textarea name="comm" id="comm" cols="25" rows="2" placeholder="commentaire à propos de "></textarea></td></tr>
        <tr><td class="gauche"> <label for="text" id="addip">Adresse IP :</label></td>
            <td><input type="text" name="ip" placeholder="Adresse IP du pc"></td></tr>
        <tr><td> <label for="" id="vil">Ville :</label></td>
           <td> <select name="ville" id="ville">
                
            <option value="0">--Choisissez votre centre G2R--</option>
            <option value="Antony">Antony</option>
            <option value="Aubervilliers">Aubervilliers</option>
            <option value="Créteil">Créteil</option>
            <option value="Cergy">Cergy</option>
            <option value="Eaubonne">Eaubonne</option>
            <option value="Etampes">Etampes</option>
            <option value="Garges-les-Gonesse">Garges-les-Gonesse</option>
            <option value="Le Kremlin-Bicêtre<">Le Kremlin-Bicêtre</option>
            <option value="Mantes-la-Jolie">Mantes-la-Jolie</option>
            <option value="Massy">Massy</option>
            <option value="Montreuil">Montreuil</option>
            <option value="Pantin">Pantin</option>
            <option value="Paris 11eme">Paris 11eme</option>
            <option value="Plaisir">Plaisir</option>
            <option value="Poissy">Poissy</option>
            <option value="Rambouillet">Rambouillet</option>
            <option value="Ris-Orangis">Ris-Orangis</option>
            <option value="Rueil-Malmaison">Rueil-Malmaison</option>
            <option value="Sartrouville">Sartrouville</option>
            <option value="Saint-Mair-des-Fosses">Saint-Mair-des-Fosses</option>
            <option value="Sevres">Sevres</option>
            <option value="Versailles">Versailles</option>
        
        
            </select></td></tr>
        <tr><td colspan="2"><input type="submit" value="valider" id="valider" ></td></tr>
        <tr><td colspan="2" id="piedt"> confirmation de votre emprunt </td></tr>

        
    </table>
   </form> 
</body>
</html>