<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
    protected $contactModel;

    public function __construct()
    {
        $this->contactModel = new \App\Models\ContactModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_contact') ? $this->request->getVar('page_contact') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $this->contactModel->search($keyword);
        } else {
            $contact = $this->contactModel;
        }

        $data = [
            'title' => 'Daftar Contact --Rakha',
            // 'contact' => $this->contactModel->findAll()
            'contact' => $this->contactModel->paginate(9, 'contact'),
            'pager' => $this->contactModel->pager,
            'currentPage' => $currentPage
        ];
        echo view('pages/contact', $data);
    }

    public function delete($id)
    {
        //cari gambar berdarkan id
        // $contact = $this->contactModel->find($id);

        // //cek jika file gambar default.png
        // if ($pesanan['image'] != 'default.png') {
        //     //hapus gambar
        //     unlink('images/' . $pesanan['image']);
        // }

        $this->contactModel->delete($id);
        session()->setFlashdata('delete', 'Data Berhasil Dihapus');
        return redirect()->to('/contact');
    }
}
