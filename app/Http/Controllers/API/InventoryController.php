<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Exception;

class InventoryController extends Controller
{
    public function index() {
        $inventories = Inventory::all();

        return response()->json($inventories, 200);
    }

    public function getById($id) {
        $inventories = Inventory::find($id);

        if (!$inventories) {
            return response()->json([
                'status' => 'failed',
                'error_message' => 'Inventory not found'
            ], 500);
        }

        return response()->json($inventories, 200);
    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'type' => 'required',
            'condition' => 'required',
            'quantity' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $data = [
            "user_id" => Auth::user()->id,
            ...$request->only('name', 'type', 'condition', 'quantity')
        ];

        // dd($data);

        try {
            Inventory::create($data);
            return response()->json([
                'status' => 'ok',
                'message' => 'Successfully created',
                ...$data
            ], 200);
        } catch (Exception $e) {
            // return response()->json([
            //     'status' => 'failed',
            //     'error_message' => 'Failed to insert data'
            // ], 500);

            dd($e);
        }
    }

    public function update(Request $request, $id) {
        $inventories = Inventory::find($id);

        if (!$inventories) {
            return response()->json([
                'status' => 'failed',
                'error_message' => 'Inventory not found'
            ], 500);
        }

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'type' => 'required',
            'condition' => 'required',
            'quantity' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        try {
            $inventories->name = $request->name;
            $inventories->type = $request->type;
            $inventories->condition = $request->condition;
            $inventories->quantity = $request->quantity;

            // apply update
            $inventories->save();

            return response()->json([
                'status' => 'ok',
                'message' => 'Successfully updated'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Failed to update'
            ], 500);
        }
    }

    public function delete($id) {
        $inventories = Inventory::find($id);

        if (!$inventories) {
            return response()->json([
                'status' => 'failed',
                'error_message' => 'Inventory not found'
            ], 500);
        }

        try {
            $inventories->delete();
            return response()->json([
                'status' => 'ok',
                'message' => 'Successfully deleted'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Failed to delete'
            ], 500);
        }
    }
}
