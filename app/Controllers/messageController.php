<?php
namespace App\Controllers;

use Core\Controller;
use Core\Request;
use Core\DataBase;
use App\Models\message;

class messageController extends Controller {
 
    public function teste(){
        $codMsn = 0;
        $message = new message();
        $targetMessage = $message->find(null, 'cod_Msn >' . $codMsn);
        $this->view('index', ['message' => $targetMessage]);

    }
}