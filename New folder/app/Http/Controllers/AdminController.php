<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\UserAttending;
use App\Models\UserDiscount;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\Setting;
use Notification;
use App\Models\UserAction;
use App\Models\Reservation;
use App\Models\Hme;
use App\Models\Service;
use App\Models\Setup;
use App\Models\About;
use App\Models\Excursion;
use App\Models\Portfolio;
use App\Models\Portfolio_cat;
use App\Models\Team;
use App\Models\Contactus;
use App\Models\Cashout;
use App\Models\Bank;
use App\Models\Comment  ;
use App\Notifications\MessageNotification;
use App\Models\Picture;
 

class AdminController extends Controller
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

    public function users()
    {
        $users = User::get();
        return view('users.index', compact('users'));
    }


    
    public function dash()
    {
        return view('management.index');
    }

    public function management()
    {
        return view('management.index');
    }


    public function send($user_id, $message,$title) {
        $user = User::where('id', $user_id)->first();
  
        $data = [
            'title' => $title,
            'message' => $message,
            'type' => 2,
            'user_id' => $user->id
        ];
  
        Notification::send($user, new MessageNotification($data));
   

        $httpClient = new \GuzzleHttp\Client(); // guzzle 6.3  
        $httpClient->request('POST', 'https://us-central1-newchat-9d522.cloudfunctions.net/sendNotificationForUser', [
            'headers' => [
                 'X-Authorization' => 'LIZefNAEYFEsrr6w7fmVF34qJnP841qqLz5YE9qWMwbhutlEr2nq0CrsdC75ao7Q',
                 'Content-Type' => 'application/json'
             ],
         
                 "json" =>
                 [
                    'user_id' => strval($user->id),
                    'title' => $title,
                    'type' =>  "2",
                    'message' => strval($message)
                 ]
             
         ]);

         
    }


    public function profile($id)
    {
        $user = User::where('id', $id)->first();
        return view('users.profile', compact('user'));
    }




    public function update_user(Request $request)
    {
        $user = User::findOrFail($request->user_id);

        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
     //   $user->id_card = $request->last_name;
        $user->job_title = $request->job_title;
        $user->job_description = $request->job_description;
        $user->status = $request->status;
       // $user->address = $request->last_name;
        $user->photo = $request->photo ? $request->photo->store('users') : $user->photo;

        $user->save();

      
    if ($user)
    {
        return response()->json(['success'=>'User Updatesd!']);
    }else
    {
        return response()->json(['error'=>'User Not Updated!']);
    }

      //  return redirect()->back();
    }

    public function delete_user(Request $request)
    {
          User::where('id',$request->user_id)->delete();

          return redirect()->back();
    }




//////////////////////////////////////////  MANAGEMENT  ////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//         $about = About::first();
//         $portfolio = Portfolio::get();
//         $portfoliocats = Portfolio_cat::get();
//         $team = Team::get();
//         $setup = Setup::first();
//         $contactus = Contactus::first();

public function hme()
{
$hme = Hme::first();
        
    $setups = Setup::get();
    return view('hme.index', compact('hme','setups'));
}
public function service()
{
    $setups = Setup::get();
    $service = Service::get();
    return view('service.index', compact('setups','service'));
}
public function portfolio()
{
    $portfolio = Portfolio::get();
    $service_t = Service::first();
    $portfoliocats = Portfolio_cat::get();
    return view('portfolio.index', compact('portfoliocats','service_t','portfolio'));
}

public function team()
{
    $team = Team::get();
    return view('team.index', compact('team'));
}
public function contactus()
{
    $contactus = Contactus::first();
    return view('contactus.index', compact('contactus'));
}
public function about()
{
    $about = About::first();
    return view('about.index', compact('about'));
}
public function excursions()
{
    $about = About::get();
    $excursions   = Excursion::get();
    return view('excursions.index', compact('excursions','about'));
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function edithme(Request $request)
{
    $hme = Hme::findOrFail('1');
    $hme->sec1 = $request->sec1;
    $hme->sec2 = $request->sec2;
    $hme->sec3 = $request->sec3;
    $hme->sec4 = $request->sec4;
    $hme->save(); 
    return redirect()->back();
} 
public function editservices(Request $request)
{
    $setups = Setup::findOrFail(2);
    $setups->sec1 = $request->sec1;
    $setups->sec4 = $request->sec4;
    $setups->sec5 = $request->sec5;
    $setups->sec6 = $request->sec6;
    
    $setups->save();
    return redirect()->back();
}

public function editservice(Request $request)
{
    $service = Service::findOrFail($request->service_id);
    $service->sec2 = $request->sec2;
    $service->sec3 = $request->sec3;
    
    $service->save();
    return redirect()->back();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function addservice(Request $request)
{
    $service = new Service(); 
    $service->sec2 = $request->sec2;
    $service->sec3 = $request->sec3;
    $service->save();
    return redirect()->back();
}

public function imgcrop()
    {
        return view('imgcrop');
    }

    public function uploadCropImage(Request $request)
    {  
        if(isset($request->url)){
                $folderPath = public_path($request->url);
                $imageName = '';
            }else{
                $folderPath = public_path($request->url);
                $imageName = uniqid() . '.png';
            }
            $imageFullPath = $folderPath.$imageName;

        if(!isset($request->nocrop)){
              
    
            $image_parts = explode(";base64,", $request->image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            file_put_contents($imageFullPath, $image_base64);
    
            $saveFile = new Picture;
            $saveFile->name = $imageName;
            $saveFile->save();
            return response()->json(['success'=>'Crop Image Uploaded Successfully']);

        }else{
            $r= $request->image;
            file_put_contents($imageFullPath, file_get_contents($r));
            return response()->json(['success'=>'Crop Image Uploaded Successfully']);
        }
     
    }













////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function editportfolio(Request $request)
{
    $portfolio = Portfolio::findOrFail($request->portfolio_id);
    $portfolio->sec2 = $request->sec2;
    $portfolio->sec3 = $request->sec3;
    $portfolio->sec4 = $request->sec4;
    $portfolio->save();
    return redirect()->back();
}

public function deleteportfolio(Request $request)
{
    Portfolio::where('id',$request->modaledel_id)->delete();
    return redirect()->back();
}






public function uploadCropImage_port(Request $request)
{  
    $portfolio = new Portfolio();
    
    
    
        $folderPath = 'port_imgs/';
        $imageName = uniqid() . '.png';

        $imageFullPath = $folderPath.$imageName;

        $portfolio->sec1 = $imageFullPath;
    $portfolio->sec2 = $request->sec2;
    $portfolio->sec3 = $request->sec3;
    $portfolio->sec4 = $request->sec4;
    $portfolio->sec5 = $request->sec5;

    $portfolio->save();
        
    if(!isset($request->nocrop)){
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        file_put_contents($imageFullPath, $image_base64);

        $saveFile = new Picture;
        $saveFile->name = $imageName;
        $saveFile->save();
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);

    }else{
        $r= $request->image;
        file_put_contents($imageFullPath, file_get_contents($r));
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }
 
}




public function uploadCropImage_team(Request $request)
{  
    $team = new Team();
    
    
    
        $folderPath = 'team_imgs/';
        $imageName = uniqid() . '.png';

        $imageFullPath = $folderPath.$imageName;

        $team->sec2 = $request->sec2;
        $team->sec3 = $request->sec3;
        $team->sec4 = $request->sec4;
        $team->sec5 = $request->sec5;
        $team->sec6 = $request->sec6;
        $team->sec7 = $request->sec7;
        $team->sec8 = $request->sec8;
        $team->sec9 = $imageFullPath;

    $team->save();
        
    if(!isset($request->nocrop)){
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        file_put_contents($imageFullPath, $image_base64);

        $saveFile = new Picture;
        $saveFile->name = $imageName;
        $saveFile->save();
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);

    }else{
        $r= $request->image;
        file_put_contents($imageFullPath, file_get_contents($r));
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }
 
}






    


 








public function inserthme(Request $request)
{
    $hme = new Hme();
    $hme->type = $request->hme_name;
    $hme->save();
    return redirect()->back();
}









public function deletehme(Request $request)
{
    Hme::where('id',$request->modaledel_id)->delete();
    return redirect()->back();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function insertservice(Request $request)
    {
        $service = new Service();
        $service->type = $request->service_name;
        $service->save();
        return redirect()->back();
    }
    public function deleteservice(Request $request)
    {
        Service::where('id',$request->modaledel_id)->delete();
        return redirect()->back();
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function insertteam(Request $request)
    {
        $team = new Team();
        $team->team = $request->team_name;
        $team->save();
        return redirect()->back();
    }
    public function editteam(Request $request)
    {
        $team = Team::findOrFail($request->modaledel_id);
        $team->sec2 = $request->sec2;
        $team->sec3 = $request->sec3;
        $team->sec4 = $request->sec4;
        $team->sec5 = $request->sec5;
        $team->sec6 = $request->sec6;
        $team->sec7 = $request->sec7;
        $team->sec8 = $request->sec8;
        $team->save();
        return redirect()->back();
    }
    public function deleteteam(Request $request)
    {
        Team::where('id',$request->modaledel_id)->delete();
        return redirect()->back();
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function insertcontactus(Request $request)
    {
        $contactus = new Contactus();
        $contactus->contactus = $request->contactus_name;
        $contactus->save();
        return redirect()->back();
    }
    public function editcontactus(Request $request)
    {
        $contactus = Contactus::findOrFail('1');
        $contactus->sec1 = $request->sec1;
        $contactus->sec2 = $request->sec2;
        $contactus->sec3 = $request->sec3;
        $contactus->sec4 = $request->sec4;
        $contactus->sec5 = $request->sec5;
        $contactus->sec6 = $request->sec6;
        $contactus->save();
        return redirect()->back();
    }
    public function deletecontactus(Request $request)
    {
        Contactus::where('id',$request->modaledel_id)->delete();
        return redirect()->back();
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function insertabout(Request $request)
{
    $about = new About();
    $about->about = $request->about_name;
    $about->save();
    return redirect()->back(); 
}
public function editabout_l(Request $request)
{
    $about = About::findOrFail('1');
    $about->sec1 = $request->sec1;
    $about->sec2 = $request->sec2;
    $about->sec3 = $request->sec3;
    $about->sec4 = $request->sec4;

    $about->save();
    return redirect()->back();
}
public function editabout_r(Request $request)
{
    $about = About::findOrFail('1');
    $about->sec5 = $request->sec5;
    $about->sec6 = $request->sec6;

    $about->save();
    return redirect()->back();
}


public function editabout_bottom(Request $request)
{
    $about = About::findOrFail('1');
    $about->sec7 = $request->sec7;
    $about->sec8 = $request->sec8;
    $about->sec9 = $request->sec9;

    $about->save();
    return redirect()->back();
}
public function editabout_bottom_questions(Request $request)
{
    $about = About::findOrFail('1');
    $about->sec10 = $request->sec10;
    $about->sec11 = $request->sec11;
    $about->sec12 = $request->sec12;
    $about->sec13 = $request->sec13;
    $about->sec14 = $request->sec14;
    $about->sec15 = $request->sec15;

    $about->save();
    return redirect()->back();
}




public function deleteabout(Request $request) 
{
    About::where('id',$request->modaledel_id)->delete();
    return redirect()->back();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function insertexcursion(Request $request)
{
    $excursion = new Excursion();
    $excursion->excursion = $request->excursion_name;
    $excursion->dest_id = $request->dest_id;
    $excursion->save();
    return redirect()->back(); 
}
public function editexcursion(Request $request)
{
    $excursion = Excursion::findOrFail($request->excursion_id);
    $excursion->excursion = $request->excursion_name;
    $excursion->dest_id = $request->dest_id;
    $excursion->save();
    return redirect()->back();
}
public function deleteexcursion(Request $request) 
{
    Excursion::where('id',$request->modaledel_id)->delete();
    return redirect()->back();
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////








}
