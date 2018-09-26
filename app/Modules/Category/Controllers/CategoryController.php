<?php
/**
 * Created by PhpStorm.
 * User: lauda
 * Date: 7/26/2018
 * Time: 9:13 AM
 */
namespace App\Modules\Category\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Modules\Category\Models\Category;
class CategoryController extends Controller{
    public function __construct()
    {
        #arent:: __construct();
    }
    public function index(Request $request){

        return view('Category::index')->with('data', Category::all());
    }
}
