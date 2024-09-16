<?php

namespace App\Http\Controllers;
use App\Http\Requests\EventRequest;
use App\Model\Events;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventsController extends Controller
{
    public function index()
    {
        $cartItems = CartFacade::getContent();
        $allblog=Events::orderBy('created_at', 'desc')->paginate(4);;
        return view('blog', ["cartItems"=>$cartItems,"blogs"=>$allblog]);
    }
    public function allblog()
    {
        $allblog=Events::all();
        return view('event.blogs', ["blogs"=>$allblog]);
    }


    /////////////////////Create///////////////////////
    public function create()
    {
        return view('event.create');
    }
    public function store(EventRequest $request)
    {
        $validatedData = $request->validate([
            'event_img' => 'required|max:2048|image|',
            'title' => 'required|min:5|max:2000',
            'description' => 'required|min:5|max:2000',
        ]);
        $imageName = "";
        if ($request->hasFile("event_img")) {
            $image = $request->event_img;
            $imageName = rand(1, 1000) . time() . "." . $image->extension();
            $image->move(public_path("Events/img/"), $imageName);
        }


        Events::create([
            "event_img" => $imageName,
            "title" => $request->title,
            "description" => $request->description,
        ]);
        return redirect()->route('allblog')->with("massege", "created  blog successfuly");
    }

    /////////////////////show///////////////////////

    public function show($id)
    {

        $events = Events::findOrFail($id);
        return view("event.show", ['events' => $events ]);
    }
    /////////////////////Delete///////////////////////
    public function delete($id)
    {
        $events = Events::findOrFail($id);
        if (File::exists(public_path('Events/img/' . $events->event_img))) {
            File::delete(public_path('Events/img/' . $events->event_img));
        }
        $events->delete();
        return redirect()->route('allblog')->with("massege","deleted successfuly of blog");
    }



    /////////////////////  Edit///////////////////////
    public function edit($id)
    {

        $events = Events::findOrFail($id);
        return view("event.edit", ['events' => $events ]);
    }



    ///////////////////// Save Edit///////////////////////


    public function save(Request $request)
    {   $imageName = "";
        $old_id = $request->old_id;


         if ($request->description == "") {
            $old_description = $request->old_description;
        } else {
            $old_description= $request->description;
        }


        $events = Events::findOrFail($old_id);

        if ($request->hasFile('event_img')) {
            if (File::exists(public_path('Events/img/' . $events->event_img))) {
                File::delete(public_path('Events/img/' . $events->event_img));
            }
            $image = $request->event_img;
            $imageName = rand(1, 1000) . time().".".$image->extension();
            $image->move(public_path("Events/img/"), $imageName);
        } else {
            $imageName = $request->old_img;
        }

        $events->update([
            "id" => $request->id,
            "event_img" => $imageName,
            "title" => $request->title,
            "description" => $old_description
        ]);
        return redirect()->route('allblog')->with("massege","Event successfuly created");
    }

}
