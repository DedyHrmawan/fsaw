<?php
class Template
{
    protected $_ci;

    function __construct(){
        $this->_ci = &get_instance();
    }

    function tu($content, $data = null){
        $this->_ci->load->view('tu/template/header', $data); // Header
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('tu/template/footer', $data); // Footer
    }

    function waka($content, $data = null){
        $this->_ci->load->view('waka/template/header', $data); // Header
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('waka/template/footer', $data); // Footer
    }

    function kepsek($content, $data = null){
        $this->_ci->load->view('kepsek/template/header', $data); // Header
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('kepsek/template/footer', $data); // Footer
    }
    
}
?>