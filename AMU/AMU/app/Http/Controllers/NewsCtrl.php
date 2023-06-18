<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;
use DB;
use File;
use Crypt;
use Hash;

class NewsCtrl extends Controller
{
    //


      public function newsFunc()
      {
        //home page controller
         $var1 = DB::table('news')->get();
            $var2 = DB::table('news_main')->get();

      




        $data = array(
            'pic1'=>$var1,
            'pic2'=>$var2
            
          );
        return view('news',$data);
      }






    public function admin()
     {
      if(session()->has('session_login'))
      {
            $var1 = DB::table('news')->get();
            $var2 = DB::table('news_main')->get();

      




        $data = array(
            'pic1'=>$var1,
            'pic2'=>$var2
            
          );
        return view('admin_news',$data);
      }
      else
      {
        return Redirect('login');
      }
     }









public function updateNewsMainTitle(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Title = $req->title;
             
           

          
            $data = array('Title'=>$Title);

            DB::table('news_main')
            ->where('ID',1)
            ->update($data);

           



            $var1 = DB::table('news')->get();
            $var2 = DB::table('news_main')->get();

      




        $data = array(
            'pic1'=>$var1,
            'pic2'=>$var2
            
          );
        return view('admin_news',$data);


            
          }
          else
          {
            return Redirect('login');
          }
        }








      public function deleteNews(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->ID;
             $Photo = $req->Photo;
           
             
           

            

             DB::table('news')
            ->where('ID',$Name)
            ->delete();


            File::delete('images/'.$Photo);



           $var1 = DB::table('news')->get();
            $var2 = DB::table('news_main')->get();

      




        $data = array(
            'pic1'=>$var1,
            'pic2'=>$var2
            
          );
        return view('admin_news',$data);


          }
          else
          {
            return Redirect('login');
          }


     }









     public function uploadNews(Request $store)
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

                  DB::table('news')->insert($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);


          
               
           $var1 = DB::table('news')->get();
            $var2 = DB::table('news_main')->get();

      




        $data = array(
            'pic1'=>$var1,
            'pic2'=>$var2
            
          );
        return view('admin_news',$data);

              }
            else
            {
            return Redirect('login');
            }
     }












}
