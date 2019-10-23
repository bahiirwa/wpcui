<div class="wrap">
    <h1>WPCUI Export/Import</h1>

	<?php use PerkoCustomizerUI\Services\DataService; ?>

    <?php 
    $sections = DataService::getSections(); 
    var_dump($sections);

    echo '<br>';

    $controls = DataService::getControls();
    var_dump($controls);
    ?>

</div>
