<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Daftar Nama Kabupaten dan Kota di Provinsi NAD Aceh
            'Aceh Barat', 'Aceh Barat Daya', 'Aceh Besar', 'Aceh Jaya', 'Aceh Selatan',
            'Aceh Singkil', 'Aceh Tamiang', 'Aceh Tengah', 'Aceh Tenggara', 'Aceh Timur',
            'Aceh Utara', 'Bener Meriah', 'Bireuen', 'Gayo Lues', 'Nagan Raya', 'Pidie',
            'Pidie Jaya', 'Simeulue', 'Banda Aceh', 'Langsa', 'Lhokseumawe', 'Sabang', 'Subulussalam',

            // Daftar Nama Kabupaten dan Kota di Provinsi Sumatera Utara (SUMUT)
            'Asahan', 'Batubara', 'Dairi', 'Deli Serdang', 'Humbang Hasundutan', 'Karo',
            'Labuhanbatu', 'Labuhanbatu Selatan', 'Labuhanbatu Utara', 'Langkat',
            'Mandailing Natal', 'Nias', 'Nias Barat', 'Nias Selatan', 'Nias Utara',
            'Padang Lawas', 'Padang Lawas Utara', 'Pakpak Bharat', 'Samosir',
            'Serdang Bedagai', 'Simalungun', 'Tapanuli Selatan', 'Tapanuli Tengah',
            'Tapanuli Utara', 'Toba Samosir', 'Binjai', 'Gunungsitoli', 'Medan',
            'Padangsidempuan', 'Pematangsiantar', 'Sibolga', 'Tanjungbalai',
            'Tebing Tinggi',

            // Daftar Nama Kabupaten dan Kota di Provinsi Sumatera Barat (SUMBAR)
            'Agam', 'Dharmasraya', 'Kepulauan Mentawai', 'Lima Puluh Kota', 'Padang Pariaman',
            'Pasaman', 'Pasaman Barat', 'Pesisir Selatan', 'Sijunjung', 'Solok',
            'Solok Selatan', 'Tanah Datar', 'Bukittinggi', 'Padang', 'Padangpanjang',
            'Pariaman', 'Payakumbuh', 'Sawahlunto', 'Solok',

            // Daftar Nama Kabupaten dan Kota di Provinsi Sumatera Selatan (SUMSEL):
            'Banyuasin', 'Empat Lawang', 'Lahat', 'Muara Enim', 'Musi Banyuasin',
            'Musi Rawas', 'Musi Rawas Utara', 'Ogan Ilir', 'Ogan Komering Ilir',
            'Ogan Komering Ulu', 'Ogan Komering Ulu Selatan', 'Ogan Komering Ulu Timur',
            'Penukal Abab Lematang Ilir', 'Lubuklinggau', 'Pagar Alam', 'Palembang', 'Prabumulih',

            // Daftar Nama Kabupaten dan Kota di Provinsi Riau:
            'Bengkalis', 'Indragiri Hilir', 'Indragiri Hulu', 'Kampar', 'Kepulauan Meranti',
            'Kuantan Singingi', 'Pelalawan', 'Rokan Hilir', 'Rokan Hulu', 'Siak', 'Dumai', 'Pekanbaru',

            // Daftar Nama Kabupaten dan Kota di Provinsi Kepulauan Riau (KEPRI):
            'Bintan', 'Karimun', 'Kepulauan Anambas', 'Lingga', 'Natuna', 'Batam', 'Tanjung Pinang',

            // Daftar Nama Kabupaten dan Kota di Provinsi Jambi:
            'Batanghari', 'Bungo', 'Kerinci', 'Merangin', 'Muaro Jambi', 'Sarolangun', 'Tanjung Jabung Barat',
            'Tanjung Jabung Timur', 'Tebo', 'Jambi', 'Sungai Penuh',

            // Daftar Nama Kabupaten dan Kota di Provinsi Bengkulu:
            'Bengkulu Selatan', 'Bengkulu Tengah', 'Bengkulu Utara', 'Kaur', 'Kepahiang', 'Lebong',
            'Mukomuko', 'Rejang Lebong', 'Seluma', 'Bengkulu',

            // Daftar Nama Kabupaten dan Kota di Provinsi Bangka Belitung (BABEL):
            'Bangka', 'Bangka Barat', 'Bangka Selatan', 'Bangka Tengah', 'Belitung', 'Belitung Timur', 'Pangkal Pinang',

            // Daftar Nama Kabupaten dan Kota di Provinsi Lampung:
            'Lampung Tengah', 'Lampung Utara', 'Lampung Selatan', 'Lampung Barat', 'Lampung Timur', 'Mesuji', 'Pesawaran',
            'Pesisir Barat', 'Pringsewu', 'Tulang Bawang', 'Tulang Bawang Barat', 'Tanggamus', 'Way Kanan', 'Bandar Lampung', 'Metro',

            // Daftar Nama Kabupaten dan Kota di Provinsi Banten:
            'Lebak', 'Pandeglang', 'Serang', 'Tangerang', 'Cilegon', 'Serang', 'Tangerang', 'Tangerang Selatan',

            // Daftar Nama Kabupaten dan Kota di Provinsi Jawa Barat (JABAR):
            'Bandung', 'Bandung Barat', 'Bekasi', 'Bogor', 'Ciamis', 'Cianjur', 'Cirebon', 'Garut', 'Indramayu', 'Karawang',
            'Kuningan', 'Majalengka', 'Pangandaran', 'Purwakarta', 'Subang', 'Sukabumi', 'Sumedang', 'Tasikmalaya',
            'Kota Bandung', 'Banjar', 'Bekasi', 'Bogor', 'Cimahi', 'Cirebon', 'Depok', 'Sukabumi', 'Tasikmalaya',

            // Daftar Nama Kabupaten dan Kota di Provinsi Jawa Tengah (JATENG):
            'Banjarnegara', 'Banyumas', 'Batang', 'Blora', 'Boyolali', 'Brebes', 'Cilacap', 'Demak', 'Grobogan', 'Jepara',
            'Karanganyar', 'Kebumen', 'Kendal', 'Klaten', 'Kudus', 'Magelang', 'Pati', 'Pekalongan', 'Pemalang', 'Purbalingga',
            'Purworejo', 'Rembang', 'Semarang', 'Sragen', 'Sukoharjo', 'Tegal', 'Temanggung', 'Wonogiri', 'Wonosobo',
            'Magelang', 'Pekalongan', 'Salatiga', 'Semarang', 'Surakarta', 'Tegal',

            // Daftar Nama Kabupaten dan Kota di Provinsi Jawa Timur (JATIM):
            'Bangkalan', 'Banyuwangi', 'Blitar', 'Bojonegoro', 'Bondowoso', 'Gresik', 'Jember', 'Jombang', 'Kediri', 'Lamongan',
            'Lumajang', 'Madiun', 'Magetan', 'Malang', 'Mojokerto', 'Nganjuk', 'Ngawi', 'Pacitan', 'Pamekasan', 'Pasuruan',
            'Ponorogo', 'Probolinggo', 'Sampang', 'Sidoarjo', 'Situbondo', 'Sumenep', 'Trenggalek', 'Tuban', 'Tulungagung',
            'Batu', 'Blitar', 'Kediri', 'Madiun', 'Malang', 'Mojokerto', 'Pasuruan', 'Probolinggo', 'Surabaya',

            // Daftar Nama Kabupaten dan Kota di Provinsi DKI Jakarta:
            'Jakarta Barat', 'Jakarta Pusat', 'Jakarta Selatan', 'Jakarta Timur', 'Jakarta Utara', 'Kepulauan Seribu',

            // Daftar Nama Kabupaten dan Kota di Provinsi Daerah Istimewa Yogyakarta:
            'Bantul', 'Gunungkidul', 'Kulon Progo', 'Sleman', 'Yogyakarta',

            // Daftar Nama Kabupaten dan Kota di Provinsi Bali:
            'Badung', 'Bangli', 'Buleleng', 'Gianyar', 'Jembrana', 'Karangasem', 'Klungkung', 'Tabanan', 'Denpasar',

            // Daftar Nama Kabupaten dan Kota di Provinsi Nusa Tenggara Barat (NTB):
            'Bima', 'Dompu', 'Lombok Barat', 'Lombok Tengah', 'Lombok Timur', 'Lombok Utara', 'Sumbawa', 'Sumbawa Barat', 'Bima', 'Mataram',

            // Daftar Nama Kabupaten dan Kota di Provinsi Nusa Tenggara Timur (NTT):
            'Alor', 'Belu', 'Ende', 'Flores Timur', 'Kupang', 'Lembata', 'Malaka', 'Manggarai', 'Manggarai Barat', 'Manggarai Timur',
            'Ngada', 'Nagekeo', 'Rote Ndao', 'Sabu Raijua', 'Sikka', 'Sumba Barat', 'Sumba Barat Daya', 'Sumba Tengah', 'Sumba Timur',
            'Timor Tengah Selatan', 'Timor Tengah Utara', 'Kupang',

            // Daftar Nama Kabupaten dan Kota di Provinsi Kalimantan Barat (KALBAR):
            'Bengkayang', 'Kapuas Hulu', 'Kayong Utara', 'Ketapang', 'Kubu Raya', 'Landak', 'Melawi', 'Mempawah', 'Sambas', 'Sanggau',
            'Sekadau', 'Sintang', 'Pontianak', 'Singkawang',

            // Daftar Nama Kabupaten dan Kota di Provinsi Kalimantan Selatan (KALSEL):
            'Balangan', 'Banjar', 'Barito Kuala', 'Hulu Sungai Selatan', 'Hulu Sungai Tengah', 'Hulu Sungai Utara', 'Kotabaru', 'Tabalong',
            'Tanah Bumbu', 'Tanah Laut', 'Tapin', 'Banjarbaru', 'Banjarmasin',

            // Daftar Nama Kabupaten dan Kota di Provinsi Kalimantan Tengah (KALTENG):
            'Barito Selatan', 'Barito Timur', 'Barito Utara', 'Gunung Mas', 'Kapuas', 'Katingan', 'Kotawaringin Barat', 'Kotawaringin Timur',
            'Lamandau', 'Murung Raya', 'Pulang Pisau', 'Sukamara', 'Seruyan', 'Palangka Raya',

            // Daftar Nama Kabupaten dan Kota di Provinsi Kalimantan Timur (KALTIM):
            'Berau', 'Kutai Barat', 'Kutai Kartanegara', 'Kutai Timur', 'Mahakam Ulu', 'Paser', 'Penajam Paser Utara', 'Balikpapan', 'Bontang',
            'Samarinda',

            // Daftar Nama Kabupaten dan Kota di Provinsi Kalimantan Utara (KALTARA):
            'Bulungan', 'Malinau', 'Nunukan', 'Tana Tidung', 'Tarakan',

            // Daftar Nama Kabupaten dan Kota di Provinsi Gorontalo:
            'Boalemo', 'Bone Bolango', 'Gorontalo', 'Gorontalo Utara', 'Pohuwato', 'Gorontalo',

            // Daftar Nama Kabupaten dan Kota di Provinsi Sulawesi Selatan (SULSEL):
            'Bantaeng', 'Barru', 'Bone', 'Bulukumba', 'Enrekang', 'Gowa', 'Jeneponto', 'Kepulauan Selayar', 'Luwu', 'Luwu Timur', 'Luwu Utara',
            'Maros', 'Pangkajene dan Kepulauan', 'Pinrang', 'Sidenreng Rappang', 'Sinjai', 'Soppeng', 'Takalar', 'Tana Toraja', 'Toraja Utara',
            'Wajo', 'Makassar', 'Palopo', 'Parepare',

            // Daftar Nama Kabupaten dan Kota di Provinsi Sulawesi Tenggara (SULTRA):
            'Bombana', 'Buton', 'Buton Selatan', 'Buton Tengah', 'Buton Utara', 'Kolaka', 'Kolaka Timur', 'Kolaka Utara', 'Konawe', 'Konawe Kepulauan',
            'Konawe Selatan', 'Konawe Utara', 'Muna', 'Muna Barat', 'Wakatobi', 'Bau-Bau', 'Kendari',

            // Daftar Nama Kabupaten dan Kota di Provinsi Sulawesi Tengah (SULTENG):
            'Banggai', 'Banggai Kepulauan', 'Banggai Laut', 'Buol', 'Donggala', 'Morowali', 'Morowali Utara', 'Parigi Moutong', 'Poso', 'Sigi',
            'Tojo Una-Una', 'Toli-Toli', 'Palu',

            // Daftar Nama Kabupaten dan Kota di Provinsi Sulawesi Utara (SULUT):
            'Bolaang Mongondow', 'Bolaang Mongondow Selatan', 'Bolaang Mongondow Timur', 'Bolaang Mongondow Utara', 'Kepulauan Sangihe',
            'Kepulauan Siau Tagulandang Biaro', 'Kepulauan Talaud', 'Minahasa', 'Minahasa Selatan', 'Minahasa Tenggara', 'Minahasa Utara',
            'Bitung', 'Kotamobagu', 'Manado', 'Tomohon',

            // Daftar Nama Kabupaten dan Kota di Provinsi Sulawesi Barat (SULBAR):
            'Majene', 'Mamasa', 'Mamuju', 'Mamuju Tengah', 'Mamuju Utara', 'Polewali Mandar', 'Mamuju',

            // Daftar Nama Kabupaten dan Kota di Provinsi Maluku:
            'Buru', 'Buru Selatan', 'Kepulauan Aru', 'Maluku Barat Daya', 'Maluku Tengah', 'Maluku Tenggara', 'Maluku Tenggara Barat', 'Seram Bagian Barat', 'Seram Bagian Timur', 'Ambon', 'Tual',

            // Daftar Nama Kabupaten dan Kota di Provinsi Maluku Utara:
            'Halmahera Barat', 'Halmahera Tengah', 'Halmahera Utara', 'Halmahera Selatan', 'Kepulauan Sula', 'Halmahera Timur', 'Pulau Morotai', 'Pulau Taliabu', 'Ternate', 'Tidore Kepulauan',

            // Daftar Nama Kabupaten dan Kota di Provinsi Papua:
            'Asmat', 'Biak Numfor', 'Boven Digoel', 'Deiyai', 'Dogiyai', 'Intan Jaya', 'Jayapura', 'Jayawijaya', 'Keerom', 'Kepulauan Yapen', 'Lanny Jaya', 'Mamberamo Raya', 'Mamberamo Tengah',
            'Mappi', 'Merauke', 'Mimika', 'Nabire', 'Nduga', 'Paniai', 'Pegunungan Bintang', 'Puncak', 'Puncak Jaya', 'Sarmi', 'Supiori', 'Tolikara', 'Waropen', 'Yahukimo', 'Yalimo', 'Jayapura',

            // Daftar Nama Kabupaten dan Kota di Provinsi Papua Barat:
            'Fakfak', 'Kaimana', 'Manokwari', 'Manokwari Selatan', 'Maybrat', 'Pegunungan Arfak', 'Raja Ampat', 'Sorong', 'Sorong Selatan', 'Tambrauw', 'Teluk Bintuni', 'Teluk Wondama',
        ];

        foreach ($data as $name) {
            Kabupaten::create(['name' => $name]);
        }
    }
}
