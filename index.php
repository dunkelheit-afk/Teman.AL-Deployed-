<?php
// PHP code here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Landing Page - Teman.AL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="styles/css/index.css">
</head>
<body>

    <header>
        <div class="wrapper">
            <nav>
                <div class="logo">Teman.AL</div>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="#">Blog</a>
                    </li>

                    <li>
                        <a href="#">Contact</a>
                    </li>

                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            </nav>

            <!-- akhir dekstop menu -->

            <nav class="mobile-nav">
                <div class="logo">Teman.AL</div>
                <div class="menu-icon">
                    <img src="assets/images/menu-icon.svg" alt="" />
                </div>
            </nav>

            <div class="mobile-menu-container">
                <div class="close-icon">
                    <img src="assets/images/close-icon.svg" alt="" />
                </div>

                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="#">Blog</a>
                    </li>

                    <li>
                        <a href="#">Contact</a>
                    </li>

                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            </div>

            <!-- akhir mobile menu -->

            <div class="hero-section">
                <div class="left">
                    <h2>Halo, Selamat Datang</h2>
                    <h1>Lacak orang tersayang anda</h1>
                    <p>
                        Jasa untuk melacak maupun informasi berupa kepada penyandang Alzheimer
                    </p>

                    <a href="modules/registration" class="btn">Daftar</a>
                    <a href="modules/Login" class="btn">Login</a>
                </div>
                <div class="Right">
                    <img src="assets/images/2hp.png" alt="">
                </div>
            </div>
        </div>
    </header>

            <!-- Header beres -->

    <div class="bgkonten">
            <section class="penawaran">
                <div class="wrapper">
                <div class="tawar">
                    <h4> Pelayanan kami</h4>
                    <h2> Apa yang <br> kami Tawarkan</h2>
                </div>
                <div class="container">
                    <div class="kartu-produk">
                        <img src="assets/images/GPS.png" alt=""> 
                        <img src="assets/images/QRCODE.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>

            <!-- Penawaran produk beres -->
        
            <section class="team">
		<div class="center">
			<h1>Team Kami</h1>
		</div>

		<div class="team-content">
			<div class="box">
				<img src="assets/images/damss.gif">
				<h3>Adam Monhardi</h3>
				<h5>UI/UX &
          Frontend
          Developer</h5>
				<div class="icons">
          		    <a href="https://www.linkedin.com/in/adam-monhardi-a6918a215/"><i class="ri-linkedin-fill"></i></a>
					<a href="mailto:monhardia@gmail.com"><i class="ri-mail-fill"></i></a>
					<a href="https://www.instagram.com/mnhrdiadam?igsh=MWtkenhvenBqczk1Yg%3D%3D&utm_source=qr"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>

			<div class="box">
				<img src="assets/images/pung.gif">
				<h3>Januario Alexander</h3>
				<h5>Electrical Engineer</h5>
				<div class="icons">
                    <a href="https://www.linkedin.com/in/januario-alexander-palullungan-pasau-24b417246?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="ri-linkedin-fill"></i></a>
					<a href="mailto:januarioalexander12@gmail.com"><i class="ri-mail-fill"></i></a>
					<a href="https://www.instagram.com/janpasau?igsh=MWtrempoMnF2aGRpag=="><i class="ri-instagram-fill"></i></a>
				</div>
			</div>

			<div class="box">
				<img src="assets/images/pacas.gif">
				<h3>Casmika Saputra</h3>
				<h5>Quality <br> Controll</h5>
				<div class="icons">
                    <a href="https://www.linkedin.com/in/casmikasaputra/"><i class="ri-linkedin-fill"></i></a>
					<a href="mailto:casmika@telkomuniversity.ac.id"><i class="ri-mail-fill"></i></a>
					<a href=" https://bpe.telkomuniversity.ac.id/CMI/"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>

			<div class="box">
				<img src="assets/images/tere.gif">
				<h3>Theresia Regina Marbun</h3>
				<h5>Electrical Engineer</h5>
				<div class="icons">
                    <a href="https://www.linkedin.com/in/theresiareginam"><i class="ri-linkedin-fill"></i></a>
					<a href="mailto:theresiaregina21@gmail.com"><i class="ri-mail-fill"></i></a>
					<a href="https://www.instagram.com/theresiargn21?igsh=MWpzazM5Z3I0ZnVuZg=="><i class="ri-instagram-fill"></i></a>
				</div>
			</div>

      <div class="box">
				<img src="assets/images/bul.gif">
				<h3>Arsyad Faturrahman</h3>
				<h5>Backend Developer</h5>
				<div class="icons">
                    <a href="https://www.linkedin.com/in/arsyad-faturrahman-b5261217b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="ri-linkedin-fill"></i></a>
					<a href="mailto:arsyaddod123@gmail.com"><i class="ri-mail-fill"></i></a>
					<a href=" https://www.instagram.com/arsyadftr?igsh=azZxcW9vM3R0dDFr&utm_source=qr"><i class="ri-instagram-fill"></i></a>
				</div>
			</div>
		
	  <div class="box">
                <img src="assets/images/jong.gif">
				<h3>Salim Ammar Rasyid</h3>
				<h5>Software Engineer</h5>
				<div class="icons">
			        <a href="https://www.linkedin.com/in/salim-ammar-rasyid-355437246/"><i class="ri-linkedin-fill"></i></a>
					<a href="mailto:ammarrasyid2106@gmail.com"><i class="ri-mail-fill"></i></a>
					<a href="https://www.instagram.com/jeong_salim/"><i class="ri-instagram-fill"></i></a>
				</div>
        <div id="load-more-content"></div>
			</div>
		</div>
	</section>
            <!-- Team Kami beres hehehehe -->

         <footer>
                <div class="bgkonten2">
                    <section class="link-container">
                            <div class="link">
                                <h5>Home</h5>
                                <ul>
                                    <li><a href="#">Tentang Kami</a></li>
                                    <li><a href="#">Kontak Kami</a></li>
                                    <li><a href="#">Kebijakan Privasi dan Ketentuan</a></li>
                                </ul>
                            </div>
            
                            <div class="link">
                                <h5>Konten</h5>
                                <ul>
                                    <li><a href="modules/Login">Masuk</a></li>
                                    <li><a href="#">Unduh</a></li>
                                </ul>
                            </div>
            
                            <div class="link">
                                <h5>Kontak Team kami</h5>
                                <div class="sosial">
                                    <ul>
                                        <li><a href="mailto:temanalpkm2024@gmail.com"> <img src="assets/images/🦆 icon _profile circled_.png" alt="Email Icon"> temanalpkm2024@gmail.com</a></li>
                                        <li><a href="https://www.instagram.com/teman.al_pkm2024?igsh=ZWYwNnl5OHNxb2Vr&utm_source=qr"> <img src="assets/images/🦆 icon _instagram_.png" alt="Instagram Icon"> Teman.AL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </section>           
                            <p>This website is developed by Team Teman.AL PKM-KC ©2024</p>
                        </div>
                  
                </div>
            </footer>
            

            <!-- beress footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="styles/js/main.js"></script>
  </body>
</html>