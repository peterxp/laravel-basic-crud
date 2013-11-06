<?php

class NewsController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $news = DB::table('news')->OrderBy('id', 'DESC')->paginate(5);
        return View::make('news.index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        News::create(Input::all());
        return Redirect::route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $news = DB::table('news')->where('id', $id)->limit(1)->get();
        return View::make('news.show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $news = DB::table('news')->where('id', $id)->limit(1)->get();
        return View::make('news.edit')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {

        $news = News::find(Input::get('id'));

        $news->title        = Input::get('title');
        $news->description  = Input::get('description');
        $news->save();

        return Redirect::route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        News::where('id', '=', $id)->delete();
        return Redirect::route('news.index');
    }

}
