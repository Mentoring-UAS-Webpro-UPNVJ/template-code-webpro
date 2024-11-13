<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MVC Boilerplate</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <nav class="nav">
        <div class="container nav-container">
            <a href="index.php" class="nav-brand">PHP MVC</a>
            <div class="nav-links">
                <a href="index.php" class="nav-link active">Home</a>
                <a href="index.php?controller=product&action=index" class="nav-link">Products</a>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="hero-content">
            <h1>PHP MVC Boilerplate</h1>
            <p class="tagline">Memulai project PHP dengan struktur yang bersih dan terorganisir</p>
            <div class="hero-buttons">
                <a href="#getting-started" class="btn">Get Started</a>
                <a href="#structure" class="btn btn-outline">Learn More</a>
            </div>
        </div>
    </div>

    <main class="container">
        <!-- Installation Guide Section -->
        <section class="installation">
            <h2><i class="fas fa-download"></i> Panduan Instalasi</h2>
            <div class="installation-steps">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3>Clone Repository</h3>
                    <p>Buka terminal atau command prompt, lalu jalankan perintah berikut:</p>
                    <div class="code-block">
                        <code>git clone https://github.com/username/nama-repo.git</code>
                    </div>
                    <div class="info-box">
                        <i class="fas fa-info-circle"></i>
                        <p>Jika belum memiliki Git, download dan install dari <a href="https://git-scm.com/downloads"
                                target="_blank">git-scm.com</a></p>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3>Setup Environment</h3>
                    <p>Siapkan environment development dengan langkah berikut:</p>
                    <ol class="setup-list">
                        <li>
                            <strong>Install XAMPP</strong>
                            <p>Download dan install XAMPP dari <a href="https://www.apachefriends.org/download.html"
                                    target="_blank">apachefriends.org</a></p>
                        </li>
                        <li>
                            <strong>Pindahkan Project</strong>
                            <p>Copy folder project ke directory:</p>
                            <div class="code-block">
                                <code>C:\xampp\htdocs\nama-project</code>
                            </div>
                        </li>
                        <li>
                            <strong>Setup Database</strong>
                            <p>Buat database baru di phpMyAdmin:</p>
                            <ul>
                                <li>Buka <code>localhost/phpmyadmin</code> di browser</li>
                                <li>Klik "New" untuk membuat database baru</li>
                                <li>Beri nama database sesuai keinginan</li>
                            </ul>
                        </li>
                    </ol>
                </div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3>Konfigurasi Project</h3>
                    <p>Setting konfigurasi dasar project:</p>
                    <ol class="setup-list">
                        <li>
                            <strong>Setup Environment File</strong>
                            <p>Copy file <code>.env.example</code> menjadi <code>.env</code></p>
                            <div class="code-block">
                                <code>copy .env.example .env</code>
                            </div>
                        </li>
                        <li>
                            <strong>Edit File .env</strong>
                            <p>Sesuaikan konfigurasi database:</p>
                            <div class="code-block">
                                <code>
                                DB_HOST=localhost
                                DB_USER=root
                                DB_PASS=
                                DB_NAME=nama_database
                                </code>
                            </div>
                        </li>
                        <li>
                            <strong>Jalankan Migrasi Database</strong>
                            <p>Buka terminal di folder project, lalu jalankan:</p>
                            <div class="code-block">
                                <code>php migrate.php migrate</code>
                            </div>
                        </li>
                    </ol>
                </div>

                <div class="step-card">
                    <div class="step-number">4</div>
                    <h3>Menjalankan Project</h3>
                    <ol class="setup-list">
                        <li>
                            <strong>Start XAMPP</strong>
                            <p>Nyalakan Apache dan MySQL di XAMPP Control Panel</p>
                        </li>
                        <li>
                            <strong>Akses Project</strong>
                            <p>Buka browser dan kunjungi:</p>
                            <div class="code-block">
                                <code>http://localhost/nama-project</code>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Struktur Project Section -->
        <section class="project-structure">
            <h2><i class="fas fa-sitemap"></i> Struktur Project</h2>
            <div class="structure-content">
                <div class="directory-tree">
                    <pre>
nama-project/
├── app/
│   ├── controllers/    # Controller untuk logika aplikasi
│   ├── models/         # Model untuk interaksi database
│   └── views/          # View untuk tampilan
├── config/             # File konfigurasi
├── database/
│   └── migrations/     # File migrasi database
├── public/
│   ├── css/           # File stylesheet
│   ├── js/            # File JavaScript
│   └── images/        # Gambar dan asset
├── utils/             # Helper dan utility
├── .env.example       # Template environment
├── .gitignore        # Git ignore file
├── index.php         # Entry point aplikasi
└── README.md         # Dokumentasi project
                    </pre>
                </div>
            </div>
        </section>

        <!-- Development Guide -->
        <section class="development-guide">
            <h2><i class="fas fa-code"></i> Panduan Development</h2>
            <div class="guide-grid">
                <div class="guide-card">
                    <h3>Membuat Controller Baru</h3>
                    <p>Buat file di <code>app/controllers/</code> dengan format:</p>
                    <div class="code-block">
                        <code>
class NamaController {
    public function index() {
        // your code here
    }
}
                        </code>
                    </div>
                </div>

                <div class="guide-card">
                    <h3>Membuat Model Baru</h3>
                    <p>Buat file di <code>app/models/</code> dengan format:</p>
                    <div class="code-block">
                        <code>
class NamaModel {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
}
                        </code>
                    </div>
                </div>

                <div class="guide-card">
                    <h3>Membuat View Baru</h3>
                    <p>Buat file di <code>app/views/nama_folder/</code> dengan format:</p>
                    <div class="code-block">
                        <code>
&lt;?php require_once 'app/views/layouts/header.php'; ?&gt;

&lt;div class="container"&gt;
    // your content here
&lt;/div&gt;

&lt;?php require_once 'app/views/layouts/footer.php'; ?&gt;
                        </code>
                    </div>
                </div>
            </div>
        </section>

        <!-- Troubleshooting -->
        <section class="troubleshooting">
            <h2><i class="fas fa-wrench"></i> Troubleshooting</h2>
            <div class="trouble-grid">
                <div class="trouble-card">
                    <h3>Error Database Connection</h3>
                    <ul>
                        <li>Pastikan XAMPP sudah running</li>
                        <li>Cek konfigurasi di file .env</li>
                        <li>Pastikan database sudah dibuat</li>
                    </ul>
                </div>

                <div class="trouble-card">
                    <h3>Page Not Found</h3>
                    <ul>
                        <li>Cek URL yang diakses</li>
                        <li>Pastikan controller dan method ada</li>
                        <li>Periksa file .htaccess</li>
                    </ul>
                </div>

                <div class="trouble-card">
                    <h3>Bantuan Lebih Lanjut</h3>
                    <p>Jika mengalami masalah, bisa:</p>
                    <ul>
                        <li>Tanyakan ke dosen/asisten</li>
                        <li>Buka issue di GitHub</li>
                        <li>Cek error log di folder logs</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <p>Created with ❤️ for Web Programming Final Project</p>
            <div class="footer-links">
                <a href="#getting-started">Getting Started</a>
                <a href="#structure">Structure</a>
                <a href="index.php?controller=product&action=index">Demo</a>
            </div>
        </div>
    </footer>

    <script src="public/js/navbar-scroll.js"></script>
</body>

</html>