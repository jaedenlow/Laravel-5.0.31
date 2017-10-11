<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

use App\Post;

use Carbon\carbon;

class PostController extends Controller {

    /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
    
	public function showlist()
	{
        $posts = Post::all();
        
		return view('post.list', compact('posts'));
	}
    
    public function showsingle($slug)
    {
        //$post = Blog::find($id);
        $post = Post::where('slug', '=', $slug)->firstOrFail();

        return view('post.single', compact('post'));
    }
    
    public function create()
    {
        return view('post.create');
    }
    
    public function store()
    {
        $input = Request::all();
        $input['published_at'] = Carbon::now();
        
        Post::create($input);
        
        return redirect('blog');
    }

}
