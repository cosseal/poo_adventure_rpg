<?php

?>
<div id="container">

    <div id="display" style="height: 300px; overflow:auto;">
        <ul>
        <?php foreach(array_reverse($personnage->getActions()) as $action)
        {?>
            <li><?=$action?></li>
            <?php
        }?>
        </ul>
    </div>
    <div id="controls">
        <form method="post" class="form">
            <div><button name="move" value="top"> ^ </button></div>
            <div><button name="move" value="left"> < </button></div>
            <div><button name="move" value="right"> > </button></div>
            <div><button name="move" value="bottom"> V </button></div>
        <div>
            <select name="action">
                <option value="" selected></option>
                <option value="attack">Attaquer</option>
            </select>
            <input type="submit" value="Envoyer">
        </div>
        </form>
    </div>

</div>
