# Responsi-Proyek-PBO
NAMA   : Thesa Febriani
NPM    : G1F022033
## 1. _Buatlah perulangan hingga 100 menggunakan Python_
  <img width="249" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/c5d712e0-afc9-4589-92a3-6ec3ac45dfc9">
  
  Penejelasan:
  Kode diatas adalah untuk membuat perulangan 1 sampai 100, dimana setiap kelipatan 10 akan mencetak nama saya yaitu "Thesa Febriani" sebanyak tiga kali secara berturut       turut, sementara angka lainnya akan dicetak biasa. "for x in range(1, 100): " adalah pernyataan perulangan for yang akan mengiterasi nilai x dari 1 hingga 100. kondisi      "if x % 10 == 0:" berfungsi untuk memeriksa apakah nilai x adalah kelipatan 10 atau tidak dengan menggunakan operator modulo %. Jika x adalah kelipatan 10 maka "Thesa       Febriani" akan dicetak tiga kali berturut-turut. Jika x tidak merupakan kelipatan 10, maka pernyataan else akan dijalankan


## 2. _Membuat program if else pada for loop dan while loop
### 2.1 _Program if else pada for loop_
  * **Program mengecek Bilangan Ganjil dan Genap**
  
  
     <img width="353" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/985ca363-7381-4fb4-a708-7256df78af2d">


    Penjelasan:
    Gamabar diatas merupakan kode yang digunakan untuk mebuat program sederhana untuk mengecek bilangan ganjil dan genap, dimana dengan rentang nilai 1 sampai 6, tidak termasuk 7. Pernyataan if i % 2 == 0: memeriksa apakah nilai i adalah bilangan genap atau tidak. "i % 2" adalah operasi modulo yang mengembalikan sisa bagi dari pembagian i dengan 2. Jika sisa bagi adalah 0 (i habis dibagi 2), maka i adalah bilangan genap. Jika i adalah bilangan genap (ketika i % 2 == 0), maka program akan mencetak bahwa i adalah bilangan genap menggunakan pernyataan print(f"{i} adalah bilangan genap"). Jika i bukan bilangan genap (karena i % 2 != 0), maka program akan mencetak bahwa i adalah bilangan ganjil menggunakan pernyataan print(f"{i} adalah bilangan ganjil").

* Program Pengecekan bilangan 2 dan 3


    <img width="303" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/4da6da5b-989b-4df2-8801-69bef85e02f9">

    Penjelasan:

    Kode diatas merupakan kode untuk mengecek apakah apakah bilangan itu kelipatan 2 atau 3.
    * for number in range(8, 16): Pernyataan for ini menginisialisasi loop dengan variabel number yang akan diiterasi mulai dari 2 hingga 8.
    * pernyataan if number % 2 == 0 and number % 3 == 0: memeriksa apakah nilai number adalah kelipatan dari 2 dan 3. Jika number adalah kelipatan dari 2 dan 3, maka program akan mencetak bahwa number adalah kelipatan 2 dan 3 menggunakan pernyataan print(f"{number} adalah kelipatan 2 dan 3").
    * number % 2 == 0 memeriksa apakah number adalah kelipatan 2. jika ya akan mencetak bahwah number adalah kelipatan 2.
    * number % 3 == 0 memeriksa apakah number adalah keliparan 3, jika ya akan mencetak bahawah number adalah kelipatan 3.
    * jika number bukan kelipatan 2 atau pun 3, maka else akan dijalankan


### 2.2 _Program if else pada while loop_


  <img width="602" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/08337736-7d6f-4d68-b486-d7aaaa554a88">

  Penjelasan:

  Kode diatas digunakan untuk membuat program yang berfungsi untuk menghitung jumlah angka genap dan ganjil. rentang_awal dan rentang_akhir menentukan rentang angka yang ingin kita hitung. jumlah_genap dan jumlah_ganjil diinisialisasi dengan nilai 0 untuk menyimpan jumlah angka genap dan ganjil dalam rentang tersebut. while angka <= rentang_akhir: while loop akan terus berjalan selama nilai angka masih dalam rentang yang ditentukan. Dalam loop, program memeriksa apakah angka adalah genap atau ganjil menggunakan pernyataan if else. Jika angka adalah genap (angka % 2 == 0), maka jumlah_genap akan bertambah satu. Jika tidak, angka adalah ganjil dan jumlah_ganjil akan bertambah satu. angka += 1  nilai angka akan bertambah satu demi satu.



### 2.3 _Solution statements_
Solusi dalam menyelesaikan masalah ini yaitu penulis menggunakan algoritma _Content Based Filtering_ dan _Collaborative Filtering_

<div align="center">

![1_aSq9viZGEYiWwL9uJ3Recw](https://user-images.githubusercontent.com/46146748/63115930-5f6c1900-bf66-11e9-894f-ecde5ec531b0.png)

</div>

- **_Content Based Filtering_**. Metode _Content-Based Filtering_ bekerja dengan melihat kemiripan item baru dengan item yang sebelumnya. _Content-Based Filtering_ memberikan rekomendasi berdasarkan kemiripan item yang dianalisis dari fitur yang dikandung oleh item sebelumnya **[2]**.

- **_Collaborative Filtering_**. _Collaborative filtering_ merupakan proses penyaringan atau pengevaluasian item menggunakan opini orang lain. _Collaborative filtering_ melakukan penyaringan data berdasarkan kemiripan karakteristik konsumen sehingga mampu memberikan informasi yang baru kepada konsumen karena sistem memberikan informasi berdasarkan pola satu kelompok konsumen menjadikan sumber informasi baru yang mungkin bermanfaat bagi anggota kelompok lainnya.Berikut adalah persamaan _cosine similarity_ yang digunakan untuk menghitung nilai kemiripan diantara item **[3]**.

## 3 _Data Understanding_
Data ini dapat diunduh pada link dibawah ini
[Link Dataset](https://www.kaggle.com/arashnic/book-recommendation-dataset)

Dataset ini berisi 3 tabel:

1. Book
   Dataset ini berjumlah 271360 data
2. User
   Dataset ini berjumlah 278858 data
3. Rating
   Dataset ini berjumlah 1149780 data

Pada dataset _Book_ berisi variabel

- ISBN (Nomor seri buku)
- Book-Title (Judul Buku)
- Book-Author (Penulis Buku)
- Year-Of-Publication (Tahun publikasi)
- Publisher (penerbit buku)
- Image-URL-S (Ukuran gambar small)
- Image-URL-M (Ukuran gambar medium)
- Image-URL-L (Ukuran gambar large)

Pada Dataset _User_ berisi variabel

- User-ID (ID User)
- Location (lokasi user)
- Age (umur user)

Pada Dataset _Rating_ berisi variabel

- User-ID (ID User)
- ISBN (Nomor seri buku)
- Book-Rating (rating buku)

## 4. _Data Preparation_
### 4.1 _Data Preprocessing_
Tahapan preprocessing pada laporan ini penting untuk menyatukan ketiga dataset yang penulis gunakan yaitu:

- Book
- User
- Rating

Adapun prosesnya yaitu:

1. Menggabungkan Buku
   Pertama, mari kita identifikasi berapa jumlah seluruh buku pada dataset. Di sini, kita menggunakan library numpy dan fungsi concatenate untuk menggabungkan beberapa file. Selanjutnya kita akan menggabungkan seluruh data pada kategori buku. Sehingga, kita akan menggunakan ISBN yang unik sebagai acuan dalam penggabungan ini

2. Menggabungkan Seluruh User
   Gunakan fungsi concatenate dari library numpy untuk menggabungkan seluruh data pada kategori variabel User berdasarkan UserId.

3. Ketahui Jumlah Rating
   Pada tahapan ini, jumlah rating dapat diketahui dengan menggabungkan dataset rating dan buku

4. Menggabungkan Data dengan fitur judul buku
   Pertama, definisikan variabel book_rate dengan variabel rating yang telah kita ketahui sebelumnya. Selanjutnya, untuk mengetahui judul buku dengan ISBN tertentu, mari kita gabungkan data geo yang berisikan ISBN dan judul buku berdasarkan ISBN dan assign ke variabel all_resto_name dengan fungsi merge dari library pandas

5. Menggabungkan Judul buku dengan fitur publisher
   Langkah selanjutnya adalah menggabungkan variabel all_book_name yang kita peroleh dari tahapan sebelumnya dengan fitur publisher buku. Tujuannya, agar kita mengetahui publisher yang menerbitkan buku.

kemudian, setelah dilakukan _data preprocessing_ data harus disiapkan terlebih dahulu. Adapun langkah persiapan data yang penulis lakukan yaitu:

1. Mengatasi _missing value_
   Setelah ketiga dataset telah berhasil digabungkan, kita cek lagi apakah ada _missing value_. Pada data yang digunakan masih terdapat _missing value_, maka dari itu penulis mengatasi _missing value_ dengan menggunakan perintah dropna().

## 5. _Modeling_
Penulis memilih 2 model yaitu _content based filtering_ dan _collaborative filtering_.

_Content Based Filtering_ untuk mendapatkan rekomendasi buku yang mirip dengan yang disukai pembaca. Pengguna sedang membaca buku yang dia sukai, untuk menumbuhkan minat membaca agar membaca dilakukan tidak hanya sekali maka dibutuhkan sistem rekomendasi untuk merekomendasikan bahan bacaan yang serupa dengan yang pengguna baca **[4]**.

Dalam pendekatan ini, digunakan metode TF-IDF dan Cosine Similarity untuk memperoleh rekomendasi yang relevan.

Pertama, membangun matriks TF-IDF dari kategori *tittle* buku. Matriks ini akan merepresentasikan setiap *tittle* buku dalam dataset sebagai vektor numerik berdasarkan frekuensi kata dalam kategori *tittle* buku tersebut. TF-IDF mengukur seberapa penting suatu kata dalam sebuah dokumen atau konteks. Nilai TF-IDF tinggi menunjukkan kata yang spesifik dan relevan untuk dokumen tersebut. Langkah pertama dalam pembangunan matriks TF-IDF adalah menghitung Term Frequency (TF), yaitu frekuensi kata dalam deskripsi *tittle* buku. Selanjutnya, perlu dihitung Inverse Document Frequency (IDF), yaitu kebalikan dari frekuensi kata di seluruh dokumen. Ini mengurangi bobot kata-kata yang umum dan meningkatkan bobot kata-kata yang jarang muncul. Akhirnya, matriks TF-IDF terbentuk dengan mengalikan nilai TF dengan nilai IDF. Matriks ini akan menjadi representasi numerik dari kategori *tittle* buku dalam dataset.

Setelah matriks TF-IDF terbentuk, langkah berikutnya adalah menghitung *cosine similarity* antara setiap pasangan *tittle* buku dan *publisher*. *Cosine similarity* mengukur kesamaan antara dua vektor dengan mengukur sudut antara vektor-vektor tersebut. Semakin kecil sudut antara vektor-vektor, semakin mirip buku tersebut. Untuk menghitung *cosine similarity*, dapat digunakan formula *cosine similarity*:

$$ cosine similarity = {{A . B} \over {||A|| ||B||}} $$

Dengan menghitung *cosine similarity* antara semua pasangan *tittle* buku dan *publisher* buku, kita dapat memperoleh matriks *similarity* antara *tittle* dan *publisher* dalam dataset. Nilai cosine similarity ini dapat digunakan untuk menemukan *tittle* yang paling mirip satu sama lain. Semakin tinggi nilai cosine similarity antara *tittle* dan *publisher*, semakin mirip *tittle* dan *publisher* tersebut.

Dengan menggunakan metode TF-IDF dan *Cosine Similarity* dalam *content-based filtering*, kita dapat memperoleh rekomendasi buku yang memiliki kategori yang mirip dengan buku yang sedang ditinjau oleh pengguna. Hal ini memungkinkan sistem rekomendasi untuk mengidentifikasi dan merekomendasikan buku yang memiliki kesamaan konten dengan buku yang disukai oleh pengguna.

Kelebihan dari pendekatan ini adalah kemampuannya dalam memberikan rekomendasi yang relevan berdasarkan konten produk, bahkan bisa menjangkau produk yang baru muncul. Namun kekurangannya adalah kurangnya kemampuan untuk menemukan preferensi pelanggan lain, dan baru bisa memberikan rekomendasi produk buku jika memang pengguna sedang melakukan pencarian dengan *keyword*.

Output dari pendekatan Content-Based Filtering ini adalah daftar produk rekomendasi berdasarkan *keyword* yang dimasukan. Misalnya, pengguna aplikasi melakukan pencarian dengan *keyword* "*fantasy*", maka akan ditampilkan beberapa rekomendasi produk yang relevan dengan *keyword* "*fantasy*".

Pada dataset yang digunakan oleh penulis dalam proyek ini, penulis menggunakan *keyword tittle* dari buku yang terdapat pada dataset, untuk contoh yang penulis gunakan yaitu *keyword* "Billy Strobe".
Diperoleh top 10 rekomendasi produk berdasarkan keyword tersebut:

<div align="center">

Tabel 1. Top 10 rekomendasi buku dengan Content-Based Filtering

|                                              title                                              |  publisher  |
| ----------------------------------------------------------------------------------------------- |:-----------:|
| The Subtle Serpent: A Mystery of Ancient Ireland (Sister Fidelma Mysteries (Paperback))         | Signet Book |
| Murder Can Stunt Your Growth: A Desiree Shapiro Mystery (Desiree Shapiro Mysteries (Paperback)) | Signet Book |
| The Vulture Fund                                                                                | Signet Book |
| Blood Relations                                                                                 | Signet Book |
| She Walks These Hills                                                                           | Signet Book |
| The Rosewood Casket                                                                             | Signet Book |
| First Offense                                                                                   | Signet Book |
| First Offense                                                                                   | Penguin USA |
| Story Bible: The New Testament (Story Bible)                                                    | Signet Book |
| StarGate: A Novel                                                                               | Signet Book |

</div>

_Collaborative Filtering_ untuk mencari rating buku dan direkomendasikan ke pembaca. Agar kualitas bahan bacaan pengguna tinggi dibutuhkan rekomendasi dari pengguna lain berdasarkan rating **[5]**. Model yang digunakan pada proyek ini ialah RecommerderNet berbasis TensorFlow untuk mempelajari pola preferensi pelanggan dan interaksi mereka dengan produk. Model ini menggunakan embedding untuk merepresentasikan pelanggan dan produk. Dengan menggabungkan embedding tersebut, kami dapat memprediksi preferensi pelanggan terhadap produk tertentu.

Berbeda dengan pendekatan *Content-Based Filtering* yang hanya menggunakan data informasi tentang produk saja, pendekatan ini akan menggunakan data pelanggan juga.

Dataset yang digunakan dibagi menjadi data traning dan data testing dengan rasio 80%:20%.

Kelebihan dari pendekatan ini adalah kemampuannya dalam menemukan pola preferensi pelanggan yang kompleks dan merekomendasikan produk berdasarkan preferensi serupa dari pelanggan lain. Namun kekurangan dari pendekatan ini adalah adanya masalah *cold-start*, yaitu saat pelanggan baru atau produk baru tidak memiliki cukup interaksi untuk memberikan rekomendasi yang akurat.

*Output dari* pendekatan ini adalah daftar produk rekomendasi untuk setiap pelanggan. Misalnya, pelanggan B akan menerima rekomendasi berupa daftar produk buku yang banyak disukai oleh pelanggan lain dengan preferensi yang serupa.
<div align="center">

Tabel 2. Top 1 rekomendasi buku dengan Content-Based Filtering

|                                             title                                            |       publisher      |
| -------------------------------------------------------------------------------------------- |:--------------------:|
| The Little Prince                                                                            |       Harcourt       |
| Harry Potter and the Prisoner of Azkaban (Book 3)                                            |      Scholastic      |
| Harry Potter and the Goblet of Fire (Book 4)                                                 |      Scholastic      |
| Shiloh (Yearling Newbery)                                                                    |    Yearling Books    |
| House Atreides (Dune: House Trilogy, Book 1)                                                 |     Bantam Books     |
| The Bone Collector (Lincoln Rhyme Novels (Hardcover))                                        |     Viking Books     |
| Mere Christianity                                                                            | Simon &amp; Schuster |
| The Twilight Before Christmas                                                                |      Pocket Star     |
| The Golden Mean: In Which the Extraordinary Correspondence of Griffin &amp; Sabine Concludes |    Chronicle Books   |
| Lies My Teacher Told Me: Everything Your History Textbook Got Wrong                          |       New Press      |

</div>

## 6. _Evaluation_
Metrik klasifikasi mengukur seberapa baik sistem rekomendasi dalam mengklasifikasikan item dengan benar. Jarak dari ambang toleransi tidak masalah, tapi orang yang berbeda memiliki toleransi perbedaan. Dengan kata lain, kita tidak dapat berasumsi bahwa peringkat di atas dua bintang sudah cukup baik untuk semua orang [2], [5], [12]. Setelah model berhasil dibuat, akan dilakukan evaluasi dengan menggunakan metrik evaluasi untuk memvalidasi performa model. 
### 6.1. *Content-Based Filtering*
Pada pendekatan *Content-Based Filtering*, akan digunakan metrik evaluasi *precision*.

*Precision* adalah metrik evaluasi yang digunakan untuk mengukur sejauh mana sistem rekomendasi mampu memberikan rekomendasi yang relevan dan tepat kepada pengguna. Precision menggambarkan persentase item rekomendasi yang relevan dari keseluruhan item yang direkomendasikan. Presisi dapat dihitung menggunakan rumus berikut:

$$ precision = {TP \over TP + FP} $$

dimana:
* TP (*True Positive*) : jumlah item rekomendasi yang relevan yang benar-benar dipilih oleh pengguna
* FP (*False Positive*) : jumlah item rekomendasi yang tidak relevan yang dipilih oleh pengguna.

Digunakan 1 pencarian produk secara acak, yaitu:
1. *"Billy Strobe"*. Dari 10 rekomendasi yang diberikan terdapat 1 prediksi yang tidak relevan berdasarkan *publisher*. Sehingga nilai presisinya 90%.

$$ 0.9 = {9 \over 9 + 1} $$

Dari hasil pencarian produk di atas, diperoleh nilai akurasi 90% yang berarti semua hasil pencarian memperoleh rekomendasi yang relevan.


### 6.2. *Collaborative Filtering*
Pada pendekatan *Collaborative Filtering*, digunakan *Precison* dan *Recall*, _Precision_ dan _recall_ merangkum angka-angka ini menjadi lebih banyak metrik intuitif. _Precision_ adalah pecahan dari semua peringkat positif yang diklasifikasikan dengan benar seperti itu. Ini mengukur seberapa baik sistem dalam mengenali rekomendasi positif. Untuk misalnya, _Precision_ 60% berarti bahwa pengguna dapat mengharapkan untuk benar-benar menikmati tiga dari setiap lima rekomendasi. Ini mengukur seberapa baik sistem dalam menemukan positif rekomendasi [4], [10], [24] dengan formula sebagai berikut:

Formula:

$$ F - MEASURE = {2*(PRECISION*RECALL) \over PRECISION+RECALL} $$

**[6]**

Dengan proses training sebanyak 15 epochs, diperoleh nilai evaluasi sebagai berikut:
* *Precision* : 0.6721
* *Recall* : 0.3306

## Daftra Pustaka

[1] [S. K. Dirjen et al., ‘Sistem Rekomendasi Buku untuk Perpustakaan Perguruan Tinggi Berbasis Association Rule’, masa berlaku mulai, vol. 1, no. 3, pp. 304–312, 2017.](http://jurnal.iaii.or.id/index.php/RESTI/article/view/971/158)

[2] [M. Alkaff, H. Khatimi, and A. Eriadi, ‘Sistem Rekomendasi Buku pada Perpustakaan Daerah Provinsi Kalimantan Selatan Menggunakan Metode Content-Based Filtering’, MATRIK : Jurnal Manajemen, Teknik Informatika dan Rekayasa Komputer, vol. 20, no. 1, pp. 193–202, Sep. 2020, doi: 10.30812/matrik.v20i1.617.](https://journal.universitasbumigora.ac.id/index.php/matrik/article/view/617/587)

[3] [A. Rokhim and A. Saikhu, Sistem Rekomendasi Buku Pada Aplikasi Perpustakaan Menggunakan Metode Collaborative Filtering Pada Smkn 1 Bangil’, 2016.](http://jurnal.stmik-yadika.ac.id/index.php/spirit/article/view/52/32)

[4] [J. Basilico and T. Hofmann, ‘Unifying Collaborative and Content-Based Filtering’, in Proceedings of the Twenty-First International Conference on Machine Learning, in ICML ’04. New York, NY, USA: Association for Computing Machinery, 2004, p. 9. doi: 10.1145/1015330.1015394.](https://dl.acm.org/doi/abs/10.1145/1015330.1015394?casa_token=hs7-fclGnYYAAAAA:WUZgTBMI7fXe3L5qCSvDLMjexJ-bCCSzzaogMt1jLD-yqn4FFxP5KyeqRHPfM--RRA2aJNW3d5mxhg)

[5] [S. Rahmawati, D. Nurjanah, and R. Rismala, ‘Analisis dan Implementasi pendekatan Hybrid untuk Sistem Rekomendasi Pekerjaan dengan Metode Knowledge Based dan Collaborative Filtering’, Indonesian Journal on Computing (Indo-JC), vol. 3, no. 2, p. 11, Sep. 2018, doi: 10.21108/indojc.2018.3.2.210.](https://socj.telkomuniversity.ac.id/ojs/index.php/indojc/article/view/210/104)

[6] [S. Morozov, X. Zhong, and S. Morozov, ‘The Evaluation of Similarity Metrics in Collaborative Filtering Recommenders’, 2013.](https://huichawaii.org/assets/met_morozov_sergey_2013.pdf)
