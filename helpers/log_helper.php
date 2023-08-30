<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function helper_log($tipe = "", $str = ""){
    $CI =& get_instance();
 
    if (strtolower($tipe) == "login"){
        $log_tipe = 0;
    }
    elseif(strtolower($tipe) == "logout")
    {
        $log_tipe = 1;
    }
    elseif(strtolower($tipe) == "view")
    {
        $log_tipe = 2;
    }
    elseif(strtolower($tipe) == "add"){
        $log_tipe = 3;
    }
    elseif(strtolower($tipe) == "edit"){
        $log_tipe = 4;
    }
    elseif(strtolower($tipe) == "delete"){
        $log_tipe = 5;
    }
    elseif(strtolower($tipe) == "search"){
        $log_tipe = 6;
    }
    elseif(strtolower($tipe) == "filter"){
        $log_tipe = 7;
    }
    elseif(strtolower($tipe) == "read"){
        $log_tipe = 8;
    }
    elseif(strtolower($tipe) == "download"){
        $log_tipe = 9;
    }
    else{
        $log_tipe = 10;
    }
 
    // paramter
    $param['log_user']      = $CI->session->userdata('username');
    $param['log_workunit']  = $CI->session->userdata('nama_uke');
    $param['log_type']      = $log_tipe;
    $param['log_desc']      = $str;
 
    //load model log
    $CI->load->model('Crud');
 
    //save to database
    $CI->Crud->save_log($param);
 
}
?>