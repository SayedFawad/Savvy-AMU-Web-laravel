<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;
use DB;
use File;
use Crypt;
use Hash;

class AboutCtrl extends Controller
{
    //


      public function aboutFunc()
      {
        //about page controller
        $Var = DB::table('about')
                ->where('ID',1)
                ->get();

        $var1 = DB::table('about_middle')
                ->get();

        $var2 = DB::table('about_footer')
                ->get();


   




        $data = array(
        	'pic1'=>$Var,
          'middle'=>$var1,
          'footer'=>$var2
            
        	);
        return view('about',$data);
      }






    public function admin()
     {
      if(session()->has('session_login'))
      {
            $Var = DB::table('about')
                ->where('ID',1)
                ->get();

        $var1 = DB::table('about_middle')
                ->get();

        $var2 = DB::table('about_footer')
                ->get();


   




        $data = array(
          'pic1'=>$Var,
          'middle'=>$var1,
          'footer'=>$var2
            
          );
                return view('admin_about',$data);
      }
      else
      {
        return Redirect('login');
      }
     }







      public function deleteAboutMainImg(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->Photo;
           
             
           

            

            $data = array('MainImage'=>'');

            DB::table('about')
            ->where('ID',1)
            ->update($data);


            File::delete('images/'.$Name);



           $Var = DB::table('about')
                ->where('ID',1)
                ->get();

        $var1 = DB::table('about_middle')
                ->get();

        $var2 = DB::table('about_footer')
                ->get();


   




        $data1 = array(
          'pic1'=>$Var,
          'middle'=>$var1,
          'footer'=>$var2
            
          );
                return view('admin_about',$data1);


          }
          else
          {
            return Redirect('login');
          }


     }










     public function uploadAboutMainImg(Request $store)
     {
             if(session()->has('session_login'))
              {

                   // get current time and append the upload file extension to it,
                   // then put that name to $photoName variable.
               $photoName = time().'.'.$store->img_upload->getClientOriginalExtension();

                  $data = array('MainImage'=>$photoName);

                 

                  DB::table('about')
                    ->where('ID',1)
                    ->update($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);


          
           $Var = DB::table('about')
                ->where('ID',1)
                ->get();

        $var1 = DB::table('about_middle')
                ->get();

        $var2 = DB::table('about_footer')
                ->get();


   




        $data1 = array(
          'pic1'=>$Var,
          'middle'=>$var1,
          'footer'=>$var2
            
          );
                return view('admin_about',$data1);

              }
            else
            {
            return Redirect('login');
            }
     }












public function updateAboutMainTitle(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Title = $req->title;
             
           

          
            $data = array('Title'=>$Title);

            DB::table('about')
            ->where('ID',1)
            ->update($data);

           


                 $Var = DB::table('about')
                ->where('ID',1)
                ->get();

        $var1 = DB::table('about_middle')
                ->get();

        $var2 = DB::table('about_footer')
                ->get();


   




        $data1 = array(
          'pic1'=>$Var,
          'middle'=>$var1,
          'footer'=>$var2
            
          );
                return view('admin_about',$data1);


            
          }
          else
          {
            return Redirect('login');
          }
        }







  public function updateAboutMainInfo(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Info = $req->info;
             
           

          
            $data = array('Description'=>$Info);

            DB::table('about')
            ->where('ID',1)
            ->update($data);



                 $Var = DB::table('about')
                ->where('ID',1)
                ->get();

        $var1 = DB::table('about_middle')
                ->get();

        $var2 = DB::table('about_footer')
                ->get();


   




        $data1 = array(
          'pic1'=>$Var,
          'middle'=>$var1,
          'footer'=>$var2
            
          );
                return view('admin_about',$data1);
           


            
          }
          else
          {
            return Redirect('login');
          }
        }







public function updateAboutMiddleTitle(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Title = $req->title;
             
           

          
            $data = array('Title'=>$Title);

            DB::table('about_middle')
            ->where('ID',1)
            ->update($data);

           


                 $Var = DB::table('about')
                ->where('ID',1)
                ->get();

        $var1 = DB::table('about_middle')
                ->get();

        $var2 = DB::table('about_footer')
                ->get();


   




        $data1 = array(
          'pic1'=>$Var,
          'middle'=>$var1,
          'footer'=>$var2
            
          );
                return view('admin_about',$data1);


            
          }
          else
          {
            return Redirect('login');
          }
        }











  public function updateAboutMiddleInfo(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Info = $req->info;
             
           

          
            $data = array('Description'=>$Info);

            DB::table('about_middle')
            ->where('ID',1)
            ->update($data);



                 $Var = DB::table('about')
                ->where('ID',1)
                ->get();

        $var1 = DB::table('about_middle')
                ->get();

        $var2 = DB::table('about_footer')
                ->get();


   




        $data1 = array(
          'pic1'=>$Var,
          'middle'=>$var1,
          'footer'=>$var2
            
          );
                return view('admin_about',$data1);
           


            
          }
          else
          {
            return Redirect('login');
          }
        }







     public function uploadAboutFooter(Request $store)
     {
             if(session()->has('session_login'))
              {

                   // get current time and append the upload file extension to it,
                   // then put that name to $photoName variable.
               $photoName = time().'.'.$store->img_upload->getClientOriginalExtension();
               $Title = $store->title;
               $Description = $store->info;

                  $data = array(
                    'Photo'=>$photoName,
                    'Title'=>$Title,
                    'Description'=>$Description
                  );

                  DB::table('about_footer')->insert($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);


          
           $Var = DB::table('about')
                ->where('ID',1)
                ->get();

        $var1 = DB::table('about_middle')
                ->get();

        $var2 = DB::table('about_footer')
                ->get();


   




        $data1 = array(
          'pic1'=>$Var,
          'middle'=>$var1,
          'footer'=>$var2
            
          );
                return view('admin_about',$data1);

              }
            else
            {
            return Redirect('login');
            }
     }










      public function deleteAboutFooter(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->ID;
             $Photo = $req->Photo;
             
           

            

             DB::table('about_footer')
            ->where('ID',$Name)
            ->delete();


            File::delete('images/'.$Photo);



           $Var = DB::table('about')
                ->where('ID',1)
                ->get();

        $var1 = DB::table('about_middle')
                ->get();

        $var2 = DB::table('about_footer')
                ->get();


   




        $data1 = array(
          'pic1'=>$Var,
          'middle'=>$var1,
          'footer'=>$var2
            
          );
                return view('admin_about',$data1);


          }
          else
          {
            return Redirect('login');
          }


     }











}
