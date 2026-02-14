<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $company = auth()->user()->company;

        if (!$company) {
            return response()->json([
                'message' => 'Компания не подключена'
            ], 400);
        }

        // Заглушка для тестового задания
        return response()->json([
            'rating' => 4.8,
            'total' => 230,
            'reviews' => [
                [
                    'id' => 1,
                    'author' => 'Иван',
                    'rating' => 5,
                    'text' => 'Отличный сервис!'
                ],
                [
                    'id' => 2,
                    'author' => 'Анна',
                    'rating' => 4,
                    'text' => 'Всё понравилось'
                ]
            ]
        ]);
    }
}
