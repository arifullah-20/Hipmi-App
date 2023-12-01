<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\MedsosController;
use App\Http\Controllers\VismisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\AnggotaController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//user controller
Route::get('/user', [UserController::class, 'index'])->name('data.user');
Route::get('/about', [UserController::class, 'about'])->name('data.about');
route::get('/berita-detail/{slug}', [UserController::class,'detail'])->name('data.detail');
route::get('/berita', [UserController::class,'berita'])->name('data.berita');
route::get('/anggota', [UserController::class,'anggota'])->name('data.anggota');
route::get('/contact', [UserController::class,'contact'])->name('data.contact');
route::get('/vidio', [UserController::class,'vidio'])->name('data.vidio');




//admin controller
Route::get('/admin', [AdminController::class, 'home'])->name('admin.data');



// //medsos
Route::get('/medsos-index', [MedsosController::class, 'index'])->name('data.medsos');
Route::get('/tambah-medsos', [MedsosController::class, 'create'])->name('data.tambah');
Route::post('/simpan-medsos', [MedsosController::class, 'store'])->name('medsos.store');

// //visi misi
Route::get('/vismis-index', [VismisController::class, 'index'])->name('data.vismis');
Route::get('/edit-visi/{id}', [VismisController::class, 'editvisi'])->name('visi.ubah');
Route::post('/visi-edit/{id}', [VismisController::class, 'visiedit'])->name('simpan.visi');
Route::get('/edit-misi/{id}', [VismisController::class, 'editmisi'])->name('misi.ubah');
Route::post('/misi-edit/{id}', [VismisController::class, 'misiedit'])->name('simpan.misi');
Route::get('/ubah-misi', [VismisController::class, 'createmisi'])->name('visi.ubah');
Route::post('/simpan-medsos', [VismisController::class, 'store'])->name('vismis.store');

//berita
Route::get('/berita-index', [BeritaController::class, 'index'])->name('data.berita');
Route::get('/tambah-berita', [BeritaController::class, 'create'])->name('data.ubah');
Route::post('/simpan-berita', [BeritaController::class, 'store'])->name('berita.store');

//kategori
Route::get('/kategori-index', [KategoriController::class, 'index'])->name('data.kategori');
Route::get('/tambah-kategori', [KategoriController::class, 'create'])->name('data.tambah');
Route::post('/simpan-kategori', [KategoriController::class, 'simpan'])->name('kategori.simpan');
Route::get('/kategori-edit/{id}', [KategoriController::class, 'edit']);
Route::post('/edit-kategori/{id}', [KategoriController::class, 'update']);

//struktur

Route::get('/struktur-index', [StrukturController::class, 'index'])->name('data.struktur');
Route::get('/tambah-struktur', [StrukturController::class, 'create'])->name('data.tambah');
Route::post('/simpan-struktur', [StrukturController::class, 'simpan'])->name('simpan.simpan');


//jabatan
Route::get('/jabatan-index', [JabatanController::class, 'index'])->name('data.jabatan');
Route::get('/jabatan-tambah', [JabatanController::class, 'tambah'])->name('data.tambah');
Route::post('/simpan-jabatan', [JabatanController::class, 'simpan'])->name('kategori.simpan');


//galeri video
Route::get('/video-index', [VideoController::class, 'index'])->name('data.video');
Route::post('/simpan-video', [VideoController::class, 'simpan'])->name('data.simpan');
Route::get('/hapus-video/{id}', [VideoController::class, 'hapus'])->name('hapus.video');


//galeri foto
Route::get('/foto-index', [FotoController::class, 'index'])->name('data.foto');
Route::post('/simpan-foto', [FotoController::class, 'simpan'])->name('data.simpan');


//profil controller
Route::get('/profile-index', [ProfilController::class, 'index'])->name('data.profil');
Route::post('/simpan-profile', [ProfileController::class, 'simpan'])->name('data.simpan');


//sejarah controller
Route::get('/sejarah-index', [SejarahController::class, 'index'])->name('data.sejarah');
Route::post('/simpan-sejarah/{id}', [SejarahController::class, 'simpan'])->name('data.simpan');


Route::get('/perusahaan-index', [PerusahaanController::class, 'index'])->name('data.perusahaan');
Route::post('/simpan-perusahaan', [PerusahaanController::class, 'simpan'])->name('data.simpan');


//anggota controller
Route::get('/anggota-index', [AnggotaController::class, 'index'])->name('data.perusahaan');
Route::post('/simpan-anggota', [AnggotaController::class, 'simpan'])->name('data.simpan');

