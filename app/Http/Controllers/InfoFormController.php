<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class InfoFormController extends Controller
{
    public function showForm()
    {
        // Call an external API to get user's country information by IP address
        $client = new Client();
        $response = $client->get('https://ipinfo.io/154.192.148.39?token=4e355192ed8500'); // Replace with your IPInfo token
        $locationData = json_decode($response->getBody()->getContents(), true);

        // Extract country code and country name
        $countryCode = $locationData['country'] ?? '';
        $countryName = $locationData['country'] ? $this->getCountryName($locationData['country']) : '';

        return view('info-form', compact('countryCode', 'countryName'));
    }

    // Helper function to get country name from code
    private function getCountryName($countryCode)
    {
        $countries = [
            'US' => 'United States',
            'PK' => 'Pakistan',
            'IN' => 'India',
            'GB' => 'United Kingdom',
            // Add more countries as needed
        ];

        return $countries[$countryCode] ?? 'Unknown';
    }
}
