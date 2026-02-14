<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class SettingsController extends Controller
{
    public function save(Request $request) //функция для сохранения настроек (url) от яндекса
    {
        $request->validate([
            'yandex_url' => 'required|string'
        ]);

        $businessId = $this->extractBusinessId($request->yandex_url);

        $company = Company::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'yandex_url' => $request->yandex_url,
                'business_id' => $businessId
            ]
        );

        return response()->json($company);
    }

    private function extractBusinessId($url)    //Ищем id компании в url 
    {
        preg_match('/org\/(\d+)/', $url, $matches);
        return $matches[1] ?? null;
    }
}
