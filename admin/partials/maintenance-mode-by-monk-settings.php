<?php

class Mmbm_Settings{
    public function __construct(){
        add_action( 'admin_init', [$this, 'mmbm_loading_settings_markup'] );
    }

    public static function mmbm_loading_settings_markup(){ 

        ob_start();
        ?>
         <div class="wrap">
            <h1 class="wp-heading-inline"> Maintenance Mode by MONK - Settings</h1>
            <hr>
            <div>
                <label class="switch">
                    <input type="checkbox" name="checkbox" checked>
                    <span class="slider round"></span>
                </label>
                <span class="on_off_text">ON</span>
            </div>
        </div>

        <?php 

        $markup = ob_get_clean();

        return $markup;
    }
}




