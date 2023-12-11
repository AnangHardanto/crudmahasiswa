<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitungtabung extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('tabung');
    }

    function index()
    {
        $phi = 3.14;
        $jari = 5;
        $tinggi = 3;
        echo "Phi : " . $phi . "</br>";
        echo "Jari jari : " . $jari . "</br>";
        echo "Tinggi : " . $tinggi . "</br></p>";
        $this->tabung->volume($jari,$phi,$tinggi);
        echo "</br><hr>";
        $this->tabung->luas($jari,$phi,$tinggi);
        echo "</br><hr>";
        $this->tabung->selimut($jari,$phi,$tinggi);
    }
}