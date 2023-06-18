<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;
use DB;
use File;
use Crypt;
use Hash;

class ContactCtrl extends Controller
{
    //


      public function contactFunc()
      {
        //contact page controller
     

        $var1 = DB::table('contact')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


    

        $data = array(
        	
            'pic1'=>$var1
        	);
        return view('contact',$data);
      }



  public function message(Request $req)
  {
    $name = $req->input('name');
    $email = $req->input('email');
    $subject = $req->input('subject');
    $message = $req->input('message');
   


    if($name <> '' && $email <> ''  && $subject <> '' && $message <> '')
    {
      $data = array(
          'Name'=>$name,
          'Email'=>$email,
          'Subject'=>$subject,
          'Message'=>$message
        );


               DB::table('contact_message')->insert($data);
                 Session::flash('success','Thank you, We will reply you as soon as possible');
                 return Redirect('contact');
                 
    }
    else
    {
      return Redirect('contact');
    }

  }






  public function admin()
     {
      if(session()->has('session_login'))
      {
        
        $var1 = DB::table('contact')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();

        $var5 = DB::table('contact_message')
                ->get();


    

        $data = array(
          
            'pic1'=>$var1,
            'pic5'=>$var5
          );
        return view('admin_contact',$data);

      }
      else
      {
        return Redirect('login');
      }
     }









      public function deleteMainImg(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->MainImage;
           
             
           

            

            $data = array('MainImage'=>'');

            DB::table('contact')
            ->where('ID',1)
            ->update($data);


            File::delete('images/'.$Name);



         $var1 = DB::table('contact')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();

        $var5 = DB::table('contact_message')
                ->get();


    

        $data = array(
          
            'pic1'=>$var1,
            'pic5'=>$var5
          );
        return view('admin_contact',$data);


          }
          else
          {
            return Redirect('login');
          }


     }









     public function uploadMainImg(Request $store)
     {
             if(session()->has('session_login'))
              {

                   // get current time and append the upload file extension to it,
                   // then put that name to $photoName variable.
               $photoName = time().'.'.$store->img_upload->getClientOriginalExtension();

                  $data = array('MainImage'=>$photoName);

                 

                  DB::table('contact')
                    ->where('ID',1)
                    ->update($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);


          
         $var1 = DB::table('contact')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();

        $var5 = DB::table('contact_message')
                ->get();


    

        $data1 = array(
          
            'pic1'=>$var1,
            'pic5'=>$var5
          );
        return view('admin_contact',$data1);

              }
            else
            {
            return Redirect('login');
            }
     }









public function updateContactMainTitle(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Title = $req->title;
             
           

          
            $data = array('Title'=>$Title);

            DB::table('contact')
            ->where('ID',1)
            ->update($data);

           



                  
       $var1 = DB::table('contact')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();

        $var5 = DB::table('contact_message')
                ->get();


    

        $data1 = array(
          
            'pic1'=>$var1,
            'pic5'=>$var5
          );
        return view('admin_contact',$data1);


            
          }
          else
          {
            return Redirect('login');
          }
        }










  public function updateContactAddress(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Info = $req->info;
             
           

          
            $data = array('Office'=>$Info);

            DB::table('contact')
            ->where('ID',1)
            ->update($data);



                    
      $var1 = DB::table('contact')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();

        $var5 = DB::table('contact_message')
                ->get();


    

        $data1 = array(
          
            'pic1'=>$var1,
            'pic5'=>$var5
          );
        return view('admin_contact',$data1);
           


            
          }
          else
          {
            return Redirect('login');
          }
        }










  public function updateContactPhone(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Info = $req->info;
             
           

          
            $data = array('Phone'=>$Info);

            DB::table('contact')
            ->where('ID',1)
            ->update($data);



                    
        $var1 = DB::table('contact')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();

        $var5 = DB::table('contact_message')
                ->get();


    

        $data1 = array(
          
            'pic1'=>$var1,
            'pic5'=>$var5
          );
        return view('admin_contact',$data1);
           


            
          }
          else
          {
            return Redirect('login');
          }
        }










  public function updateContactFax(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Info = $req->info;
             
           

          
            $data = array('Fax'=>$Info);

            DB::table('contact')
            ->where('ID',1)
            ->update($data);



                    
        $var1 = DB::table('contact')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();

        $var5 = DB::table('contact_message')
                ->get();


    

        $data1 = array(
          
            'pic1'=>$var1,
            'pic5'=>$var5
          );
        return view('admin_contact',$data1);
           


            
          }
          else
          {
            return Redirect('login');
          }
        }










  public function updateContactEmail(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Info = $req->info;
             
           

          
            $data = array('Mail'=>$Info);

            DB::table('contact')
            ->where('ID',1)
            ->update($data);



                    
       $var1 = DB::table('contact')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();

        $var5 = DB::table('contact_message')
                ->get();


    

        $data1 = array(
          
            'pic1'=>$var1,
            'pic5'=>$var5
          );
        return view('admin_contact',$data1);
           


            
          }
          else
          {
            return Redirect('login');
          }
        }








      public function deleteContactMessage(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->ID;
           
             
           

            

             DB::table('contact_message')
            ->where('ID',$Name)
            ->delete();




         $var1 = DB::table('contact')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();

        $var5 = DB::table('contact_message')
                ->get();


    

        $data1 = array(
          
            'pic1'=>$var1,
            'pic5'=>$var5
          );
        return view('admin_contact',$data1);


          }
          else
          {
            return Redirect('login');
          }


     }












}
