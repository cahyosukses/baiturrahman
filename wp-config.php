<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define('DB_NAME', 'masjid_baiturrahman');

/** Nama pengguna basis data MySQL */
define('DB_USER', 'root');

/** Kata sandi basis data MySQL */
define('DB_PASSWORD', '');

/** Nama host MySQL */
define('DB_HOST', 'localhost');

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define('DB_CHARSET', 'utf8');

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qdUdQdeVNol4JKGIh&?RKBPPeVZdROJbb`2Xbu)5d1;%3kRgG}-hlo8i[i-i_<YB');
define('SECURE_AUTH_KEY',  '+5gClPj<>FX$/:|70eDYU3[A}$}Ioe]!J@-&>SX0Cy)+LRAe8M-j?t{zz-E_6tp)');
define('LOGGED_IN_KEY',    '|><D%C>S$u@Gr]hJ !rO^K~K}kXi-})_N@=|-l%.>I?({t><9-I_+7D+|jh1p H`');
define('NONCE_KEY',        'Jc<B=+;+QqEszi^,yt${-WKzJTzf>Le>$)gJ[l=@KkuUL{n-P8dd}`bG0p-ilU*-');
define('AUTH_SALT',        '[kvjB~5bdUn%$%T~#>1;&}cTZNo#mK*Q,+R4$+xA_hd !=tx}~PP^e^YN{tZ=QgY');
define('SECURE_AUTH_SALT', '*S`YMZO_Y]rS`s9+;-|=-XO|fdM=(|=6{},[api%GtZy*d^ RRt@(|hURmgz-gk*');
define('LOGGED_IN_SALT',   '!b0j>YFR%^++N-@hV&ltGZTRj7oR4cU>JP[q[m,abjR@D%|sY?xWZ:n:2y=C:bqy');
define('NONCE_SALT',       'L+^2-!k=,@}]?-yJ@y^q|fSx3U[hE~7-aZLVt]irq2hT$BQ#|?:y2:+i-mX.PU+L');

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix  = 'wp_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
