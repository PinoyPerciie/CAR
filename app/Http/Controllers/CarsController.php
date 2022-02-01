<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Product;
use App\Rules\Uppercase;
use GuzzleHttp\Promise\Create;
use App\Http\Requests\CreateValidationRequest;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ///Select * From cars
        $cars = Car::all();

        // var_dump($cars);

        return view('cars.index', [
            'cars' => $cars
        ]);

        // dd($cars);
        // return view('cars.index');

        // $cars = Car::chunk(2, function ($cars) {
        //     foreach($cars as $car) {
        //         print_r($car);
        //     }
        // });



        // $cars = Car::where('name', '=', 'Audi')
        // ->get();;

        // return view('index', [
        //     'cars' => $cars
        // ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //guessExtension() - "jpeg"
        //getMimetype() - "image/jpeg"
        //store()
        //asStore()
        //storePublicly()
        //move()
        //getClientOriginalName() - "mercedes-benz-1470136_1920.jpg"
        //getClientMimeType() - "image/jpeg"
        //guesssClientExtension() - "jpg"
        //getSize() - 808696
        //getError() - 0 zero meaning no error or correct
        //isValid() - true


        // $test = $request->file('image')->isValid();

        // dd($test);



            // $newImageName = time() . '-' . $request->name . '.' .
            // $request->image->extension();

            // // $test =
            // $request->image->move(public_path('images'), $newImageName);

            // dd($test);

        // $request->validate([
        //     'name' => new Uppercase,
        //     'founded' => 'required|integer|min:0|max:2021',
        //     'description' => 'required'
        // ]);

        // $request->validate([
        //     'name' => 'required|unique:cars',
        //     'founded' => 'required|integer|min:0|max:2021',
        //     'description' => 'required'
        // ]);

        // $car = new Car;
        // $car->name = $request->input('name');
        // $car->founded = $request->input('founded');
        // $car->description = $request->input('description');
        // $car->save();


        $request->validate([
             'name' => 'required',
             'founded' => 'required|integer|min:0|max:2021',
             'description' => 'required',
             'image' => 'required|mimes:jpg,png,jpeg|max:5048'
       ]);

       $newImageName = time() . '-' . $request->name . '.' .
       $request->image->extension();

       $request->image->move(public_path('images'), $newImageName);


        // dd($request->all());

        // $request->validated();

        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description'),
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);

        // var_dump($car->products);

        $products = Product::find($id);

        // print_r($products);



        // dd($car->engines);

        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id)->first();

        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateValidationRequest $request, $id)
    {

        $request->validated();

        // $request->validate([
        //     'name' => new Uppercase,
        //     'founded' => 'required|integer|min:0|max:2021',
        //     'description' => 'required'
        // ]);

        $car = Car::where('id', $id)
        ->update([
                'name' => $request->input('name'),
                'founded' => $request->input('founded'),
                'description' => $request->input('description'),
        ]);
                return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {

        $car->delete();

        return redirect('/cars');
    }
}
