<?php

namespace App\Controllers;


use App\Models\Karyawan;
use App\Models\Paket;
use App\Models\Penghuni;

class Home extends BaseController
{
	protected $karyawan;
	protected $paket;
	protected $penghuni;
	public function __construct(){
		$this->karyawan = new Karyawan();
		$this->paket = new Paket();
		$this->penghuni = new Penghuni();
	}
	public function index()
	{
		
		$data = [
            'title' => 'TAMBAH PAKET',
			'validation' => \Config\Services::validation(),
			'karyawan' => $this->karyawan->findAll(),
			'penghuni' => $this->penghuni->findAll(),
			
        ];
		return view('home/index',$data);
	}
	public function savepaket()
    {
		// $nama = $this->request->getPost('tambah');

		// if(isset($nama)){
		// 	$namakar = $this->request->getPost('nama_karyawan');
		// 	$namakaryawan = 
		// }
		
        $this->paket->save([
            'tanggal' => $this->request->getVar('tanggal'),
            'isipaket' => $this->request->getVar('isipaket'),
            'tanggal_diterima' => $this->request->getVar('tanggal_diterima'),
            'nama_karyawan' => $this->request->getVar('nama_karyawan'),
			'nip' => $this->request->getVar('nip'),
			'penghuni' => $this->request->getVar('penghuni'),
        ]);
        

        session()->setFlashdata('pesan', 'Data Berhasil Disimpan.');

        return redirect()->to('home/list');
    }
	public function list()
	{

		$data = [
            'title' => 'List',
			'validation' => \Config\Services::validation(),
			'paket' => $this->paket->getPaket(),
			
        ];
		return view('home/list',$data);
	}

	public function editpaket($id)
    {
        $data = [
            'title' => 'Form EDIT PAKET',
            'validation' => \Config\Services::validation(),
            'paket' => $this->paket->find($id),
			'karyawan' => $this->karyawan->findAll(),
			'penghuni' => $this->penghuni->findAll(),
        ];

        return view('home/editpaket', $data);
	}
	public function updatepaket($id)
    {
		// $nama = $this->request->getPost('tambah');

		// if(isset($nama)){
		// 	$namakar = $this->request->getPost('nama_karyawan');
		// 	$namakaryawan = 
		// }
		
        $this->paket->save([
			'id' => $id,
            'tanggal' 			=> $this->request->getVar('tanggal'),
            'isipaket' 			=> $this->request->getVar('isipaket'),
            'tanggal_diterima' 	=> $this->request->getVar('tanggal_diterima'),
            'nama_karyawan' 	=> $this->request->getVar('nama_karyawan'),
			'nip' 				=> $this->request->getVar('nip'),
			'penghuni' 			=> $this->request->getVar('penghuni'),
        ]);
        

        session()->setFlashdata('pesan', 'Data Berhasil DiEDIT.');

        return redirect()->to('/home/list');
	}

	public function penghuni()
	{

		$data = [
            'title' => 'List Penghuni',
			'validation' => \Config\Services::validation(),
			'penghuni' => $this->penghuni->getPenghuni(),
			
        ];
		return view('home/penghuni',$data);
	}

	public function create()
	{
		
		$data = [
            'title' => 'TAMBAH PENGHUNI',
			'validation' => \Config\Services::validation(),
			'karyawan' => $this->karyawan->findAll(),
			'penghuni' => $this->penghuni->findAll(),
			
        ];
		return view('home/create',$data);
	}
	public function savepenghuni()
    {
		$fileFoto = $this->request->getFile('foto');
		$fileFoto->move('img');
		$namaFoto = $fileFoto->getName();  
        $this->penghuni->save([
            'nama' => $this->request->getVar('nama'),
            'unit' => $this->request->getVar('unit'),
            'no_ktp' => $this->request->getVar('no_ktp'),
            'foto' => $namaFoto,
        ]);
        

        session()->setFlashdata('pesan', 'Data Berhasil Disimpan.');

        return redirect()->to('/home/penghuni');
    }

	public function editpenghuni($id)
    {
        $data = [
            'title' => 'Form EDIT PAKET',
            'validation' => \Config\Services::validation(),
            'penghuni' => $this->penghuni->find($id),
        ];

        return view('home/editpenghuni', $data);
	}

	public function updatepenghuni($id)
    {
		$fileFoto = $this->request->getFile('foto');
		$fileFoto->move('img');
		$namaFoto = $fileFoto->getName();  
        $this->penghuni->save([
			'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'unit' => $this->request->getVar('unit'),
            'no_ktp' => $this->request->getVar('no_ktp'),
            'foto' => $namaFoto,
        ]);
        

        session()->setFlashdata('pesan', 'Data Berhasil Disimpan.');

        return redirect()->to('/home/penghuni');
	}
}
