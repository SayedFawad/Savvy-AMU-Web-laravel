<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/','Home@home');

Route::post('/admin_home','Home@admin_home');
Route::get('/admin_home','Home@admin');
Route::get('/deleteSlideImg&{Photo}','Home@deleteSlideImg');
Route::post('/uploadSlideImg','Home@uploadSlideImg');
Route::get('/uploadSlideImg','Home@admin');
Route::post('/updateMainTitle', 'Home@updateMainTitle');
Route::get('/updateMainTitle', 'Home@admin');
Route::post('/updateMainInfo', 'Home@updateMainInfo');
Route::get('/updateMainInfo', 'Home@admin');
Route::post('/updateBannerTitle', 'Home@updateBannerTitle');
Route::get('/updateBannerTitle', 'Home@admin');
Route::get('/deleteMainIcon&{Title}','Home@deleteMainIcon');
Route::post('/uploadMainIcon','Home@uploadMainIcon');
Route::get('/uploadMainIcon','Home@admin');
Route::post('/updateBannerTitle1', 'Home@updateBannerTitle1');
Route::get('/updateBannerTitle1', 'Home@admin');
Route::get('/deleteMainWeb&{Title}','Home@deleteMainWeb');
Route::post('/uploadMainWeb','Home@uploadMainWeb');
Route::get('/uploadMainWeb','Home@admin');
Route::post('/updateBannerTitle2', 'Home@updateBannerTitle2');
Route::get('/updateBannerTitle2', 'Home@admin');
Route::post('/updateMainMiddle2', 'Home@updateMainMiddle2');
Route::get('/updateMainMiddle2', 'Home@admin');
Route::post('/updateMainMiddleInfo2', 'Home@updateMainMiddleInfo2');
Route::get('/updateMainMiddleInfo2', 'Home@admin');
Route::get('/deleteMainMiddle3&{ID}&{Photo}','Home@deleteMainMiddle3');
Route::post('/uploadMainMiddle3','Home@uploadMainMiddle3');
Route::get('/uploadMainMiddle3','Home@admin');
Route::get('/deleteWorkedWith&{ID}&{Photo}','Home@deleteWorkedWith');
Route::post('/uploadWorkedWith','Home@uploadWorkedWith');
Route::get('/uploadWorkedWith','Home@admin');





Route::get('/login','Home@login');
Route::get('/logout','Home@sessionOut');




Route::get('/about','AboutCtrl@aboutFunc');
Route::get('/admin_about','AboutCtrl@admin');
Route::get('/deleteAboutMainImg&{Photo}','AboutCtrl@deleteAboutMainImg');
Route::post('/uploadAboutMainImg','AboutCtrl@uploadAboutMainImg');
Route::get('/uploadAboutMainImg','AboutCtrl@admin');
Route::post('/updateAboutMainTitle', 'AboutCtrl@updateAboutMainTitle');
Route::get('/updateAboutMainTitle', 'AboutCtrl@admin');
Route::post('/updateAboutMainInfo', 'AboutCtrl@updateAboutMainInfo');
Route::get('/updateAboutMainInfo', 'AboutCtrl@admin');
Route::post('/updateAboutMiddleTitle', 'AboutCtrl@updateAboutMiddleTitle');
Route::get('/updateAboutMiddleTitle', 'AboutCtrl@admin');
Route::post('/updateAboutMiddleInfo', 'AboutCtrl@updateAboutMiddleInfo');
Route::get('/updateAboutMiddleInfo', 'AboutCtrl@admin');
Route::post('/uploadAboutFooter','AboutCtrl@uploadAboutFooter');
Route::get('/uploadAboutFooter','AboutCtrl@admin');
Route::get('/deleteAboutFooter&{ID}&{Photo}','AboutCtrl@deleteAboutFooter');







Route::get('/service','ServiceCtrl@serviceFunc');
Route::get('/admin_service','ServiceCtrl@admin');
Route::get('/deleteServiceMainImg&{MainImage}','ServiceCtrl@deleteServiceMainImg');
Route::post('/uploadServiceMainImg','ServiceCtrl@uploadServiceMainImg');
Route::get('/uploadServiceMainImg','ServiceCtrl@admin');
Route::post('/updateServiceMainTitle', 'ServiceCtrl@updateServiceMainTitle');
Route::get('/updateServiceMainTitle', 'ServiceCtrl@admin');
Route::post('/updateServiceMainInfo', 'ServiceCtrl@updateServiceMainInfo');
Route::get('/updateServiceMainInfo', 'ServiceCtrl@admin');
Route::get('/deleteServiceIcon&{ID}&{Photo}','ServiceCtrl@deleteServiceIcon');
Route::post('/uploadServiceIcon','ServiceCtrl@uploadServiceIcon');
Route::get('/uploadServiceIcon','ServiceCtrl@admin');
Route::get('/deleteServiceMiddle1&{ID}','ServiceCtrl@deleteServiceMiddle1');
Route::post('/uploadServiceMiddle1','ServiceCtrl@uploadServiceMiddle1');
Route::get('/uploadServiceMiddle1','ServiceCtrl@admin');
Route::post('/updateServiceMiddle2Title', 'ServiceCtrl@updateServiceMiddle2Title');
Route::get('/updateServiceMiddle2Title', 'ServiceCtrl@admin');
Route::post('/updateServiceMiddle2Info', 'ServiceCtrl@updateServiceMiddle2Info');
Route::get('/updateServiceMiddle2Info', 'ServiceCtrl@admin');
Route::get('/deleteServiceMiddle3&{ID}&{Photo}','ServiceCtrl@deleteServiceMiddle3');
Route::post('/uploadServiceMiddle3','ServiceCtrl@uploadServiceMiddle3');
Route::get('/uploadServiceMiddle3','ServiceCtrl@admin');
Route::get('/deleteServiceFooter&{ID}&{Photo}','ServiceCtrl@deleteServiceFooter');
Route::post('/uploadServiceFooter','ServiceCtrl@uploadServiceFooter');
Route::get('/uploadServiceFooter','ServiceCtrl@admin');












Route::get('/contact','ContactCtrl@contactFunc');
Route::post('/receive_message','ContactCtrl@message');
Route::get('/admin_contact','ContactCtrl@admin');
Route::get('/deleteMainImg&{MainImage}','ContactCtrl@deleteMainImg');
Route::post('/uploadMainImg','ContactCtrl@uploadMainImg');
Route::get('/uploadMainImg','ContactCtrl@admin');
Route::post('/updateContactMainTitle', 'ContactCtrl@updateContactMainTitle');
Route::get('/updateContactMainTitle', 'ContactCtrl@admin');
Route::post('/updateContactAddress', 'ContactCtrl@updateContactAddress');
Route::get('/updateContactAddress', 'ContactCtrl@admin');
Route::post('/updateContactPhone', 'ContactCtrl@updateContactPhone');
Route::get('/updateContactPhone', 'ContactCtrl@admin');
Route::post('/updateContactFax', 'ContactCtrl@updateContactFax');
Route::get('/updateContactFax', 'ContactCtrl@admin');
Route::post('/updateContactEmail', 'ContactCtrl@updateContactEmail');
Route::get('/updateContactEmail', 'ContactCtrl@admin');
Route::get('/deleteContactMessage&{ID}','ContactCtrl@deleteContactMessage');







Route::get('/news','NewsCtrl@newsFunc');
Route::get('/admin_news','NewsCtrl@admin');
Route::post('/updateNewsMainTitle', 'NewsCtrl@updateNewsMainTitle');
Route::get('/updateNewsMainTitle', 'NewsCtrl@admin');
Route::get('/deleteNews&{ID}&{Photo}','NewsCtrl@deleteNews');
Route::post('/uploadNews','NewsCtrl@uploadNews');
Route::get('/uploadNews','NewsCtrl@admin');
