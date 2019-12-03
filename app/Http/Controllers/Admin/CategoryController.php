<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;

class CategoryController extends Controller
{
    public function index(){
        return view('categories_view');
    }
    public function show(){
        $client = new Client(['timeout' => 20]);
        $categories = null;
        try{
            $headers = [
                'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImJjMjFiZTQxY2NmNDc5MTgzMTBmZjkyZTI4OGIwYzMyYjdhYmFkODlmZWM0YWZkZjI3ZGNhMzBmMDUxMjUxNWVlOGFkZDZmNzE5MzQ4MGRkIn0.eyJhdWQiOiIxIiwianRpIjoiYmMyMWJlNDFjY2Y0NzkxODMxMGZmOTJlMjg4YjBjMzJiN2FiYWQ4OWZlYzRhZmRmMjdkY2EzMGYwNTEyNTE1ZWU4YWRkNmY3MTkzNDgwZGQiLCJpYXQiOjE1NzAyMTYxMTcsIm5iZiI6MTU3MDIxNjExNywiZXhwIjoxNjMzMzc0NTE2LCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQiLCJpbnNlcnQiLCJ1cGRhdGUiLCJkZWxldGUiXX0.IyQFwzm0m_P4sAfWOLkbTYV0jlH-kfsUVUESvK-1PDstjsXLGYYX6p3N1zQe2Vyd5kjpIAlfDGt9oHI5b4weyBGdvur-m2RGksWd6OW1uLLBajNMo8pXW7VBkpQC6Ki6URvG9x2mkH_KkKvY9osSHS4sh8xQkHaiV_mUMoF2Iuzr3oTMNfpHai4gGzhgp6NdB50Ch8P1z35BseccTiWzazxFhpnRR0KEy5ZEmmgR3g_WtDK4AyKVzgS1YP-gJ3jTfo6L4j1W_NOpU8OhA5ERu2IUBgGn1nuiwJE-_KZK_qXKW0p78mnhxlmvyqjZqm7qmNggSwutc2hBOLsKRiOGYQTLjLI3p0ln33deRS5bAOJZYVy6i4s5DiDOOGflxc_Nn2o_popHLbw0dOkBsl5fyUrsrKBcGIm6zpis-hbDcRNqEVLItv5ArJeFu7UW9a9-HlskbFL6D2eF_TkCin7wdB4Rg-HSRVXN2Fnr442ZS8KVpHuUP3w-yUrlBoo39zAsEd1o5-kRnzryIRhVC71b7j9PU5UMZdx1159GC1L6eTlvoLvbxGO2A5weclkbhGQcIzbsqHzFpeX2KxDrsWlf8Mkl1c2eC5EHg4m_I1Em6PVU_mMGgf1JNFp74c3iGFhu9Km0Gd4DWAO-60_-EzewgZucOsNH1FDYSSoeZhejl-c'
            ];
            $request = new Request('GET', 'http://api.aimanapi.test/masterkids/v1/categories', $headers);
            $promise = $client->sendAsync($request);
//            $promise = $client->requestAsync('GET','http://api.masterkids.test/v1/categories');
            $response = $promise->then(
                function (ResponseInterface $response) {
                    global $categories;
                    echo $response->getBody();
                },
                function (RequestException $e) {
                    echo $e->getMessage();
//                    echo $e->getRequest()->getMethod();
                }
            );
            $promise->wait();
        } catch (GuzzleException $exception) {
            return null;
        }
    }
}
