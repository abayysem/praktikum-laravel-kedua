<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{
    private function dataBuku()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'kategori' => 'Novel',
                'harga' => 85000,
                'deskripsi' => 'Kisah perjuangan anak-anak Belitung dalam meraih pendidikan dan cita-cita.'
            ],
            [
                'id' => 2,
                'judul' => 'Bumi',
                'penulis' => 'Tere Liye',
                'kategori' => 'Fantasi',
                'harga' => 95000,
                'deskripsi' => 'Petualangan Raib, Seli, dan Ali dalam dunia paralel.'
            ],
            [
                'id' => 3,
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'kategori' => 'Pengembangan Diri',
                'harga' => 89000,
                'deskripsi' => 'Buku pengantar filsafat Stoisisme untuk kehidupan sehari-hari.'
            ],
            [
                'id' => 4,
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'kategori' => 'Novel',
                'harga' => 90000,
                'deskripsi' => 'Perjalanan enam santri dalam mengejar impian mereka.'
            ],
            [
                'id' => 5,
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'kategori' => 'Pengembangan Diri',
                'harga' => 110000,
                'deskripsi' => 'Panduan membangun kebiasaan baik melalui perubahan kecil.'
            ]
        ];
    }

    public function index()
    {
        $buku = $this->dataBuku();

        return view('buku', compact('buku'));
    }

    public function kategori()
    {
        $kategori = [
            'Novel',
            'Fantasi',
            'Pengembangan Diri'
        ];

        return view('kategori', compact('kategori'));
    }

    public function show($id)
    {
        $buku = collect($this->dataBuku())
            ->firstWhere('id', $id);

        if (!$buku) {
            abort(404);
        }

        return view('detail', compact('buku'));
    }
}
