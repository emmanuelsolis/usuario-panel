<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends Controller{

    public function index(){
        $usuario= new UserModel();
        $datos['usuarios'] = $usuario->orderBy('id', 'ASC')->findAll();
        $datos['cabecera'] = view('plantilla/cabecera');
        $datos['piePagina'] = view('plantilla/piePagina');
        print_r($datos);
        return view('Usuarios/listar', $datos);
    }
    public function crear(){

        $datos['cabecera'] = view('plantilla/cabecera');
        $datos['piePagina'] = view('plantilla/piePagina');
        return view('Usuarios/crear', $datos);
    }
    public function guardar(){
        $usuario = new UserModel();     
        $datos = [
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'email' => $this->request->getVar('email'),
        ];

        $usuario->insert($datos);
        echo "Usuario registrado con exito";

        return redirect()->to(base_url('listar'));

    }

    public function eliminar($id=null){
        $usuario= new UserModel();
        $usuario->where('id', $id)->delete($id);
        return redirect()->to(site_url('listar'));
    }

    public function editar($id=null){
        $usuario = new UserModel();
        $datos['usuario'] = $usuario->where('id', $id)->first();
        $datos['cabecera'] = view('plantilla/cabecera');
        $datos['piePagina'] = view('plantilla/piePagina');

        return view('Usuarios/editar' , array_merge($datos, $datos));
    }
    public function actualizar(){
        $usuario = new UserModel();
        $nombre = $this->request->getVar('nombre');
        $apellido = $this->request->getVar('apellido');
        $email = $this->request->getVar('email');
        $id = $this->request->getVar('id');

        $datos=[
            'id' => $id,
            'nombre' =>$nombre,
            'apellido' =>$apellido,
            'email' =>$email
        ];
        $id = $this->request->getVar('id');
        echo "ID a actualizar: " . $id;
        echo "<br>";
        print_r($datos);
        $usuario->where('id', $id)->update($id,$datos);
        return redirect()->to(site_url('listar'));

    }
}

?>