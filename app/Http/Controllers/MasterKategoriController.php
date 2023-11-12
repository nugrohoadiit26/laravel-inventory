<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterKategoriModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class MasterKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = MasterKategoriModel::get();
        return view('master/kategori/index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master/kategori/form-tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aturan = [
            'html_kode' => 'required',
            'html_nama' => 'required',

        ];
        //membuat pesan bhs indonesia
        $pesan_indo = [
            'required' => 'Wajib di isi Bos!',
            'min' => 'Minimal :min Karakter',
        ];
        $validator = validator::make($request->all(), $aturan, $pesan_indo);
        try {
            // jika inputan user tidak sesuai dengan aturan validasi
            if ($validator->fails()) {
                return redirect()
                    ->route('master-kategori-tambah')
                    ->withErrors($validator)->withInput();
            } else {
                // jika inputan user sesuai
                //simpan ke database
                $insert = MasterKategoriModel::create([
                    'kode'              => strtoupper($request->html_kode),
                    'nama_kategori'     => $request->html_nama,
                    'dibuat_kapan'      => date('Y-m-d H:i:s'),
                    'dibuat_oleh'       => Auth::user()->id,
                    'diperbarui_kapan'  => null,
                    'diperbarui_oleh'   => null,
                ]);
                // jika proses insert berhasil
                if ($insert) {
                    return redirect()
                        ->route('master-kategori')
                        ->with('success', 'Berhasil menambahkan barang baru!');
                }
            }
        } catch (\Throwable $th) {
            return redirect()
                ->route('master-kategori-tambah')
                ->with('danger', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $barang = MasterBarangModel::where(['id' => $id])->first();
        // return view('master/barang/detail', compact('barang'));
        $barang = DB::select(

            "SELECT
            mba.*,
            u1.name as dibuat_nama, u1.email as dibuat_email,
            u2.name as diperbarui_nama, u2.email as diperbarui_email

            from master_kategori as mba
            LEFT JOIN users as u1 on mba.dibuat_oleh = u1.id
            LEFT JOIN users as u2 on mba.diperbarui_oleh = u2.id
            WHERE mba.id = ?;",
            [$id]
        );
        return view('Master/kategori/detail', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = DB::select(

            "SELECT
            mba.*,
            u1.name as dibuat_nama, u1.email as dibuat_email,
            u2.name as diperbarui_nama, u2.email as diperbarui_email

            from master_kategori as mba
            LEFT JOIN users as u1 on mba.dibuat_oleh = u1.id
            LEFT JOIN users as u2 on mba.diperbarui_oleh = u2.id
            WHERE mba.id = ?;",
            [$id]
        );
        return view('Master/kategori/form-edit', compact('barang'));
        
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aturan = [
            'html_kode' => 'required|min:1|max:25',
            'html_nama_kategori' => 'required|max:255',
        ];
        //membuat pesan bhs indonesia
        $pesan_indo = [
            'required' => 'Wajib di isi Bos!',
            'min' => 'Minimal :min Karakter',
        ];
        $validator = validator::make($request->all(), $aturan, $pesan_indo);
        try {
            // jika inputan user tidak sesuai dengan aturan validasi
            if ($validator->fails()) {
                return redirect()
                    ->route('master-kategori-edit', $id)
                    ->withErrors($validator)->withInput();
            } else {
                // jika inputan user sesuai
                //update ke database
                $update = MasterKategoriModel::where('id', $id)->update([

                    'kode'              => $request->html_kode,
                    'nama_kategori'         => $request->html_nama_kategori,
                    'diperbarui_kapan'  => date('Y-m-d H:i:s'),
                    'diperbarui_oleh'   => Auth::user()->id,
                ]);
                // jika proses insert berhasil
                if ($update) {
                    return redirect()
                        ->route('master-kategori')
                        ->with('success', 'Berhasil update barang!');
                }
            }
        } catch (\Throwable $th) {
            return redirect()
                ->route('master-kategori-edit', $id)
                ->with('danger', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = MasterKategoriModel::where('id', $id)->first();
        // File::delete(public_path('foto') . '/' . $data->foto);
        MasterKategoriModel::where('id', $id)->delete();
        return redirect('/master/kategori')->with('success', 'Berhasil hapus data');
    }
}
