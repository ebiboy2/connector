<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\BitcroreApi;
use Denpa\Bitcoin\Client as BitcroreMain;



class SearchController extends Controller
{
    private $bitcrore;

    public function __construct()
    {
        
    }
    
    public function index()
    {
        $txoutsetinfo = $this->request_('gettxoutsetinfo', null);
        $blockchaininfo = $this->request_('getblockchaininfo', null);
        $networkhashps = $this->request_('getnetworkhashps', null);
        return view('welcome',compact('txoutsetinfo', 'blockchaininfo', 'networkhashps'));

    }

    public function search(Request $request)
    {
        
        if(is_numeric(trim($request->q)) && strlen(trim($request->q)) < 10)
        {
            $blockhash = $this->request_('getblockhash', trim($request->q));
            $getblock = $this->request_('getblock', trim($blockhash));
            return view('block',compact('getblock'));
        }
        else if(!is_numeric(trim($request->q)) && strlen(trim($request->q)) == 64)
        {
            
            if(strpos(trim($request->q), '0000'))
            {
                $getblock = $this->request_('getblock', trim($request->q));
                return view('block',compact('getblock'));
            }
            else
            {
                $gettransaction = $this->request_('getrawtransaction', trim($request->q));
                return view('hash',compact('gettransaction'));
            }
        }
        else if(!is_numeric(trim($request->q)) && strlen(trim($request->q)) == 34)
        {
            $getaddressdeltas = $this->call2('getaddressdeltas', trim($request->q));
            return view('address',compact('getaddressdeltas'));
        }
        else
        {
            return redirect('/');
        }


    }

    public function hash(Request $request)
    {
        
        if(!is_numeric(trim($request->hash)) && strlen(trim($request->hash)) == 64)
        {
            
            if(strpos(trim($request->hash), '0000'))
            {
                $getblock = $this->request_('getblock', trim($request->hash));
                return view('block',compact('getblock'));
            }
            else
            {
                $gettransaction = $this->request_('getrawtransaction', trim($request->hash));
                return view('hash',compact('gettransaction'));
            }
        }
        else
        {
            return redirect('/');
        }


    }

    public function block(Request $request)
    {    
        if(is_numeric(trim($request->block)))
        {
            $blockhash = $this->request_('getblockhash', trim($request->block));
            $getblock = $this->request_('getblock', trim($blockhash));
            return view('block',compact('getblock'));
        }
        else
        {
            return redirect('/');
        }
    
        


    }

    public function address(Request $request)
    {
        
        if(!is_numeric(trim($request->address)) && strlen(trim($request->address)) == 34)
        {
            $getaddressdeltas = $this->call2('getaddressdeltas', trim($request->address));
            return view('address',compact('getaddressdeltas'));
        }
        else
        {
            return redirect('/');
        }


    }

    

    public function request_($request, $param){
        $url = "http://165.22.59.237/index.php";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        $data = array(
            'request' => $request,
            'parameters' => $param,
            'security' => '2018.Main_Admin'
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $contents = curl_exec($ch);
        if (curl_errno($ch)) {
            var_dump(curl_error($ch));
        }
        else{
            return json_decode($contents);
        }
        curl_close($ch);
    }

    public function call2($method, $params)
    {
        $proto          = 'http';
        $host           = '165.22.59.237';
        $port           = '8332';
        $url            = null;
        $status         = null;
        $error          = null;
        $raw_response   = null;
        $response       = null;
        // If no parameters are passed, this will be an empty array
        $params = array_values([]);
        // The ID should be unique for each call
        
        // Build the request, it's ok that params might have any empty array
        $request = json_encode(array(
            'method' => 'getaddressdeltas',
            'params' => array(['addresses'=>['Bh22SsBJyeAJY3vmc8EEd12HWMtM85c7C9']]),
            'id'     => rand(22,33232)
        ));
    
    
        // Build the cURL session
        $curl    = curl_init("{$proto}://{$host}:{$port}/{$url}");
        $options = array(
            CURLOPT_HTTPAUTH       => CURLAUTH_BASIC,
            CURLOPT_USERPWD        => 'bitcrore2020' . ':' . '2018.Main_Admin',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_HTTPHEADER     => array('Content-type: text/plain'),
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $request
        );
        // This prevents users from getting the following warning when open_basedir is set:
        // Warning: curl_setopt() [function.curl-setopt]:
        //   CURLOPT_FOLLOWLOCATION cannot be activated when in safe_mode or an open_basedir is set
        if (ini_get('open_basedir')) {
            unset($options[CURLOPT_FOLLOWLOCATION]);
        }
        curl_setopt_array($curl, $options);
        // Execute the request and decode to an array
        $raw_response = curl_exec($curl);
        $response     = json_decode($raw_response, true);
        // If the status is not 200, something is wrong
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        // If there was no error, this will be an empty string
        $curl_error = curl_error($curl);
        curl_close($curl);
        if (!empty($curl_error)) {
            $error = $curl_error;
        }
        if ($response['error']) {
            // If bitcoind returned an error, put that in $error
            $error = $response['error']['message'];
        } elseif ($status != 200) {
            // If bitcoind didn't return a nice error message, we need to make our own
            switch ($status) {
                case 400:
                    $error = 'HTTP_BAD_REQUEST';
                    break;
                case 401:
                    $error = 'HTTP_UNAUTHORIZED';
                    break;
                case 403:
                    $error = 'HTTP_FORBIDDEN';
                    break;
                case 404:
                    $error = 'HTTP_NOT_FOUND';
                    break;
            }
        }
        if ($error) {
            return false;
        }
        return $response['result'];
    }

    public function fallback()
    {
        return redirect('/');

    }
    
}
