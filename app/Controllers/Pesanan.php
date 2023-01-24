<?php

namespace App\Controllers;

use App\Models\PesananModel;

class Pesanan extends BaseController
{
    protected $pesananModel;

    public function __construct()
    {
        $this->pesananModel = new \App\Models\PesananModel();
    }

    public function index()
    {
        // $pesananModel = new \App\Models\PesananModel();
        // $pesanan = $this->pesananModel->findAll();
        // dd('$pesanan');

        $data = [
            'title' => 'Pesanan --Rakha',
            'pesanan' => $this->pesananModel->getPesanan()
        ];

        echo view('pages/pesanan', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail --Rakha',
            'pesanan' =>  $this->pesananModel->getPesanan($slug)
        ];

        //pesanan tidak ada
        if (empty($data['pesanan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pesanan ' . $slug . ' tidak ditemukan.');
        }

        return view('pages/detail', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Tambah --Rakha',
            'validation' => \Config\Services::validation()
        ];
        return view('pages/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate(
            [
                'produk' => [
                    'rules' => 'required|is_unique[pesanan.produk]',
                    'errors' => [
                        'required' => '{field} nama harus diiai '
                    ]
                ]
            ],
            [
                // 'image' => 'uploaded[image]'
                'image' => [
                    'rules' => 'uploaded[image]|max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Pilih gambar produk',
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mime_in' => 'Pilih anda pilih bukan gambar'
                    ]
                ]
            ]
        )) {

            session()->setFlashdata('gagal', 'Nama Produk Tidak Bolah sama, Data Gagal Ditambahakan');

            // $validation = \Config\Services::validation();
            // return redirect()->to('/create')->withInput()->with('validation', $validation);
            return redirect()->to('/create')->withInput();
        }

        // Ambil Gambar
        $fileImage = $this->request->getFile('image');
        // pindahkan gambar ke folder public images
        $fileImage->move('images');
        //  ambil nama file image
        $namaImage = $fileImage->getName();

        $slug = url_title($this->request->getVar('produk'), '-', true);
        $this->pesananModel->save([
            'produk' => $this->request->getVar('produk'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'image' => $namaImage
        ]);

        session()->setFlashdata('berhasil', 'Data Berhasil Ditambahakan');

        return redirect()->to('/pesanan');
    }

    public function delete($id)
    {
        //cari gambar berdarkan id
        $pesanan = $this->pesananModel->find($id);

        //cek jika file gambar default.png
        if ($pesanan['image'] != 'default.png') {
            //hapus gambar
            unlink('images/' . $pesanan['image']);
        }

        $this->pesananModel->delete($id);
        session()->setFlashdata('berhasil', 'Data Berhasil Dihapus');
        return redirect()->to('/pesanan');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Edit --Rakha',
            'validation' => \Config\Services::validation(),
            'pesanan' => $this->pesananModel->getPesanan($slug)
        ];
        return view('pages/edit', $data);
    }

    public function update($id)
    {
        $fileImage = $this->request->getFile('image');

        //cek gambar, apakah tetap gambar lama
        if ($fileImage->getError() == 4) {
            $namaImage = $this->request->getVar('imageLama');
        } else {
            //generete nama file random
            $namaImage = $fileImage->getRandomName();
            //pindahkan gambar
            $fileImage->move('images', $namaImage);
            //hapus file gambar lama
            unlink('images/' . $this->request->getVar('imageLama'));
        }

        $slug = url_title($this->request->getVar('produk'), '-', true);
        $this->pesananModel->save([
            'id' => $id,
            'produk' => $this->request->getVar('produk'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'image' => $namaImage
        ]);

        session()->setFlashdata('berhasil', 'Data Berhasil Diubah');

        return redirect()->to('/pesanan');
        $pesananLama['produk'] = $this->pesananModel->getPesanan($this->request->getVar('slug'));
        if ($pesananLama['produk'] == $this->request->getVar('produk')) {
            $rule_produk = 'required';
        } else {
            $rule_produk = 'required|is_unique[pesanan.produk]';
        }

        if (!$this->validate([
            [
                'produk' => $rule_produk
            ],
            'image' => [
                'rules' => 'uploaded[image]|max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih gambar produk',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Pilih anda pilih bukan gambar'
                ]
            ]
        ])) {

            session()->setFlashdata('gagal', 'Data Gagal Diubah');
            return redirect()->to('/pesanan')->withInput();
        }
    }
}
