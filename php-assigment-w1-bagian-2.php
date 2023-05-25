<?php
class Rumus {
    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }

    public static function luasLingkaran($jariJari) {
        return 3.14 * $jariJari * $jariJari;
    }

    public static function luasJajargenjang($alas, $tinggi) {
        return $alas * $tinggi;
    }

    public static function volumeKubus($sisi) {
        return $sisi * $sisi * $sisi;
    }

    public static function volumeBalok($panjang, $lebar, $tinggi) {
        return $panjang * $lebar * $tinggi;
    }

    public static function viskositasLarutan($gaya, $luasPermukaan, $kecepatan) {
        return $gaya / ($luasPermukaan * $kecepatan);
    }

    public static function waktuPerjalanan($jarak, $kecepatan) {
        return $jarak / $kecepatan;
    }

    public static function kelilingPersegi($sisi) {
        return 4 * $sisi;
    }

    public static function kelilingLingkaran($jariJari) {
        return 2 * 3.14 * $jariJari;
    }

    public static function kelilingSegitiga($sisi1, $sisi2, $sisi3) {
        return $sisi1 + $sisi2 + $sisi3;
    }

    public static function volumeTabung($jariJari, $tinggi) {
        return 3.14 * $jariJari * $jariJari * $tinggi;
    }

    public static function volumeBola($jariJari) {
        return (4 / 3) * 3.14 * $jariJari * $jariJari * $jariJari;
    }

    public static function luasTrapesium($alasAtas, $alasBawah, $tinggi) {
        return (($alasAtas + $alasBawah) * $tinggi) / 2;
    }

    public static function volumePrismaSegitiga($alasSegitiga, $tinggiSegitiga, $tinggiPrisma) {
        return ($alasSegitiga * $tinggiSegitiga * $tinggiPrisma) / 2;
    }

    public static function kelilingPersegiPanjang($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }

    public static function luasBelahKetupat($diagonal1, $diagonal2) {
        return ($diagonal1 * $diagonal2) / 2;
    }

    public static function kelilingBelahKetupat($sisi) {
        return 4 * $sisi;
    }

    public static function volumeLimasSegitiga($alasSegitiga, $tinggiSegitiga, $tinggiLimas) {
        return ($alasSegitiga * $tinggiSegitiga * $tinggiLimas) / 6;
    }

    public static function luasPermukaanKerucut($jariJari, $tinggiKerucut) {
        return 3.14 * $jariJari * ($jariJari + sqrt($jariJari * $jariJari + $tinggiKerucut * $tinggiKerucut));
    }

    public static function volumeKerucut($jariJari, $tinggiKerucut) {
        return (1 / 3) * 3.14 * $jariJari * $jariJari * $tinggiKerucut;
    }

    public static function kelilingTrapesium($sisi1, $sisi2, $sisi3, $sisi4) {
        return $sisi1 + $sisi2 + $sisi3 + $sisi4;
    }

    public static function kilometerToDesimeter($kilometer) {
        return $kilometer * 10000;
    }

    public static function tonToGram($ton) {
        return $ton * 1000000;
    }
}

/*
class ChemistryFormulas {
    public static function massaMol($massaZat, $jumlahMol) {
        return $massaZat / $jumlahMol;
    }

    public static function jumlahMol($massaZat, $massaMol) {
        return $massaZat / $massaMol;
    }

    public static function persentaseMassaUnsur($massaUnsur, $massaSenyawa) {
        return ($massaUnsur / $massaSenyawa) * 100;
    }

    public static function persentaseMassaLarutan($massaKomponen, $massaLarutan) {
        return ($massaKomponen / $massaLarutan) * 100;
    }

    public static function konsentrasiMol($jumlahMol, $volumeLarutan) {
        return $jumlahMol / $volumeLarutan;
    }

    public static function volumeLarutan($jumlahMol, $konsentrasiMol) {
        return $jumlahMol / $konsentrasiMol;
    }

    public static function kecepatanReaksi($perubahanKonsentrasi, $perubahanWaktu) {
        return $perubahanKonsentrasi / $perubahanWaktu;
    }

    public static function reaksiStoikiometri($koefisienReaksi, $jumlahMolReaktan) {
        $jumlahMolProduk = $koefisienReaksi * $jumlahMolReaktan;
        return $jumlahMolProduk;
    }

    public static function kecepatanPengendapan($massaEndapan, $waktu) {
        $kecepatanPengendapan = $massaEndapan / $waktu;
        return $kecepatanPengendapan;
    }

    public static function tekananOsmotik($jumlahMol, $konstantaOsmotik, $suhu) {
        $tekananOsmotik = $jumlahMol * $konstantaOsmotik * $suhu;
        return $tekananOsmotik;
    }

    public static function lajuReaksi($perubahanKonsentrasi, $perubahanWaktu) {
        $lajuReaksi = $perubahanKonsentrasi / $perubahanWaktu;
        return $lajuReaksi;
    }

    public static function pH($konsentrasiH) {
        $pH = -log10($konsentrasiH);
        return $pH;
    }

    public static function pOH($konsentrasiOH) {
        $pOH = -log10($konsentrasiOH);
        return $pOH;
    }

    public static function panasReaksi($massaZat, $kalorJenis, $perubahanSuhu) {
        $panasReaksi = $massaZat * $kalorJenis * $perubahanSuhu;
        return $panasReaksi;
    }

    public static function kelarutan($jumlahMolZat, $volumeLarutan) {
        $kelarutan = $jumlahMolZat / $volumeLarutan;
        return $kelarutan;
    }

    public static function massaMol($massaZat, $jumlahMol) {
        $massaMol = $massaZat / $jumlahMol;
        return $massaMol;
    }

    public static function jumlahMol($massaZat, $massaMol) {
        $jumlahMol = $massaZat / $massaMol;
        return $jumlahMol;
    }

    public static function persentaseMassaUnsur($massaUnsur, $massaSenyawa) {
        $persentaseMassaUnsur = ($massaUnsur / $massaSenyawa) * 100;
        return $persentaseMassaUnsur;
    }

    public static function persentaseMassaLarutan($massaKomponen, $massaLarutan) {
        $persentaseMassa = ($massaKomponen / $massaLarutan) * 100;
        return $persentaseMassa;
    }

    public static function konsentrasiMol($jumlahMol, $volumeLarutan) {
        $konsentrasiMol = $jumlahMol / $volumeLarutan;
        return $konsentrasiMol;
    }

    public static function volumeLarutan($jumlahMol, $konsentrasiMol) {
        $volumeLarutan = $jumlahMol / $konsentrasiMol;
        return $volumeLarutan;
    }

    public static function energiReaksi($energiProduk, $energiReaktan) {
        $energiReaksi = $energiProduk - $energiReaktan;
        return $energiReaksi;
    }

    public static function tekananGas($jumlahMol, $konstantaGas, $suhu, $volume) {
        $tekananGas = ($jumlahMol * $konstantaGas * $suhu) / $volume;
        return $tekananGas;
    }

    public static function volumeGas($jumlahMol, $konstantaGas, $suhu, $tekanan) {
        $volumeGas = ($jumlahMol * $konstantaGas * $suhu) / $tekanan;
        return $volumeGas;
    }

    public static function massaReaktan($jumlahMolReaktan, $massaMolReaktan) {
        $massaReaktan = $jumlahMolReaktan * $massaMolReaktan;
        return $massaReaktan;
    }

    public static function massaProduk($jumlahMolProduk, $massaMolProduk) {
        $massaProduk = $jumlahMolProduk * $massaMolProduk;
        return $massaProduk;
    }

    public static function kecepatanReaksi($perubahanKonsentrasi, $perubahanWaktu) {
        $kecepatanReaksi = $perubahanKonsentrasi / $perubahanWaktu;
        return $kecepatanReaksi;

    }

     public static function kecepatanPengendapan($massaEndapan, $waktu) {
        $kecepatanPengendapan = $massaEndapan / $waktu;
        return $kecepatanPengendapan;
    }

    public static function tekananOsmotik($jumlahMol, $konstantaOsmotik, $suhu) {
        $tekananOsmotik = $jumlahMol * $konstantaOsmotik * $suhu;
        return $tekananOsmotik;
    }

    public static function lajuReaksi($perubahanKonsentrasi, $perubahanWaktu) {
        $lajuReaksi = $perubahanKonsentrasi / $perubahanWaktu;
        return $lajuReaksi;
    }

    public static function pHlarutan($konsentrasiHidrogen) {
        $pH = -log10($konsentrasiHidrogen);
        return $pH;
    }

    public static function pOHlarutan($konsentrasiHidroksida) {
        $pOH = -log10($konsentrasiHidroksida);
        return $pOH;
    }

    public static function panasReaksi($massaZat, $kalorJenis, $perubahanSuhu) {
        $panasReaksi = $massaZat * $kalorJenis * $perubahanSuhu;
        return $panasReaksi;
    }

    public static function kelarutanZat($jumlahMolZat, $volumeLarutan) {
        $kelarutan = $jumlahMolZat / $volumeLarutan;
        return $kelarutan;
    }
     public static function massaJenis($massa, $volume) {
        $massaJenis = $massa / $volume;
        return $massaJenis;
    }

    public static function massaLarutan($massaSolute, $massaSolvent) {
        $massaLarutan = $massaSolute + $massaSolvent;
        return $massaLarutan;
    }

    public static function konsentrasiPersen($jumlahSolute, $jumlahSolvent) {
        $konsentrasiPersen = ($jumlahSolute / $jumlahSolvent) * 100;
        return $konsentrasiPersen;
    }

    public static function energiAktivasi($konstantaGas, $suhu, $faktorFrekuensi) {
        $energiAktivasi = $konstantaGas * $suhu * $faktorFrekuensi;
        return $energiAktivasi;
    }

    public static function massaMolar($massa, $jumlahMol) {
        $massaMolar = $massa / $jumlahMol;
        return $massaMolar;
    }

    public static function massaJenisLarutan($massaLarutan, $volumeLarutan) {
        $massaJenisLarutan = $massaLarutan / $volumeLarutan;
        return $massaJenisLarutan;
    }

    public static function konstantaGasIdeal($tekanan, $volume, $jumlahMol, $suhu) {
        $konstantaGasIdeal = ($tekanan * $volume) / ($jumlahMol * $suhu);
        return $konstantaGasIdeal;
    }

    public static function suhuReaksi($energiAktivasi, $konstantaGas, $faktorFrekuensi) {
        $suhuReaksi = $energiAktivasi / ($konstantaGas * $faktorFrekuensi);
        return $suhuReaksi;
    }

    public static function volumeMol($jumlahMol, $konstantaGas, $suhu) {
        $volumeMol = $jumlahMol * ($konstantaGas * $suhu);
        return $volumeMol;
    }

    public static function konstantaGasMolar($konstantaGas, $massaMol) {
        $konstantaGasMolar = $konstantaGas / $massaMol;
        return $konstantaGasMolar;
    }

    public static function massaZat($jumlahMol, $massaMol) {
        $massaZat = $jumlahMol * $massaMol;
        return $massaZat;
    }

    public static function kelarutan($massaZat, $massaPelarut) {
        $kelarutan = $massaZat / $massaPelarut;
        return $kelarutan;
    }

    public static function konsentrasiPersen($jumlahSolute, $jumlahSolvent) {
        $konsentrasiPersen = ($jumlahSolute / $jumlahSolvent) * 100;
        return $konsentrasiPersen;
    }

    public static function energiAktivasi($konstantaGas, $suhu, $faktorFrekuensi) {
        $energiAktivasi = $konstantaGas * $suhu * $faktorFrekuensi;
        return $energiAktivasi;
    }

    public static function massaMolar($massa, $jumlahMol) {
        $massaMolar = $massa / $jumlahMol;
        return $massaMolar;
    }

    public static function massaJenisLarutan($massaLarutan, $volumeLarutan) {
        $massaJenisLarutan = $massaLarutan / $volumeLarutan;
        return $massaJenisLarutan;
    }
}
*/

// Mengambil input dari halaman HTML untuk setiap rumus
if (isset($_POST['hitungPersegi'])) {
    $sisiPersegi = $_POST['sisiPersegi'];
    $luasPersegi = Rumus::luasPersegi($sisiPersegi);
}

if (isset($_POST['hitungLingkaran'])) {
    $jariLingkaran = $_POST['jariLingkaran'];
    $luasLingkaran = Rumus::luasLingkaran($jariLingkaran);
}

if (isset($_POST['hitungJajargenjang'])) {
    $alasJajargenjang = $_POST['alasJajargenjang'];
    $tinggiJajargenjang = $_POST['tinggiJajargenjang'];
    $luasJajargenjang = Rumus::luasJajargenjang($alasJajargenjang, $tinggiJajargenjang);
}

if (isset($_POST['hitungVolumeKubus'])) {
    $sisiKubus = $_POST['sisiKubus'];
    $volumeKubus = Rumus::volumeKubus($sisiKubus);
}

if (isset($_POST['hitungVolumeBalok'])) {
    $panjangBalok = $_POST['panjangBalok'];
    $lebarBalok = $_POST['lebarBalok'];
    $tinggiBalok = $_POST['tinggiBalok'];
    $volumeBalok = Rumus::volumeBalok($panjangBalok, $lebarBalok, $tinggiBalok);
}

if (isset($_POST['hitungViskositasLarutan'])) {
    $gayaViskositas = $_POST['gayaViskositas'];
    $luasViskositas = $_POST['luasViskositas'];
    $kecepatanViskositas = $_POST['kecepatanViskositas'];
    $viskositasLarutan = Rumus::viskositasLarutan($gayaViskositas, $luasViskositas, $kecepatanViskositas);
}

if (isset($_POST['hitungWaktuPerjalanan'])) {
    $jarakPerjalanan = $_POST['jarakPerjalanan'];
    $kecepatanPerjalanan = $_POST['kecepatanPerjalanan'];
    $waktuPerjalanan = Rumus::waktuPerjalanan($jarakPerjalanan, $kecepatanPerjalanan);
}

if (isset($_POST['kelilingPersegi'])) {
    $sisi = $_POST['sisi'];
    $kelilingPersegi = Rumus::kelilingPersegi($sisi);
}

if (isset($_POST['kelilingLingkaran'])) {
    $jarijari = $_POST['jariJari'];
    $kelilingLingkaran = Rumus::kelilingLingkaran($jarijari);
}

if (isset($_POST['kelilingSegitiga'])) {
    $sisi1 = $_POST['sisi1'];
    $sisi2 = $_POST['sisi2'];
    $sisi3 = $_POST['sisi3'];
    $kelilingSegitiga = Rumus::kelilingSegitiga($sisi1, $sisi2, $sisi3);
}

if (isset($_POST['volumeTabung'])) {
    $jariJari = $_POST['jariJari'];
    $tinggi = $_POST['tinggi'];
    $volumeTabung = Rumus::volumeTabung($jariJari, $tinggi);
}

if (isset($_POST['volumeBola'])) {
    $jariJari = $_POST['jariJari'];
    $volumeBola = Rumus::volumeBola($jariJari);
}

if (isset($_POST['luasTrapesium'])) {
    $alasAtas = $_POST['alasAtas'];
    $alasBawah = $_POST['alasBawah'];
    $tinggi = $_POST['tinggi'];
    $luasTrapesium = Rumus::luasTrapesium($alasAtas, $alasBawah, $tinggi);
}

if (isset($_POST['volumePrismaSegitiga'])) {
    $alasSegitiga = $_POST['alasSegitiga'];
    $tinggiSegitiga = $_POST['tinggiSegitiga'];
    $tinggiPrisma = $_POST['tinggiPrisma'];
    $volumePrismaSegitiga = Rumus::volumePrismaSegitiga($alasSegitiga, $tinggiSegitiga, $tinggiPrisma);
}

if (isset($_POST['kelilingPersegiPanjang'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $kelilingPersegiPanjang = Rumus::kelilingPersegiPanjang($panjang, $lebar);
}

if (isset($_POST['luasBelahKetupat'])) {
    $diagonal1 = $_POST['diagonal1'];
    $diagonal2 = $_POST['diagonal2'];
    $luasBelahKetupat = Rumus::luasBelahKetupat($diagonal1, $diagonal2);
}

if (isset($_POST['kelilingBelahKetupat'])) {
    $sisi = $_POST['sisi'];
    $kelilingBelahKetupat = Rumus::kelilingBelahKetupat($sisi);
}

if (isset($_POST['volumeLimasSegitiga'])) {
    $alasSegitiga = $_POST['alasSegitiga'];
    $tinggiSegitiga = $_POST['tinggiSegitiga'];
    $tinggiLimas = $_POST['tinggiLimas'];
    $volumeLimasSegitiga = Rumus::volumeLimasSegitiga($alasSegitiga, $tinggiSegitiga, $tinggiLimas);
}

if (isset($_POST['luasPermukaanKerucut'])) {
    $jariJari = $_POST['jariJari'];
    $tinggiKerucut = $_POST['tinggiKerucut'];
    $luasPermukaanKerucut = Rumus::luasPermukaanKerucut($jariJari, $tinggiKerucut);
}

if (isset($_POST['volumeKerucut'])) {
    $jariJari = $_POST['jariJari'];
    $tinggiKerucut = $_POST['tinggiKerucut'];
    $volumeKerucut = Rumus::volumeKerucut($jariJari, $tinggiKerucut);
}

if (isset($_POST['kelilingTrapesium'])) {
    $sisi1 = $_POST['sisi1'];
    $sisi2 = $_POST['sisi2'];
    $sisi3 = $_POST['sisi3'];
    $sisi4 = $_POST['sisi4'];
    $kelilingTrapesium = Rumus::kelilingTrapesium($sisi1, $sisi2, $sisi3, $sisi4);
}

if (isset($_POST['kilometerToDesimeter'])) {
    $kilometer = $_POST['kilometer'];
    $kilometerToDesimeter = Rumus::kilometerToDesimeter($kilometer);
}

if (isset($_POST['tonToGram'])) {
    $ton = $_POST['ton'];
    $tonToGram = Rumus::tonToGram($ton);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>KALKULATOR Rumus Matematika dan Fisika</title>
</head>
<body>
    <h2>Kalkulator Rumus Matematika , Fisika dan Kimia Sederhana </h2>

    <h3>Rumus Menghitung Luas Persegi</h3>
    <form method="POST" action="">
        <label for="sisiPersegi">Sisi Persegi:</label>
        <input type="number" name="sisiPersegi" id="sisiPersegi" required>
        <br><br>
        <input type="submit" name="hitungPersegi" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitungPersegi'])) {
        echo "<p>Luas Persegi dengan sisi $sisiPersegi adalah $luasPersegi</p>";
    }
    ?>

    <h3>Rumus Menghitung Luas Lingkaran</h3>
    <form method="POST" action="">
        <label for="jariLingkaran">Jari-Jari Lingkaran:</label>
        <input type="number" name="jariLingkaran" id="jariLingkaran" required>
        <br><br>
        <input type="submit" name="hitungLingkaran" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitungLingkaran'])) {
        echo "<p>Luas Lingkaran dengan jari-jari $jariLingkaran adalah $luasLingkaran</p>";
    }
    ?>

    <h3>Rumus Menghitung Luas Jajargenjang</h3>
    <form method="POST" action="">
        <label for="alasJajargenjang">Alas Jajargenjang:</label>
        <input type="number" name="alasJajargenjang" id="alasJajargenjang" required>
        <br><br>
        <label for="tinggiJajargenjang">Tinggi Jajargenjang:</label>
        <input type="number" name="tinggiJajargenjang" id="tinggiJajargenjang" required>
        <br><br>
        <input type="submit" name="hitungJajargenjang" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitungJajargenjang'])) {
        echo "<p>Luas Jajargenjang dengan alas $alasJajargenjang dan tinggi $tinggiJajargenjang adalah $luasJajargenjang</p>";
    }
    ?>

    <h3>Rumus Menghitung Volume Kubus</h3>
    <form method="POST" action="">
        <label for="sisiKubus">Sisi Kubus:</label>
        <input type="number" name="sisiKubus" id="sisiKubus" required>
        <br><br>
        <input type="submit" name="hitungVolumeKubus" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitungVolumeKubus'])) {
        echo "<p>Volume Kubus dengan sisi $sisiKubus adalah $volumeKubus</p>";
    }
    ?>

    <h3>Rumus Menghitung Volume Balok</h3>
    <form method="POST" action="">
        <label for="panjangBalok">Panjang Balok:</label>
        <input type="number" name="panjangBalok" id="panjangBalok" required>
        <br><br>
        <label for="lebarBalok">Lebar Balok:</label>
        <input type="number" name="lebarBalok" id="lebarBalok" required>
        <br><br>
        <label for="tinggiBalok">Tinggi Balok:</label>
        <input type="number" name="tinggiBalok" id="tinggiBalok" required>
        <br><br>
        <input type="submit" name="hitungVolumeBalok" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitungVolumeBalok'])) {
        echo "<p>Volume Balok dengan panjang $panjangBalok, lebar $lebarBalok, dan tinggi $tinggiBalok adalah $volumeBalok</p>";
    }
    ?>

    <h3>Rumus Menghitung Viskositas Larutan</h3>
    <form method="POST" action="">
        <label for="gayaViskositas">Gaya:</label>
        <input type="number" name="gayaViskositas" id="gayaViskositas" required>
        <br><br>
        <label for="luasViskositas">Luas Permukaan Larutan:</label>
        <input type="number" name="luasViskositas" id="luasViskositas" required>
        <br><br>
        <label for="kecepatanViskositas">Kecepatan Larutan:</label>
        <input type="number" name="kecepatanViskositas" id="kecepatanViskositas" required>
        <br><br>
        <input type="submit" name="hitungViskositasLarutan" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitungViskositasLarutan'])) {
        echo "<p>Viskositas Larutan dengan gaya $gayaViskositas, luas $luasViskositas, dan kecepatan $kecepatanViskositas adalah $viskositasLarutan</p>";
    }
    ?>

    <h3>Rumus Menghitung Waktu Perjalanan</h3>
    <form method="POST" action="">
        <label for="jarakPerjalanan">Jarak Perjalanan:</label>
        <input type="number" name="jarakPerjalanan" id="jarakPerjalanan" required>
        <br><br>
        <label for="kecepatanPerjalanan">Kecepatan Perjalanan:</label>
        <input type="number" name="kecepatanPerjalanan" id="kecepatanPerjalanan" required>
        <br><br>
        <input type="submit" name="hitungWaktuPerjalanan" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitungWaktuPerjalanan'])) {
        echo "<p>Waktu Perjalanan dengan jarak $jarakPerjalanan dan kecepatan $kecepatanPerjalanan adalah $waktuPerjalanan</p>";
    }
    ?>

<h3>Rumus Menghitung Keliling Persegi</h3>
    <form method="POST" action="">
        <label for="sisi">Sisi Persegi:</label>
        <input type="number" name="sisi" id="sisi" required>
        <br><br>
        <input type="submit" name="kelilingPersegi" value="Hitung">
    </form>

    <?php
    if (isset($_POST['kelilingPersegi'])) {
        echo "<p>Keliling persegi dengan sisi $sisi adalah $kelilingPersegi</p>";
    }
    ?>

    <!-- Form untuk menghitung keliling lingkaran -->
<h3>Menghitung Keliling Lingkaran</h3>
<form method="POST" action="">
    <label for="jariJari">Jari-jari:</label>
    <input type="number" name="jariJari" id="jariJari" required>
    <br><br>
    <input type="submit" name="kelilingLingkaran" value="Hitung">
</form>

<?php
    if (isset($_POST['kelilingLingkaran'])) {
        $jariJari = $_POST['jariJari'];
        $kelilingLingkaran = 2 * 3.14 * $jariJari;
        echo "<p>Keliling lingkaran dengan jari-jari $jariJari adalah $kelilingLingkaran</p>";
    }
?>

<!-- Form untuk menghitung keliling segitiga -->
<h3>Menghitung Keliling Segitiga</h3>
<form method="POST" action="">
    <label for="sisi1">Sisi 1:</label>
    <input type="number" name="sisi1" id="sisi1" required>
    <br><br>
    <label for="sisi2">Sisi 2:</label>
    <input type="number" name="sisi2" id="sisi2" required>
    <br><br>
    <label for="sisi3">Sisi 3:</label>
    <input type="number" name="sisi3" id="sisi3" required>
    <br><br>
    <input type="submit" name="kelilingSegitiga" value="Hitung">
</form>

<?php
    if (isset($_POST['kelilingSegitiga'])) {
        $sisi1 = $_POST['sisi1'];
        $sisi2 = $_POST['sisi2'];
        $sisi3 = $_POST['sisi3'];
        $kelilingSegitiga = $sisi1 + $sisi2 + $sisi3;
        echo "<p>Keliling segitiga dengan sisi $sisi1, $sisi2, dan $sisi3 adalah $kelilingSegitiga</p>";
    }
?>

<!-- Form untuk menghitung volume tabung -->
<h3>Menghitung Volume Tabung</h3>
<form method="POST" action="">
    <label for="jariJari">Jari-jari:</label>
    <input type="number" name="jariJari" id="jariJari" required>
    <br><br>
    <label for="tinggi">Tinggi:</label>
    <input type="number" name="tinggi" id="tinggi" required>
    <br><br>
    <input type="submit" name="volumeTabung" value="Hitung">
</form>

<?php
    if (isset($_POST['volumeTabung'])) {
        $jariJari = $_POST['jariJari'];
        $tinggi = $_POST['tinggi'];
        $volumeTabung = 3.14 * $jariJari * $jariJari * $tinggi;
        echo "<p>Volume tabung dengan jari-jari $jariJari dan tinggi $tinggi adalah $volumeTabung</p>";
    }
?>

<!-- Form untuk menghitung volume bola -->
<h3>Menghitung Volume Bola</h3>
<form method="POST" action="">
    <label for="jariJari">Jari-jari:</label>
    <input type="number" name="jariJari" id="jariJari" required>
    <br><br>
    <input type="submit" name="volumeBola" value="Hitung">
</form>

<?php
    if (isset($_POST['volumeBola'])) {
        $jariJari = $_POST['jariJari'];
        $volumeBola = 4 / 3 * 3.14 * $jariJari * $jariJari * $jariJari;
        echo "<p>Volume bola dengan jari-jari $jariJari adalah $volumeBola</p>";
    }
?>

<!-- Form untuk menghitung luas trapesium -->
<h3>Menghitung Luas Trapesium</h3>
<form method="POST" action="">
    <label for="alasAtas">Alas Atas:</label>
    <input type="number" name="alasAtas" id="alasAtas" required>
    <br><br>
    <label for="alasBawah">Alas Bawah:</label>
    <input type="number" name="alasBawah" id="alasBawah" required>
    <br><br>
    <label for="tinggi">Tinggi:</label>
    <input type="number" name="tinggi" id="tinggi" required>
    <br><br>
    <input type="submit" name="luasTrapesium" value="Hitung">
</form>

<?php
    if (isset($_POST['luasTrapesium'])) {
        $alasAtas = $_POST['alasAtas'];
        $alasBawah = $_POST['alasBawah'];
        $tinggi = $_POST['tinggi'];
        $luasTrapesium = 0.5 * ($alasAtas + $alasBawah) * $tinggi;
        echo "<p>Luas trapesium dengan alas atas $alasAtas, alas bawah $alasBawah, dan tinggi $tinggi adalah $luasTrapesium</p>";
    }
?>

<!-- Form untuk menghitung volume prisma segitiga -->
<h3>Menghitung Volume Prisma Segitiga</h3>
<form method="POST" action="">
    <label for="alasSegitiga">Alas Segitiga:</label>
    <input type="number" name="alasSegitiga" id="alasSegitiga" required>
    <br><br>
    <label for="tinggiSegitiga">Tinggi Segitiga:</label>
    <input type="number" name="tinggiSegitiga" id="tinggiSegitiga" required>
    <br><br>
    <label for="tinggiPrisma">Tinggi Prisma:</label>
    <input type="number" name="tinggiPrisma" id="tinggiPrisma" required>
    <br><br>
    <input type="submit" name="volumePrismaSegitiga" value="Hitung">
</form>

<?php
    if (isset($_POST['volumePrismaSegitiga'])) {
        $alasSegitiga = $_POST['alasSegitiga'];
        $tinggiSegitiga = $_POST['tinggiSegitiga'];
        $tinggiPrisma = $_POST['tinggiPrisma'];
        $volumePrismaSegitiga = 0.5 * $alasSegitiga * $tinggiSegitiga * $tinggiPrisma;
        echo "<p>Volume prisma segitiga dengan alas segitiga $alasSegitiga, tinggi segitiga $tinggiSegitiga, dan tinggi prisma $tinggiPrisma adalah $volumePrismaSegitiga</p>";
    }
?>

<!-- Form untuk menghitung keliling persegi panjang -->
<h3>Menghitung Keliling Persegi Panjang</h3>
<form method="POST" action="">
    <label for="panjang">Panjang:</label>
    <input type="number" name="panjang" id="panjang" required>
    <br><br>
    <label for="lebar">Lebar:</label>
    <input type="number" name="lebar" id="lebar" required>
    <br><br>
    <input type="submit" name="kelilingPersegiPanjang" value="Hitung">
</form>

<?php
    if (isset($_POST['kelilingPersegiPanjang'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $kelilingPersegiPanjang = 2 * ($panjang + $lebar);
        echo "<p>Keliling persegi panjang dengan panjang $panjang dan lebar $lebar adalah $kelilingPersegiPanjang</p>";
    }
?>

<!-- Form untuk menghitung luas belah ketupat -->
<h3>Menghitung Luas Belah Ketupat</h3>
<form method="POST" action="">
    <label for="diagonal1">Diagonal 1:</label>
    <input type="number" name="diagonal1" id="diagonal1" required>
    <br><br>
    <label for="diagonal2">Diagonal 2:</label>
    <input type="number" name="diagonal2" id="diagonal2" required>
    <br><br>
    <input type="submit" name="luasBelahKetupat" value="Hitung">
</form>

<?php
    if (isset($_POST['luasBelahKetupat'])) {
        $diagonal1 = $_POST['diagonal1'];
        $diagonal2 = $_POST['diagonal2'];
        $luasBelahKetupat = 0.5 * $diagonal1 * $diagonal2;
        echo "<p>Luas belah ketupat dengan diagonal 1 $diagonal1 dan diagonal 2 $diagonal2 adalah $luasBelahKetupat</p>";
    }
?>

<!-- Form untuk menghitung keliling belah ketupat -->
<h3>Menghitung Keliling Belah Ketupat</h3>
<form method="POST" action="">
    <label for="sisi">Sisi:</label>
    <input type="number" name="sisi" id="sisi" required>
    <br><br>
    <input type="submit" name="kelilingBelahKetupat" value="Hitung">
</form>

<?php
    if (isset($_POST['kelilingBelahKetupat'])) {
        $sisi = $_POST['sisi'];
        $kelilingBelahKetupat = 4 * $sisi;
        echo "<p>Keliling belah ketupat dengan sisi $sisi adalah $kelilingBelahKetupat</p>";
    }
?>

<!-- Form untuk menghitung volume limas segitiga -->
<h3>Menghitung Volume Limas Segitiga</h3>
<form method="POST" action="">
    <label for="alasSegitiga">Alas Segitiga:</label>
    <input type="number" name="alasSegitiga" id="alasSegitiga" required>
    <br><br>
    <label for="tinggiSegitiga">Tinggi Segitiga:</label>
    <input type="number" name="tinggiSegitiga" id="tinggiSegitiga" required>
    <br><br>
    <label for="tinggiLimas">Tinggi Limas:</label>
    <input type="number" name="tinggiLimas" id="tinggiLimas" required>
    <br><br>
    <input type="submit" name="volumeLimasSegitiga" value="Hitung">
</form>

<?php
    if (isset($_POST['volumeLimasSegitiga'])) {
        $alasSegitiga = $_POST['alasSegitiga'];
        $tinggiSegitiga = $_POST['tinggiSegitiga'];
        $tinggiLimas = $_POST['tinggiLimas'];
        $volumeLimasSegitiga = 0.33 * $alasSegitiga * $tinggiSegitiga * $tinggiLimas;
        echo "<p>Volume limas segitiga dengan alas segitiga $alasSegitiga, tinggi segitiga $tinggiSegitiga, dan tinggi limas $tinggiLimas adalah $volumeLimasSegitiga</p>";
    }
?>

<!-- Form untuk menghitung luas permukaan kerucut -->
<h3>Menghitung Luas Permukaan Kerucut</h3>
<form method="POST" action="">
    <label for="jariJari">Jari-jari:</label>
    <input type="number" name="jariJari" id="jariJari" required>
    <br><br>
    <label for="tinggiKerucut">Tinggi Kerucut:</label>
    <input type="number" name="tinggiKerucut" id="tinggiKerucut" required>
    <br><br>
    <input type="submit" name="luasPermukaanKerucut" value="Hitung">
</form>

<?php
    if (isset($_POST['luasPermukaanKerucut'])) {
        $jariJari = $_POST['jariJari'];
        $tinggiKerucut = $_POST['tinggiKerucut'];
        $luasPermukaanKerucut = 3.14 * $jariJari * ($jariJari + sqrt(($jariJari * $jariJari) + ($tinggiKerucut * $tinggiKerucut)));
        echo "<p>Luas permukaan kerucut dengan jari-jari $jariJari dan tinggi kerucut $tinggiKerucut adalah $luasPermukaanKerucut</p>";
    }
?>

<!-- Form untuk menghitung volume kerucut -->
<h3>Menghitung Volume Kerucut</h3>
<form method="POST" action="">
    <label for="jariJari">Jari-jari:</label>
    <input type="number" name="jariJari" id="jariJari" required>
    <br><br>
    <label for="tinggiKerucut">Tinggi Kerucut:</label>
    <input type="number" name="tinggiKerucut" id="tinggiKerucut" required>
    <br><br>
    <input type="submit" name="volumeKerucut" value="Hitung">
</form>

<?php
    if (isset($_POST['volumeKerucut'])) {
        $jariJari = $_POST['jariJari'];
        $tinggiKerucut = $_POST['tinggiKerucut'];
        $volumeKerucut = (1/3) * 3.14 * ($jariJari * $jariJari) * $tinggiKerucut;
        echo "<p>Volume kerucut dengan jari-jari $jariJari dan tinggi kerucut $tinggiKerucut adalah $volumeKerucut</p>";
    }
?>

<!-- Form untuk menghitung keliling trapesium -->
<h3>Menghitung Keliling Trapesium</h3>
<form method="POST" action="">
    <label for="sisi1">Sisi 1:</label>
    <input type="number" name="sisi1" id="sisi1" required>
    <br><br>
    <label for="sisi2">Sisi 2:</label>
    <input type="number" name="sisi2" id="sisi2" required>
    <br><br>
    <label for="sisi3">Sisi 3:</label>
    <input type="number" name="sisi3" id="sisi3" required>
    <br><br>
    <label for="sisi4">Sisi 4:</label>
    <input type="number" name="sisi4" id="sisi4" required>
    <br><br>
    <input type="submit" name="kelilingTrapesium" value="Hitung">
</form>

<?php
    if (isset($_POST['kelilingTrapesium'])) {
        $sisi1 = $_POST['sisi1'];
        $sisi2 = $_POST['sisi2'];
        $sisi3 = $_POST['sisi3'];
        $sisi4 = $_POST['sisi4'];
        $kelilingTrapesium = $sisi1 + $sisi2 + $sisi3 + $sisi4;
        echo "<p>Keliling trapesium dengan sisi 1 $sisi1, sisi 2 $sisi2, sisi 3 $sisi3, dan sisi 4 $sisi4 adalah $kelilingTrapesium</p>";
    }
?>

<!-- Form untuk mengonversi kilometer ke desimeter -->
<h3>Konversi Kilometer ke Desimeter</h3>
<form method="POST" action="">
    <label for="kilometer">Kilometer:</label>
    <input type="number" name="kilometer" id="kilometer" required>
    <br><br>
    <input type="submit" name="kilometerToDesimeter" value="Konversi">
</form>

<?php
    if (isset($_POST['kilometerToDesimeter'])) {
        $kilometer = $_POST['kilometer'];
        $desimeter = $kilometer * 10000;
        echo "<p>$kilometer kilometer sama dengan $desimeter desimeter</p>";
    }
?>

<!-- Form untuk mengonversi ton ke gram -->
<h3>Konversi Ton ke Gram</h3>
<form method="POST" action="">
    <label for="ton">Ton:</label>
    <input type="number" name="ton" id="ton" required>
    <br><br>
    <input type="submit" name="tonToGram" value="Konversi">
</form>

<?php
    if (isset($_POST['tonToGram'])) {
        $ton = $_POST['ton'];
        $gram = $ton * 1000000;
        echo "<p>$ton ton sama dengan $gram gram</p>";
    }
?>
</body>
</html>
