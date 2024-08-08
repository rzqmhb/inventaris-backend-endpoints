<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;
use App\Models\User;

class InventarisController extends Controller
{
    public function getAll(){
        $users = User::all();
        $inventaris = Inventaris::all();
        $data = [];

        foreach ($users as $user) {
            $data['user'][] = response()->json($user);
        }

        foreach ($inventaris as $item) {
            $data['inventaris'][] = response()->json($item);
        }

        return response()->json([
            'status' => 'true',
            'data' => $data,
            'message' => 'get all sukses'
        ], 200);
    }

    public function getById($id){
        $item = Inventaris::find($id);

        if (! $item) {
            return response()->json([
                'status' => 'false',
                'data' => [],
                'message' => 'get by id gagal, data tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status' => 'true',
            'data' => $item,
            'message' => 'get by id sukses'
        ], 200);
    }

    public function add(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'quantity' => 'required|integer',
        ]);

        $item = Inventaris::where('name', $data['name'])->first();

        if (! $item) {
            $item = Inventaris::create($data);
            return response()->json([
                'status' => 'true',
                'data' => $item,
                'message' => 'add data sukses'
            ], 200);
        }

        $item->update([
            'quantity' => ($item->quantity + $data['quantity'])
        ]);
        return response()->json([
            'status' => 'true',
            'data' => $item,
            'message' => 'tambah kuantitas sukses'
        ], 200);

    }

    public function update(Request $request, $id){
        $item = Inventaris::find($id);
        $data = $request->validate([
            'name' => 'sometimes|required|string',
            'type' => 'sometimes|required|string',
            'quantity' => 'sometimes|required|integer',
        ]);

        if (! $item) {
            return response()->json([
                'status' => 'false',
                'data' => [],
                'message' => 'update gagal, data tidak ditemukan'
            ], 404);
        }

        $item->update($data);
        return response()->json([
            'status' => 'true',
            'data' => $item,
            'message' => 'update sukses'
        ], 200);
    }

    public function delete($id){
        if (! Inventaris::where('id', $id)->delete()) {
            return response()->json([
                'status' => 'false',
                'data' => [],
                'message' => 'delete gagal, data tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status' => 'true',
            'data' => [],
            'message' => 'delete sukses'
        ], 200);
    }
}
