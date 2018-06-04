<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\User;
use Session;
use DB;
use Auth;
use App\Notifications\NotifPostOwner;
use App\Notification;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return view('home')->with('items',$items);
        
    }
    public function Insertitem(){
        return view('insertitem');
    }
    public function initem(Request $request){

        $items=new Item;
        $items->iname=$request->input('iname');
        $items->iqty=$request->input('iqty');
        $items->user_id=Auth::user()->id;
        $items->save();
        $item=Item::where('iname','=',$request->input('iname'))->firstOrFail(); 
        User::find($item->user->id)->notify(new NotifPostOwner($item));
        return view('insertitem')->with('success','Item added');

    }

    public function getJsSignal(){
        $Notification=Auth::user()->unreadNotifications;
        return $Notification;
    }

    public function getJsread(Request $request){
      Auth::user()->unreadNotifications->find($request->id)->markAsRead();
    }

    public function getuserdetails(){
        $users=User::all();
        return view('getuserdetails')->with('users',$users);
    }
}
