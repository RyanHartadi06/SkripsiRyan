<?php
function belumlogin()
{
    $check = get_instance();
    if (!$check->session->userdata('status') == "2" || !$check->session->userdata('id_pengguna')) {
        redirect("Login");
    }
}
function belumlogin_admin()
{
    $check = get_instance();
    if (!$check->session->userdata('status') == "1" || !$check->session->userdata('id_pengguna')) {
        redirect("Login");
    }
}
