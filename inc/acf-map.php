<?php 

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyBiW6C2-1fkU_DUPQXbJUHIQTVFo9LMkCs');
}

add_action('acf/init', 'my_acf_init');