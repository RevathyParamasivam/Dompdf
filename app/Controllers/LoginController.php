<?php 
namespace App\Controllers;
use App\Models\SignupModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    private $login = '' ;
    public function __construct(){
        $this->login = new SignupModel();       
    }
    public function index()    {  
    echo "Test View";
    }      
    
    
}