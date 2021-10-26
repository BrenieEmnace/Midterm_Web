<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\blogs;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersController extends Controller{

    public $successStatus = 200;

    public function testQuery() {
        $blogs = Blogs::all();

        if (count($blogs) > 0) {
            return response()->json($blogs, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no blogs in the database'], 404);
        }
    }
}
?>