<?php
session_start();

require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

/* validasi bid wajib angka dan > 0 */
$bid = filter_input(INPUT_GET, 'bid', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
]);

if (!$bid) {
    $_SESSION['flash_error_biodata'] = 'BID Tidak Valid.';
    redirect_ke('read_biodata.php');
    exit;
}

/*
  Prepared statement untuk anti SQL injection.
  WAJIB pakai WHERE bid = ?
*/
$stmt = mysqli_prepare(
    $conn,
    "DELETE FROM tabel_biodata WHERE bid = ?"
);

if (!$stmt) {
    $_SESSION['flash_error_biodata'] =
        'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('read_biodata.php');
    exit;
}

/* bind parameter dan eksekusi */
mysqli_stmt_bind_param($stmt, "i", $bid);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['flash_sukses_biodata'] =
        'Terima kasih, data Anda sudah dihapus.';
} else {
    $_SESSION['flash_error_biodata'] =
        'Data gagal dihapus. Silakan coba lagi.';
}

/* tutup statement */
mysqli_stmt_close($stmt);

redirect_ke('read_biodata.php');
exit;