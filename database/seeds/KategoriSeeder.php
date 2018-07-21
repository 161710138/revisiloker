<?php

use Illuminate\Database\Seeder;
use App\KategoriLowongan;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kat =new KategoriLowongan();
        $kat->nama_kategori = "Teknologi informasi dan komunikasi";
        $kat->save();

        $kat1= new KategoriLowongan();
		$kat1->nama_kategori = "Pertambangan, Sumber Daya & Energi";
		$kat1->save();


        $kat2= new KategoriLowongan();
		$kat2->nama_kategori = "Akunting";
		$kat2->save();


        $kat3= new KategoriLowongan();
		$kat3->nama_kategori = "Perbankan / Keuangan";
		$kat3->save();

        $kat4= new KategoriLowongan();
        $kat4->nama_kategori = "Asuransi";
        $kat4->save();

        $kat5= new KategoriLowongan();
        $kat5->nama_kategori = "SDM dan Perekrutan";
        $kat5->save();

        $kat6= new KategoriLowongan();
        $kat6->nama_kategori = "Administrasi dan perkantoran";
        $kat6->save();

        $kat6= new KategoriLowongan();
        $kat6->nama_kategori = "Administrasi dan perkantoran";
        $kat6->save();

        $kat7= new KategoriLowongan();
        $kat7->nama_kategori = "Hukum / Legal";
        $kat7->save();

        $kat8= new KategoriLowongan();
        $kat8->nama_kategori = "Desain dan Arsitektur";
        $kat8->save();

        $kat9= new KategoriLowongan();
        $kat9->nama_kategori = "Konstruksi & Bangunan";
        $kat9->save();

        $kat10= new KategoriLowongan();
        $kat10->nama_kategori = "Perumahan dan properti";
        $kat10->save();

        $kat11= new KategoriLowongan();
        $kat11->nama_kategori = "Teknik";
        $kat11->save();

        $kat12= new KategoriLowongan();
        $kat12->nama_kategori = "Kesehatan";
        $kat12->save();

        $kat12= new KategoriLowongan();
        $kat12->nama_kategori = "Olahraga, Kebugaran, dan Rekreasi";
        $kat12->save();

        $kat13= new KategoriLowongan();
        $kat13->nama_kategori = "Media, Periklanan, Seni";
        $kat13->save();

        $kat14= new KategoriLowongan();
        $kat14->nama_kategori = "Manufakturing";
        $kat14->save();

        $kat15= new KategoriLowongan();
        $kat15->nama_kategori = "Ritel dan produk konsumen";
        $kat15->save();

        $kat16= new KategoriLowongan();
        $kat16->nama_kategori = "Transportasi & Logistik";
        $kat16->save();

        $kat17= new KategoriLowongan();
        $kat17->nama_kategori = "Layanan panggilan dan layanan konsumen";
        $kat17->save();

        $kat18= new KategoriLowongan();
        $kat18->nama_kategori = "Pemasaran / Komunikasi / Humas";
        $kat18->save();

        $kat19= new KategoriLowongan();
        $kat19->nama_kategori = "Perhotelan dan pariwisata";
        $kat19->save();

        $kat20= new KategoriLowongan();
        $kat20->nama_kategori = "Restoran / Makanan & Minuman";
        $kat20->save();

        $kat21= new KategoriLowongan();
        $kat21->nama_kategori = "Penjual, Pelayanan & Pengembang";
        $kat21->save();

        $kat22= new KategoriLowongan();
        $kat22->nama_kategori = "Pendidikan dan pelatihan";
        $kat22->save();

        $kat23= new KategoriLowongan();
        $kat23->nama_kategori = "Ilmu Pengetahuan, Lab, R&D";
        $kat23->save();
                      
        $kat24= new KategoriLowongan();
        $kat24->nama_kategori = "Pemerintahan dan Pertahanan";
        $kat24->save();

        $kat25= new KategoriLowongan();
        $kat25->nama_kategori = "Pemerintahan dan Pertahanan";
        $kat25->save();


        $kat26= new KategoriLowongan();
        $kat26->nama_kategori = "Pembangunan dan pelayanan komunitas";
        $kat26->save();

        $kat27= new KategoriLowongan();
        $kat27->nama_kategori = "Pertanian/Agronomi/Kehutanan";
        $kat27->save();
    }
}
