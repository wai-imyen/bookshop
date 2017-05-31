<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Merchandise;
use App\Categorys;


class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Merchandise::all();
        return view('merchandise.index', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // $this->middleware('auth');   // 驗證是否登入
        $query = Categorys::all();
        return view('merchandise.create', compact('query'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Merchandise::create($request->all());
        return redirect('merchandiseAdmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query = Merchandise::find($id);
        $query_ca = Categorys::all();
        return view('merchandise.edit',compact('query','query_ca'));
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
        Merchandise::where('id',$id)->update([
            'category'=>$request->get('category'),
            'title' => $request->get('title'),
            'author' =>$request->get('author'),
            'price' =>$request->get('price'),
            'publisher'=>$request->get('publisher'),
            'date_of_publication'=>$request->get('date_of_publication'),
            'content'=>$request->get('content'),
            'situation'=>$request->get('situation'),
            'image'=>$request->get('image') 

            ]);

        return redirect('merchandiseAdmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Merchandise::destroy($id);
        return redirect('merchandiseAdmin');
    }

    public function merchandiseAdmin(){

        $query = Merchandise::all();
        return view('merchandise.admin',compact('query'));
    }
}
