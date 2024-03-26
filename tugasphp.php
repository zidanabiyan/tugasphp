
<head>
    <title>Tugas PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand">PHP.KU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tugasphp.php" onmouseover="changeColor(this, true)" onmouseout="changeColor(this, false)" onclick="changeBackground(this)">Halaman Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="formbiodata.php" onmouseover="changeColor(this, true)" onmouseout="changeColor(this, false)" onclick="changeBackground(this)">Halaman Form Biodata</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    var isClicked = false;

    function changeColor(element, isHover) {
        if (!isClicked || element.classList.contains("active")) {
            if (isHover) {
                element.style.color = "#ffffff"; 
            } else {
                element.style.color = ""; 
            }
        }
    }

    function changeBackground(element) {
        if (!isClicked || element.classList.contains("active")) {
            var parentElement = element.parentElement;
            if (!isClicked) {
                parentElement.style.backgroundColor = "#a9a9a9"; 
            } else {
                parentElement.style.backgroundColor = ""; 
                isClicked = false;
            }
        }
    }
</script>


      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://img.freepik.com/free-photo/html-system-website-concept_23-2150376770.jpg?w=1380&t=st=1711479059~exp=1711479659~hmac=3fabe765cdf903f26850fcd960663e535d06b93496527b17b76bdd56215897ac" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://img.freepik.com/free-photo/programming-background-with-person-working-with-codes-computer_23-2150010125.jpg?t=st=1711479051~exp=1711479651~hmac=8ba7d2364ebfde3e65962aaad37136fc85048b2b8524ff297a37de879a250dc9" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://disruptive-doctors.com/wp-content/uploads/2024/02/p1-scaled.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              PHP
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            PHP (Hypertext Preprocessor) adalah bahasa pemrograman open-source yang umumnya digunakan untuk membangun aplikasi web dinamis dan interaktif. PHP dapat dijalankan pada server web dan dikombinasikan dengan HTML, CSS, dan JavaScript untuk membuat halaman web yang dinamis.  Saat ini, PHP sangat populer di kalangan web developer karena mudah dipelajari dan memiliki kemampuan yang cukup kuat. PHP juga mendukung banyak jenis database, seperti MySQL, PostgreSQL, dan Oracle sehingga memungkinkan pengembang untuk membuat aplikasi web yang lebih kompleks dan fungsional. 
            Tidak hanya itu, bahasa pemrograman ini juga memiliki banyak kerangka kerja (framework) yang dapat digunakan oleh pengembang untuk mempercepat proses pembuatan aplikasi web. Beberapa kerangka kerja PHP yang populer antara lain Laravel, CodeIgniter, dan Symfony. 
            Sebagai bahasa penulisan skrip atau bahasa yang mengotomatiskan eksekusi task, PHP sebenarnya mirip dengan JavaScript dan Python. Namun yang membedakannya adalah PHP digunakan untuk komunkasi di sisi server. Sedangkan, JavaScript digunakan untuk frontend dan backend, sera Python hanya untuk sisi server (backend). 
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              HTML
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            HTML adalah kependekan dari Hypertext Markup Language yang merupakan sebuah bahasa markup. HTML adalah kode untuk membuat struktur halaman suatu website yang menarik, saling terhubung satu dengan yang lainnya, dan yang pasti dapat diakses melalui internet. 
            Awalnya html ditemukan oleh Tim Berners-Lee pada tahun 1991. HTML adalah solusi untuk membantu ilmuwan dalam mengakses dokumen, namun kini html semakin berkembang pesat di dunia pemrograman web. 
            Bagi pemula yang ingin memulai belajar pemrograman web dan bingung belajar bahasa markup apa, HTML adalah jawabannya. HTML dianggap mudah dipahami oleh orang awam karena tag dasar html mudah dibaca dan diimplementasikan.  
            HTML biasanya ditempatkan atau disimpan pada sebuah file bernama file HTML. Isi dari file tersebut yaitu kombinasi simbol dan juga teks.
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Java Script
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            Tahukah kamu bahwa JavaScript adalah bahasa pemrograman yang digunakan dalam pengembangan website agar lebih dinamis dan interaktif. Kalau sebelumnya kamu hanya mengenal HTML dan CSS, nah sekarang kamu jadi tahu bahwa JavaScript dapat meningkatkan fungsionalitas pada halaman web. Bahkan dengan JavaScript ini kamu bisa membuat aplikasi, tools, atau bahkan game pada web.
            Bicara teknis, JavaScript atau kita singkat menjadi JS merupakan bahasa pemrograman jenis interpreter, sehingga kamu tidak memerlukan compiler untuk menjalankannya. JavaScript memiliki fitur-fitur seperti berorientasi objek, client-side, high-level programming, dan loosely typed.
            </div>
          </div>
        </div>
   
      
      <div class="row justify-content-center mb-4">
        <div class="col-md-6">
          <h4 class="text-center">Form Biodata</h4>
        </div>
      </div>
<head>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        form {
            width: 50%;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"], select {
            width: calc(100% - 12px);
            padding: 10px;
            margin: 5px 0 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #4CAF50;
        }

        button {
            background-color: #4CAF50; 
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            font-size: 16px;
        }

        button:hover {
            background-color: #899499; 
        }

        #hasil {
            margin-top: 20px;
            padding: 20px;
            border-radius: 4px;
            background-color: #ffffff;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        #hasil p {
            margin: 0;
        }

        caption {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            padding: 10px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #dddddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Masukkan Email Anda" required>
        <label for="jenkel">Jenis Kelamin</label>
        <select name="jenkel" id="jenkel" required>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat Anda" required>

        <label for="notel">No.Telepon</label>
        <input type="text" name="notel" id="notel" placeholder="Masukkan Nomor Telepon Anda" required>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jenkel = $_POST["jenkel"];
        $alamat = $_POST["alamat"];
        $notel = $_POST["notel"];

        echo "<div id='hasil'>";
        echo "<table>";
        echo "<tr><th>Nama</th><td>$nama</td></tr>";
        echo "<tr><th>Email</th><td>$email</td></tr>";
        echo "<tr><th>Jenis Kelamin</th><td>$jenkel</td></tr>";
        echo "<tr><th>Alamat</th><td>$alamat</td></tr>";
        echo "<tr><th>No. Telepon</th><td>$notel</td></tr>";
        echo "</table>";
        echo "</div>";
    }
    ?>
</body>



      </div>
      </div>
      <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 PHP.KU All rights reserved.</p>
        </div>
    </footer>
    
  
