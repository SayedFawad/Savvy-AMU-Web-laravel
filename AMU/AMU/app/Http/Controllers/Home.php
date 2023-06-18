<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;
use DB;
use File;
use Crypt;
use Hash;

class Home extends Controller
{
    //


      public function home()
      {
        //home page controller
        $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();

      /*          // vehicle crash
        $var4 = DB::table('main_middle_pic')
                ->where('ID',2)
                ->get();

                  // vehicle fuel management
        $var5 = DB::table('main_middle_pic')
                ->where('ID',3)
                ->get();

                // vehicle online traking
        $var6 = DB::table('main_middle_pic')
                ->where('ID',4)
                ->get();

                  // vehicle easy traking
        $var7 = DB::table('main_middle_pic')
                ->where('ID',5)
                ->get();

               // 24 support
        $var8 = DB::table('main_middle_pic')
                ->where('ID',6)
                ->get();

               // generator
        $var9 = DB::table('main_middle_pic')
                ->where('ID',7)
                ->get();

               // over speed
        $var10 = DB::table('main_middle_pic')
                ->where('ID',8)
                ->get();

               // report
        $var11 = DB::table('main_middle_pic')
                ->where('ID',9)
                ->get();*/


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


            // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();

      



          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






        $data = array(
        	'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
        	);
        return view('index',$data);
      }




  public function admin_home(Request $req)
      {
         $username = $req->input('username');
        $password = $req->input('password');
        // $hashPassword = md5($password);
 
       


         $req->session()->put('session_login',$username.$password);

         if($req->session()->has('session_login'))
         {
             //allow
                    //check with database
             $check = DB::Table('user')->where(['username'=>$username,'password'=>$password])->get();

              if(count($check) == 1)
               {
              
                     $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data);

                }
              else
                {
                  return Redirect('login');
                }
         }
         else
         {
            return Redirect('login');
         }

       

      }




           public function admin()
     {
      if(session()->has('session_login'))
      {
                          $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data);
      }
      else
      {
        return Redirect('login');
      }
     }




      public function deleteSlideImg(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->Photo;
           
             
           

            DB::table('main_pic')
            ->where('Photo',$Name)
            ->delete();


            File::delete('data1/images/'.$Name);



                             $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);
           
          }
          else
          {
            return Redirect('login');
          }


     }





       public function deleteMainIcon(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->Title;
           
             
           

            DB::table('main_middle_pic')
            ->where('Title',$Name)
            ->delete();


            File::delete('images/'.$Name);



                             $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);
           
          }
          else
          {
            return Redirect('login');
          }


     }







        public function uploadSlideImg(Request $store)
     {
             if(session()->has('session_login'))
              {

                   // get current time and append the upload file extension to it,
                   // then put that name to $photoName variable.
               $photoName = time().'.'.$store->img_upload->getClientOriginalExtension();

                  $data = array('Photo'=>$photoName);

                  DB::table('main_pic')->insert($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('data1/images', $photoName);



            
                             $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);

              }
            else
            {
            return Redirect('login');
            }
     }






public function updateMainTitle(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Title = $req->title;
             
           

          
            $data = array('Title'=>$Title);

            DB::table('home')
            ->where('ID',2)
            ->update($data);

           


                       $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);

            
          }
          else
          {
            return Redirect('login');
          }
        }




  public function updateMainInfo(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Info = $req->info;
             
           

          
            $data = array('Description'=>$Info);

            DB::table('home')
            ->where('ID',2)
            ->update($data);

           



                           $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);
            
          }
          else
          {
            return Redirect('login');
          }
        }





public function updateBannerTitle(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Title = $req->title;
             
           

          
            $data = array('BannerTitle'=>$Title);

            DB::table('home')
            ->where('ID',2)
            ->update($data);

           

                      $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);

            
          }
          else
          {
            return Redirect('login');
          }
        }











      public function uploadMainIcon(Request $store)
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

                  DB::table('main_middle_pic')->insert($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);



            
                           $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);
              }
            else
            {
            return Redirect('login');
            }
     }






public function updateBannerTitle1(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Title = $req->title;
             
           

          
            $data = array('BannerTitle1'=>$Title);

            DB::table('home')
            ->where('ID',2)
            ->update($data);

           


                        $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);

            
          }
          else
          {
            return Redirect('login');
          }
        }











    public function deleteMainWeb(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->Title;
           
             
           

            DB::table('main_website')
            ->where('Title',$Name)
            ->delete();


            File::delete('images/'.$Name);



                               $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);
           
          }
          else
          {
            return Redirect('login');
          }


     }









  public function uploadMainWeb(Request $store)
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

                  DB::table('main_website')->insert($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);



            
                            $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);

              }
            else
            {
            return Redirect('login');
            }
     }







public function updateBannerTitle2(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Title = $req->title;
             
           

          
            $data = array('BannerTitle2'=>$Title);

            DB::table('home')
            ->where('ID',2)
            ->update($data);

           

                      $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);

            
          }
          else
          {
            return Redirect('login');
          }
        }











public function updateMainMiddle2(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Title = $req->title;
             
           

          
            $data = array('Title'=>$Title);

            DB::table('main_middle2')
            ->where('ID',1)
            ->update($data);

           

                      $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);

            
          }
          else
          {
            return Redirect('login');
          }
        }







public function updateMainMiddleInfo2(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Desc = $req->info;
             
           

          
            $data = array('Description'=>$Desc);

            DB::table('main_middle2')
            ->where('ID',1)
            ->update($data);

           

                      $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);

            
          }
          else
          {
            return Redirect('login');
          }
        }








public function deleteMainMiddle3(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->ID;
             $Photo = $req->Photo;
           
             
           

            DB::table('main_middle3')
            ->where('ID',$Name)
            ->delete();






            File::delete('images/'.$Photo);



        $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);
           
          }
          else
          {
            return Redirect('login');
          }


     }







  public function uploadMainMiddle3(Request $store)
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

                  DB::table('main_middle3')->insert($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);



            
                            $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);

              }
            else
            {
            return Redirect('login');
            }
     }







public function deleteWorkedWith(Request $req)
     {

       if(session()->has('session_login'))
          {
             $Name = $req->ID;
             $Photo = $req->Photo;
           
             
           

            DB::table('main_worked_with')
            ->where('ID',$Name)
            ->delete();






            File::delete('images/'.$Photo);



        $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);
           
          }
          else
          {
            return Redirect('login');
          }


     }








  public function uploadWorkedWith(Request $store)
     {
             if(session()->has('session_login'))
              {

                   // get current time and append the upload file extension to it,
                   // then put that name to $photoName variable.
               $photoName = time().'.'.$store->img_upload->getClientOriginalExtension();
               

                  $data = array(
                    'Photo'=>$photoName
                  );

                  DB::table('main_worked_with')->insert($data);


          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);



            
                            $Var = DB::table('home')->get();

        $var1 = DB::table('home')
                ->where('ID',2)
                ->get();

        $var2 = DB::table('main_pic')
                ->get();


      // middle main Pictures
        // vehicle routing
        $var3 = DB::table('main_middle_pic')
               
                ->get();


              // our services
        $var12 = DB::table('home')
                ->where('ID',2)
                ->get();


           // 
        $var13 = DB::table('main_middle2')
                ->where('ID',1)
                ->get();


        $var14 = DB::table('main_middle3')
                ->get();




          // we worked with 
        $var17 = DB::table('main_worked_with')
                ->get();



           // website section 
        $var18 = DB::table('main_website')
                ->get();






       $data1 = array(
          'main'=>$Var,
            'title'=>$var1,
            'photo'=>$var2,
            'pic1'=>$var3,
            'pic10'=>$var12,
            'pic11'=>$var13,
            'pic20'=>$var14,
            'pic15'=>$var17,
            'pic16'=>$var18
          );
                return view('admin_index',$data1);

              }
            else
            {
            return Redirect('login');
            }
     }










  public function login()
  {
    return view('login');
  }


      public function sessionOut()
        {
          session()->forget('session_login');
          return redirect('login');
        }



   


}
