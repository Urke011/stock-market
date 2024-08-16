<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use Illuminate\Http\Request;

class AdvisorController extends Controller
{

    public function create()
    {

        return view('advisor.create');
    }

    public function apiRequest(Request $request)
    {
        //dd($request->indexName);

        //input validation
        $request->indexName = str_replace('_', ' ', $request->indexName);
        $dataRequest = $request->validate([
            'name' => 'required',
            'indexName' => 'required',
            'investPeriod' => 'required',
            'invest' => 'required|decimal:0,2',
            'question' => 'required',
            'response' => 'nullable'
        ]);

        //insert input in database
        $storeRequest = Advisor::create($dataRequest);

        //call api
        // Define API key and endpoint URL
        $openAiKey=env('OPENAI_API_KEY');
        $endPointUrl=env('ENDPOINT_URL');

        // Define header parameters
        $headerParameters = array(
            "Content-Type: application/json",
            "Authorization: Bearer " . $openAiKey
        );
        $bodyParameters = array(
            "model" => "gpt-3.5-turbo",
            "messages" => array(
                array(
                    "role" => "system",
                    "content" => "You are a stock adviser. You speak English and Serbian. You always answer in Latin. You explain clearly, precisely, naturally to people's questions. You can even use short examples from the stock market. You do not answer questions that are not related to the stock market, stock actions, stock investments and savings"
                ),
                array(
                    "role" => "user",
                    "content" => "The name of the questioner is " . $request->name . " and " . $request->name . " wants to invest in " . $request->indexName . " on a " . $request->investPeriod . " basis roughly around " . $request->invest . "$"
                ),
                array(
                    "role" => "user",
                    "content" => "This is question: " . $request->question
                )
            )
        );
        // Initialize cURL session
        $ch = curl_init();

// Set cURL options
        curl_setopt($ch, CURLOPT_URL, $endPointUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headerParameters);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($bodyParameters));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Execute cURL request
        $response = curl_exec($ch);

// Check for cURL errors
        if ($response === false) {
            die("cURL Error: " . curl_error($ch));
        }
// Get HTTP status code
        $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Check for HTTP errors
        if ($httpStatusCode !== 200) {
            echo "HTTP Error: " . $httpStatusCode;
            echo "Response Body: " . $response;
        } else {
            // Decode JSON response
            $responseData = json_decode($response, true);
            // Output response
            var_dump($responseData);

            return view('advisor.response', ['responseData' => $responseData]);
        }

// Close cURL session
        curl_close($ch);

        // return view('advisor.response');
    }
}











