<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="style.css">
    <title>WeTV</title>
</head>
<body>
    <header class="navbar">
        <div class="navleft"> 
            <li>
                <img src="img/Logo WeTV.png" height="90" alt="Netflix Logo">
            </li> 
            <li><a class="active" href="index.html">Beranda</a></li>
            <li class="dropdown"><a href="Kategori.html">Kategori</a>
                <div class="dropdown-content">
                    <p><a href="">Anime</a></p>
                    <p><a href=""> K-Drama</a></p>
                    <p><a href=""> Series</a></p>
                </div>
            </li>
            <li class="dropdown"><a href="Genre.html">Genre</a>
                <div class="dropdown-content">
                    <p><a href="">Action</a></p>
                    <p><a href="">Adventure</a></p>
                    <p><a href="">Animation</a></p>
                    <p><a href="">Biography</a></p>
                    <p><a href="">Comedy</a></p>
                    <p><a href="">Crime</a></p>
                    <p><a href="">Documentary</a></p>
                    <p><a href="">Drama</a></p>
                    <p><a href="">Family</a></p>
                    <p><a href="">Fantasy</a></p>
                    <p><a href="">History</a></p>
                    <p><a href="">Horror</a></p>
                    <p><a href="">Musical</a></p>
                    <p><a href="">Sci-fi</a></p>
                    <p><a href="">Sport</a></p>
                </div>
            </li>
        </div>
        
        <div class="navright">  
            <li>
                <div class="container">
                    <form action="" class="search-bar">
                        <input type="text" placeholder="search film" name="q">
                        <button type="submit"><img src="img/search.png"></button>
                    </form>
                </div>
            </li>   
            <li>
                <a href="#" class="btn btn-rounded">Sign In</a>
            </li>
        </div>  
    </header>


    <div class="main-content-wrapper">
        <center>
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">

                    <div class="slide first">
                        <img src="img/banner/inuyasha.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/banner/bannerLittleMom.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/banner/myLecturerMyHusband.webp" alt="">
                    </div>

                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>

                </div>
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
            </div>
        </center>
    
        <div class="poster-container">
            <div class="row">
                <div class="teksrekom">Untuk Kamu</div>
                <div class="column">
                    <img class="poster-img" src="img/Tiongkok/ratuProgram.webp" alt="">
                    <div class="judul">
                        Sang Ratu Program
                    </div>
                    <div class="genre">
                        <a href="">Drama</a>,
                        <a href="">Romansa</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Anime/onepiece.webp" alt="">
                    <div class="judul">
                        One Piece
                    </div>
                    <div class="genre">
                        <a href="">Aksi</a>,
                        <a href="">Petualangan</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Korea/terpesonaSenyumanmu.webp" alt="">
                    <div class="judul">
                        Terpesona Senyumanmu
                    </div>
                    <div class="genre">
                        <a href="">Drama</a>,
                        <a href="">Romansa</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Ori/littleMom.webp" alt="">
                    <div class="judul">
                        Little Mom
                    </div>
                    <div class="genre">
                        <a href="">Romansa</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Anime/db.webp" alt="">
                    <div class="judul">
                        Dragon Ball
                    </div>
                    <div class="genre">
                        <a href="">Aksi</a>,
                        <a href="">Petualangan</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <img class="poster-img" src="img/Tiongkok/ratuProgram.webp" alt="">
                    <div class="judul">
                        Sang Ratu Program
                    </div>
                    <div class="genre">
                        <a href="">Drama</a>,
                        <a href="">Romansa</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Anime/onepiece.webp" alt="">
                    <div class="judul">
                        One Piece
                    </div>
                    <div class="genre">
                        <a href="">Aksi</a>,
                        <a href="">Petualangan</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Korea/terpesonaSenyumanmu.webp" alt="">
                    <div class="judul">
                        Terpesona Senyumanmu
                    </div>
                    <div class="genre">
                        <a href="">Drama</a>,
                        <a href="">Romansa</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Ori/littleMom.webp" alt="">
                    <div class="judul">
                        Little Mom
                    </div>
                    <div class="genre">
                        <a href="">Romansa</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Anime/db.webp" alt="">
                    <div class="judul">
                        Dragon Ball
                    </div>
                    <div class="genre">
                        <a href="">Aksi</a>,
                        <a href="">Petualangan</a>
                    </div>
                </div>
            </div>
        </div>

        <center>
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">

                    <div class="slide first">
                        <img src="img/banner/inuyasha.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/banner/bannerLittleMom.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/banner/myLecturerMyHusband.webp" alt="">
                    </div>

                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                    </div>

                </div>
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                </div>
            </div>
        </center>

        <div class="poster-container">
            <div class="row">
                <div class="teksrekom">Untuk Kamu</div>
                <div class="column">
                    <img class="poster-img" src="img/Tiongkok/ratuProgram.webp" alt="">
                    <div class="judul">
                        Sang Ratu Program
                    </div>
                    <div class="genre">
                        <a href="">Drama</a>,
                        <a href="">Romansa</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Anime/onepiece.webp" alt="">
                    <div class="judul">
                        One Piece
                    </div>
                    <div class="genre">
                        <a href="">Aksi</a>,
                        <a href="">Petualangan</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Korea/terpesonaSenyumanmu.webp" alt="">
                    <div class="judul">
                        Terpesona Senyumanmu
                    </div>
                    <div class="genre">
                        <a href="">Drama</a>,
                        <a href="">Romansa</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Ori/littleMom.webp" alt="">
                    <div class="judul">
                        Little Mom
                    </div>
                    <div class="genre">
                        <a href="">Romansa</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Anime/db.webp" alt="">
                    <div class="judul">
                        Dragon Ball
                    </div>
                    <div class="genre">
                        <a href="">Aksi</a>,
                        <a href="">Petualangan</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <img class="poster-img" src="img/Tiongkok/ratuProgram.webp" alt="">
                    <div class="judul">
                        Sang Ratu Program
                    </div>
                    <div class="genre">
                        <a href="">Drama</a>,
                        <a href="">Romansa</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Anime/onepiece.webp" alt="">
                    <div class="judul">
                        One Piece
                    </div>
                    <div class="genre">
                        <a href="">Aksi</a>,
                        <a href="">Petualangan</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Korea/terpesonaSenyumanmu.webp" alt="">
                    <div class="judul">
                        Terpesona Senyumanmu
                    </div>
                    <div class="genre">
                        <a href="">Drama</a>,
                        <a href="">Romansa</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Ori/littleMom.webp" alt="">
                    <div class="judul">
                        Little Mom
                    </div>
                    <div class="genre">
                        <a href="">Romansa</a>
                    </div>
                </div>
                <div class="column">
                    <img class="poster-img" src="img/Anime/db.webp" alt="">
                    <div class="judul">
                        Dragon Ball
                    </div>
                    <div class="genre">
                        <a href="">Aksi</a>,
                        <a href="">Petualangan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  


        <script type="text/javascript">
            var counter= 1;
            setInterval(function(){
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if(counter >3){
                    counter=1;
                }
            },5000);
        </script>
    
</body>
    <div class="footer-container">
        <div class="footer">
            <div class="footer-heading footer-1">
                <a href="">Ketentuan Pelayanan</a>
                <a href="">Perjanjian Privasi</a>
                <a href="">Cookie Policy</a>
                <h3>Copyright ?? 2016 -2022 Image Future Investment (HK) Limited.</h3>
            </div>
            <div class="footer-heading footer-2">
                <a href="">Saran</a>
                <a href="">Pertanyaan yang sering diajukan</a>
            </div>
        </div>
    </div>
</html>