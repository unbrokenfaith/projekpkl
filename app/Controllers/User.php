<?php

namespace App\Controllers;

class User extends BaseController
{

  public function kategori()
  {
    $data = [
      'title' => 'Kategori Page'
    ];

    return view('kategori/kategori', $data);
  }

  
}
