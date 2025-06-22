<?php
namespace App\Controllers;

use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $data['titulo'] = 'Registrarse';
        return view('front/navbar_view')
        . view('front/head_view',$data)
        . view('back/usuario/registro')
        . view('front/footer_view');
    }

    public function formValidation()
    {
        $input = $this->validate([
            'nombre'    => 'required|min_length[3]|max_length[25]',
            'apellido'  => 'required|min_length[3]|max_length[25]',
            'usuario'=> 'required|min_length[3]|max_length[15]',
            'email'=> 'required|min_length[3]|max_length[100]|valid_email|is_unique[info_usuario.email]',
            'password'=> 'required|min_length[3]|max_length[20]'
        ],
        
    );

    $formModel = new usuario_model();

    if (!$input){

            $data['titulo'] = 'Registrarse';
            return view('front/head_view',$data)
            . view('front/navbar_view')
            . view('back/usuario/registro', ['validation' => $this])
            . view('front/footer_view');


        }  else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ]);

            session()->setFlashdata('success','Usuario registrado con exito');
            return redirect()->to('/login');
        }
    }  

}