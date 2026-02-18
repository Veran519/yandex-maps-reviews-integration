<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class SettingsController extends Controller
{
    public function save(Request $request) //функция для сохранения настроек (url) от яндекса
    {
        $request->validate([
            'yandex_url' => [
                    'required',
                    'url',
                    'regex:/yandex\./'
                            ]
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
        if (preg_match('/org\/(\d+)/', $url, $matches)) {
        return $matches[1];
        }

        if (preg_match('/oid=(\d+)/', $url, $matches)) {
            return $matches[1];
        }

        $decoded = urldecode($url);

        if (preg_match('/oid=(\d+)/', $decoded, $m)) {
            return $m[1];
        }

        return  null;
    }

    public function show(Request $request)
    {
        return $request->user()->company;
    }
}
