<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required|min:4|max:255',
            ],
            [
                'name.required' => 'Vui lòng nhập tên danh mục',
                'name.min' => 'Tên danh mục phải lớn hơn 4 ký tự.',
                'name.max' => 'Tên danh mục phải nhỏ hơn 255 ký tự.',
            ]
        );
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
     public function show()
    {
//        $list = DB::table('categories');
        return view('admin.category.listCategory',['list' => Category::paginate(10)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id

     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id

     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id

     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
