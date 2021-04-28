<?php
function belumlogin(){
    $check = get_instance();
    if(!$check->session->userdata('id')){
        redirect("admin/Login");
    }
}
