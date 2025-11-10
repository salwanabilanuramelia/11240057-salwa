<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>11240057 - Website Pribadi</title>
    <style>
        body {
            background-color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 1200px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .menu th {
            background-color: #66c2ff;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 18px;
        }
        .menu td {
            padding: 8px;
        }
        .menu a {
            text-decoration: none;
            color: black;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 6px;
            border-radius: 5px;
        }
        .menu a:hover {
            background-color: #cceeff;
        }
        .content {
            text-align: center;
            vertical-align: top;
            padding: 20px;
        }
        .footer img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        img {
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <table border="1" cellspacing="0" cellpadding="0">
        <!-- Header -->
        <tr>
            <td colspan="2" height="250">
                <img src="images/header.jpg" alt="Header" width="100%" height="250">
            </td>
        </tr>

        <!-- Main Content -->
        <tr>
            <!-- Sidebar Menu -->
            <td width="200" valign="top">
                <table class="menu" border="1" width="100%" cellspacing="0" cellpadding="0">
                    <tr><th>MENU</th></tr>
                    <tr><td><a href="index.php"><img src="images/home.jpg" width="20" height="20" alt=""> BERANDA</a></td></tr>
                    <tr><td><a href="index.php?menu=profil"><img src="images/profil.jpg" width="20" height="20" alt=""> PROFIL</a></td></tr>
                    <tr><td><a href="index.php?menu=cv"><img src="images/curvi.jpg" width="20" height="20" alt=""> CV</a></td></tr>
                    <tr><td><a href="index.php?menu=galeri"><img src="images/galeri.jpg" width="20" height="20" alt=""> GALERI</a></td></tr>
                </table>
            </td>

            <!-- Content Area -->
            <td class="content">
                <?php
                if (isset($_GET['menu'])) {
                    $menu = $_GET['menu'];
                    if ($menu == 'profil') {
                        include "profil.html";
                    } elseif ($menu == 'cv') {
                        include "cv.html";
                    } elseif ($menu == 'galeri') {
                        include "galeri.html";
                    }
                } else {
                    echo "
                        <div style='text-align:center; font-family: Arial, sans-serif; padding: 40px; background-color:#f0f9ff; border-radius:10px;'>
                            <h2 style='color:#007acc;'>✨ Selamat Datang di Website Pribadi Saya ✨</h2>
                            <p>Hai, saya <b>Salwa Nabila Nuramelia</b> — senang sekali kamu mampir ke sini! 
                            Melalui situs ini, kamu bisa mengetahui profil saya, melihat perjalanan akademik dan pengalaman kerja saya di halaman CV, 
                            serta menikmati galeri foto dari berbagai aktivitas saya.</p>
                            <p>Semoga kamu betah menjelajahi halaman ini 💙</p>
                        </div>
                    ";
                }
                ?>
            </td>
        </tr>

        <!-- Footer -->
        <tr class="footer">
            <td colspan="2" height="150">
                <img src="images/footer.jpg" alt="Footer">
            </td>
        </tr>
    </table>

</body>
</html>
