<?php
  get_template_part('functions/enqueue');


  function get_json_data(){
    $data = json_decode(file_get_contents( get_stylesheet_directory() . '/assets/data.json' ));
    return ! empty( $data ) ? $data->data : array();
  }