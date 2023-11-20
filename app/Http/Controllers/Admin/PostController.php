<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Post.index', [
            'post' => SpladeTable::for(Post::class)
                ->column('PostName', label: 'Название Поста')
                ->column('action', label:'Действия', canBeHidden:false)
                ->withGlobalSearch(columns: ['name'])
                ->paginate(4),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Post();
        $category->PostName = $request->input('PostName');
        $category->PostSubname = $request->input('PostSubname');
        $category->PostText = $request->input('PostContent');
        $category->PostBackground = $request->input('PostBackground');
        $category->save();
        Toast::title('Новый пост успешно добавлена');
        return redirect()->route('Post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('Post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        Toast::title("Категория была удалена");
        return redirect()->route('Post.index');
    }
}
