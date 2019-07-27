<?php

namespace Inc\Services;

class FormControlsService {
    public function textField( $args ) {
        $name        = $args['label_for'];
        $option_name = $args['option_name'];
        $value       = '';

        echo '<input type="text" class="regular-text" id="' . $name . '" name="' . $option_name . '[' . $name . ']" value="' . $value . '" placeholder="' . $args['placeholder'] . '" required>';
    }

    public function dropDown( $args ) {
        $name = $args['name'];
        $label = $args['label'];

        $eleName = $name . "[$label]";
        echo "<select name=\"$eleName\">";

        foreach($args['options'] as $option) {
            $option_id = str_replace(' ', '_', $option);
            echo "<option value=$option_id>$option</option>";
        }

        echo '</select>';
    }
}