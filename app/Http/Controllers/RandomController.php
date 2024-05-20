<?php

namespace App\Http\Controllers;

use App\Models\Random;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class RandomController extends Controller
{

    public function index(): JsonResponse
    {
        return response()->json(Random::all());
    }

    public function show(int $id): JsonResponse
    {
        $random = Random::retrieve($id);

        if (!$random) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        return response()->json($random);
    }

    public function store(): JsonResponse
    {
        $random = Random::generate();

        return response()->json([
            'id' => $random->id,
            'number' => $random->number
        ]);
    }
}
