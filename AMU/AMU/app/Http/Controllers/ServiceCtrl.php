<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;
use DB;
use File;
use Crypt;
use Hash;

class ServiceCtrl extends Controller
{
    //


      public function serviceFunc()
      {
        //service page controller
      

        $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('service',$data);
      }






    public function admin()
     {
      if(session()->has('session_login'))
      {
         
        $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data);
      }
      else
      {
        return Redirect('login');
      }
     }







      public function deleteServiceMainImg(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->MainImage;
           
             
           

            

            $data = array('MainImage'=>'');

            DB::table('services')
            ->where('ID',1)
            ->update($data);


            File::delete('images/'.$Name);



          $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);


          }
          else
          {
            return Redirect('login');
          }


     }










     public function uploadServiceMainImg(Request $store)
     {
             if(session()->has('session_login'))
              {

                   // get current time and append the upload file extension to it,
                   // then put that name to $photoName variable.
               $photoName = time().'.'.$store->img_upload->getClientOriginalExtension();

                  $data = array('MainImage'=>$photoName);

                 

                  DB::table('services')
                    ->where('ID',1)
                    ->update($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);

               


          $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);
          
          

              }
            else
            {
            return Redirect('login');
            }
     }









public function updateServiceMainTitle(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Title = $req->title;
             
           

          
            $data = array('Title'=>$Title);

            DB::table('services')
            ->where('ID',1)
            ->update($data);

           


          $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);


            
          }
          else
          {
            return Redirect('login');
          }
        }











  public function updateServiceMainInfo(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Info = $req->info;
             
           

          
            $data = array('Description'=>$Info);

            DB::table('services')
            ->where('ID',1)
            ->update($data);


           
          $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);
           


            
          }
          else
          {
            return Redirect('login');
          }
        }








  public function deleteServiceIcon(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->ID;
             $Photo = $req->Photo;
           
             
           

            
            DB::table('services_icons')
            ->where('ID',$Name)
            ->delete();


     


            File::delete('images/'.$Photo);



          $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);


          }
          else
          {
            return Redirect('login');
          }


     }









     public function uploadServiceIcon(Request $store)
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

                  DB::table('services_icons')->insert($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);


          
            
               $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);


              }
            else
            {
            return Redirect('login');
            }
     }










  public function deleteServiceMiddle1(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->ID;
            
           
             
           

            
            DB::table('services_middle1')
            ->where('ID',$Name)
            ->delete();


     




          $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);


          }
          else
          {
            return Redirect('login');
          }


     }









     public function uploadServiceMiddle1(Request $store)
     {
             if(session()->has('session_login'))
              {

                   // get current time and append the upload file extension to it,
                   // then put that name to $photoName variable.
              
               $Title = $store->title;
               $Description = $store->info;

                  $data = array(
                    
                    'Title'=>$Title,
                    'Description'=>$Description
                  );

                  DB::table('services_middle1')->insert($data);




          
            
               $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);


              }
            else
            {
            return Redirect('login');
            }
     }









public function updateServiceMiddle2Title(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Title = $req->title;
             
           

          
            $data = array('Title'=>$Title);

            DB::table('services_middle2')
            ->where('ID',1)
            ->update($data);

           


          $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);


            
          }
          else
          {
            return Redirect('login');
          }
        }









  public function updateServiceMiddle2Info(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Info = $req->info;
             
           

          
            $data = array('Description'=>$Info);

            DB::table('services_middle2')
            ->where('ID',1)
            ->update($data);


           
          $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);
           


            
          }
          else
          {
            return Redirect('login');
          }
        }












  public function deleteServiceMiddle3(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->ID;
             $Photo = $req->Photo;
            
           
             
           

            
            DB::table('services_middle3')
            ->where('ID',$Name)
            ->delete();


     
          
           File::delete('images/'.$Photo);



          $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);


          }
          else
          {
            return Redirect('login');
          }


     }








     public function uploadServiceMiddle3(Request $store)
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

                  DB::table('services_middle3')->insert($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);


          
            
               $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);


              }
            else
            {
            return Redirect('login');
            }
     }









  public function deleteServiceFooter(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->ID;
             $Photo = $req->Photo;
            
           
             
           

            
            DB::table('service_footer')
            ->where('ID',$Name)
            ->delete();


     
          
           File::delete('images/'.$Photo);



          $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);


          }
          else
          {
            return Redirect('login');
          }


     }








     public function uploadServiceFooter(Request $store)
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

                  DB::table('service_footer')->insert($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);


          
            
               $var1 = DB::table('services')
                ->where('ID',1)
                ->get();

        $var2 = DB::table('services_icons')
                ->get();


        $var3 = DB::table('services_middle1')
                ->get();


         $var4 = DB::table('services_middle2')
                ->get();



          $var5 = DB::table('services_middle3')
                ->get();



           $var6 = DB::table('service_footer')
                ->get();


    


           $data1 = array(
          'pic1'=>$var1,
          'pic2'=>$var2,
          'pic3'=>$var3,
          'pic4'=>$var4,
          'pic5'=>$var5,
          'pic6'=>$var6
            
          );
        return view('admin_service',$data1);


              }
            else
            {
            return Redirect('login');
            }
     }










}
