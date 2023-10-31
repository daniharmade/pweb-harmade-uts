<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dani Harmade</title>
    <link rel="icon" href="logo.dani.png" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/logobg.jpeg" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- TYPED JS -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <!-- <link href="/dist/output.css" rel="stylesheet" /> -->
  </head>
  <body>
    <div class="hero" id="detail">
      <!-- NAVBAR  -->
      <nav>
        <div class="logo">
          <a href="#detail"
            ><img src="assets/logoril.jpeg" alt="dani-logo"
          /></a>
        </div>
        <div class="menu-icon" id="humberger">
          <i class="ph ph-list"></i>
        </div>
        <ul id="menu-list" class="hidden">
          <li><a href="#detail">Home</a></li>
          <li><a href="#profile">Profile</a></li>
          <li><a href="#learn">Learn</a></li>
          <li><a href="#gallery-container">Gallery</a></li>
          <li><a href="#aktifitas">Activities</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>

      <!-- NAVBAR END -->

      <!-- HOME -->
      <div class="detail">
        <h3>Hello, My Name Is</h3>
        <h1>Dani Harmade</h1>
        <h2>Interested in <span class="typing-text"></span></h2>
        <p>
          I am currently a student at one of the State Universities in Riau with
          an interest in
          <span>Networking & Web Developer.</span>
        </p>

        <button>
          <a href="assets/resume.pdf" target="_blank" class="hub">RESUME</a>
        </button>
      </div>

      <div class="images">
        <img src="assets/Version control-cuate-ril.png" alt="Dani Harmade" />
      </div>
    </div>
    <!-- HOME END -->

    <!-- PROFILE ME -->
    <section class="about" id="profile">
      <div class="about-img">
        <img src="assets/madeyh.png" alt="" width="350px" />
      </div>

      <div class="about-text">
        <div class="tentang" id="tentang">
          <h2><span>ABOUT ME</span></h2>
          <h1>Let's get to know me...</h1>
          <p>
            Introducing my name Dani Harmade, born and raised in Pekanbaru. I am
            currently studying at Sultan Syarif Kasim Riau State Islamic
            University majoring in Information Systems. I have an interest in
            the field of Networking & Web Developer. I had an internship at PT
            Telkom Indonesia as IT Support and gained practical experience
            there. This internship experience strengthened my interest in
            technology.
          </p>
        </div>

        <div class="koneksi">
          <h2>Let's be Friends...!</h2>
          <p>
            Connect with me on various social media platforms, where you can
            easily keep up with the latest developments in my travels and
            projects. I really appreciate every opinions, stories and
            experiences that you share.
          </p>

          <div class="social" id="learn">
            <a href="https://github.com/daniharmade" target="_blank"
              ><i class="bx bxl-github"></i
            ></a>
            <a href="https://www.linkedin.com/in/daniharmade/" target="_blank"
              ><i class="bx bxl-linkedin-square"></i
            ></a>
            <a href="https://www.instagram.com/dani.harmade/" target="_blank"
              ><i class="bx bxl-instagram"></i
            ></a>
            <a
              href="https://www.youtube.com/channel/UC6k1jD6eKMEUN5sD4ICTrzw"
              target="_blank"
              ><i class="bx bxl-youtube"></i
            ></a>
          </div>
        </div>
      </div>
    </section>
    <!-- PROFILE END -->

    <!-- LEARN -->
    <section id="learning">
      <div class="main-container">
        <div class="judul-learning">
          <h1><span>LEARNING</span></h1>
          <h3>In the process of learning</h3>
        </div>

        <div class="grid-3">
          <!-- LEARNING 1 -->
          <div class="learning">
            <div class="learning-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  d="M24 5c-3.923 3.265-5.623 4.716-7.15 4.716-2.44 0-3.681-3.675-4.85-7.716-1.165 4.028-2.41 7.715-4.853 7.715-1.513 0-3.168-1.404-7.147-4.715 3.321 7.018 3 14.292 3 17h18c0-1.718-.478-9.65 3-17zm-16.853 6.715c2.295 0 3.787-1.64 4.853-3.761 1.064 2.122 2.556 3.762 4.85 3.762 1.121 0 2.188-.43 3.126-1.042-.432 1.907-.68 3.72-.82 5.326h-14.322c-.138-1.617-.38-3.423-.808-5.324.927.607 2 1.039 3.121 1.039zm-2.14 8.285c-.003-.593-.016-1.267-.047-2h14.065c-.032.745-.046 1.422-.047 2h-13.971z"
                />
              </svg>
            </div>
            <h4>UI/UX Design</h4>
            <p>
              User interface (UI) design involves visual elements such as
              layout, colors, and icons.
            </p>
          </div>

          <!-- LEARNING 2 -->
          <div class="learning">
            <div class="learning-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  d="M14 2v2h-4v-2h4zm2-2h-8v6h8v-6zm-12 20v2h-2v-2h2zm2-2h-6v6h6v-6zm16 2v2h-2v-2h2zm2-2h-6v6h6v-6zm-11-7v-3h-2v3h-9v5h2v-3h7v3h2v-3h7v3h2v-5h-9zm0 9v2h-2v-2h2zm2-2h-6v6h6v-6z"
                />
              </svg>
            </div>
            <h4>Networking</h4>
            <p>
              In the business world, networking can help you find customers and
              business partners.
            </p>
          </div>
          <!-- LEARN END -->

          <!-- LEARNING 3 -->
          <div class="learning">
            <div class="learning-icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1 16l-6-2.935v-2.131l6-2.934v2.199l-3.64 1.801 3.64 1.796v2.204zm2-8v2.199l3.64 1.801-3.64 1.796v2.204l6-2.935v-2.131l-6-2.934z"
                />
              </svg>
            </div>
            <h4>Web Dev</h4>
            <p>
              User experience, speed, and responsiveness are important aspects
              of web development.
            </p>
          </div>
        </div>
      </div>
    </section>
    <div class="gap-gallery" id="gallery-container"></div>

    <!-- GALLERY -->
    <div class="gallery-container">
      <div class="isi-gallery">
        <div class="judul" id="gallery">
          <h2>GALLERY</h2>
        </div>

        <div class="gallery">
          <img src="assets/foto1test.png" class="jumbo" />
          <div class="thumbnail">
            <img src="assets/foto1test.png" class="thumb" />
            <img src="assets/foto2test.png" class="thumb" />
            <img src="assets/foto3.jpeg" class="thumb" />
            <img src="assets/foto4.jpeg" class="thumb" />
            <img src="assets/foto5test.png" class="thumb" />
            <img src="assets/foto6.jpeg" class="thumb" />
          </div>
        </div>
      </div>
    </div>
    <div class="gap-aktifitas" id="aktifitas"></div>
    <!-- GALLEY END -->

    <!-- Aktifitas -->
    <div class="aktifitas-container">
      <div class="judul-aktifitas">
        <h1><span>My Activities</span></h1>
        <h4>All About My Activities</h4>
      </div>

      <div class="grid-3">
        <!-- AKTIFITAS 1 -->
        <div class="aktifitas">
          <div class="aktifitas-cover">
            <img src="assets/ukk.jpeg" alt="" />
          </div>

          <div class="aktifitas-info">
            <div class="aktifitas-title">
              <h4>Ujian Kompetensi Keahlian</h4>
              <a href="ujikom.html" class="aktifitas-link" target="_blank">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                  />
                </svg>
              </a>
            </div>

            <!-- <div class="aktifitas-tags">
              <div>Networking</div>
              <div>Programming</div>
            </div> -->

            <p>
              Ujian Kompetensi Keahlian TKJ syarat kelulusan dari SMK
              Muhammadiyah 2 Pekanbaru
            </p>
          </div>
        </div>

        <!-- AKTIFITAS 2 -->
        <div class="aktifitas">
          <div class="aktifitas-cover">
            <img src="assets/sertifmagang.jpeg" alt="" />
          </div>

          <div class="aktifitas-info">
            <div class="aktifitas-title">
              <h4>Praktek Kerja Lapangan</h4>
              <a href="magang.html" class="aktifitas-link" target="_blank">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                  />
                </svg>
              </a>
            </div>

            <!-- <div class="aktifitas-tags">
              <div>Networking</div>
              <div>Programming</div>
            </div> -->

            <p>
              Praktek Kerja Lapangan di PT. Telkom Indonesia Pekanbaru pada
              bulan Juli 2021 - Desember 2021
            </p>
          </div>
        </div>

        <!-- AKTIFITAS 3 -->
        <div class="aktifitas">
          <div class="aktifitas-cover">
            <img src="assets/sertifdts.png" alt="" />
          </div>

          <div class="aktifitas-info">
            <div class="aktifitas-title">
              <h4>Pelatihan Junior Network Administrator</h4>
              <a
                href="pelatihanjna.html"
                class="aktifitas-link"
                target="_blank"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                  />
                </svg>
              </a>
            </div>

            <!-- <div class="aktifitas-tags">
              <div>Networking</div>
              <div>Programming</div>
            </div> -->

            <p>
              Pelatihan di bidang Networking yang diselenggarakan oleh
              Digitalent pada bulan Juni 2023 - Juli 2023 secara Online
            </p>
          </div>
        </div>
      </div>

      <!-- Aktifitas 4 -->
      <div class="grid-3">
        <div class="aktifitas">
          <div class="aktifitas-cover">
            <img src="assets/panitiafortasi.jpeg" alt="" />
          </div>

          <div class="aktifitas-info">
            <div class="aktifitas-title">
              <h4>Panitia FORTASI 2023</h4>
              <a href="fortasi.html" class="aktifitas-link" target="_blank">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                  />
                </svg>
              </a>
            </div>

            <!-- <div class="aktifitas-tags">
              <div>Networking</div>
              <div>Programming</div>
            </div> -->

            <p>
              Panitia Forum Ta'aruf Sistem Informasi UIN Suska Riau 2023 Divisi
              Media dan Dokumentasi
            </p>
          </div>
        </div>

        <!-- AKTIFITAS 5 -->
        <div class="aktifitas">
          <div class="aktifitas-cover">
            <img src="assets/isnc.jpeg" alt="" />
          </div>

          <div class="aktifitas-info">
            <div class="aktifitas-title">
              <h4>Study Club ISNC Research</h4>
              <a href="studyclub.html" class="aktifitas-link" target="_blank">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                  />
                </svg>
              </a>
            </div>

            <!-- <div class="aktifitas-tags">
            <div>Networking</div>
            <div>Programming</div>
          </div> -->

            <p>
              Study Club yang bergerak dibidang Programming dan Networking yang
              membantu saya mendapatkan ilmu tambahan diluar jam perkuliahan
            </p>
          </div>
        </div>

        <!-- AKTIFITAS 6 -->
        <div class="aktifitas">
          <div class="aktifitas-cover">
            <img src="assets/bumasi.JPG" alt="" />
          </div>

          <div class="aktifitas-info">
            <div class="aktifitas-title">
              <h4>Buka Bersama Sistem Informasi</h4>
              <a href="bumasi.html" class="aktifitas-link" target="_blank">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                  />
                </svg>
              </a>
            </div>

            <p>Buka Bersama Sistem Informasi (BUMASI)</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Aktifitas END -->

    <!-- Kontak -->
    <div class="contact" id="contact">
      <div class="contact1">
        <div class="title">
          <h4>CONTACT ME</h4>
        </div>
        <h2>Send Message to Me</h2>

        <p>
          I'm glad to hear from you! Please feel free to contact me if you have
          <br />
          any questions, suggestions, or if you'd like to collaborate on <br />
          interesting projects.
        </p>

        <div class="form">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="nama">
            <label for="name">Nama</label><br />
            <input type="text" name="name" id="name" /><br />
          </div>

          <div class="email">
            <label for="email">Email</label><br />
            <input type="email" name="email" id="email" /><br />
          </div>

          <div class="message">
            <label for="message">Pesan</label><br />
            <textarea type="text" name="komentar" id="" rows="10"></textarea
            ><br />

            <div class="kirim">
              <button type="submit" name="submit">Kirim</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Kontak END -->

    <!-- FOOTER -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>Category</h4>
            <ul>
              <li><a href="#learn">Programming</a></li>
              <li><a href="#learn">Networking</a></li>
              <li><a href="#learn">UI/UX Designer</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#detail">Home</a></li>
              <li><a href="#profile">Profile</a></li>
              <li><a href="#gallery">Gallery</a></li>
              <li><a href="#aktifitas">Activities</a></li>
              <li><a href="#contact">Contacts</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="https://www.linkedin.com/in/daniharmade/" target="_blank"
                ><i class="bx bxl-linkedin-square"></i
              ></a>
              <a href="https://github.com/daniharmade" target="_blank"
                ><i class="bx bxl-github"></i
              ></a>
              <a href="https://www.instagram.com/dani.harmade/" target="_blank"
                ><i class="bx bxl-instagram"></i
              ></a>
              <a
                href="https://www.youtube.com/channel/UC6k1jD6eKMEUN5sD4ICTrzw"
                target="_blank"
                ><i class="bx bxl-youtube"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER END -->

    <!-- JS -->
    <script src="scripts.js"></script>
  </body>
</html>

<?php
//Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'contactuts') or die('connection failed');

if (isset($_POST['submit'])) {
  
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $komentar = mysqli_real_escape_string($conn, $_POST['komentar']);

    //Mengirimkan ke database
    $insert = mysqli_query($conn, "INSERT INTO `coment`(name, email, komentar) VALUES('$name','$email','$komentar')") or die('query failed');
}
?>

<!-- PHP CONTACT END -->
