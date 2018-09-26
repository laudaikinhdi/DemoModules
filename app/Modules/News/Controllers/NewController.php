<?php
/**
 * Created by PhpStorm.
 * User: lauda
 * Date: 7/26/2018
 * Time: 9:13 AM
 */
namespace App\Modules\News\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Modules\News\Models\News;

class NewController extends Controller{
    public function __construct()
    {
        #arent:: __construct();
    }
    public function index(Request $request){
        return view('News::index')->with('data', News::all());
    }
}
