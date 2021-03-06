<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_utama extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('m_upload');
    }

    function index()
    {
        $data = $this->m_upload->select_table_order_limit('*', 'blog_content', 'tanggal', 2);
        $this->load->view('index', array('data' => $data));

    }

    // function cobaonepage(){
    // 	$this->load->view('cobaonepage');
    // }

    function home()
    {
        $data = $this->m_upload->select_table_order_limit('*', 'blog_content', 'tanggal', 2);
        $this->load->view('index', array('data' => $data));
    }


    function join()
    {
        $this->load->view('join');

    }

    function koordinat_ini_bisa_menjadi_acuaan_ketika_anda_membutuhkan_koordinat_di_sekolah()
    {
        $this->load->view('maps');

    }

    function forgot_password()
    {
        $this->load->view('pengguna');
    }


    function join_ride()
    {
        $this->load->view('join_ride_new', array('form' => 0));
    }


    function join_car()
    {

        $this->load->view('join_car_new', array('error' => ' '));
    }

    function join_loundry() {
        $this->load->view('join_loundry', array('error' => ''));
    }

    function join_box()
    {
        $jenis = $this->m_upload->select_where('*', 'jenis_kendaraan', 'id >', '2');
        $this->load->view('join_box_new', array('jenis' => $jenis));
    }

    function join_food()
    {
        $jenis = $this->m_upload->select('*', 'kategori_resto');
        $this->load->view('join_food_new', array('jenis' => $jenis));
    }

    function join_mangfood_personal()
    {
        $this->load->view('join_food_personal', array('error' => ' '));
    }

    function join_food_company()
    {
        $this->load->view('join_food_company', array('error' => ' '));
    }

    function join_service()
    {
        $keahlian = $this->m_upload->select('*', 'mservice_jenis');
        $jenis = $this->m_upload->select('*', 'peralatan_service');
        $area = $this->m_upload->select('*', 'cabang_perusahaan');
        $this->load->view('join_service_new', array('jenis' => $jenis, 'area' => $area, 'keahlian' => $keahlian));
    }

    function join_massage()
    {
        $area = $this->m_upload->select('*', 'cabang_perusahaan');
        $jenis = $this->m_upload->select('*', 'layanan_pijat');
        $this->load->view('join_massage', array('jenis' => $jenis, 'area' => $area));
    }

    function join_mart()
    {
        $jenis = $this->m_upload->select('*', 'kategori_toko');
        $this->load->view('join_mart', array('jenis' => $jenis));
    }

    function hubungi_kami()
    {
        $this->load->view('hubungi_kami');
    }

    function faq()
    {
        $this->load->view('faq');
    }

    function faq_app()
    {
        $this->load->view('faq_app');
    }
}
