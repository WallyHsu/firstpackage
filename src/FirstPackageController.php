<?php

namespace Wally\First;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class FirstPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $from = 'USD';  // 美元  
        $to = 'TWD'; // 新台幣
        $uri = 'http://finance.yahoo.com/d/quotes.csv?e=.csv&f=sl1d1t1&s='. $from . $to .'=X';
        $content = file_get_contents($uri);  
        $content = explode(',', $content);  
        echo "$from => $to 匯率: ".$content[1];
        echo "<br>";
        echo "匯率擷取時間: ".$content[2].$content[3];
        $rate = $content[1];
    }
}
