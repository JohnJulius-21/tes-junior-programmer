#  DOKUMENTASI tes-junior-programmer

Teknologi yang Digunakan

-Framework: CodeIgniter 3
-Database: MySQL
-Front-End: HTML, Bootsrap CSS
-Bahasa Pemrograman: PHP


-MENGAMBIL DATA DARI API https://recruitment.fastprint.co.id/tes/api_tes_programmer MENGGUNAKAN POSTMAN
![image](https://github.com/user-attachments/assets/16dc8a72-bb46-42be-a846-08bdbb8aa6ab)

-MEMBUAT DATABASE BERDASARKAN PRODUK DISEDIAKAN PADA API DAN RELASI TIAP TABEL
![image](https://github.com/user-attachments/assets/4e0f7835-e2e1-426c-bd03-6cb2af179d05)
![image](https://github.com/user-attachments/assets/bdea5493-e61c-48cb-8f6b-9b3110b56b9b)
![image](https://github.com/user-attachments/assets/3475063a-b020-4c36-8f0c-abfcf9befc68)
![image](https://github.com/user-attachments/assets/e2c058d8-dd45-47bf-8c8c-cb4846ef0951)
![image](https://github.com/user-attachments/assets/12437a38-5942-45bd-8204-bffd37cd4650)
![image](https://github.com/user-attachments/assets/e9fcd61a-f948-4533-959a-c44ffd39babe)
![image](https://github.com/user-attachments/assets/54d20bc5-72fe-4ef4-bdc9-662ccb128944)
![image](https://github.com/user-attachments/assets/b0724fca-2633-4d7f-b8f8-a9001fe5f01b)


-MENGHUBUNGKAN DATABASE DENGAN CODEIGNITER 3

![image](https://github.com/user-attachments/assets/f0427413-3cbc-4246-a461-1cc3f7c2187e)

-MEMBUAT MODEL PRODUK, KATEGORI & STATUS
1. PADA MODEL PRODUK TERDAPAT FUNCTION UNTUK MENGAMBIL PRODUK BERDASARKAN STATUS, MENGAMBIL PRODUK BERDASARKAN ID (DIGUNAKAN UNTUK MENGAMBIL DATA PRODUK UNTUK DIEDIT), INPUT PRODUK (MENYIMPAN PRODUK KE DATABASE), UPDATE PRODUK (MENGUPDATE DATA PRODUK PADA DATABASE) & DELETE PRODUK (MENGHAPUS PRODUK DARI DATABASE)

![image](https://github.com/user-attachments/assets/bdb55f9e-6a91-4369-96ae-402946b9b524)
	
2. PADA MODEL KATEGORI TERDAPAT FUNCTION UNTUK MENGAMBIL SEMUA DATA PADA TABEL KATEGORI
![image](https://github.com/user-attachments/assets/6b6c1ace-3316-4f6d-bca9-8b981b05b8f6)

3. PADA MODEL STATUS TERDAPAT FUNCTION UNTUK MENGAMBIL SEMUA DATA PADA TABEL STATUS
![image](https://github.com/user-attachments/assets/7626e855-12a2-4936-8912-3aecf9d6fe12)


-MEMBUAT CONTROLLER PRODUK
1. MEMBUAT FUNCTION INDEX UNTUK MEMNAMPILKAN PRODUK DAN MENGGUNAKAN MODEL PRODUK YANG BISA DIJUAL DENGAN FUNCTION get_produk_by_status
![image](https://github.com/user-attachments/assets/5e9fcf91-b247-454f-97c1-d28b8810af31)

2. MEMBUAT FUNCTION CREATE UNTUK MENAMBAHKAN PRODUK, PADA FUNCTION INI MENGGUNAKAN MODEL KATEGORI & STATUS UNTUK MENDAPATKAN DATA DARI KEDUA TABEL INI AGAR DAPAT DITAMPILKAN KE FIELD SELECT PRODUK & STATUS PADA HALAMAN TAMBAH PRODUK
![image](https://github.com/user-attachments/assets/62f510cb-6df8-4ce1-8cb8-3dde44214949)

3. MEMBUAT FUNCTION STORE UNTUK MENYIMPAN PRODUK, PADA FUNCTION INI MENGGUNAKAN FORM VALIDASI UNTUK TIAP FIELD PADA HALAMAN TAMBAH PRODUK UNTUK MEMVALIDASI TIAP INPUTAN DARI FIELD YANG AKAN DI ISI. TERDAPAT JUGA PENGKODISIAN JIKA FIELD TIDAK DIISI MAKA PADA HALAMAN AKAN KEMBALI KE HALAMAN TAMBAH PRODUK DAN MENAMPILKAN PESAN KESALAHAN. NAMUN JIKA VALIDASI BERHASIL MAKA PRODUK AKAN DISIMPAN MENGGUNAKAN FUNCTION DARI MODEL PRODUK YAITU insert_produk DAN AKAN KEMBALI KE HALAMAN INDEX DAN AKAN DITAMBILKAN PESAN BERHASIL PRODUK TELAH BERHASIL DITAMBAHKAN. NOTES(JIKA PRODUK DISIMPAN DENGAN STATUS TIDAK BISA DIJUAL MAKA PRODUK TIDAK AKAN TAMPIL KE HALAMAN INDEX)
![image](https://github.com/user-attachments/assets/a2c87817-4735-47dc-b08d-1ec330d2c2ef)

4. MEMBUAT FUNCTION EDIT UNTUK MENGEDIT PRODUK, PADA FUNCTION INI MENGGUNAKAN MODEL PRODUK UNTUK MENGAMBIL DATA PRODUK BERDASARKAN ID_PRODUK, KATEGORI & STATUS UNTUK MENDAPATKAN DATA DARI KEDUA TABEL INI AGAR DAPAT DITAMPILKAN KE FIELD SELECT PRODUK & STATUS BERDASARKAN PRODUK YANG DIPILIH PADA HALAMAN EDIT PRODUK
![image](https://github.com/user-attachments/assets/9c063467-9c08-4283-8831-3b5d1f7bccce)

5. MEMBUAT FUNCTION UPDATE UNTUK MENGGUPDATE PRODUK, PADA FUNCTION INI HAMPIR SAMA DENGAN FUNCTION STORE JUGA KARENA MENGGUNAKAN FORM VALIDASI UNTUK TIAP FIELD PADA HALAMAN TAMBAH PRODUK UNTUK MEMVALIDASI TIAP INPUTAN DARI FIELD YANG AKAN DI ISI. TERDAPAT JUGA PENGKODISIAN JIKA FIELD TIDAK DIISI MAKA PADA HALAMAN AKAN KEMBALI KE HALAMAN EDIT PRODUK DAN MENAMPILKAN PESAN KESALAHAN. NAMUN JIKA VALIDASI BERHASIL MAKA PRODUK AKAN DIUPDATE MENGGUNAKAN FUNCTION DARI MODEL PRODUK YAITU update_produk DAN AKAN KEMBALI KE HALAMAN INDEX DAN AKAN DITAMBILKAN PESAN BERHASIL PRODUK TELAH BERHASIL DIUPDATE
![image](https://github.com/user-attachments/assets/bd956406-a8cc-4755-aa63-3ed928581dd8)

6. MEMBUAT FUNCTION DELETE UNTUK MENGHAPUS PRODUK BERDASARKAN ID_PRODUK DAN MENGGUNAKAN FUNCTION delete_produk DARI MODEL PRODUK.
![image](https://github.com/user-attachments/assets/0dc0dcf0-930a-4f5c-9d0c-f676fb3e48cb)

-MEMBUAT TAMPILAN
1. MEMBUAT TAMPILAN INDEX DENGAN BOOTSRAP CSS UNTUK MENAMPILKAN PRODUK YANG BISA DIJUAL DENGAN MENGGUNAKAN PERULANGAN. PADA TAMPILAN INI JUGA TERDAPAT TOMBOL UNTUK KE HALAMAN TAMBAH PRODUK DAN EDIT PRODUK DENGAN FUNCTION SITE_URL, UNTUK KE HALAMAN EDIT PRODUK AKAN MENGAMBIL ID_PRODUK UNTUK MENGAMBIL DATA PRODUK YANG DIPILIH. TERDAPAT JUGA TOMBOL HAPUS, JIKA TOMBOL HAPUS DITEKAN MAKA AKAN MUNCUL MODAL KONFIRMASI HAPUS DAN JIKA DIHAPUS MAKA AKAN MUNCUL PESAN PRODUK BERHASIL DIHAPUS
![code](https://github.com/user-attachments/assets/4461789b-fff5-4046-b774-90f182f1b9be)
![image](https://github.com/user-attachments/assets/38f98f13-4a5c-4ef1-8611-88384c301e6c)
![image](https://github.com/user-attachments/assets/3cfb579a-9432-478b-8b4c-7a4f3ac736ef)
![image](https://github.com/user-attachments/assets/f286c373-69e2-401c-9b8b-0b19dcc04ba2)

2. MEMBUAT TAMPILAN TAMBAH PRODUK DENGAN BOOTSRAP CSS UNTUK MENAMPILKAN FORM TAMBAH PRODUK DAN JUGA MENGGUNAKAN FORM_ERROR UNTUK MENAMPILKAN PESAN VALIDASI
![codeCreate](https://github.com/user-attachments/assets/7dbba988-c4a8-426b-bfb8-e429902155b9)
![image](https://github.com/user-attachments/assets/24edfae1-3e6f-41da-9169-3719c534676a)
![image](https://github.com/user-attachments/assets/f5e516ae-c8cb-45c7-8cad-68155588656b)

3. MEMBUAT TAMPILAN EDIT PRODUK DENGAN BOOTSRAP CSS UNTUK MENAMPILKAN FORM EDIT PRODUK DAN JUGA MENGGUNAKAN FORM_ERROR UNTUK MENAMPILKAN PESAN VALIDASI
![codeEdit](https://github.com/user-attachments/assets/7a53d100-949c-4f2a-9fd6-f1bbc4b98e3e)
![image](https://github.com/user-attachments/assets/37393264-928f-407b-969d-7dd786508ad2)
![image](https://github.com/user-attachments/assets/fe9832e7-adf4-4a4f-9ce8-b0abf081d7ad)


-MEMBUAT ROUTES 

![image](https://github.com/user-attachments/assets/a814a169-3021-4be5-882d-446f2fd9b871)

