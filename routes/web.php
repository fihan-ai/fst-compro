<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   // return view('home.index');
   $data = [
      'content' => 'home/beranda/index'
   ];
   return view('home.layouts/wrapper', $data);
});

Route::get('/beranda', function () {
   $data = [
      'content' => 'home/beranda/index'
   ];
   return view('home.layouts/wrapper', $data);
});

Route::get('/laporfst', function () {
   $data = [
      'content' => 'home/laporfst/index'
   ];
   return view('home.layouts/wrapper', $data);
});

Route::get('/galeri', function () {
   $data = [
      'content' => 'home/galeri/index'
   ];
   return view('home.layouts/wrapper', $data);
});

Route::get('/berita', function () {
   $data = [
      'content' => 'home/berita/index'
   ];
   return view('home.layouts/wrapper', $data);
});

Route::get('/pengumuman', function () {
   $data = [
      'content' => 'home/pengumuman/index'
   ];
   return view('home.layouts/wrapper', $data);
});

Route::get('/login', function () {
   $data = [
      'content' => 'home/auth/login'
   ];
   return view('home.layouts/wrapper', $data);
});

Route::get('/sejarah', function () {
   $data = [
      'content' => 'home/profile/sejarah/index'
   ];
   return view('home.layouts/wrapper', $data);
});

Route::get('/visimisi', function () {
   $data = [
      'content' => 'home/profile/visimisi/index'
   ];
   return view('home.layouts/wrapper', $data);
});

Route::get('/strukturorganisasi', function () {
   $data = [
      'content' => 'home/profile/strukturorganisasi/index'
   ];
   return view('home.layouts/wrapper', $data);
});

//===ADMIN
Route::prefix('/admin')->group(function () {
   Route::get('/', function(){
      return view('admin.layouts.wrapper');
   });
});