<?php
        foreach ($liste_nom as $value) { 
        ?>
        <li><?php echo $value?></li>
        <?php
        
        }
    ?>  

    <table>
        <thead>
            <tr>
                <th>nom</th>
                <th>prenom</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>



    <?php 
    for ($i=0; $i <sizeof($liste_nom); $i++){
        ?>
    
        <li><?php echo  $liste_nom[$i]."&nbsp".$liste_prenom[$i]?></li>
        <?php
        }
    ?>  