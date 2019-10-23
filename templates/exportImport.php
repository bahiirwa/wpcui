<div class="wrap">
    <h1>WPCUI Export/Import</h1>

    <p>Copy the text below to another WordPress installation.</p>

	<?php use PerkoCustomizerUI\Services\DataService; ?>

    <?php 
    $sections = DataService::getSections(); 
    $controls = DataService::getControls();
    $export = ["sections" => $sections, "controls" => $controls];
    ?>

    <textarea readonly rows="10" cols="100"><?= json_encode($export); ?></textarea>

</div>
