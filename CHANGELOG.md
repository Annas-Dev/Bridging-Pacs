# NEXT VERSION 2.4.X-2XXXXXXX

## 2.4.17-23080100

- Add: Pencarian by nama di home kunjungan dan my pasien
- Add: Skoring EWSS monitoring observasi kompherensif
- Update: Skoring Ewss untuk tanda vital
- Add: Support OS AlmaLinux 9 dan RockyLinux 9
- Fix: Script di RPC, Pegawai, Barang dan remove plugin inasis
- Fix: Perbaikan BUG Validasi Bon Sisa layanan farmasi
- Fix: Perbaikan Referensi Harga Barang di autocomplete
- Update: API Service Medication, medicationRequest, MedicationDispace
- Update: Pembaruan property untuk tombol copy cppt
- Add: Support bridging ICare BPJS
- Update: Upload file support di penunjang EKG
- Fix: Double pasien pulang
- Add: Skrip autobackup
- Update: Hitung ulang dan Final Tagihan tidak dapat dilakukan jika tagihan tidak terkunci (issue#100)
- Update: Reload tagihan setelah dilakukan final kunjungan di tagihan (issue#99)
- Fix: Perbaikan decimal cetak struk farmasi
- Update: Set default tanggal keluar di rujukan keluar
- Fix: nomor pada saat simpan jadwal kontrol hilang
- Fix: Perbaikan pemilihan poli asal rujukan di jadwal kontrol
- Update: Perbaikan BUG order by history dan penambahan notif validasi order item doubel
- Update: Perbaikan validasi hari dan batas layanan obat
- Update: Penamabahan validasi ubah petunjuk racikan di form order resep
- Update: Penambahan validasi batal final kunjungan
- Update: penambahan validasi jumlah bon layanan resep
- Fix: Gagal penerbitan sep pada saat update sep (issue#29)
- Add: Pemeriksaan penunjang Cat Clams
- Add: Monitoring observasi kompherensif
- Update: Validasi tanggal kontrol harus diatas dari tanggal hari ini (issue#5)

## 2.4.17-23071900

- Add: Monitoring SPRI
- Fix: Validasi Kunjungan tidak bisa dibatalkan ketika memiliki order yang sudah di terima
- Add: Monitoring jadwal kontrol
- Add: Status finger untuk penjamin sub spesialistik
- Update: Perubahan ICD & Grouping dapat dilakukan jika status klaim masih pending
- Update: Penyesuain fitur aturan pakai
- Add: TCD (Transcranial Doppler)
- Add: Asessment M-CHAT
- Fix: Validasi pengimputan tindakan di menu layanan dapat dilakukan walaupun hak akses telah di non aktifkan
- Fix: Result more than one row jika lebih dari satu penjamin pada saat hitung ulang tagihan
- Add: Menampilkan order resep pada histori layanan di rekam medis
- update-history-layanan-order-resep-yang-diorder-oleh-dokter-untuk-kebutuhan-rekonsiliasi-obat
- Update: Penambahan validasi Stok di Pemakaian BHP
- Update: Perbaikan dan penambahan validasi by WS layanan bon sisa
- Update: Pengimputan tanggal lahir untuk keluargan pasien package pasien
- Fix: Report tercetak ditempat lain ada kemungkinan request report id sama
- Fix: Mutasi bayi ikut ruangan ibu
- Fix: Final Kunjungan Error PROCEDURE master.getTarifRuangRawat does not exist
- Fix: Penambahan staf di ruangan tidak di temukan
- Add: Pengaturan property config untuk copy cppt
- Update: Penambahan panjang karakter pada field deskripsi di ruangan
- Fix: Tidak dapat melakukan final hasil di karena tervalidasi kunci tagihan
- Update: Merubah type data table ikatan kerja sama dari tinyint menjadi smallint
- Update: Procedure store penjamin tagihan dan trigger after update penjamin
- Fix: Nomor referensi tidak tersimpan pada saat kontrol internal
- Add: Rikonsialisasi obat
- Update: Penambahan rute dan frekuensi pada riwayat pemberian obat rekam medis
- Update: Melakukan pengecekan validasi transaksi pada saat kunci tagihan
- Add: Filter pengolongan barang laporan inventory
- Fix: Pengiriman resource medication, medication dispance, medication request
- Update: Pengambilan data icd-9 untuk procedure pengiriman satu sehat
- Update: Pengambilan data tanda vital untuk observation pengiriman satu sehat
- Update: Finger app request timeout
- Fix: Parameter ventilator tidak terkirim di eklaim
- Fix: Kunjungan yang batal gabung tagihan tampil pada saat pengecekan kunjungan yang belum final
- Fix: Penerbitan Surat kontrol untuk rujukan internal
- Update: Final Tagihan Terpisah
- Update: Penambahan variabel pada surat kelahiran package rekammedis
- Update: Penambahan pengaturan nama printer cetakan resep
- Update: penambahan validasi hak akses untuk service group pemeriksaan
- Update: Perbaikan trigger untuk medication (IHS)
- Add: Index table
- Update: KYC support production
- Update: Merubah urutan tombol cetak hasil lab
- Add: Index table document
- Fix: Form icd tidak tampil
- Update: Perbaikan fungsi validasi stok layanan resep
- Fix: Pencarian rujukan masuk
- Fix: Batal Final Layanan Farmasi

## 2.4.16-23061500

- Add: KYC (Know Your Customer) pasien satu sehat
- Fix: Perbaikan resume medis pada saat melakukan update
- Add: Cetak label lab PA
- Add: Mengunci (lock) dan membuka kunci (unlock) tagihan, jika terkunci maka semua transaksi yg terkait dengan tagihan tdk dapat dilakukan
- Add: Info detil pasien di kunjungan
- Add: Tombol cetak label lab PA
- Fix: Perbaikan validasi stok layanan farmasi
- Update: Penambahan property config untuk pengaturan jam di jadwal kontrol
- Update: Perubahan penamaan masa berlaku menjadi tanggal berlaku di harga barang
- Update: Penginputan cppt dari textfield menjadi texteditor
- Update: Simpan rujukan masuk dari vclaim
- Update: Hide form penginputan ICD 9 jika sudah final grouping
- Add: Surat Kelahiran
- Update: Laporan Individual
- Update: Penambahan field untuk mengimput DPJP di form EEG
- Fix: perbaikan penambahan validasi pelayanan (jumlah-bon)
- Fix: perbaikan validasi batal layanan Obat
- update: perbaikan BUG doubel save pelayanan bon sisa
- Update: order dan result lis
- Fix: automatic execute remove status selesai
- Fix: recalculation di inventory
- Update: Menangkap jika ada kesalahan pengambilan hasil lab di lis
- Update: Perbaikan dan penamabahan terkait laporan dan cetakan
- Add: Tanggal rencana pulang dan pengimputan sub devisi di cppt
- Update: Penambahan split pada laporan inventory
- Add: Pembuatan hak akses api service untuk pengguna
- Update: Form triage
- Update: Menampilkan tanggal masuk, nilai normal dan satuan di hasil lab resume medis
- Add: Validasi Jumlah lama dirawat (akomodasi) sama dengan jumlah visite dokter dan perawat pada saat dipulangkan
- Fix: Duplicate entry di referensi
- Update: perbaikan fitur dinamis PPN Penjualan Langsung Berdasarkan tanggal mulai berlaku
- Update: Menampilkan kunjungan hasil pengabungan tagihan di berkas klaim
- Update: Hide form penginputan ICD 10 jika sudah final grouping
- Fix: Viewer Rad for Orthanc Viewer
- Update: Penambahan Informasi Jadwal Kontrol di Monitoring Hasil Rad dan Lab package layanan
- Update: Perbaikan validasi item doubel order resep racikan
- Update: Link dokumentasi dan kontak
- Add: Consent pasien satu sehat
- Update: Validasi grouping tidak dapat dilakukan jika pendaftaran telah dibatalkan
- Add: Checkbox Generate SEP di pendaftaran
- Update: Validasi jika pasien bayi mengikuti rawat inap ibu
- Fix: Cetak hasil lab Patologi Anatomi tidak tampil pada menu monitoring
- Fix: Perbaikan BUG validasi retur pelayanan obat
- Update: Penambahan validasi stok final layanan farmasi berdasarkan pengaturan properti config
- Update: Validasi retur pelayanan resep
- Update: Perbaikan validasi SO batal final kunjungan farmasi
- Update: Contributors

## 2.4.15-23051300

- Fix: Perbaikan procedure batal order resep
- Update: Pengaturan warnah cppt berdasarkan config di referensi package rekammedis
- Fix: Penambahan validasi dpjp di webservice verifikasi dpjp sesuai dengan dpjp kunjungan
- Add: Hasil penunjang EEG, EMG, Raven Test, EKG dan Hasil Evaluasi SST di berkas klaim
- Update: Perubahan nama aplikasi simrsgos menjadi simgos rs, simklinikgos menjadi simgos klinik, repository dari simrsgos menjadi simgos
- Update: Info pesan jika tagihan belum di finalkan ketika akses berkas klaim
- Update: PPN 11 persen untuk penerimaan barang rekanan
- Fix: Informasi Pengunjung
- Fix: get total tagihan piutang perorangan dan perusahaan
- Fix: Order rad tidak masuk ketika melakukan pendaftaran paket
- Fix: Duplicate entry Antrian ruangan pada saat pendaftaran ke igd dan irna
- Fix: Perbaikan deskripsi yang tampil pada grid penilaian nyeri

## 2.4.14-23050301

- Update: Penambahan variabel jenis ruang perawatan dan jenis perawatan pada perencanaan rawat inap
- Update: monitoring discharge planning
- Update: Penambahan tombol cetakan asuhan keperawatan
- Fix: Penambahan filter norm pada pemeriksaan penunjang
- Update: Penambahan Informasi tanggal pada histori penilaian nyeri

## 2.4.14-23050200

- Fix: Perbaikan informasi kontak di CPPT
- Update: Asuhan keperawat dapat mengimput diagnosa, tujuan, intervensi free text
- Update: Perubahan monitoring dischard planning
- Add: Form penilaian resiko jatuh  Get Up and Go
- Update: penambahan variabel Form edukasi pasien dan keluarga package rekammedis
- Update: Perubahan Risiko jatuh -> Edmonso Psychiatric Fall Risk Assesment bisa di input lebih dari satu kali
- Update: Penilaian nyeri dapat melakukan input lebih dari satu kali
- Fix: Perbaikan trigger Verifikasi CPPT
- Update: Perubahan Risiko jatuh -> Edmonso Psychiatric Fall Risk Assesment bisa di input lebih dari satu kali
- Update: Perubahan Risiko jatuh -> Skala Humty Dumpty bisa di input lebih dari satu kali
- Update: Perubahan deskripsi TBAK / SBAR sesuai pengisian instruksi

## 2.4.14-23050100

- Fix: Perbaikan verifikasi CPPT
- Fix: Perbiakan deskripsi yang tampil pada catatan medis / riwayat kondisi sosial dan pisikologi
- Update: Penyesuaian form untuk cetak EKG
- Fix: Asuhan keperawatan tetap dapat melakukan input walaupun telah final rekam medis
- Update: Penambahan status TBAK/SBAR di cppt
- Fix: Duplicate entry Antrian ruangan pada saat pendaftaran ke igd
- Fix: Tindakan tidak masuk di layanan tindakan pada saat pendaftaran langsung ke penunjang
- Add: Barthel Index module Rekam Medis
- Add: Asuhan Keperawatan module Rekam Medis
- Fix: Tidak dapat mengimput hasil radiologi jika user di berikan akses skrining awal gizi

## 2.4.14-23042700

- Update: Nomor Antrian ruangan menggunakan nomor antrian online
- Add: Monitoring Discharge Planning
- Add: Form EKG
- Add: Cetak Profil Ringkas Medik Rawat Jalan
- Update: Penambahan validasi dan hitung ulang skor untuk permasalahan gizi
- Add: Penambahan verifikasi CPPT
- Update: Pengembangan kondisi sosial dan psikologi
- Fix: Menu home di web browser lain tidak tampil
- Fix: Data null validasi nomor regiter SITB
- Add: Penambahan upload file dokumen pendukung di grouper

## 2.4.13-23041800

- Update: Report Service
- Add: Form Faring
- Update: Penambahan variabel resume medis pemeriksaan fisik anatomi (mata, dada, leher, perut) 
- Update: Perubahan engine tabel referensi
- Update: Form tanda vital
- Update: Capture dan Upload format gambar file pendukung klaim
- Fix: Perhitungan jumlah akomodasi aturan 2
- Add: Form Dischage Planning
- Updated: Perbaikan dan Pengembangan from order resep racikan
- Updated: reupdate layanan bon sisa
- Fix: Perbaikan bugs order resep by history
- Add: Form Raven Test
- Add: Form EMG
- Update: Procedure cetak rincian pasien
- Fix: Grouping untuk pasien pulang diambil yang tidak aktif
- Update: Info tagihan
- Add: Laporan kinerja dokter dan perawat
- Add: Form EEG
- Fix: Duplikat pembayaran tagihan
- Update: Procedure dan cetak rincian pasien
- Update: Ubah judul form terima lab, rad dan resep
- Add: Response Header in apache for security
- Add: Menambahkan pilih semua tindakan di menu input hasil lab
- Fix: Duplicate mapping hasil di lis
- Add: Menambahkan filter group pemeriksaan di menu monitoring
- Update: Perubahan ui home untuk performa
- Add: Form riwayat faktor resiko
- Add: Form riwayat penyakit keluarga
- Add: Form anamesis peroleh
- Fix: Menghilangkan pengurangan deposit di fungsi getTotalTagihanPembayaran
- Update: Cetak Resep di berkas klaim
- Add: Form anamnesis riwayat lainya
- Update: Penyesuaian aturan pakai history dan riwayat resep
- Add: Pengaturan waktu untuk monitoring nilai kritis
- Update: Patch menu module rekam medis
- Fix: Menampilkan photo pegawai jika NIP kosong
- Add: Pencarian nama pelayanan atau pemeriksaan di rincian tagihan
- Update: Oracle JDK 8 migrasi ke Java 11 Open JDK. lihat script migrasi
- Fix: Berkas klaim yang tampil adalah pendaftaran yang telah di batalkan
- Update: Berkas Klaim lihat hasil pa
- Update: Trigger encounter before insert dan funtion getPractisioner
- Add: Form Evaluasi SST (BMP)
- Add: Cetak Billing di Berkas Klaim
- Add: Property config untuk validasi pasien batal final kunjungan
- Update: pembuatan sceduler auto batal order resep yang expired berdasarkan properti config
- Update: Perbaikan BUG validasi Stok Saat Order Resep
- Update: perbaikan trigger final layanan farmasi
- Update: Penambahan validasi Stok Saat Input Penjualan Langsung
- Fix: Tagihan terpisah untuk farmasi dan abaikan validasi kunjungan belum final dan order belum di terima jika tagihan terpisah
- Update: Procedure procedure to SATUSEHAT
- Update: trigger medication to SATUSEHAT
- Update: Procedure cetak rincian dan store nilai kritis lab
- Update: Cetak Setoran Kasir Non Tunai
- Update: Event runExecuteTempatTidur
- Fix: Selisih tagihan pasien bpjs
- Fix: Error Final Tagihan

## 2.4.12-23031300

- Update: Sign Cetak Resep Dokter
- Update: Update trigger dan procedure untuk SATUSEHAT
- Add: Menambahakan privacy untuk hasil yang hanya bisa diliat oleh petugas yang memiliki akses ruangan laboratorium
- Update: Pemilihan open close kasir lebih dari satu transaksi untuk laporan penerimaan kasir
- Update: No urut atau index menu rekam medis
- Add: Menambahkan tombol hapus di pemeriksaan tanda vital
- Fix: Paging CPPT
- Add: Daftarkan kunjungan berdasarkan antrian di informasi antrian dan tombol panggil di kunjungan
- Update: Filter pencarian kode icd10 dan icd9 di form versi 5 tidak menampilkan kode icd10 dan icd9 versi 6
- Update: Menenampilkan diagnosa utama dan petugas input di daftar pendaftaran
- Update: Menambahkan keterangan di laporan
- Fix: Auto scroll up atau down di tindakan medis
- Update: Penyesuaian pengkajian awal rawat inap dan IGD
- Update: Bridging E-klaim
- Fix: Validasi pengimputan mutasi
- Fix: Merubah status reservasi menjadi batal jika batal melakukan mutasi
- Update: Perubahan Tanggal Mutasi Pelayanan Resep Berdasarkan Tanggal Final Pelayanan Farmasi
- Update: Event di db informasi
- Update: Pengiriman data tempat tidur di rsonline
- Add: Validasi tidak dapat memutasi pasien dan mempulangkan pasien jika memilki order yang belum diterima
- Update: Tampil data piutang yang aktif
- Add: Penambahan hak akses untuk module akses laporan operasi atau tindakan invasif
- Update: Selisih biaya rawat inap pasien jkn
- Update: Procedure Cetak Setoran Kasir
- Update: trigger encounter IHS
- Fix: Function getPeriode IHS
- Fix: Perbaikan webservice kirim transaksi ke IHS (SATUSEHAT)
- Add: filter laporan inventory
- Update: Pembatalan final tagihan
- Add: Penambahan validasi untuk pembatalan final kunjungan
- Add: Pengaturan Instansi, ganti logo dan background
- Add: Menambahkan check list untuk untuk consent IHS (SATUSEHAT)
- Fix: Perbaikan trigger final layanan farmasi
- Updated: Perbaikan WS Referensi master barang (warning autocomplete barang)
- Fix: Webservice SATUSEHAT hanya bisa mengirim 1 data dalam 1 kali request dan menambahkan limit pengiriman setiap resource
- Add: Menambahkan informasi ruangan dan kontak dpjp di monitoring nilai kritis
- Fix: Mapping penjamin ruangan tidak bisa tersimpan
- Update: mengembalikan pengaturan awal akses kunjungan
- Add: Menambahkan kondisi pada saat request icd dan icd 9 di webservice
- Fix: Perbaikan procedure patien dan Practitioner untuk SATUSEHAT

## 2.4.12-23021500

- Add: Pemanggilan antrian pasien rawat jalan di daftar kunjungan
- Fix: Cetakan SEP naik kelas
- Fix: Perbaikan kop surat
- Fix: Laporan mr4 dan mr5
- Add: Laporan penerimaan IKS
- Add: Pembatalan penerimaan pengunjung, konsul, mutasi, order lab dan rad di kasir pada saat final tagihan
- Add: Surat keterangan meninggal
- Update: Bridging RSOnline
- Update: Melakukan penyimpanan data kunjungan pada saat cek sep jika sep terbit dari aplikasi vclaim
- Update: Ubah filter tanggal monitoring dari tanggal pendaftaran ke tanggal order
- Fix: Perbaikan data yang tampil dimonitoring
- Update: Menambahkan limit load data tindakan di combo layanan
- Update: Ukuran upload gambar sebesar 2 MB di penginputan laporan operasi
- Update: Perubahan app untuk perubahan nama simrs gos dan simklinik gos
- Update: Daftar kunjungan pasien rawat inap khusus dokter dan ppds ditampilkan tanpa di berikan akses ruangan
- Add: Properti config untuk pengaturan nilai normal atau rujukan mengikuti lis atau simrs
- Add: Filter ruangan di daftar pembayaran
- Updated: penambahan validasi form order resep dan penambahan checklish pasien pulang di layanan resep
- Add: Penambahan Jenis Non ventilator atau ventilator form 02
- Update: Perubahan laporan pasien belum klik bayar
- Update: menampilkan CPPT di catatan medis tampa melakukan final rekam medis
- Fix: Perbaikan combo petugas medis dengan menambahkan status pada saat request
- Fix: Pemeriksaan tanda vital dan umum fungsional ditampilkan di catatan medis jika telah final rekam medis
- Add: Menampilkan hasil lab Micro di daftar order
- Updated: Penambahan Harga Barang Di Autocomplete Barang dan Perbaikan Form Penambahan Item Obat Layanan Resep
- Add: Pencarian tindakan di riwayat hasil lab
- Fix: Status Ruang kamar tidur
- Update: Allow Laporan Operasi di semua ruang pelayanan kecuali lab, rad dan farmasi
- Fix: Monitoring nilai kritis tidak tampil
- Update: Pasien kelas 1 naik vip
- Update: Config.json to config.js main app
- Fix: Riwayat alergi error jika sebelumnya menyimpan tanpa memilih jenis alergi
- Add: Penambahan checklist untuk menon aktifkan filter kamar
- Fix: Penyebap kematian tidak dapat di uncheck
- Fix: Perbaikan tanggal tidak tampil di cppt jika profesi selain dokter
- Fix: Pilih kunjungan depo atau farmasi daftar obat tidak berubah di berkas klaim
- Fix: Ambigu NOPEN pada saat terima order

## 2.4.11-23020400

- Add: Hapus rencana kontrol dan spri di menu master bpjs rencana kontrol
- Add: Filter penjamin di daftar kunjungan
- Add: Filter status grouping dan jenis kunjungan di daftar tagihan
- Update: Simpan ubah tujuan tidak dapat dilakukan jika belum di validasi nomor reservasi untuk rawat inap
- Add: Farmasi dan laporan operasi di berkas klaim
- Add: Non Pegawai dan masa aktif pengguna eksternal
- Add: Form surat keterangan sehat
- Update: Penambahan timestamp di report name
- Add: Kenaikan Tarif sesuai persentase
- Add: Informasi Berkas Klaim
- Fix: perbaikan procedure untuk satu sehat terkait tanda vital dan hasil laboratorium
- Add: Menambahkan limit dan filter data dipenjamin ruangan
- Add: Penambahan informasi kontak dan spesialis/sub spesialis di CPPT
- Fix: Tidak menampilkan hasil rad selama belum final hasil
- Fix: Perbaikan ws order resep detil
- Update: Pembayaran non tunai
- Update: Komponen form pada fungsi simpan

## 2.4.11-23012500

- Fix: Menangani jika ada dokter kosong pada saat melakukan pasien kontrol walaupun sudah di mapping
- Add: Aturan Pengisian ICD 10 dan ICD 9
- Update: Buka link cetak pengkajian harian kecuali igd, ri, lab, rad dan farmasi
- Update: Buka link cetak pengkajian awal kecuali lab, rad dan farmasi
- Update: Buka link konsul untuk semua kunjungan
- Update: Penmbahan infomasi grouping di daftar tagihan dan filter berdasarkan tanggal dan penjamin
- Update: Perubahan Cetak laporan kasir dari EDC menjadi Non Tunai
- Update: Group pemilihan ruangan di daftar order resep
- Fix: Dokter tujuan wajib diisi pada saat terima konsul
- Add: Menampilkan status grouping di history pendaftaran
- Add: Surat sehat
- Update: Penambahan height penginputan hasil radiologi
- Update: Jika select count maka gak perlu left join
- Update: Bisa input total pembayaran piutang
- Fix: Validasi mutasi tidak dapat dilakukan dua kali
- Fix: Mewajibkan input tanggal sk di form distribusi paket
- Update: Multi print doc
- Fix: Perubahan akses tombol simpan hasil lab Mikro dari final kunjungan ke final hasil
- Add: Menampilkan paging di daftar order laboratorium dan radiologi
- Add: Memunculkan warning jika terjadi perubahan tanggal di perencanaan jadwal kontrol
- Fix: Masih ada pembulatan sedangkan selisih 0
- Add: Pengambilan data surat kontrol dari bpjs
- Update: Reservasi kamar tidur pada saat mutasi
- Fix: Cetak Rincian Pasien & pembulatan menggunakan round
- Update: Stop request data di dashboard pada saat akses tagihan dan kunjungan
- Fix: Tindakan Medis di resume
- Fix: Penentuan jenis tenaga medis

## 2.4.10-23011800

- Update: Penambahan deskripsi di property config
- Add: Perhitungan pasien bpjs naik vip mana yang lebih kecil antara 75 persen dengan total tagihan vip (akomodasi + visite)
- Fix: Mengakomodir Decimal di module retur dan penambahan validasi
- Fix: Duplicate cetak resume medis
- Fix: Perubahan akses tombol simpan hasil lab PA dari final kunjungan ke final hasil
- Add: Menampilkan hasil pa di ruangan yang mengorder  
- Update: Procedure dan cetak laporan individual eklaim
- Fix: Hanya icd yang di tentukan yang terkirim ke e-klaim
- Update: Group daftar tindakan medis berdasarkan tindakan di resume
- Update: Base core
- Fix: Surat kontrol non JKN
- Update: Daftar CPPT di order by tanggal desc
- Update: Hitung ulang di grouper
- Update: Type column OLEH di table edukasi_pasien_keluarga disamakan dengan type dicolom ID table pengguna
- Update: Patch procedure cetak resume medis optimize query
- Update: Bisa Test Grouping pasien rawat darurat dan rawat inap walaupun belum keluar
- Add: Hak akses ubah data di penjamin pendaftaran walaupun sudah final tagihan
- Update: Tambah informasi pada saat cek sep
- Update: Preview cetakan yang belum ditandatangani walaupun sudah final tandatangan
- Add: Pengkajian Awal dan Harian di tandatangan dan tersimpan di media penyimpanan
- Fix: Anda tidak memiliki akses pembatalan konsul atau mutasi
- Fix: Cetak Kuitansi Pasien dan Cetak Kuitansi Penjualan Langsung
- Update: Penjualan langsung penambahan pembulatan
- Update: Procedure cetak rincian per group
- Fix: Ruangan tidak muncul jika jenis kunjungan berbeda dengan induknya package laporan
- Update: Status kirim ke inacbg untuk diagnosa
- Add: Validate ws rekam medis hanya ppa yang dapat melakukan penginputan atau perubahan
- Add: Pembulatan di pembayaran
- Fix: Gambar anatomi tidak muncul di penandaan gambar
- Update: Validasi penginputan nomor sep dan nomor kartu bpjs
- Review: Perubahan referensi telaah resep
- Update: Tampilan history penilaian resume medis

## 2.4.9-23011300

- Update: Procedure dan laporan Monitoring Kegiatan Pelayanan
- Add: Validasi penginputan nomor reservasi kamar tidur pada saat di input
- Fix: Mutasi terkirim tanpa reservasi kamar tidur
- Add: Lihat data monitoring pelayanan di bpjs maka akan masuk ke kunjungan db bpjs
- Add: Cek Peserta di form pejamin
- Fix: Final kunjungan untuk kunjungan farmasi
- Add: Menampilkan hasil lab pa di menu monitoring
- Update: Cetak SPRI dan Surkon
- Update: Cetak Laporan Operasi
- Add: Penambahan pembatalan piutang
- Fix: Function getTotalPiutangPasien dan getTotalPiutangPerusahaan
- Fix: Upload photo pegawai dan pasien setelah perubahan script sebelumnya
- Fix: Informasi penjamin kadang tidak tampil di dashboard pasien
- Update: Penambahan text info respon dari bpjs jika gagal pada message box
- Update: function getDPJP
- Fix: Id operasi dapat terisi manual
- Add: Lepas validasi jika cara keluar bukan diijinkan pulang
- Update: Procedure dan cetak laporan individual
- Add: Validasi pelayanan bon sisa
- Add: Format cetakan etiket
- Add: Format cetakan bukti pelayanan resep
- Fix: Menampilkan tindakan di resume medis berdasarkan pendaftaran
- Fix: Perbaikan pengimputan hasil rad di resume medis
- Add: Penambahan konsul di menu rekammedis
- Fix: Perbaikan resume medis yang hanya bisa menyimpan satu ruangan hasil lab
- Update: Procedure dan cetak resume medis
- Add: Auto Generate Nomor Kuitansi pembayaran
- Add: Menambahkan hasil penunjang lainya di form resume medis
- Fix: Form resume medis tidak menampilkan order lab dan rad
- Fix: Laporan resume medis
- Add: Menambahkan filter cara bayar untuk laporan penerimaan kasir
- Update: Merapihkan tampilan di pemeriksaan anatomi
- Add: Trigger update file hasil radiologi
- Update: Add size generate id hasil lab
- Add: Penambahan rencana diet gizi di resume medis dan lepas validasi pasien pulang meninggal atau lari
- Fix: Perbaikan Combo Filter Ruangan di Widget Dashboar Terima Resep

## 2.4.9-23011001

- Fix: Pemilihan jenis ppa

## 2.4.9-23010906

- Fix: Nama PPA tidak sesuai dengan yang login
- Fix: Parameter hasil kosong setelah perubahan

## 2.4.9-23010905

- Update: Perubahan Lab, Rad dan Core Component
- Fix: Gagal update data form edukasi emergency
- Add : procedure cetak rincian per group
- Update : Procedure cetak resume
- Fix: Perbaikan bugs frontend dan backend resume medis
- Update: Perubahaan penamaan menu di rekam medis anamnesis umum dan riwayat perjalanan penyakit
- Fix: Error ID ambiguous pada saat update keluhan utama
- Fix: Ambigu kolom ID pada saat simpan anamnesis umum

## 2.4.9-23010901

- Fix: Anastesi dan Bidan tidak bisa mengisi jenis ppa
- Update: Merapihkan tampilan di riwayat anamnesis dan keluhan utama

## 2.4.8-23010900

- Fix: Pendaftaran langsung ke penunjang
- Update: Perubahan cetak pengkajian harian
- Update: Perubahan cetak rad dan pa
- Update: Menampilkan gelar di daftar pegawai
- Fix: Fix: Perubahan Properti config
- Fix: Perubahan procedure untuk batalkan order resep di depo lain jika salah satu depo sudah terima
- Fix: Pengembangan dan perbaikan BUG order dan layanan resep
- Update: Pindah status di daftar pegawai ke form pegawai
- Update: Perubahan cetak sep dan rencana kontrol
- Update: Perubahan warna list sesuai jenis ppa
- Update: Perubahan laporan operasi issue 144
- Fix: Cppt tidak tampil jika non Pegawai
- Fix: Koneksi gagal pada saat edit edukasi emergancy
- Add: Menampilkan form ubah dpjp pada saat terima konsul
- Update: Perubahan final laporan operasi
- Update: Laporan Operasi ditambah validasi yang harus diisi
- Add: Cppt tidak dapat di ubah atau dibatalkan jika bukan PPA tersebut
- Add: Copy isi cppt dari history atau penginputan sebelumnya ke penginputan form baru
- Add: Pembatalan cppt
- Update: Perbaikan tampilan di cppt
- Fix: Tidak dapat memilih dokter di form jawab konsul
- Fix: Form hasil radiologi tidak dpt di ubah karena final di rekam medis
- Update: Procedure cetak resume
- Update: Pambahan Nomor spasiment di laboratorium
- Update: Penambahan buka kurung dan tutup kurung gelar belakang di pegawai
- Add: View hasil di monitoring hasil
- Add: Checkbox untuk menonaktifkan atau mengaktifkan filter di tempat tidur
- Add: Pengguna Request Log
- Update: penyesuaian procedure dan cetak laporan operasi
- Fix: Laporan Operasi tidak bisa diedit pada saat menyimpan pertama kali dan tanggal operasi tidak diinputkan
- Fix: Perbaikan history perencanaan rawat inap yang menampilkan semua pasien
- Fix: Report Service ttd dokumen
- Fix: Judul view form cetak laboratorium pk undefined
- Update: Penyesuaian procedure dan cetak resume
- Update: Akses report protocol https
- Add: Support akses report terpisah dari web api

## 2.4.8-23010401

- Fix: Pilih ruangan depo tujuan tidak bisa
- Fix: Pemilihan reservasi kamar muncul semua
- Fix: Batal final rekam medis atau lab tidak bisa

## 2.4.8-23010400

- Update: Auto complate pemilihan ruangan konsul, mutasi, lab, rad dan farmasi
- Fix: Format norm pada cetak Joblist
- Fix: Cetak barcode pendaftaran
- Fix: Hak akses final penjualan
- Fix: Reset order resep
- Add: Riwayat layanan di rekam medis
- Update: Penambahan kolom id di hasil lab
- Update: Lihat hasil lab tanpa validasi status
- Update: Ubah final radiologi per hasil
- Update: Penyesuaian cetak hasil radiologi dan procedure resume medis
- Add: Hitung total penerimaan kasir
- Fix: View data kunjungan pada saat akses terkunci
- Update: Referensi jenis kunjungan kamar operasi
- Fix: Hak akses final tagihan penjualan
- Update : Alter table barang_ruangan
- Add: Pengaturan buka validasi pendaftaran kunjungan baru di property config
- Update: Resume Medis
- Update: Perubahan nama menu ICD menjadi Diagnosis (ICD) di rekam medis
- Fix: Menampilkan tindakan operasi yang aktif
- Add: Pembuatan akses API pegawai
- Update: Remove pemilihan spesialis di tujuan pendaftaran
- Update: Performance ws core,instansi, pasien dan ppk
- Update: Penyesuaian cetak hasil radiologi dan joblist laboratorium
- Update: Perubahan cetakan resep sesuai aturan pakai
- Fix: Tindakan ter non aktif pada saat dropdown ke tindakan medis yang tidak diperbarui dengan menekan tombol batal
- Update: procedure laporan kunjungan perpasien dan penyesuaian cetak laporan setoran kasir
- Update: ruangan order lab, rad, konsul, mutasi menampilkan ruangan yang aktif
- Update: lis driver dan pasien untuk menampilkan info umur
- Update: Penyesuaian cetak hasil lab, cetak resume medis dan pengkajian awal igd
- Update: Status filter kamar di master ruangan

## 2.4.7-22123114

- Fix: Resume medis
- Add: Menampilkan id pengguna di manajemen pengguna dan update total transaksi kasir penerimaan tunai
- Update: Perubahan cetak etiket resep dan Penjualan
- Fix: Cetak Faktur Penjualan
- Fix: Frekuensi dan rute resep tidak tampil
- Update: Penyesuaian cetak hasil lab, rad dan penambahan qrcode
- Update: Penyesuaian laporan operasi dan penambahan qrcode
- Add: Resume Medis
- Update: Pengembangan penjualan langsung
- Fix: kalkulasi harga obat setelah final kunjungan
- Update: Pengembangan Laporan Operasi
- Fix: Paging tindakan di ruangan
- Add: Penambahan anamnesis batuk pada rekammedis
- Add: Penambahan pembuatan surat keterangan opname pada rekammedis
- Add: Frekuensi aturan resep
- Update: Base Component untuk menangani gagal select di combo
- Update: Default status kunjungan belum dilayanani pada saat menampilkan history kunjungan
- Add: Pembuatan tagihan terpisah untuk pasien umum per ruangan
- Add: Referensi data master
- Update: Menampilkan history tindakan medis yang aktif
- Fix: Notifikasi tidak muncul

## 2.4.7-22122102

- Fix: Tujuan Spesialistik di kontrol tidak muncul
- Fix: Penginputan tanggal di pemakaian o2
- Fix: Pilihan ruangan tidak muncul di barang ruangan
- Fix: Info Detil Rujukan di pendaftaran

## 2.4.7-22122101

- Fix: Order Lab
- Fix: Order Resep

## 2.4.7-22122100

- Add: Validasi order resep dibawah stok yang tersedia
- Add: Bridging Satu Sehat - Resource Service Request, Spesiment, Observation, Diagnostic Report (Laboratorium) tahap 4
- Add: Button Cetak Form Informed Consent
- Add: Template informed consent
- Add: Button Cetak Form General Consent
- Update: Perubahan daftar rujukan bpjs
- Update: Perubahan yang ada di bpjs seperti perubahan di lakalantas
- Add: Template general consent
- Update: Procedure terkait perubahan group lab
- Update: Perubahan tujuan atau dpjp setelah di daftarkan dan diterima
- Update: Group Tindakan Lab is depricated move to Group Pemeriksaan
- Add: Menampilkan cetak barcode pendaftaran di dashboard pasien untuk rawat jalan
- Update: Ubah Pasien di pendaftaran dan kunjungan
- Update: Ganti menjadi console log di koneksi gagal pada saat terlock
- Update: Refactor Pengguna Akses Modul
- Add: Penambahan ingredien pada saat pengirim medication untuk resep non racikan satu sehat
- Add: Filter status di master ruangan
- Add: Validasi stok kosong untuk order resep dan layanan farmasi
- Add: Operator query parameter request in Base Service
- Fix: Validasi jumlah obat pada saat final layanan farmasi
- Update: Status aktif barang ruangan di layanan farmasi
- Add: Info kembalian pembayaran tunai
- Update: risiko jatuh perhitungan umur ambil dari tanggal pendaftaran
- Update: report laporan individual dari skp menjadi sep
- Add: Penambahan history diagnosa dan procedure
- Add: Menambahkan script procedure ke script scheduler IHS
- Fix: Patch kode referensi untuk resource procedure satu sehat
- Fix: Koneksi Gagal auto lock
- Fix: Pembayaran piutang perusahaan
- Update: Request Report for auto print using balancer
- Fix: Penginputan Tarif Farmasi Perkelas
- Fix: Penginputan tanggal pasang dan lepas o2

## 2.4.7-22112402

- Fix: Penerbitan Sep setelah perubahan sebelumnya
- Add: Login ke pengguna lain jika terlock
- Update: Secara default Nama dan Nomor HP pemberi resep sama dengan nama dan nomor hp dokter
- Fix: Order Obat tidak muncul ketika AKTIFKAN_ORDER_RESEP_BY_DEPO_LAYANAN = FALSE

## 2.4.7-22112401 (tester)

- Add: Pengambilan data peserta bpjs untuk pasien baru
- Fix: Double info di dashboard pasien pada saat edit pasien
- Update: Perpindahan surat sakit ke menu penerbitan surat
- Fix: Double rincian tagihan pada saat dibatalkan Pembayaran Tagihan
- Add: Fitur lock app
- Fix: Pendaftaran paket
- Update: Perubahan akses service sisrute di rujukan keluar
- Update: Berikan hak akses utk upload file pendukung ke e-klaim

## 2.4.7-22111100 (tester)

- Update: Remove Referensi pada saat di simpan pada form konsul, mutasi, order lab dan rad
- Add: History kunjungan (encounter) di form pasien satu sehat

## 2.4.7-22110800

- Add: History Layanan Tindakan Medis / Pemeriksaan
- Add: Bridging Satu Sehat - Resource Medication (Peresepan)
- Add: Bridging Satu Sehat - Resource Composition
- Add: Cetak Bon Sisa
- Add: Monitoring Hasil Pemeriksaan Lab dan Rad
- Add: Status kritis di hasil lab dan penambahan status hasil pemeriksaan
- Fix: procedure cetak sep
- Fix: Info Piutang tidak tampil di dashboard Pasien
- Add: Petugas Tindakan Medis otomatis terisi sesuai login dokter atau perawat
- Add: Logo di QR Code
- Updated: plugins kemkes rsonline di pindahkan ke kemkes rsonline
- Add: Support Bridging SIRS Online (RL)
- Fix: Deskripsi riwayat alergi tidak tersimpan di anamnesis
- Add: Penambahan filter Jenis Kunjungan di list kunjungan di dashboard
- Add: Ketika mouse berada di list pengujung, kunjungan dll di dashboard home maka autorefresh nonaktif
- Add: Module php pecl ssh2
- Add: Patch module My Pasien
- Fix: Penambahan Staf di ruangan

## 2.4.7-22102501 (tester)

- Fix: Error document storage
- Update: Core component
- Add: Hasil Pemeriksaan Microbiology Examination
- Add: QR Code Hasil Lab PA dan Mikro
- Add: Hasil Pemeriksaan PCR
- Add: Luas Permukaan Tubuh Anak pada E-Resep sesuai standar variabel RME
- Upload: Informed Consent
- Update: Set default value parameter pada fungsi kirim di sitb
- Add: QR Code Resume Medis
- Add: QR Code tampil ketika dokumen di tandatangan dan tersimpan di media penyimpanan dokumen
- Update: Core, Report Service, Document Service dan QR Code pada surat sakit
- Update: WS pemeriksaan anatomi
- Add: QR-Code pada cetak rencana kontrol
- Update: Lis Service API dan core API
- Update: Penginputan tenaga medis di tindakan dan mapping
- Fix: Pemakaian BHP

## 2.4.6-22101000 (tester)

- Add: Penilaian Risiko Jatuh (Edmonson Psychiatric Fall Risk Assessment)
- Add: Penilaian Risiko Jatuh (Skala Humpty Dumpty)
- Add: Status Alergi dan Status Kehamilan di order radiologi sesuai standar variabel RME
- Add: Informasi Penjamin di daftar tagihan pasien
- Add: Support bridging Satu Sehat Tahap 1
- Change: Validasi nomor hp pemberi resep
- Add: Penilaian Dekubitus
- Change: Penilaian Risiko Jatuh (Skala Morse)
- Change: Validasi Pembayaran Tagihan
- Change: Validate kontak dan kartu identitas pasien
- Add: Penilaian Risiko Jatuh (Skala Morse)
- Fix: Order resep
- Fix: Loading grid component dan menu di form
- Add: Anatomi Pemeriksaan Kuku Kaki di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Jari Kaki di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Tungkai Bawah di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Tungkai Atas di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Persendian Kaki di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Persendian Tangan di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Kuku Tangan di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Jari Tangan di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Lengan Bawah di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Lengan Atas di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Anus di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Genital di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Perut di Rekam Medis sesuai standar variabel RME
- Fix: Layanan Bon Sisa
- Fix: Validasi pelayanan resep
- Add: Anatomi Pemeriksaan Punggung di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Payudara di Rekam Medis sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Dada di Rekam Medis sesuai standar variabel RME
- Add: Variabel No.HP Pemberi Resep di Order Resep
- Add: Filter Kategori Barang atau Obat di order resep
- Add: Validasi Dokter di form Order Resep
- Add: Keterangan dan status pasien puasa di layanan resep
- Fix: Loading di pembayaran piutang pasien, perusahaan dan icd
- Add: Status pada saat pencarian perawat
- Add: Upload dokument general consent
- Update: Layanan Penyimpanan Dokumen
- Change: Penamaan nama package penjamin rs
- Change: Perubahan hak akses tanpa login ulang dan filter status daftar pengguna
- Add: Layanan Penyimpanan Dokumen
- Add: Anatomi Pemeriksaan Tonsil di Rekam Medis sesuai standar variabel RME
- Change: Panjang karakter jenis referensi
- Add: fungsi tentang umur di com

## 2.4.6-22092700 (tester)

- Add: Status Pasien Puasa di Order Lab, Rad sesuai standar variabel RME
- Fix: Lihat Detil pasien
- Add: Keterangan / Catatan pada saat order lab dan rad sesuai standar variabel RME
- Add: MaxLength, MinLength dan RegExpression penginputan NIK, Nomor Kartu BPJS dan SEP
- Add: Jenis Riwayat Alergi sesuai standar variabel RME
- Fix: pengambilan antrian untuk pasien kontrol
- Add: Validasi untuk mandatory penginputan data pasien sesuai standar variabel RME
- Add: Anatomi Pemeriksaan Tenggorokan di Rekam Medis sesuai standar variabel RME
- Change: Update widget dashboard pelayanan resep
- Change: Trigger Pegawai dan Web Service Dokter
- Add: Pengambilan Nomor Antrian untuk pasien kontrol
- Add: Anatomi Pemeriksaan Leher di Rekam Medis
- Add: Informasi paket dan diagnosa di pengunjung, lab, rad, resep, kunjungan dan informasi perujuk di hasil lab dan rad sesuai standar variabel RME
- Add: Property Config untuk setting Dot dan Line Noise di captcha
- Fix: Error pada saat klik menu barang ke menu ruangan
- Change: Perubahan logik tujuan poli pada saat penerbitan sep
- Fix: Input Format Decimal Form Pemakaian BHP pada layanan
- Add: Pemberian hak akses grouping eklaim dan tombol test grouping
- Fix: Kartu Asuransi Pasien tdk tersimpan pada saat Pendaftaran

## 2.4.6-22091900 - (tester)

- Fix: Penerimaan pendaftaran kunjungan ini sudah diterima tetapi di dashboard pengunjung masih ada
- Add: Tingkat Kesadaran di Pemeriksaan Umum Tanda Vital sesuai standar variabel RME
- Add: Hasil Pemeriksaan Mikroskopik
- Change: Perubahan pembayaran terkait paket
- Add: Bon Sisa di layanan farmasi
- Add: Status Ruangan Permintaan
- Add: Hasil Laboratorium Mikro Pemeriksaan Kultur dan Sensivitas
- Change: Hasil Laboratorium Patologi Anatomi
- Fix: Tracing Error getModel pada saat ubah penjamin BPJS
- Change: Refactoring Group Tindakan Lab

## 2.4.5-22090601 - (tester)

- Change: Update fitur layanan farmasi
- Change: Update fitur order resep di layanan
- Add: Pengembangan pendaftaran checkup otomatis konsul dan order
- Add: Menu atau Navigasi daftar penginputan rekam medis
- Change: Membuat pendeteksian link untuk akses menu rekam medis
- Change: Validasi penginputan diagnosa di order lab dan radiologi
- Add: Filter status paramedis di penginputan tenaga medis
- Add: Penambahan filter status di ws tenaga medis
- Add: Pemeriksaan Langit - langit di Rekam Medis sesuai standar variabel RME
- Fix: Cetak Struk Farmasi
- Change: Penambahan Filter Parameter JAMORDER di depo layanan Farmasi
- Add: Pemakaian BHP di layanan
- Fix: Rencana Rawat Inap tidak tampil jika melalui dashboard
- Change: Refactoring Order Resep dan Pelayanan Farmasi
- Fix: Column count does not match value
- Change: Perubahan core, base ws dan pembayaran
- Fix: Procedure di pembayaran perubahan non tunai
- Fix: Upload Photo Pegawai yang tidak memiliki akses Pegawai
- Change: Ubah judul Lis menjadi Anatomi di menu rekam medis

## 2.4.5-22081902 - (tester)

- Add: Pemeriksaan Lidah di Rekam Medis sesuai standar variabel RME
- Add: Pemeriksaan Gigi Geligi di Rekam Medis sesuai standar variabel RME
- Add: Pemeriksaan Bibir di Rekam Medis sesuai standar variabel RME
- Fix: Duplikasi pendaftaran dimana Norm dan Tanggal sama
- Fix: Tanggal Tindakan Medis lebih kecil dari Tanggal Masuk Kunjungan
- Add: Pemeriksaan Rambut di Rekam Medis sesuai standar variabel RME
- Add: Dokter penanggungjawab untuk hasil lab tanpa order di lis
- Add: Informasi Service lis
- Change: Jika melakukan penonaktifkan pegawai maka akan dilakukan penonaktifkan hak akses dan mapping
- Add: Penambahan widget My Pasien di home untuk menampilkan pasien sesuai dengan pengguna, dimana pengguna adalah dokter dpjp
- Change: Menampilkan widget pengunjung berdasarkan pengguna adalah dokter penerima
- Change: Refactoring hasil radiologi
- Change: Core Web Service
- Fix: Procedure terkait cetak resep dan etiket
- Fix: Cetakan resume medis yang tertumpuk
- Add: Pemeriksaan Hidung di Rekam Medis sesuai standar variabel RME
- Add: Pemeriksaan Mata di Rekam Medis sesuai standar variabel RME
- Add: Pemeriksaan Telinga di Rekam Medis sesuai standar variabel RME
- Add: Pemeriksaan Kepala di Rekam Medis sesuai standar variabel RME
- Add: Daftar Non Tunai di tagihan

## 2.4.5-22080500 - (tester)

- Add: Jam Lahir bayi di pendaftaran sesuai standar variabel RME
- Fix: Perbaikan layout di konsul
- Fix: Dokter perujuk di lab, rad dan konsul
- Add: Penambahan hak akses untuk akses Rekam Medis
- Change: Optimize query tujuan, konsul, mutasi, lab, rad dan resep
- Add: Lis support bridge Novanet (Bioconnect) dan vanslab
- Add: Pendaftaran pasien tidak dikenal dan pengantar pasien sesuai standar variabel RME
- Fix: Permasalahan gabung tagihan

## 2.4.4-22072100

- Change: Trigger Pendaftaran untuk support task antrian
- Add: Logo BerAKHLAK
- Change: Perubahan id modul akses upload photo pasien
- Add: Penambahan Hak akses hapus SEP
- Fix: Perbaikan penandaan gambar
- Fix: Rekam Medis belum final melalui view kunjungan di Dashboard Home, yang seharusnya sudah final
- Add: Penambahan Bahasa yang dikuasai pada penginputan data pasien
- Fix: Perbaikan duplikat pada saat gabung tagihan setelah di gabung tagihan sebelumnya
- Add: Penambahan pembuatan surat sakit pada rekammedis
- Security: Validasi Penginputan Data Pasien sesuai petunjuk BSSN
- Add: Penambahan instruksi pada cppt
- Change: otomatis dokter perujuk terpilih sesuai login dokter pada saat order lab dan konsul
- Change: Refactoring order rad pada layanan dan otomatis dokter perujuk terpilih sesuai login dokter
- Add: Proses perhitungan jaminan jasaraharja
- Fix: Perbaikan nama kasir null di cetakan
- Security: Penambahan validasi dan filter pada form pegawai
- Security: Perubahan encrypt password login sesuai petunjuk BSSN
- Security: Support Captcha pada saat login sesuai petunjuk BSSN
- Upgrade: API Tools Version 1.6.0 ke 1.8.0
- Change: Update Core Report dan Cetak Gelang
- Fix: Perbaikan jumlah tempat tidur yang minus di aplicares
- Fix: Perbaikan over limit nomor kontrol
- Fix: Perbaikan pendaftaran bayi ikut ibu tidak tampil
- Security: Form login terkunci jika salah login sebanyak batas jumlah yang ditentukan sesuai petunjuk BSSN
- Fix: Perbaikan gagal pendaftaran pasien baru

## 2.4.3-22061400

- Change: Blank Cetak JobList Lab dan Rad pada saat Pendaftaran Langsung
- Change: Refactoring order lab
- Change: Perubahan laporan terkait penambahan INAGrouper
- Change: Mengaktifkan Akses Rekam Medis untuk semua Kunjungan
- Add: Penambahan form untuk pengimputan rekening RS
- Add: Penambahan ruangan di form jadwal kontrol
- Change: Refactoring pendaftaran konsul
- Fix: Perbaikan validasi tanggal menggunakan jam server bukan jam clien di menu order rad, lab dan tindakan medis
- Change: Refactoring Pembayaran
- Change: Perubahan type data jenis referensi dan referensi
- Change: Perubahan SMF menjadi Spesialis/Sub.Spesialis
- Change: Non aktifkan menyembunyikan centang katarak
- Update: Procedure CPPT mengikuti webservice tenaga medis
- Security: validasi dan filter di frontend maupun backend pada form PPK sesuai petunjuk BSSN
- Security: penambahan custom validasi dan filter data pada core ws
- Add: Property Config untuk mengaktifkan fitur E-Klaim V.6 (INA GROUPER)
- Fix: Perbaikan auto-search combo ruangan, dokter dan smf sehingga bisa dicari walaupung bukan karakter awal
- Update: Enabled fitur E-Klaim V.6
- Security: Validasi akses ws pasien dan pegawai sesuai petunjuk BSSN
- Security: Validasi akses ws pengguna sesuai petunjuk BSSN
- Add: start dan limit pada ws penjamin rs driver
- Add: Paging di dashboard pengunjung, lab, rad, resep, konsul dan mutasi
- Add: Penambahan Cetak Surat Kontrol dan SPRI untuk pasien non bpjs
- Add: Limit 500 untuk menampilkan data ruangan konsul, mutasi, farmasi, laboratorium dan radiologi
- Update: WS Tenaga Medis
- Update: core api dbservice ws resource
- Add: Parameter covid 19 no sep pada bridging e-klaim

## 2.4.2-22031100

- Fix: Perbaikan appove pengajuan sep
- Add: Filter berdasarkan status pada ruangan tree
- Add: Allow web browser vendor apple
- Fix: Perbaikan pencarian list barang dan barang ruangan
- Add: Akses Dokumentasi simrsgosv2
- Add: Pencarian pasien menggunakan Nomor Kartu BPJS
- Fix: Tombol cetak rencana kontrol dan spri tidak tampil untuk penjamin umum dan selain bpjs
- Add: Penambahan komponen speech recognition

## 2.4.1-22011100

- Perbaikan cetak sep
- Perbaikan waktu kontrol, rencana rawat inap dan penambahan limit referensi, penjamin-rs
- Perbaikan error reporting
- Kelas Rawat Naik tidak terkirim ke vclaim
- Perbaikan pembuatan sep dan update untuk pasien thalasemi, hemofili, hd dll
- Perbaikan ubah penjamin umum ke bpjs sep manual
- Perbaikan update rencana kontrol dan spri
- Perbaikan view data sep internal
- Pembuatan Peralatan Penandaan pada Gambar Anatomi di Rekam Medis

## 2.4.0-21122400

- Support Bridging VClaim 2.0
- Perubahan attribute depricated dari isStretchWithOverflow="true" menjadi  textAdjust="StretchHeight" pada report
- Support Bridging RSOnline Versi 2-211221
- Perbaikan ubah penjamin subsidi masih tampil di tagihan
- Add headers in bridge log
- Update report service penambahan fitur penaamaan nama file report
- Update core ws dan report service

## 2.3.10-21100400

- Perbaikan perintah patch db
- Otomatis terpilih penginputan dpjp di pasien pulang
- Hilangkan tombol batalkan di mutasi pada saat pasien pulang
- Perbaikan double penyimpanan pasien pulang
- Penambahan fungsi onBeforeSave pada saat simpan di form core component
- Update core component penambahan show elapsed time
- Update ws core dan aplikasi
- Tidak dapat menampilkan ruangan tujuan pasien di pendaftaran dengan jenis kunjungan (bukan kunjungan / pelayanan)
- Penambahan Saturasi O2 pada pencatatan Rekam Medis di Pemeriksaan bagian Umum Tanda Vital
- Pembuatan form monitoring nilai kritis lab
- Penambahan ws images untuk akses background app
- Perbaikan ubah dpjp
- Perbaikan Laporan Pasien Keluar dan Meninggal (Pasien Double)
- Update TTS
- Upgrade api-tools dari versi 1.5 ke versi 1.6
- Perbaikan pengiriman tindakan lab ke lis duplikat jika status order lis diaktifkan lebih dari 1
- Support Integrasi SITB
- Penambahan field antrian di tempat tidur rs online
- Bridging E-Klaim Versi 5.4.11

## 2.3.10-21070100

- Perbaikan procedure tempat tidur yang di pesan tetapi belum digunakan dalam 2jam
- Dashboard home untuk kunjungan tidak dapat melakukan mutasi error isModel

## 2.3.10-21063000

- Penggantian atau Ubah DPJP di Kunjungan
- Responsive layout welcome dan login
- Filter data pegawai berdasarkan status
- Perbaikan gabung tagihan hanya untuk kartu
- Perbaikan hitung ulang untuk subsidi tagihan
- Informasi perbarui aplikasi
- Perbaikan error pada saat update sep di pendaftaran
- Penerima mutasi dan order masih menggunakan user 1 di kunjungan
- Perubahan deskripsi obat menjadi barang pada form penginputan barang
- Restruktur table mrconsol untuk performa db
- Penentuan nilai kritis hasil lab
- Penambahan timeout hitungulang tagihan pasien di pembayaran
- Hilangkan tombol pencetakan di tagihan pasien jika hak akses pembayaran pencetakan tidak diberikan
- Penginputan master nilai kritis
- bersihkan textbox setelah penambahan dokter ruangan
- Perbaikan pendaftaran langsung lab, rad untuk tindakan pemeriksaan yang tidak masuk ke dalam layanan
- Pelunasan piutang
- Perbaikan slow query di informasi bed monitor
- Update core component
- Tambah penjamin tagihan pasien
- Penggolongan Barang dan status klaim terpisah pada barang
- Monitoring tagihan belum final
- Otomatis terpilih dpjp sebelumnya pada saat dimutasi
- Menampilkan dokter yang aktif pada saat memasukkan dokter di ruangan
- Perbaikan invalid datetime di procedure pembayaran
- Otomatis terinput nomor reservasi di pendaftaran kunjungan jika telah direservasikan oleh admission sesuai antrian tempat tidur
- Penginputan dpjp di mutasi dan beberapa perbaikan core component dan module
- Update nomor reservasi antrian tempat tidur
- Gunakan data order resep sebelumnya
- Menampilkan Jenis Peserta di info pendaftaran

## 2.3.9-21050301

- Perbaikan pada saat input resep aturan pakai
- Filter rencana ruangan berdasarkan level 5 pada pendaftaran antrian tempat tidur
- Pasien meninggal tidak dapat melakukan pendaftaran kunjungan
- Pemberian status cito pada saat order resep
- Reservasi tempat tidur sesuai antrian
- Pembatalan antrian tempat tidur
- Mengatur Prioritas Antrian Tempat Tidur
- Pencarian dan Pembatalan Tagihan Penjualan Langsung
- Pemberian status cito pada saat order lab
- Pemberian status cito pada saat order rad
- Perbaikan trigger lis
- Penambahan mapping subspesialistik di pendaftaran dan master
- Perbaikan form pengembalian barang rekanan dan menambahkan cetakan untuk pengembalian barang
- Update reservasi antrian kemkes

## 2.3.9-21041600

- Perbaikan pencarian diagnosa masuk penambahan trim pada nama diagnosa dan menon aktifkan tombol ambil surat rujukan di pendaftaran
- Tagihan sama dengan jaminan untuk penjamin lainnya
- Perubahan pola pencarian pasien
- Penambahan script scheduler clear buff cache linux
- Grouping pasien rawat jalan jika rujukan maka cara pulang dirujuk
- Margin obat dapat menginput bilangan desimal
- Pendaftaran Antrian Tempat Tidur
- Menampilkan dpjp di daftar pengunjung pendaftaran dan detil kunjungan
- #71 - Ikut ibu pasien bayi mutasi tidak tampil di jika menggunakan dashboard home kunjungan
- Perbaikan tulisan bertumpuk pada saat memilih nama barang di menu Laporan Inventory
- Update app main
- Update core module
- Filter tempat tidur berdasarkan kelas
- Mapping dpjp antara penjamin dan rs
- Menampilkan 50rb di master tindakan dan tindakan medis 100rb di layanan
- Upload dan Capture Camera Photo Pegawai
- Informasi Display Tempat Tidur

## 2.3.7-21030800

- Menampilkan Penjamin, Nomor Kartu, dan No. Surat Eligibilitas Peserta (SEP) di history pendaftaran
- Menampilkan list petugas medis jika sudah final kunjungan
- Pemberian status cito dan resiko jatuh pada saat pendaftaran kunjungan pasien
- Perbaikan di form grouping episode tidak dapat menampilkan referensi data
- #59 - Informasi wilayah di detil pasien dan kartu identitas
- Penambahan fitur shortcut key di pendaftaran kunjungan baru
- Penambahan fitur shortcut key di pendaftaran pasien
- Perbaikan retrieve data mapping ruangan kamar simrs rsonline
- Perbaikan reservasi kamar di menu mutasi
- Penambahan fitur lihat order resep sebelum diterima
- Penambahan fitur lihat order rad sebelum diterima
- Penambahan fitur lihat order lab sebelum diterima
- Penambahan fitur penginputan no seri barang di ruangan
- Item nama obat hilang setelah di klik pada layanan farmasi
- Penambahan ceklist tindakan di pendaftaran dan otomatis terima jika terdapat tindakan yang di ceklist di form pendaftaran
- Penambahan menu master secara custom
- Support open window in nav menu app SIMpel
- #60 - Penambahan fitur untuk tempat tidur yang terisi dapat menampilkan detil kunjungan pasien
- #62 - Perbaikan Filter tidak berfungsi ketika memasukkan kode reservasi (booking) yg salah
- Update event second for depricated function FOUND_ROWS MySQL 8
- Remove default user mutasi
- Update core ws
- Penambahan column dan perbaikan webservice penerimaan barang
- Penyesuaian form penerimaan rekanan
- Perubahan tipe data property config

## 2.3.7-21012802

- Perubahan procedure executeBedMonitorKemkes
- Perubahan pengiriman data tempat tidur dari siranap ke rsonline
- Penambahan fitur Rekap Pasien Keluar di laporan covid-19 versi 2
- Penambahan fitur Rekap Pasien Dirawat Tanpa Komorbid di laporan covid-19 versi 2
- Penambahan fitur Rekap Pasien Dirawat dengan Komorbid di laporan covid-19 versi 2
- Penambahan fitur Rekap Pasien Masuk di laporan covid-19 versi 2
- #55 Nomor kontak keluarga pasien tidak muncul pada form pasien
- Perbaikan web service pengaturan property config
- Perbaikan web service pencarian tindakan
- Update core component

## 2.3.6-20122900

- #55 - Perbaikan nomor pengimputan nomor kontak keluarga pasien
- Pengambilan data klaim bpjs
- Perbaikan bug untuk reservasi
- Perubahan encrypt password sisrute
- Perbaikan form pegawai
- Update module core service
- Perbaikan error report laporan rl4a dan 4b
- Update inacbg special drug

## 2.3.6-20112300

- #57 - Mengubah form rekam medis yang menggunakan tombol untuk menyimpan menjadi otomatis simpan di menu rekam medis
- #54 - Bug pada Detil Kunjungan Farmasi Membuat Loading Lama
- #50 - Penambahan cetakan CPPT
- update procedure laporan kegiatan rawat inap per kelas
- #53 Validasi Pembatalan & Pembatalan Final Kunjungan
- #52 - Pengimputan diagnosa icd dapat di lakukan walaupun pasien belum pernah melakukan pendaftaran sebelumnya
- #49 - Penambahan cetak pengkajian harian
- Perbaikan riwayat status pediatric
- #48 - Menambahkan cetakan pengkajian awal
- #47 - Update form status pediatric
- #46 - Perbiakan layanan farmasi pada field hamil, gangguan ginjal dan menyusui menampilkan angka bukan deskripsi status
- #45 - Perbaikan pengimputan O2
- #44 - Grid pegawai tidak otomatis reload pada saat setelah simpan atau update data pegawai
- Menampilkan deskripsi jenis pembayaran di menu piutang -> perorangan
- #40 - Perbaikan update tempat tidur aplicare walaupun tidak ada perubahan data

## 2.3.5-20092200

- #39 - Pasien yang telah rujuk tidak dapat Update Pasien Pulang di VClaim
- #36 - Error pada Edit Pasien Meninggal
- #38 - Add distribusi sewa alat di group tindakan untuk grouping E-klaim
- #33 - Add Font Awesome Version 5.14.0
- #31 - Penginputan e-resep berat badan dan tinggi badan tidak tersimpan
- #30 - Error pada saat grouping warning a non-numeric value encountered
- perbaikan tampilan cetak penerimaan rekanan

## 2.3.5-20082100

- Perbaikan Grouping dimana procedure tidak terkirim setelah penambahan modul covid (harus memilih tab procedure baru akan terkirim)
- Perbaikan menampilkan pilihan suku pada saat edit pasien yg tidak berubah
- Pencarian merek di barang dapat di ketik
- Update fitur bridging E-Klaim penambahan field covid
- Perbaikan penginputan harga barang yang tidak bisa menginput decimal
- Penambahan fitur kirim email di Base Service
- Perbaikan penamaan label di rekammedis penilaian nyeri
- Penambahan fitur capture photo pasien lewat webcam

## 2.3.4-20072700

- Perbaikan Form input hasil lab PA tanggal imuno tidak tersimpan
- Perbaikan cetak hasil lab PA dianosis, tanggal, dokter perujuk dan unit pengantar tidak tampil

## 2.3.4-20071300

- Perbaikan pada saat grouping e-klaim untuk ruang IGD masih dibaca cara pulang atas persetujuan dokter
- Perbaikan package inventory pada saat refresh / reload
- Perbaikan user yang tidak masuk ke home

## 2.3.3-20063000

- Perubahan hak akses transaksi penjualan untuk pembayaran
- Penambahan edit status pasien
- Perbaikan pada saat edit pasien covid untuk menampilkan status di combo
- Perubahan logik menu aplikasi menjadi dinamis
- Perbaikan penginputan pasien covid pada saat pemilihan kabupaten tidak tampil
- Perbaikan pengajuan bpjs di pendaftaran penjamin
- Perbaikan penginputan jenis operasi
- Pilihan jenis operasi tidak tampil pada saat penginputan hasil operasi

## 2.3.3-20060303

- Penambahan informasi nomor surat kontrol di list jadwal kontrol rekammedis

## 2.3.3-20060302

- Penambahan list jadwal kontrol di dashboard pasien & remove kontak jadwal kontrol rekammedis
- Penambahan fiture cetak surat kontrol di rekammedis
- Perbaikan procedure CetakBarcodeRM
- Menampilkan history cppt yang sudah final di rekam medis
- Penambahan informasi ruangan di history cppt rekammedis
- Penambahan fiture perencanaan jadwal kontrol di rekammedis
- Penambahan fiture perencanaan rencana terapi di rekammedis
- Allow Download File Report walaupun di setting CETAK_SEMUA_OUTPUT_KE_FORMAT_PDF = TRUE
- Perbaikan penyimpanan jasa tusla gagal (unknown column ID) & pesan Gagal
- Perbaikan penambahan group tindakan laboratorium

## 2.3.2-200515

- Perbaikan script scheduler briging lis
- Pengembangan script patch untuk update aplikasi tanpa harus update secara berurutan mulai versi 2.3.2
- Penambahan fitur pembatalan otomatis tempat tidur yang terpesan lewat pendaftaran dan mutasi tetapi tidak digunakan
- Penambahan informasi di menu tentang aplikasi (owner, author & contributor)
- Penambahan logo SIMRS GOS 2
- Penambahan fitur bridging grouping jaminan covid-19 dengan e-klaim
- Perbaikan perubahan header di rsonline
- Perbaikan table catatan hasil lab masih 250 karakter diubah menjadi 10rb
- Perbaikan informasi dashboard covid jika ada pasien dihapus karena salah pasien
- Perbaikan error duplicate pk nomr pasien covid pada saat ambil data pasien RS Online lebih dari sekali
- Perbaikan dan perubahan tampilan master referensi
- Penambahan field writeLog pada file local.php (lihat local.php.dist) jika ingin mencatat aktivitas bridging

## 2.3.1-200429

- Perbaikan error pada saat penambahan jasa tuslah
- Penambahan script scheduler untuk bridging
- Perbaikan input resep, tidak bisa tampil obat jika ruangan tujuan belum dipilih
- Penambahan panjang karakter penginputan catatan hasil lab sebanyak 10rb huruf
- Perbaikan error pencetakan di module penjualan & inventory (undefined di name report)
- Penambahan limit sebelumnya 25row menjadi 10000row menampilkan data inputan tindakan medis
- Penambahan Fitur Laporan Covid - 19 Bridging RSOnline
- Perbaikan penyimpanan di mapping siranap
- Perbaikan mapping Dokter, Perawat, SMF, Staff, Tindakan ke ruangan supaya tidak ada data double
- Perbaikan Cetak Kwitansi (bukan output) di pembayaran
- Perbaikan error cetak MR1 Rawat Inap (tambahkan kode rs direport)
- Perbaikan tidak ada data penjamin dan wilayah di form kecelakaan pada saat pendaftaran
- Perbaikan ubah penjamin ukuran form kecil sehingga nomor kartu tidak kelihatan
- Perbaikan error terima mutasi pasien bayi ikut ibu

## 2.3.0-200321

- Refactoring Version Format aplikasi mayor.minor.patch-buildate(yymmdd)
- Perbaikan error penginputan pemeriksaan tanda vital

## 2.2-200320

- Penambahan Penilaian Diagnosis di Module Rekam Medis
- Penambahan Penilaian Status Pediatric di Module Rekam Medis
- Penambahan Penilaian Nyeri di Module Rekam Medis
- Penambahan Penilaian Fisik di Module Rekam Medis
- Penambahan Pemeriksaan Umum Fungsional di Module Rekam Medis
- Penambahan logo Germas
- Penambahan Pemeriksaan Umum Nutrisi di Module Rekam Medis
- Perbaikan pada saat perubahan nama, nip dan status pegawai data tidak berubah di pengguna
- Perbaikan pencarian nama pasien di kunjungan untuk bayi mengikuti ibu
- Penghapusan hak akses perencanaan di module inventory (blm di support)
- Penambahan Permasalahan Gizi Pasien di Module Rekam Medis
- Penambahan kolom kategori, merk dan penyedia di daftar barang dan stok opname module inventory
- Perbaikan Cetak Rincian Tagihan Format 4
- Penambahan Fitur Edukasi Pasien & Keluarga Module Rekam Medis
- Penambahan Fitur Kondisi Sosial di anamnesis Module Rekam Medis
- Perbaikan Error Cetak MR.1 Rawat Jalan
- Penambahan fitur tentang aplikasi
- Perbaikan perubahan nama kementrian menjadi kementerian
- Menampilkan jumlah dan petunjuk racikan di layanan farmasi
- Penambahan field jenis peserta di penjamin module pendaftaran
- Penambahan Fitur Status Fungsional di anamnesis Module Rekam Medis
- Perubahan warna header di home
- Penambahan fitur informasi teks
- Perbaikan pengiriman aplicares ubah penulisan field KIRIM menjadi kirim
- Perubahan tampilan print preview di layanan farmasi
- Perubahan Semua Report Menggunakan Kode RS
- Perbaikan penyimpanan anamnesis riwayat alergi
- Penambahan Fitur Keluhan Utama di anamnesis Module Rekam Medis
- Menambahkan nofitikasi dering di dashbord pengunjung
- Penambahan hak akses untuk menampilkan identitas pasien di informasi tempat tidur
- Penambahan hak akses untuk menampilkan identitas pasien di informasi pengunjung
- Perbaikan error pada saat edit tarif tindakan baru
- Penambahan Fitur Riwayat Pemberian Obat di anamnesis Module Rekam Medis
- Perbaikan List Kunjungan Pasien di dashboard home

## 2.1-200228

- Perbaikan Error Cetak Laporan Tarif Tindakan Per Pasien
- Perubahan penamaan PPN di penerimaan rekanan
- Perbaikan layanan e-resep
- Penambahan Fitur Batal Final Hasil Lab, Radiologi dan Rekam Medis
- #28 #27 Penambahan Fitur Final Hasil Lab, Radiologi dan Rekam Medis
- Penambahan Laporan Klaim & Pending BPJS di menu laporan jasa pelayanan
- Penambahan Laporan Tarif Tindakan per Pasien di kunjungan
- Menampilkan fitur riwayat lab & rad di layanan lab & rad
- Penambahan fitur cetak job list radiologi
- Penambahan fitur cetak job list lab
- Perbaikan Laporan Jasa Anastesi Per Pasien Error
- Pendaftaran Rawat Jalan bisa melakukan pencetakan barcode pendaftaran
- Penambahan Fitur Kunjungan Pasien di home
- Perbaikan Laporan Rekap per ICD 10 Kecamatan tidak tampil
- Penambahan hak akses hanya melihat tarif administrasi, ruang rawat, O2 dan Farmasi per kelas
- Penambahan hak akses hanya melihat barang dan harga
- Penambahan hak akses hanya melihat tindakan dan tarif
- Perbaikan Cetak Gelang pada saat pendaftaran
- Perbaikan Cetak MR 1a Rawat Inap Error pada saat pendaftaran
- Penambahan Fitur Upload Photo Pasien
- Update db service add downloadDocument di RPCResource
- Perbaikan pengiriman headers siranap
- Perbaikan pengiriman headers aplicares
- Refactor order farmasi (tdk boleh input minus jml) dan support decimal
- penambahan fungsi diskon db new pembayaran

## 2.1-200207

- Penambahan Fitur Pengaturan Properti Config
- Update dbservice untuk validasi hak akses module
- Update procedure laporan rl-38 & 39
- Rujukan keluar kirim ke sisrute hanya untuk IGD
- Perbaikan procedure execute bed monitor kemkes
- Perbaikan layanan di kunjungan (Refactoring)
- Perbaikan pencarian penerimaan barang rekanan
- Perbaikan form mutasi pasien
- #28 Ganti Tarif Harga Barang / Obat Tidak berhasil
- #25 Hilangkan kolom inacbg di penginputan icd di kunjungan
- #23 List flow di o2 tampil semua walaupun ada yg sdh di nonaktifkan
- #24 Tindakan yang dibatalkan muncul di list tindakan hasil lab / rad
- #22 Validasi input tanggal dan jam tindakan tdk boleh lebih kecil dari tgl masuk
- #21 Otomatis update tempat tidur menjadi kosong jika status terisi dan norm 0000000
- Perbaikan pada saat penambahan ppk statusnya non aktif
- #20 Penambahan Fitur Mapping Group Referensi Kelas
- #19 Buat Script Migrasi php 7.2 ke php 7.4
- #18 Migration Zend Framework to Laminas
- #16 Penambahan Fiture Monitoring Dashboard Kemkes
- Refactoring service run di api kemkes
- Update DB Service
- Perbaikan invalid header (401) aplicares
- Perbaikan request ketersediaan tempat tidur di aplicares
- Perbaikan query rincian, kwitansi, etiket dan faktur penjualan
- Perbaikan perbedaan harga di farmasi
- Update nama class siranap tempat tidur
- #17 Export Report HTML Error
- Update db new pembayaran routines
- Update db new laporan routines
- #15 Penambahan Fiture Monitoring Siranap & Mapping
- Update module DBService
- #12 Pendaftaran kunjungan pasien umum ada validasi pengisian format tanggal rujukan sehingga harus di isi, set default tanggal
- #14 Upgrade Jasperreport Library dari 6.5.1 ke 6.11.0
- Perbaikan laporan pendapatan & rincian tagihan format 4

## 2.1-200109

- Perbaikan proses kirim aplicares
- #11 Add Fiture Bridging Aplicares
- Update module DBService
- Update Dukcapil Service
- #10 Menambahkan jumlah digit column login sebanyak maksimal 50 karakter
- #9 Cetak Individual Inacbg untuk kepemilikan tidak tampil jika swasta
- #7 Perbaikan penginputan waktu untuk mengatasi masalah waktu pada saat order Rad & Lab
- #8 Add Fiture Batal Gabung Tagihan
- Perbaikan cetakan penerimaan barang internal
- Perbaikan cetakan permintaan barang
- #3 Belum ada tanggal penerimaan di penerimaan barang rekanan
- #2 Double pada saat mutasi pasien (tombol simpan di klik lebih dari sekali)
- #1 Penambahan fitur penentuan kenakan tarif rawat inap diawal masuk
- MySQL 8 tdk support encrypt fungsi PASSWORD
- Penambahan cetak tracert rawat inap jika di set allow
- penambahan trigger db informasi
- penambahan scroll pada menu utama
- dapat mengedit petugas tindakan medis selama belum difinalkan
- update procedure informasi tempat tidur
- form resevasi pada saat tekan tombol batalkan tidak tertutup
- Validasi reservasi pada hari yang sama
- Penambahan CPPT
- penjamin & propinsi di form pendaftaran/kecelakaan akan terload pada saat di checklist lakalantas
- update laporan pendapatan
- insert data di tabel rl4_icd
- Penambahan index table antrian ruangan
- update referensi rl 2
- perubahan akses report di webservice hanya menggunakan file jrxml
  - remove file extension jasper
  - add lib jar commons-beanutils-1.9.3.jar di folder javabridge/jaspereports
- laporan waktu tunggu registrasi
- laporan respon time lab dan rad
- perbaikan prosedur rl 2
- perbaikan prosedur informasi ruang kamar tidur
- perbaikan prosedur proses perhitungan bpjs

## 2.0-190929

- Perubahan menu reservasi menjadi tempat tidur,
    Pemberian hak akses untuk melakukan reservasi,
    Penambahan tombol fullscreen & Otomatis ganti ruangan untuk keperluan bed monitor
- non aktifkan tombol panggil jika jenis ruangan / kunjungan in (0,2,3)
- perubahan reservasi pada saat pemilihan ruangan &
 penambahan tombol terpesan pada saat reservasi di pendaftaran maupun mutasi
- pencatatan aktifitas bridging
- perbaikan restoretagihan & proses perhitungan bpjs
- penambahan fitur cetak gelang di pendaftaran
- perbaikan error pada saat simpan(update) petugas tindakan medis error ruangan.ID
- Penambahan padding di norm pada saat grouping
- update rl 52
- penambahan hak akses cetak kuitansi tagihan
- support run printdoc automatic print (exclude aplikasi printdoc)
- update fungsi dan procedure rincian tagihan
- Pesan untuk penggunaan web browser selain chrome
- update procedure bukti registrasi dan konsul
- update procedure lap pengunjung dan kunjungan
- update cetak penerimaan barang
- perbaikan grouping inacbg
  - icu_indikator, icu_los, ventilator_hour
  - upgrade_class_ind, upgrade_class_class, upgrade_class_los
- Pesan untuk penggunaan web browser selain chrome
- update procedure rl 4
- set default akses ws rpc menggunakan ip address
- Penambahan Fitur Antrian Ruangan
  - Tambahkan module TTS di config/modules.config.php
  - tambahkan konfigurasi di local.php lihat local.php.new
- Update cetak SEP
- perbaikan proses perhitungan BPJS
- pemberian hak akses di pembayaran
- perbaikan penginputan nik di form ktp, jangan di set untuk jenis kelamin & tgl. lahir jika pasien sudah memiliki norm
- perbaikan script db informasi
- perbaikan module pusdatin
- perbaikan final tagihan jika hanya cetak kartu
- perubahan trigger ruangan
- perbaikan perhitungan umur
- aturan pakai di racikan hilang / tidak dapat menginput
- query ke dokter muncul semua walaupun ada yg tdk aktif.
- ubah pegawai tempat lahir hilang
- update laporan belum klik bayar

## 2.0-190721

- perubahan url ws:
  - run dari /kemkes/dashboard/run menjadi /kemkes/run
  - bedmonitor kemkes dari /kemkes/dashboard/bedMonitor menjadi /kemkes/siranap/bedMonitor
 LIHAT FILE PETUNJUK BRIDGING
- update laporan penjualan detil
- sesuaikan jam pengimputan o2 sesuai dengan server
- perubahan nama wilayah jakarta
- penambahan referensi jenis racikan
- penambahan anamesis dan pemeriksaan fisik pada saat kirim rujukan ke sisrute
- perbaikan ubah penjamin ke umum gagal
- perbaikan proc storeTindakanMedis
- perbaikan pengambilan data null akses referesi di com
- perbaikan error final tagihan
- perbaikan error pada saat penyimpanan EDC/non tunai
- tarif tindakan mengikuti ruangan kelas utk konsul/lab/rad & penunjang lainnya, utk mengikuti kelas rawat inap maka lakukan pengaturan property config id 7
- perbaikan tidak ada notifikasi pada saat batal klaim di grouping & grouping error utk data lama

## 2.0-190709

- perbaikan error grid pada tempat row yg kosong
- laporan belum klik bayar
- penambahan pengaturan aktif/nonaktif otomatis cetak tracert
- update procedure cetak hasil radiologi
- perbaikan error unknown colomn OLEH di tarif administrasi
- perbaikan total rincian tagihan tidak muncul
- penambahan fitur tarif administrasi berdasarkan pasien baru atau lama &
 kenakan tarif administrasi pasien baru yg belum terdaftar berdasarkan jenis ruangan
- pengembangan component datefield extjs support time validation
- Perbaikan update sep muncul pesan No. Surat Kontrol Kosong
- perubahan rincian tagihan pada administrasi
- kenakan hanya satu tarif administrasi jika gabung tagihan
- perbaikan diskon tarif bayi ikut rawat inap ibu yang tidak terdiskon
- Batal kunjungan tidak perlu tampil di dashboard dan penambahan filter status aktifitas kunjungan di history kunjungan
- Nonaktif tab/menu pasien pulang dan rujukan keluar jika pasien rawat inap sudah melakukan mutasi
- automatis set wilayah sampai kecamatan, jenis kelamin dan tgl lahir jika penginputan berdasarkan nomor ktp (NIK)
- penyimpanan data monitoring klaim dari bpjs
- pembatalan kunjungan maka
  - jika ada konsul dibatalkan konsulnya
  - jika ada mutasi maka dibatalkan mutasi
  - jika ada order baik lab, rad, resep dll maka dibatalkan ordernya
- perbaikan distribusi tagihan
- informasi pesan update pasien pulang kosong
- Penambahan Hitung Distribusi Tagihan di Informasi Grouping
- perbaikan koneksi gagal pada saat hitung ulang tagihan
- Support pusdatin akses NIK
- update proc laporan rl
- error cetak hasil lab

## 2.0-190605

- perbaikan perhitungan subsidi utk pasien bpjs naik vip
- tgl rujukan null pada saat ambil rujukan bpjs icon surat
- error pada saat simpan rujukan dimana nomor rujukan tdk terisi
- Support bridging Dukcapil
- penambahan catatan di penjamin
- Support E-Klaim V5.3 Penambahan Field Obat Kronis & Kemoterapi
- Penambahan suku di penginputan pasien
- perbaikan modul referensi tidak bisa menambah data

## 2.0-190502

- penambahan config untuk cetak semua output ke format pdf
- perubahan koneksi untuk dashboard kemkes dengan menambahkan sub service di local.php
- perbaikan eksekusi error null di informasi
- Penambahan input manual Persentase Selisih Naik Kelas VIP
- Edit data pasien combo jenis kelamin
- Mengaktifkan pencarian norm di daftar kunjungan dan penambahan pencarian nama
- mengaktifkan pemilihan smf, dpjp dan paket untuk pasien bayi ikut rawat inap ibu
- penambahan nilai normal, satuan dan keterangan dari lis ke hasil lab
- Perbaikan monitoring kegiatan blank
- update refrl
- laporan sensus harian kadang tampil, kadang tidak
- perubahan procedure dan trigger di lis
- penambahan field keterangan di layanan
- Enabled module LISService
- perbaikan pilihan katarak tidak muncul
- pembaruan procedure & event informasi
- penambahan token dan generate signature
- perbaikan export excel setelah di ubah versi jasperreport 5.6.0 ke 5.6.1
- Otomatis terselect ppk di list ppk di rujukan masuk pendaftaran
- Penambahan panjang karakter bagian dokter di surat rujukan
- Perbaikan tanggal rujukan kosong
- Perbaikan Muncul Error Mysql Attr use buffered query pada saat hitung ulang
- Pasien bayi ruang rawat ikut ruang rawat ibu
- Perbaikan class DatabaseService
- update report sensus harian
- update procedure listBedMonitorKemkes
- penambahan field di database medicalrecord table operasi
- perbaikan pendaftaran pasien kecelakaan
- perbaikan rujukan keluar
- perbaikan trigger ppk
- perbaikan procedure store akomodasi untuk titipan

## 2.0-190104

- Perbaikan skdp-dpjp, kecelakaan, update sep di pendaftaran
- Perbaikan rujukan keluar utk rujuk balik bpjs
- update procedure cetakan di pendaftaran

## 2.0-190102

- Tambahkan fiture daftar rujukan dari BPJS di penjamin
- data kecelakaan tidak masuk
- Update ppk
- Penambahan ws pencarian rujukan berdasarkan no kartu multi record
- update cetak kartu
- Perbaikan error INACBG
- Perbaikan tidak tampil status perkawinan, golongan darah dan negara di detil pasien
- Perbaikan info nama ibu di pencarian
- Perbaikan update keluarga pasien
- perubahan header laporan farmasi
- Perbaikan pencarian pasien
- Validasi pilihan katarak hanya tampil jika pasien MATA, Rawat Inap & IGD
- Penambahan default forceSelection dan contain seacrh di combobox
- Perubahan pengambilan DPJP di SKDP & Nomor Rujukan batas maksimal 20 karakter
- update proc CetakRujukanKeluar
- Update cetak SEP
- update procedure sensus harian untuk wilayah
- Perbaikan ruangan selection
- Gagal login jika nama pengguna sama yang satu aktif dan yang satu non aktif
- Cetak Rincian Format I tidak tampil
- Penambahan kondisi keamanan
- Perbaikan module pasien
- Perbaikan referensi jenis rujukan
- Validasi pembuatan periode stock opaname
- tanggal registrasi lebih besar dari pada input hasi lab
- Perbaikan filter laporan untuk periode awal
- Perubahan procedure laporan stok opname
- Referensi master statistik
- Perubahan procedure statistik
- Penambahan default value

## 2.0-181126

- Perubahan report
- Perbaikan error stok opname
- perubahan lokasi / layout penginputan di pendaftaran
- Penambahan fitur utk mencopy nomor sep & nomor kartu di monitoring bpjs
- Penginputan penjamin ruangan sering menjadi 0 utk kolom penjamin
- Pasien kecelakaan dpt memilih wilayah tanpa ada suplesi
- Nomor rujukan utk pasien rawat inap BPJS harus unique
- Penambahan link edit pasien di form pendaftaran
- Perubahan logik ui pencarian pasien
- Not Support cetak pengkajian rawat jalan & harian
- Membuat menu master dinamis
- Perubahan logik ui pegawai
- Perubahan menu master
- Error menampilkan data margin penjamin farmasi
- Menampilkan menu item text di header
- Menampilkan hanya ruangan pelayanan yang di tampilkan pada saat pendaftaran
- menambahkan menu di bpjs peserta, sep, rujukan
- Update jumlah obat di racikan bisa 0 nnti jumlah nya diubah sama farmasi pada saat terima eresepnya

## 2.0-181116

- Belum di patch database pegawai dan medicalrecord

## 2.0-181114

- Perubahan header laporan
- Penambahan LaporanRekapPerICD10Kecamatan
- Perubahan LaporanRekapPerICD10
- perubahan output cetak rujukan keluar

## 2.0-181113

- Support dashboard kemkes
- CetakRujukanKeluar mengacu ke nomor rujukan sisrute

## 2.0-181107

- pindahkan folder SIMpel/classic/override ke package/com/classic
- Bridging Rujukan Sisrute
- Penambahan Rekam Medis#Pemeriksaan#Tanda Vital & Anamnesis#Riwayat#Alergi
- Pengaturan default versi berlaku utk semua module di set menjadi masing - masing modul
- Distribusi tagihan utk akomodasi intensif tdk sesuai dgn nilai akomodasi
- Informasi Peserta tidak tampil di monitoring klaim BPJS

## 2.0-180911

- Support VClaim 1.1
- Perubahan column tanggal di format berdasarkan d-m-Y di monitoring kunjungan dan klaim bpjs
- Perbaikan pencarian data klaim bpjs
- Aproval & ppk
- update procedure cetak sep
- Laporan RL 3.15
- Laporan volume tindakan perpasien
- Penambahan jenis operasi
- Tambah pilihan RL Kemkes dan Dinkes beserta laporannya
- Mengizinkan semua ruangan memiliki transaksi stok
- Double pada saat final tagihan penjualan

## 2.0-180830

- Ubah tujuan ruangan ke referensi ruangan rujukan REF70
- Simpan Referensi Poli BPJS pada saat melakukan pencarian
- Menu master sesuai dengan pemberian hak akses
- Kelas klaim jika non kelas maka mengambil kelas penjamin
- Kelas Klaim Inacbg jika turun kelas & Informasi Distribusi Tagihan di form grouping
- Perbaikan update penjamin
- Form update sep ada beberapa parameternya tdk sesuai
- Method Not Allowed Update Sep (Salah method pada saat kirim POST -> PUT)
- Hasil lab untuk group tindakan lab yg non aktif tampil juga di cetakan seharusnya tdk ditampilkan
- Rujukan tidak dapat diambil dari BPJS jika belum ada PPKnya di master
- Ruangan Kelas & Pembacaan Tarif sesuai ruangan kelas di pembayaran
- Durasi tidak boleh di edit pada penginputan laporan operasi
- Penambahan cob di penjamin
- Penambahan feature rujukan & terintegrasi dengan rujukan bpjs
- Error pada saat menampilkan data master on render di ruangan jika level 1 direktur di jadi kan rawat jalan
- Penambahan jumlah karakter nomor rujukan sebesar 35k
- Notifikasi pasien bpjs yg tidak aktif
- Penambahan feature cari norm di pengunjung, konsul, mutasi, lab, rad, resep
- Perubahan Kelas Rawat / Kelas Klaim di BPJS (SEP)
- Penambahan sarana & jasa pelayanan di tarif ruang rawat (akomodasi)
- Perubahan Master
- Perubahan trigger update jenis kunjungan di ruangan jika di ubah jenis kunjungan maka data di ruangan sebelumnya masih ada seharusnya hilang
- Perubahan penjamin BPJS No. Kartu tidak terupdate jika tdk bridging BPJS

## 2.0-180815

- laporan monitoring pelayanan error
- error setelah klik tombol all dimapping dokter ruangan dan smf ruangan
- ubah rekam medis 'pemeriksaan->fisik dan anamnesi->riwayat->perjalananpenyakit' terkadan menampilkan pengimputan yang sama
- ubah keterangan Confirm Dialog pada pengiriman barang
- Tombol hapus barang pada penerimaan rekanan di menu inventori hilang saat memilih faktur yang sudah final dan memilih kemabali faktur yang belum final

## 2.0-180723

- Perbaikan pembatalan pembayaran tagihan & final kunjungan yg belum final
- Ambigue ID pada saat pencarian update stokopname detil
- Menghilangkan tarif RS di Laporan Cetak Individual Inacbg
- Penambahan notifikasi pada saat grouping Inacbg jika pasien belum dipulangkan
- Perubahan ICD Kirim ke Inacbg jika di input lewat layanan kirim ke inacbg di hilangkan jika melalui coding icd di tampilkan
