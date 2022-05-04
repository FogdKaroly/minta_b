<h1>Rendelés</h1>

    <form action="" name="rendeles">
        <label for="email">E-mail cím: </label>
        <input type="email" name="email" id="email">
        <label for="nev">Név: </label>
        <input type="text" name="nev" id="nev">

        <?php
        
            for($i = 1; $i <= 3; $i++){
                echo "<p>";
                echo "<h2>Termék: </h2>";
                echo "<select id='termek$i'>";
                    echo "<option value='0'>Termék$i</option>";
                    echo "<option value='1100'>Margaréta</option>";
                    echo "<option value='1500'>Kolbászos</option>";
                    echo "<option value='1650'>Török csirkés</option>";
                    echo "<option value='1800'>Démon</option>";
                    echo "<option value='1950'>Extra</option>";
                    echo "<option value='1950'>Playboy</option>";
                echo "</select>";

                echo "<h2>Mennyiség: </h2>";
                echo "<input type='number' value='1' min='1' max='5' id='mennyiseg$i'>";

                echo "<h2>Extra: </h2>";
                echo "<select id='extra$i'>";
                    echo "<option value='0'>Extra$i</option>";
                    echo "<option value='200'>Csípős alap, BBQ alap</option>";
                    echo "<option value='300'>Sajtfélék</option>";
                    echo "<option value='350'>Tarja/Bacon/Kolbász</option>";
                    echo "<option value='350'>Gyroshús/Csirkemell</option>";
                    echo "<option value='100'>Ketchup/Majonéz/Mustár/Tejföl</option>";
                echo "</select>";
                echo "</p>";
            }
        
        ?>

        <input type="button" name="rendel" id="rendel" value="Rendelés" onclick="arszamitas()">
    </form>
            <br>
    <h2>Az árak forintban értendők, az aktuális áfa összegét tartalmazzák</h2>