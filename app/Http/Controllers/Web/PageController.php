<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Psr\Http\Message\ResponseInterface;

class PageController extends Controller
{
    public function Index(){
        return view('index');
    }
    public function catalog(){
        return view('product');
    }
    public static function getProducts(){
        $client = new Client(['timeout' => 20]);
        $categories = null;
        try{
            $headers = [
                'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImVmODdiMjNlODRhZDhiYmRkOTUwZjg5YTg4YjVlN2I1MGM4ODFhZGJhOTZiNWE0OGE5MzFmNmU4Y2U0ZjAyN2JmOWYxNDMzOGZhMGM1YzFmIn0.eyJhdWQiOiIxIiwianRpIjoiZWY4N2IyM2U4NGFkOGJiZGQ5NTBmODlhODhiNWU3YjUwYzg4MWFkYmE5NmI1YTQ4YTkzMWY2ZThjZTRmMDI3YmY5ZjE0MzM4ZmEwYzVjMWYiLCJpYXQiOjE1NzUyOTMyNDYsIm5iZiI6MTU3NTI5MzI0NiwiZXhwIjoxNjM4NDUxNjQ2LCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQiLCJpbnNlcnQiLCJ1cGRhdGUiLCJkZWxldGUiXX0.KZLWE3QvlKVMXCw3vTu1YPfB4Z0eqBxHusD_3aYdEVP5KwtZu3TpYd3e9SvVLwUyE2EI9Ks5bHhwsOlyVl1QUd-B8cGLPQ9ipLaAYVHbMvL_cO9Zv_gr_QwplETpMWwIyNr0dI3vCOdMykGJKkBQobobFTl5HrWVjppBHZ3TVH8-wNnR018O1PX2ocqWIRQAYES2GiP9GPUL8VDfd4bb9C7xnYDBtIBwok_Mphs8WovP5jO_v_7pkxWNzzJACQ_pFmxaIsxgSGxyj6NMfrNaLHocBgmC7cOTsMbQk26JcySj_X3ebB02IlcqXuwT6E9FpynIAfGzWc-W1YAioKTvMk4hJcbcoDQ46oR76gJrCzRLBa15RE3iazcc-Wf6ai8JVucVoW_1lWk1fYF-AevRmv96ZtdoiffreO-1pNUqzIo2DipIvYwLsTpuIcSmMh_7NYGjptzFKIaIrhQ40WwpLNL2KnJ3Hm3QTNHLGap9ccX6OLXPgMhkN5SmEf8gUNqI_SlgtLd7bNjVwdbDlkvHeqrR0gc01AiqejqIKT1gblALYQmMEPTFEm_7itA18wIaS79E4pDPGlUISkawOK1qBE89gkcNkCb0qg4xV3NJx4OTaaG8kCdNkxDsjg4QsKtxncy9oXJ0cBpVkueH9DS1FYQqUN1qmtVuF4spu_XlYtk'
            ];
            $request = new \GuzzleHttp\Psr7\Request('GET', 'http://api.aimanapi.test/masterkids/v1/listings', $headers);
            $promise = $client->sendAsync($request);
//            $promise = $client->requestAsync('GET','http://api.masterkids.test/v1/categories');
            $response = $promise->then(
                function (ResponseInterface $response) {
                    echo $response->getBody();
                },
                function (RequestException $e) {
                    echo $e->getMessage();
                }
            );
            $promise->wait();
        } catch (GuzzleException $exception) {
            return null;
        }
    }
}
