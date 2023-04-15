<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends Controller{

    public function index(){
        $usuario= new UserModel();
        $data['usuarios'] = $usuario->orderBy('id', 'ASC')->findAll();
        $data['cabecera'] = view('plantilla/cabecera');
        $data['piePagina'] = view('plantilla/piePagina');
        return view('Usuarios/listar', $data);
    }
    public function crear(){

        $data['cabecera'] = view('plantilla/cabecera');
        $data['piePagina'] = view('plantilla/piePagina');
        return view('Usuarios/crear', $data);
    }
    public function guardar(){
        $usuario = new UserModel();

        $nombre = $this->request->getVar('nombre');
        $apellido = $this->request->getVar('apellido');
        $email = $this->request->getVar('email');
     
        $datos = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
        ];

        $usuario->insert($datos);
        echo "Usuario registrado con exito";

        return redirect()->to(base_url('listar'));

    }

    public function eliminar($id){
        $usuario= new UserModel();
        $usuario->where('id', $id)->delete($id);
        return redirect()->to(site_url('listar'));
    }
}

?>