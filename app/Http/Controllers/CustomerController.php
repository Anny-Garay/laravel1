<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use DB;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function listar() {
        $clientes = Customer::get();
        return dd($clientes);
    }
    function index() {
        $listado = DB::table("customers")->get();
        return view('clientes', compact('listado'));
    }
    function registrar(){
        return view('clientes-registrar');
    }
    function actualizar($id){
        $cliente = DB::table('customers')->where('customerNumber', $id)
                                        ->first();
        return view('clientes-actualizar', compact('cliente'));
    }
    function guardar(){
        DB::table('customers')->insert([
            'customerName' => $_POST['contactFirstName'],
            'contactFirstName' => $_POST['contactFirstName'],
            'contactLastName' => $_POST['contactLastName'],
            'phone' => $_POST['phone'],
            'city' => $_POST['city'],
            'addressLine1' => 'hola',
            'country' => 'peru'
            
        ]);
        return redirect()->route('clientes');
    }
    function editar($id){
        DB::table('customers')
        ->where('customerNumber', $id)
        ->update([
            'customerName' => $_POST['contactFirstName'],
            'contactFirstName' => $_POST['contactFirstName'],
            'contactLastName' => $_POST['contactLastName'],
            'phone' => $_POST['phone'],
            'city' => $_POST['city'],
            'addressLine1' => 'hola',
            'country' => 'peru'
            
        ]);
        return redirect()->route('clientes');
    }
}
