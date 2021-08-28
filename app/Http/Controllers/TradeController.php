<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\DiaGioiHanhChinh;
use App\Models\PhuongXa;
use App\Models\QuanHuyen;
use App\Models\ThanhPho;
use App\Models\Trade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
//        $address = DB::table('tinhthanhpho')->get();
//        $quanhuyen = QuanHuyen::all()->where('matp','01');
        $thanhpho = ThanhPho::all();
//        $phuongxa = PhuongXa::all();
        $category = Category::all();
        return view('client.postTrade', ['thanhpho' => $thanhpho, 'category' => $category]);
    }

    public function getQuanHuyen(Request $request)
    {
        $data['quanhuyen'] = QuanHuyen::all()->where("matp",$request->matp);
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => 'required|min:5',
                'category_id' => 'required',
                'address' => 'required',
//                'thanhpho' => 'required',
//                'quanhuyen' => 'required',
//                'phuongxa' => 'required',
//                'diachi' => 'required',
                'description' => 'required',
                'content' => 'required',

            ],
            [
                'title.required' => 'Tiêu đề không được để trống',
                'title.min' => 'Tiêu đề tối thiểu 4 ký tự',
                'category_id.required' => 'Vui lòng chọn danh mục bài viết',
                'address.required' => 'Vui lòng nhập địa chỉ',
//                'thanhpho.required' => 'Vui lòng chọn thành phố',
//                'quanhuyen.required' => 'Vui lòng chọn quận, huyện',
//                'phuongxa.required' => 'Vui lòng chọn phường',
//                'diachi.required' => 'Địa chỉ không được để trống',
                'description.required' => 'Vui lòng giới thiệu về sản phẩm',
                'content.required' => 'Nhập chi tiết về sản phẩm',
            ]
        );
        //db
        $obj = new Trade();

        $obj->title = $request->get('title');
        $obj->category_id = $request->get('category_id');
        $obj->address = $request->get('address');
        $obj->address = $request->get('address');
        $obj->description = $request->get('description');
        $obj->account_id = 1;
        $obj->content = $request->get('content');
        $obj->image = $request->get('imgUpload');
        $obj->save();
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
