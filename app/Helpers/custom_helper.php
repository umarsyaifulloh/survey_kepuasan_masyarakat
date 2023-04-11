<?php
// function_exists('tanggal');

/**
 * -------------------------------------------------------------------
 * tanggal($tanggal)
 * -------------------------------------------------------------------
 * method ini untuk mengubah date ke dalam format indonesia
 * 
 * @param string $tanggal 
 * @return string
 */
function tanggal($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $split = explode('-', $tanggal);
    return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
}

/**
 * -------------------------------------------------------------------
 * randomColor($i)
 * -------------------------------------------------------------------
 * method ini akan mengacak warna sesuai urutan yang telah ditetapkan
 * 
 * @param int $i
 * 
 * @return string
 */
function randomColor($i)
{
    if ($i == 1) {
        return 'primary';
    } elseif ($i == 2) {
        return 'success';
    } elseif ($i == 3) {
        return 'info';
    } elseif ($i == 4) {
        return 'dark';
    } elseif ($i == 5) {
        return 'warning';
    } else {
        return 'danger';
    }
}

/**
 * -------------------------------------------------------------------
 * strip_only_tags($str, $stripped_tags = null)
 * -------------------------------------------------------------------
 * method ini untuk menghapus tag html pada data isi berita sisi responden dengan panjang karakter 75
 * @param string $str
 * @param string $stripped_tags
 * 
 * @return string
 */
function strip_only_tags($str, $stripped_tags = null)
{
    // Tidak ada tag yang dihapus
    if ($stripped_tags == null) {
        return $str;
    }
    // Dapatkan daftar tag
    // Misal: <b><i><u> menjadi array('b','i','u')
    $tags = explode('>', str_replace('<', '', $stripped_tags));
    $result = preg_replace('#</?(' . implode('|', $tags) . ').*?>#is', '', $str);
    $endResult = substr($result, 0, 75);
    return $endResult;
}

/**
 * -------------------------------------------------------------------
 * strip_only_tags_long($str, $stripped_tags = null)
 * -------------------------------------------------------------------
 * method ini untuk menghapus tag html pada data isi berita sisi responden dengan panjang karakter 175
 * @param string $str
 * @param string $stripped_tags
 * 
 * @return string
 */
function strip_only_tags_long($str, $stripped_tags = null)
{
    // Tidak ada tag yang dihapus
    if ($stripped_tags == null) {
        return $str;
    }
    // Dapatkan daftar tag
    // Misal: <b><i><u> menjadi array('b','i','u')
    $tags = explode('>', str_replace('<', '', $stripped_tags));
    $result = preg_replace('#</?(' . implode('|', $tags) . ').*?>#is', '', $str);
    $endResult = substr($result, 0, 175);
    return $endResult;
}
