<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BarangResourceRequest;
use App\Models\BarangModel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return BarangModel::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BarangResourceRequest $request): JsonResponse
    {
        $barang = BarangModel::create($request->input());
        if (empty($barang)) {
            return response()->json([
                'success' => false,
                'errors' => 'conflict with request data and current database',
            ], 409);
        }

        return response()->json([
            'success' => true,
            'barang' => $barang,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(BarangModel $barang): JsonResponse
    {
        return response()->json([
            'success' => true,
            'barang' => $barang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BarangResourceRequest $request, BarangModel $barang): JsonResponse
    {
        $isUpdated = $barang->update($request->input());
        if (!$isUpdated) {
            return response()->json([
                'success' => false,
                'errors' => 'conflict with request data and current database',
            ], 409);
        }

        return response()->json([
            'success' => true,
            'barang' => $barang
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BarangModel $barang): JsonResponse
    {
        try {
            $barang->delete();
            return response()->json([
                'success' => true,
                'message' => 'Barang Data success deleted'
            ]);
        } catch (QueryException $qe) {
            return response()->json([
                'success' => false,
                'errors' => $qe->getMessage(),
            ], 422);
        }
    }
}
