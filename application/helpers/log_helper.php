<?php
function helper_log($tipe = "", $str = ""){
    $CI =& get_instance();
 
    if (strtolower($tipe) == "login"){
        $log_tipe   = "login";
    }
    elseif(strtolower($tipe) == "logout")
    {
        $log_tipe   = "logout";
    }
    elseif(strtolower($tipe) == "add"){
        $log_tipe   = "Insert";
    }
    elseif(strtolower($tipe) == "update"){
        $log_tipe  = "Update";
    }
    elseif(strtolower($tipe) == "delete"){
        $log_tipe  = "Delete";
    }
    else{
        $log_tipe  = "Unknown";
    }
 
    // paramter
    $param['user']      = $CI->session->userdata('username');
    $param['event']     = $log_tipe;
    $param['desc']      = $str;
 
    //load model log
    $CI->load->model('admin/m_log');
 
    //save to database
    $CI->m_log->save_log($param);
 
}
