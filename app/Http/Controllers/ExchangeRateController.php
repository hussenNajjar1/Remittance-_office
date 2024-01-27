<?php

namespace App\Http\Controllers;
use App\Models\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ExchangeRateController extends Controller
{
    public function index()
    {
        $exchangeRates = ExchangeRate::all();
        return view('exchange_rates.index', compact('exchangeRates'));
    }
  
    public function show()
    {
        $exchangeRates = ExchangeRate::all();
      
        return view('exchange_rates.show', compact('exchangeRates'));
    }
  
    public function create()
    {
        return view('exchange_rates.form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'currency_from' => 'required',
            'currency_to' => 'required',
            'exchange_rate' => 'required|numeric',
        ]);

        ExchangeRate::create($validatedData);

        return redirect('/exchange-rates')->with('success', 'Exchange rate added successfully.');
    }

    public function edit(ExchangeRate $exchangeRate)
    {
        return view('exchange_rates.form', compact('exchangeRate'));
    }

    public function update(Request $request, ExchangeRate $exchangeRate)
    {
        $validatedData = $request->validate([
            'currency_from' => 'required',
            'currency_to' => 'required',
            'exchange_rate' => 'required|numeric',
        ]);

        $exchangeRate->update($validatedData);

        return redirect('/exchange-rates')->with('success', 'Exchange rate updated successfully.');
    }

    public function destroy(ExchangeRate $exchangeRate)
    {
        $exchangeRate->delete();

        return redirect('/exchange-rates')->with('success', 'Exchange rate deleted successfully.');
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

            return "hero";
            // قم بإرجاع النتائج لاستخدامها في العرض
            return view('exchange_rates.exchange-rates', ['fluctuations' => $fluctuations]);
        } else {
            // التعامل مع خطأ في الطلب
            $errorInfo ;
            return view('error', ['error' => $errorInfo]);
        }
    } catch (\Exception $e) {
        // التعامل مع الأخطاء الأخرى
        // return view('error', ['error' => $e->getMessage()]);
    }
}

}