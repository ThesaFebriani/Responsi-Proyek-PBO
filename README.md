# Responsi-Proyek-PBO
NAMA   : Thesa Febriani
NPM    : G1F022033
## 1. _Buatlah perulangan hingga 100 menggunakan Python_
  <img width="249" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/c5d712e0-afc9-4589-92a3-6ec3ac45dfc9">
  
  Penejelasan:
  
  Kode diatas adalah untuk membuat perulangan 1 sampai 100, dimana setiap kelipatan 10 akan mencetak nama saya yaitu "Thesa Febriani" sebanyak tiga kali secara berturut       turut, sementara angka lainnya akan dicetak biasa. "for x in range(1, 100): " adalah pernyataan perulangan for yang akan mengiterasi nilai x dari 1 hingga 100. kondisi      "if x % 10 == 0:" berfungsi untuk memeriksa apakah nilai x adalah kelipatan 10 atau tidak dengan menggunakan operator modulo %. Jika x adalah kelipatan 10 maka "Thesa       Febriani" akan dicetak tiga kali berturut-turut. Jika x tidak merupakan kelipatan 10, maka pernyataan else akan dijalankan

  Luaran yang dihasilkan:

  <img width="479" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/00bf44d3-5eec-4e2f-872f-b960e9a0e3a0">



## 2. _Membuat program if else pada for loop dan while loop
### 2.1 _Program if else pada for loop_
  * **Program mengecek Bilangan Ganjil dan Genap**
  
  
     <img width="353" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/985ca363-7381-4fb4-a708-7256df78af2d">


    Penjelasan:
    
    Gamabar diatas merupakan kode yang digunakan untuk mebuat program sederhana untuk mengecek bilangan ganjil dan genap, dimana dengan rentang nilai 1 sampai 6, tidak termasuk 7. Pernyataan if i % 2 == 0: memeriksa apakah nilai i adalah bilangan genap atau tidak. "i % 2" adalah operasi modulo yang mengembalikan sisa bagi dari pembagian i dengan 2. Jika sisa bagi adalah 0 (i habis dibagi 2), maka i adalah bilangan genap. Jika i adalah bilangan genap (ketika i % 2 == 0), maka program akan mencetak bahwa i adalah bilangan genap menggunakan pernyataan print(f"{i} adalah bilangan genap"). Jika i bukan bilangan genap (karena i % 2 != 0), maka program akan mencetak bahwa i adalah bilangan ganjil menggunakan pernyataan print(f"{i} adalah bilangan ganjil").

    Luaran yang dihasilkan:

    <img width="286" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/20ec6198-6d2c-4d60-b861-1351acf0d49e">


* **Program Pengecekan bilangan 2 dan 3**


    <img width="303" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/4da6da5b-989b-4df2-8801-69bef85e02f9">

    Penjelasan:

    Kode diatas merupakan kode untuk mengecek apakah apakah bilangan itu kelipatan 2 atau 3.
    * for number in range(8, 16): Pernyataan for ini menginisialisasi loop dengan variabel number yang akan diiterasi mulai dari 2 hingga 8.
    * pernyataan if number % 2 == 0 and number % 3 == 0: memeriksa apakah nilai number adalah kelipatan dari 2 dan 3. Jika number adalah kelipatan dari 2 dan 3, maka program akan mencetak bahwa number adalah kelipatan 2 dan 3 menggunakan pernyataan print(f"{number} adalah kelipatan 2 dan 3").
    * number % 2 == 0 memeriksa apakah number adalah kelipatan 2. jika ya akan mencetak bahwah number adalah kelipatan 2.
    * number % 3 == 0 memeriksa apakah number adalah keliparan 3, jika ya akan mencetak bahawah number adalah kelipatan 3.
    * jika number bukan kelipatan 2 atau pun 3, maka else akan dijalankan
      
      Luaran yang dihasilkan:
 
      
      <img width="248" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/475a7329-89a6-47d5-bd8c-312bebcd1612">



### 2.2 _Program if else pada while loop_


  <img width="602" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/08337736-7d6f-4d68-b486-d7aaaa554a88">

  Penjelasan:

  Kode diatas digunakan untuk membuat program yang berfungsi untuk menghitung jumlah angka genap dan ganjil. rentang_awal dan rentang_akhir menentukan rentang angka yang ingin kita hitung. jumlah_genap dan jumlah_ganjil diinisialisasi dengan nilai 0 untuk menyimpan jumlah angka genap dan ganjil dalam rentang tersebut. while angka <= rentang_akhir: while loop akan terus berjalan selama nilai angka masih dalam rentang yang ditentukan. Dalam loop, program memeriksa apakah angka adalah genap atau ganjil menggunakan pernyataan if else. Jika angka adalah genap (angka % 2 == 0), maka jumlah_genap akan bertambah satu. Jika tidak, angka adalah ganjil dan jumlah_ganjil akan bertambah satu. angka += 1  nilai angka akan bertambah satu demi satu.

  Luaran yang dihasilkan:
  
  <img width="282" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/a2a61919-6f2b-49e6-92c4-3604e749f59d">



## 3 _Buatlah sebuah variabel dengan tipe data array, kemudian tampilkan semua nilai dalam variabel tersebut menggunakan perulangan for_


<img width="409" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/8ce2d042-b438-43b7-af74-c96d921b177a">

Penjelasan:
Pada kode diatas kita membuat sebuah list dengan nama "my_array" yang berisi beberapa nilai. Kemudian kita akan menampilkan nilai dari list tersebut. print("Isi dari variabel my_array:") adalah pesan yang akan ditampilkan sebelum mencetak nilai dari list my_array. Menambahkan perulangan for yang berfungsi untuk melihat setiap elemen yang ada di dalam list my_array. print(item) digunakan untuk perulangan for, nilai dari item akan menjadi angka yang ada dalam list my_array. Instruksi ini akan mencetak nilai item.

Luaran yang dihasilkan:

<img width="156" alt="image" src="https://github.com/ThesaFebriani/Responsi-Proyek-PBO/assets/147154548/e2130b34-cc1a-4fb2-a44f-47d800d0022a">


