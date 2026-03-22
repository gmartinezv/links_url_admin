<?php

namespace App\Http\Controllers;

use App\Models\link;
use Illuminate\Http\Request;
use App\Http\Requests\Link\createLinkRequest;
use App\Http\Requests\Link\updateLinkRequest;
use App\Models\Categorias;
use App\Models\Links;
use App\Services\LinkService;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(protected LinkService $linkService)
    {
       //  $this->middleware('auth');
    }




    public function index()
    {
        //
        $links = $this->linkService->index();
        $categorias = Categorias::all();

        return view('link.index', compact('links', 'categorias') );


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorias = Categorias::all();
        
        return view('link.form',  ['link' => new Links() , 'categorias' => $categorias ] );

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createLinkRequest  $request)
    {
        // 
        //  $link = link::create($validatedData);   
       // return response()->json($link, 201);
       $this->linkService->create($request->validated());

    return redirect()->route('links.index')->with('message', 'Link created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int  $id )
    {
        //
        $link = $this->linkService->find($id);
        $categorias = Categorias::all();        
        return view('link.form', ['link' => $link, 'categorias' => $categorias] );

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateLinkRequest $request, int $id)
    {
        //
        $link = $this->linkService->find($id);
        $this->linkService->update($id, $request->validated());
        return redirect()->route('links.index')->with('message', 'Link updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id )
    {
        //
        $this->linkService->delete($id);
        return redirect()->route('links.index')->with('message', 'Link deleted successfully.'); 

    }
}
