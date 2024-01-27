<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExchangeRate;
use Illuminate\Support\Facades\Http;

class ExchangeRateApiController extends Controller
{
    public function index()
    {
        $exchangeRates = ExchangeRate::all();
        return response()->json(['exchangeRates' => $exchangeRates]);
    }

    public function show()
    {
        $exchangeRates = ExchangeRate::all();
        return response()->json(['exchangeRates' => $exchangeRates]);
    }

    public function create()
    {
        return response()->json(['message' => 'Create endpoint not supported.']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'currency_from' => 'required',
            'currency_to' => 'required',
            'exchange_rate' => 'required|numeric',
        ]);

        $exchangeRate = ExchangeRate::create($validatedData);

        return response()->json(['exchangeRate' => $exchangeRate, 'message' => 'Exchange rate added successfully.']);
    }

    public function edit(ExchangeRate $exchangeRate)
    {
        return response()->json(['exchangeRate' => $exchangeRate]);
    }

    public function update(Request $request, ExchangeRate $exchangeRate)
    {
        $validatedData = $request->validate([
            'currency_from' => 'required',
            'currency_to' => 'required',
            'exchange_rate' => 'required|numeric',
        ]);

        $exchangeRate->update($validatedData);

        return response()->json(['exchangeRate' => $exchangeRate, 'message' => 'Exchange rate updated successfully.']);
    }

    public function destroy(ExchangeRate $exchangeRate)
    {
        $exchangeRate->delete();

        return response()->json(['message' => 'Exchange rate deleted successfully.']);
    }

    // دالة سعر صرف 
    public function getFluctuations()
    {
        $api_key = '81101d5c462c47f9a4dd60f8c3b423df';
        $startDate = '2022-10-01';
        $endDate = '2022-10-15';
        $symbols = 'PKR';
        $base = 'GBP';

        $url = "https://api.currencyfreaks.com/v2.0/fluctuation?apikey={$api_key}&startDate={$startDate}&endDate={$endDate}&symbols={$symbols}&base={$base}";

        try {
            $response = Http::get($url);

            // تحقق من نجاح الطلب
            if ($response->successful()) {
                $data = $response->json();
                $fluctuations = $data['fluctuations'];

                return response()->json(['fluctuations' => $fluctuations]);
            } else {
                // التعامل مع خطأ في الطلب
                $errorInfo = $response->json();
                return response()->json(['error' => $errorInfo], $response->status());
            }
        } catch (\Exception $e) {
            // التعامل مع الأخطاء الأخرى
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}