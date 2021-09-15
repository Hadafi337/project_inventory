<?php

namespace App\Http\Controllers;
use App\Models\PO;
use App\Models\TransaksiKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoController extends Controller
{
    public function index()
    {
        $data_po_wh = PO::all()->where('status', '1');
        $data_po = PO::all();
        // dd($data_po_wh);
        return view('so\data_so', compact('data_po', 'data_po_wh'));
    }

    public function transaksi_instalasi($no_PO)
    {
        $data_so = TransaksiKeluar::all()->where('no_PO', $no_PO);
        // dd($data_detail);
        return view('so/transaksi_instalasi', compact('data_so')); 

    }

    public function fetch(Request $request){
        // dd($request);
    $select = $request->get('select');
    $values = $request->get('value');
    $dependent = $request->get('dependent');

    //    dd($dependent);
       $data = DB::table('detail_PO')->where('no_SO', $values)->groupBy('nama_barang')->get();
       $output = '<tr id="row"></tr>';
       foreach ($data as $row) {
           $output .= '<tr id="row"></td>
            <td><input type="text" style="outline:none;border:0;" readonly name="nama_barang[]" id="nama_barang" value="'.$row->nama_barang.'"></td>
            </tr>';
       }
       echo $output;
    }
}
