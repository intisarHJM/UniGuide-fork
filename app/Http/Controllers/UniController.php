<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class UniController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //this one will handle the homepage
    public function index()

    {
        //trying to have the uni's view:
        $PublicUniversities = [
            [
            'University' => 'University of Bahrain',
            'Type' => 'Public University',
            'Image' => 'images/UoB.jpg'
            ],
            [
            'University' => 'Bahrain Polytechnic',
            'Type' => 'Public University',
            'Image' => 'images/Poly.jpg'
            ],
            [
            'University' => 'Arabian Gulf University',
            'Overview' => '......',
            'Type' => 'Public University',
            'Image' => 'images/AGU.jpg'
            ]

        ];
        $PrivateUniversities = [
        [
            'University' => 'Royal College of Surgeons in Ireland',
            'Type' => 'Private University',
            'Image' => 'images/RCSI.jpg'
            ]
            ,
            [
            'University' => 'Gulf University',
            'Type' => 'Private University',
            'Image' => 'images/GulfUni.jpg'
            ],
            [
            'University' => 'American University of Bahrain',
            'Type' => 'Private University',
            'Image' => 'images/AUBH.jpg'
            ],
            [
            'University' => 'University of Technology',
            'Type' => 'Private University',
            'Image' => 'images/UTB.jpg'
            ],
            [
            'University' => 'Ahlia University',
            'Type' => 'Private University',
            'Image' => 'images/AU.jpg'
            ],
            [
            'University' => 'Royal University for Women',
            'Type' => 'Private University',
            'Image' => 'images/RUW.jpg'
            ],
            [
            'University' => 'Kingdom University',
            'Type' => 'Private University',
            'Image' => 'images/KU.jpg'
            ],
            [
            'University' => 'Bahrain Institute of Banking and Finance',
            'Type' => 'Private University',
            'Image' => 'images/BIBF.jpg'
            ],
            [
            'University' => 'Arab Open University',
            'Type' => 'Private University',
            'Image' => 'images/AOU.jpg'
            ],
            [
            'University' => 'Applied Science University',
            'Type' => 'Private University',
            'Image' => 'images/ASU.jpg'
            ],
            [
            'University' => 'British University of Bahrain',
            'Type' => 'Private University',
            'Image' => 'images/BUBH.jpg'
            ]

        ];

        return view('home', [
        'PublicUniversities'=> $PublicUniversities,
        'PrivateUniversities' => $PrivateUniversities
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        //What I did first: return view('university', ['name'=>$name]);
        //$university = University::where('name',$name)->with('colleges')->first();
        //return view('university', compact ('university'));
        $university = University::where('name', $name)->with('colleges')->first();

        return view('university', [
            'university' =>$university,
            'name' => $name
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
