<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Pages::all();
        return view('pages.index')->withPages($pages);
    }
    public function changePageIndex($id)
    {
        $page = Pages::find($id);
        if($page->indexed == 'checked'){
            $page->indexed = 'unchecked';
        }else{
            $page->indexed = 'checked';
        }
        $page->save();

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $this->validate($request, Array(
            'title' => ['required', 'max:255'],
            'content' => ['required']
        ));
        //Store
        $page = new Pages;
        $page->title = $request->title;
        $page->content = $request->content;
        $page ->save();

        //Session::flash('succes', 'The page was saved');


        return redirect()->route('pages.show', $page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Pages::find($id);
        return view('pages.show')->withPage($page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Pages::find($id);
        return view('pages.edit')->withPage($page);
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
         //Validation
         $this->validate($request, Array(
            'title' => ['required', 'max:255'],
            'content' => ['required']
        ));
        //Store
        $page = Pages::find($id);
        $page->title = $request->input('title');
        $page->content = $request->input('content');
        $page ->save();

        //Session::flash('succes', 'The page was saved');


        $pages = Pages::all();
    return view('admin')->withPages($pages);
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
