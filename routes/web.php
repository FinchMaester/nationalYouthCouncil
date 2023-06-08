<?php

use App\Models\Message;
use App\Models\ContactUs;
use App\Models\Information;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RenderController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\OtherPostController;
use App\Http\Controllers\CoverImageController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\CommitteeDetailController;
use App\Http\Controllers\ExecutiveDetailController;
use App\Http\Controllers\OrgchartController;
use App\Http\Controllers\YouthController;
use App\Http\Controllers\InstaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::group(['prefix' => '{locale}'], function (){
//     Route::get('/', [HomeController::class, 'index'])->middleware('setLocale')->name('home');

// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/single/{slug}', [SingleController::class, 'index']);

Route::get('login', function(){
    return view('auth.login');
})->name('login');

Route::get('signup', function(){
    return view('auth.signup');
})->middleware('auth');

Route::get('/change-password', [AdminController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [AdminController::class, 'updatePassword'])->name('update-password');

Route::post('login', [LoginController::class, 'save']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
Route::post('signup', [SignupController::class, 'save']);

Route::get('admin', [AdminController::class, 'index'])->middleware('auth')->name('admin.index');
Route::get('dashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');



// FOR COVER IMAGES
Route::get('admin/coverimage/index', [CoverImageController::class, 'index'])->name('admin.coverimage.index');

Route::get('admin/coverimage/create', [CoverImageController::class, 'create'])->name('admin.coverimage.create');
Route::post('admin/coverimage/store', [CoverImageController::class, 'store'])->name('admin.coverimage.store');

Route::get('admin/coverimage/edit/{id}', [CoverImageController::class, 'edit'])->name('admin.coverimage.edit');
Route::post('admin/coverimage/update', [CoverImageController::class, 'update'])->name('admin.coverimage.update');
Route::get('admin/coverimage/destroy/{id}', [CoverImageController::class, 'destroy'])->name('admin.coverimage.destroy');

// FOR ADMIN COMMITTEE DETAILS

Route::get('admin/committeedetails/index', [CommitteeDetailController::class, 'index'])->name('admin.committeedetails.index');
Route::get('admin/committeedetails/edit/{id}', [CommitteeDetailController::class, 'edit'])->name('admin.committeedetails.edit');
Route::get('admin/committeedetails/create', [CommitteeDetailController::class, 'create'])->name('admin.committeedetails.create');
Route::post('admin/committeedetails/store', [CommitteeDetailController::class, 'store'])->name('admin.committeedetails.store');
Route::post('admin/committeedetails/update', [CommitteeDetailController::class, 'update'])->name('admin.committeedetails.update');
Route::get('admin/committeedetails/destroy/{id}', [CommitteeDetailController::class, 'destroy'])->name('admin.committeedetails.destroy');
Route::get('file-import-export', [CommitteeDetailController::class, 'fileImportExport'])->name('committee.file');
Route::post('file-import', [CommitteeDetailController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [CommitteeDetailController::class, 'fileExport'])->name('file-export');

// FOR ADMIN EXECUTIVE DETAILS
Route::get('admin/executivedetails/index', [ExecutiveDetailController::class, "index"])->name('admin.executivedetails.index');
Route::get('admin/executivedetails/create', [ExecutiveDetailController::class, "create"])->name('admin.executivedetails.create');
Route::post('admin/executivedetails/store', [ExecutiveDetailController::class, "store"])->name('admin.executivedetails.store');

Route::get('admin/executivedetails/edit/{id}', [ExecutiveDetailController::class, 'edit'])->name('admin.executivedetails.edit');
Route::post('admin/executivedetails/update', [ExecutiveDetailController::class, 'update'])->name('admin.executivedetails.update');
Route::get('admin/executivedetails/destroy/{id}', [ExecutiveDetailController::class, 'destroy'])->name('admin.executivedetails.destroy');

Route::get("file-import-export-exe", [ExecutiveDetailController::class, "fileImportExport"])->name('executive.file');
Route::post("file-import-exe", [ExecutiveDetailController::class, "fileImport"])->name("file-import-exe");
Route::get('file-export-exe', [ExecutiveDetailController::class, "fileExport"])->name("file-export-exe");


// FOR POSTS

Route::get('admin/posts/index', [PostController::class, 'index'])->middleware('auth')->name("admin.posts.index");
Route::get('admin/posts/create', [PostController::class, 'create'])->middleware('auth')->name("admin.posts.create");
Route::post('admin/posts/store', [PostController::class, 'store'])->middleware('auth')->name("admin.posts.store");
Route::get('admin/posts/edit/{id}', [PostController::class, 'edit'])->middleware('auth')->name("admin.posts.edit");
Route::post('admin/posts/update', [PostController::class, 'update'])->middleware('auth')->name("admin.posts.update");
Route::get('admin/posts/destroy/{id}', [PostController::class, 'destroy'])->middleware('auth')->name("admin.posts.destroy");
// FOR POSTS

Route::get('admin/orgchart/index', [OrgchartController::class, 'index'])->middleware('auth')->name("admin.orgchart.index");
Route::get('admin/orgchart/create', [OrgchartController::class, 'create'])->middleware('auth')->name("admin.orgchart.create");
Route::post('admin/orgchart/store', [OrgchartController::class, 'store'])->middleware('auth')->name("admin.orgchart.store");
Route::get('admin/orgchart/edit/{id}', [OrgchartController::class, 'edit'])->middleware('auth')->name("admin.orgchart.edit");
Route::post('admin/orgchart/update', [OrgchartController::class, 'update'])->middleware('auth')->name("admin.orgchart.update");
Route::get('admin/orgchart/destroy/{id}', [OrgchartController::class, 'destroy'])->middleware('auth')->name("admin.orgchart.destroy");


// FOR CATEGORIES

Route::get('admin/categories/index', [CategoryController::class, "index"])->middleware('auth')->name("admin.categories.index");
Route::get('admin/categories/create', [CategoryController::class, "create"])->middleware('auth')->name("admin.categories.create");
Route::Post('admin/categories/store', [CategoryController::class, "store"])->middleware('auth')->name("admin.categories.store");
Route::get('admin/categories/edit/{id}', [CategoryController::class, "edit"])->middleware('auth')->name("admin.categories.edit");
Route::Post('admin/categories/update', [CategoryController::class, "update"])->middleware('auth')->name("admin.categories.update");
Route::get('admin/categories/destroy/{id}', [CategoryController::class, "destroy"])->middleware('auth')->name("admin.categories.destroy");



// FOR USERS
Route::get('admin/users/index', [UserController::class, 'index'])->middleware('auth')->name('admin.users.index');


Route::get('admin/team', [App\Http\Controllers\TeamController::class, 'index'])->middleware('auth');
Route::get('admin/team/index', [App\Http\Controllers\TeamController::class, 'index'])->middleware('auth')->name('admin.team.index');

Route::get('admin/team/create', [App\Http\Controllers\TeamController::class, 'create'])->middleware('auth')->name('admin.team.create');
Route::post('admin/team/store', [App\Http\Controllers\TeamController::class, 'store'])->name('Team.store');

Route::get('admin/team/edit/{id}', [App\Http\Controllers\TeamController::class, 'edit'])->middleware('auth')->name('admin.team.edit');
Route::post('admin/team/update', [App\Http\Controllers\TeamController::class, 'update'])->name('Team.update');
Route::get('admin/team/delete/{id}', [App\Http\Controllers\TeamController::class, 'destroy'])->middleware('auth')->name('admin.team.destroy');

// Route::post('/team/reorder', [TeamController::class, 'reorder'])->name('admin.team.reorder');

Route::get('/team/reorder/index', [TeamController::class, 'orderIndex'])->name('admin.team.orderindex');

Route::post('/admin/team/updateorder', [App\Http\Controllers\TeamController::class, 'updateOrder'])
    ->name('admin.team.updateorder');



Route::get('admin/sitesetting', [App\Http\Controllers\SiteSettingController::class, 'index'])->middleware('auth');
Route::get('admin/sitesetting/index', [App\Http\Controllers\SiteSettingController::class, 'index'])->name('Sitesetting.index');

Route::get('admin/sitesetting/create', [App\Http\Controllers\SiteSettingController::class, 'create'])->middleware('auth');
Route::post('admin/sitesetting/store', [App\Http\Controllers\SiteSettingController::class, 'store'])->name('Sitesetting.store');

Route::get('admin/sitesetting/edit/{id}', [App\Http\Controllers\SiteSettingController::class, 'edit'])->middleware('auth')->name('admin.sitesetting.edit');
Route::post('admin/sitesetting/update', [App\Http\Controllers\SiteSettingController::class, 'update'])->name('Sitesetting.update');
Route::get('admin/sitesetting/delete/{id}', [App\Http\Controllers\SiteSettingController::class, 'destroy'])->middleware('auth');



Route::get('admin/about', [App\Http\Controllers\AboutController::class, 'index'])->middleware('auth');
Route::get('admin/about/index', [App\Http\Controllers\AboutController::class, 'index'])->name('About.index');

Route::get('admin/about/create', [App\Http\Controllers\AboutController::class, 'create'])->middleware('auth')->name('About.create');
Route::post('admin/about/store', [App\Http\Controllers\AboutController::class, 'store'])->name('About.store');

Route::get('admin/about/edit/{id}', [App\Http\Controllers\AboutController::class, 'edit'])->middleware('auth');
Route::post('admin/about/update', [App\Http\Controllers\AboutController::class, 'update'])->name('About.update');
Route::get('admin/about/delete/{id}', [App\Http\Controllers\AboutController::class, 'destroy'])->middleware('auth');




// For Mission, Values and Vision 
Route::get('admin/mvc', [App\Http\Controllers\MvcController::class, 'index'])->name('Mvc.index');
Route::get('admin/mvc/index', [App\Http\Controllers\MvcController::class, 'index'])->name('Mvc.index');

Route::get('admin/mvc/create', [App\Http\Controllers\MvcController::class, 'create'])->name('Mvc.create');
Route::post('admin/mvc/store', [App\Http\Controllers\MvcController::class, 'store'])->name('Mvc.store');

Route::get('admin/mvc/edit/{id}', [App\Http\Controllers\MvcController::class, 'edit'])->name('Mvc.edit');
Route::post('admin/mvc/update', [App\Http\Controllers\MvcController::class, 'update'])->name('Mvc.update');
Route::get('admin/mvc/delete/{id}', [App\Http\Controllers\MvcController::class, 'destroy'])->name('Mvc.destroy');



Route::get('admin/link', [App\Http\Controllers\LinkController::class, 'index'])->middleware('auth');
Route::get('admin/link/index', [App\Http\Controllers\LinkController::class, 'index'])->middleware('auth')->name("admin.link.index");

Route::get('admin/link/create', [App\Http\Controllers\LinkController::class, 'create'])->middleware('auth')->name('Link.create');
Route::post('admin/link/store', [App\Http\Controllers\LinkController::class, 'store'])->name('Link.store');

Route::get('admin/link/edit/{id}', [App\Http\Controllers\LinkController::class, 'edit'])->middleware('auth');
Route::post('admin/link/update', [App\Http\Controllers\LinkController::class, 'update'])->name('Link.update');
Route::get('admin/link/delete/{id}', [App\Http\Controllers\LinkController::class, 'destroy'])->middleware('auth')->name('admin.link.delete');



Route::get('admin/video', [App\Http\Controllers\VideoController::class, 'index'])->middleware('auth');
Route::get('admin/video/index', [App\Http\Controllers\VideoController::class, 'index'])->middleware('auth')->name('admin.video.index');

Route::get('admin/video/create', [App\Http\Controllers\VideoController::class, 'create'])->middleware('auth')->name('admin.video.create');
Route::post('admin/video/store', [App\Http\Controllers\VideoController::class, 'store'])->name('Video.store');

Route::get('admin/video/edit/{id}', [App\Http\Controllers\VideoController::class, 'edit'])->middleware('auth');
Route::post('admin/video/update', [App\Http\Controllers\VideoController::class, 'update'])->name('Video.update');
Route::get('admin/video/delete/{id}', [App\Http\Controllers\VideoController::class, 'destroy'])->middleware('auth');


Route::get('admin/image', [App\Http\Controllers\ImageController::class, 'index'])->middleware('auth');
Route::get('admin/image/index', [App\Http\Controllers\ImageController::class, 'index'])->middleware('auth')->name('admin.image.index');

Route::get('admin/image/create', [App\Http\Controllers\ImageController::class, 'create'])->middleware('auth')->name('Image.create');
Route::post('admin/image/store', [App\Http\Controllers\ImageController::class, 'store'])->name('Image.store');

Route::get('admin/image/edit/{id}', [App\Http\Controllers\ImageController::class, 'edit'])->middleware('auth');
Route::post('admin/image/update', [App\Http\Controllers\ImageController::class, 'update'])->name('Image.update');
Route::get('admin/image/delete/{id}', [App\Http\Controllers\ImageController::class, 'destroy'])->middleware('auth');


// FOR DOCUMENTS

Route::get('admin/documents/index', [DocumentController::class, 'index'])->middleware('auth')->name('admin.documents.index');
Route::get('admin/documents/create', [DocumentController::class, 'create'])->middleware('auth')->name('admin.documents.create');
Route::post('admin/documents/store', [DocumentController::class, 'store'])->middleware('auth')->name("admin.documents.store");
Route::post('admin/documents/update', [DocumentController::class, 'update'])->middleware('auth')->name("admin.documents.update");
Route::get('admin/documents/edit/{id}', [DocumentController::class, 'edit'])->middleware('auth')->name("admin.documents.edit");
Route::get('admin/documents/destroy/{id}', [DocumentController::class, 'destroy'])->middleware('auth')->name("admin.documents.destroy");


// FOR INFORMATION

Route::get('admin/information/index', [InformationController::class, 'index'])->middleware('auth')->name('admin.information.index');
Route::get('admin/information/create', [InformationController::class, 'create'])->middleware('auth')->name('admin.information.create');
Route::post('admin/information/store', [InformationController::class, 'store'])->middleware('auth')->name('admin.information.store');
Route::post('admin/information/update', [InformationController::class, 'update'])->middleware('auth')->name('admin.information.update');
Route::get('admin/information/edit/{id}', [InformationController::class, 'edit'])->middleware('auth')->name('admin.information.edit');
Route::get('admin/information/destroy/{id}', [InformationController::class, 'destroy'])->middleware('auth')->name('admin.information.destroy');


// FOR OTHER

Route::get('admin/youth/index', [YouthController::class, "index"])->middleware('auth')->name('admin.youth.index');
Route::get('admin/youth/create', [YouthController::class, "create"])->middleware('auth')->name('admin.youth.create');
Route::post('admin/youth/store', [YouthController::class, "store"])->middleware('auth')->name('admin.youth.store');
Route::post('admin/youth/update', [YouthController::class, "update"])->middleware('auth')->name('admin.youth.update');
Route::get('admin/youth/edit/{id}', [YouthController::class, "edit"])->middleware('auth')->name('admin.youth.edit');
Route::get('admin/youth/destroy/{id}', [YouthController::class, "destroy"])->middleware('auth')->name('admin.youth.destroy');


// FOR MESSAGE

Route::get('admin/message/index', [MessageController::class, 'index'])->name('admin.message.index');
Route::get('admin/message/create', [MessageController::class, 'create'])->name('admin.message.create');
Route::post('admin/message/store', [MessageController::class, 'store'])->name('admin.message.store');
Route::get('admin/message/edit/{id}', [MessageController::class, 'edit'])->name('admin.message.edit');
Route::post('admin/message/update', [MessageController::class, 'update'])->name('admin.message.update');
Route::get('admin/message/destroy/{id}', [MessageController::class, 'destroy'])->name('admin.message.destroy');
Route::get('admin/message/show/{id}', [MessageController::class, 'show'])->middleware('auth')->name('admin.message.show');


// For Instagram controller

Route::get('admin/insta', [InstaController::class, 'index'])->name('admin.insta.index');
Route::get('admin/insta/index', [InstaController::class, 'index'])->name('admin.insta.index');

Route::get('admin/insta/create', [InstaController::class, 'create'])->name('admin.insta.create');
Route::post('admin/insta/store', [InstaController::class, 'store'])->name('admin.insta.store');

Route::get('admin/insta/edit/{id}', [InstaController::class, 'edit'])->name('admin.insta.edit');
Route::post('admin/insta/update', [InstaController::class, 'update'])->name('admin.insta.update');
Route::get('admin/insta/delete/{id}', [InstaController::class, 'destroy'])->name('admin.insta.destroy');


Route::get('render_about', [App\Http\Controllers\RenderController::class, 'render_about'])->name('render_about');
Route::get('render_team', [App\Http\Controllers\RenderController::class, 'render_team'])->name('render_team');
Route::get('render_images', [App\Http\Controllers\RenderController::class, 'render_images'])->name('render_images');
Route::get('render_videos', [App\Http\Controllers\RenderController::class, 'render_videos'])->name('render_videos');
Route::get('render_notice', [App\Http\Controllers\RenderController::class, 'render_notice'])->name('render_notice');
Route::get('render_publication', [App\Http\Controllers\RenderController::class, 'render_publication'])->name('render_publication');
Route::get('render_budget', [App\Http\Controllers\RenderController::class, 'render_budget'])->name('render_budget');
Route::get('render_tender', [App\Http\Controllers\RenderController::class, 'render_tender'])->name('render_tender');
Route::get('render_rules', [App\Http\Controllers\RenderController::class, 'render_rules'])->name('render_rules');
Route::get('render_directot', [App\Http\Controllers\RenderController::class, 'render_directot'])->name('render_directot');
Route::get('render_press', [App\Http\Controllers\RenderController::class, 'render_press'])->name('render_press');
Route::get('render_oppurtunity', [App\Http\Controllers\RenderController::class, 'render_oppurtunity'])->name('render_oppurtunity');
Route::get('render_news', [App\Http\Controllers\RenderController::class, 'render_news'])->name('render_news');
Route::get('render_other', [App\Http\Controllers\RenderController::class, 'render_other'])->name('render_other');
Route::get('render_committee', [App\Http\Controllers\RenderController::class, 'render_committee'])->name('render_committee');
Route::get('render_administrative', [App\Http\Controllers\RenderController::class, 'render_administrative'])->name('render_administrative');
Route::get('render_vicechairperson', [App\Http\Controllers\RenderController::class, 'render_vice'])->name('render_chairperson');
Route::get('render_executive_members', [App\Http\Controllers\RenderController::class, 'render_executive_members'])->name('render_executive_members');
Route::get('render_posts/{slug}', [App\Http\Controllers\RenderController::class, 'render_posts'])->name('render_posts');
Route::get('render_all_posts', [App\Http\Controllers\RenderController::class, 'render_all_posts'])->name('render_all_posts');
Route::get('orgnizationchart', [App\Http\Controllers\RenderController::class, 'render_orgchart'])->name('render_orgchart');

Route::get('render_singleimage/{id}', [App\Http\Controllers\RenderController::class, 'render_singleimage'])->name('render_singleimage');


Route::get('render_otherpost/{slug}', [App\Http\Controllers\RenderController::class, 'render_otherpost'])->name('render_otherpost');
Route::get('render_otherpost_news/{id}', [App\Http\Controllers\RenderController::class, 'render_otherpost_news'])->name('render_otherpost_news');
Route::get('render_info/{slug}', [App\Http\Controllers\RenderController::class, 'render_info'])->name('render_info');
Route::get('render_other_post', [App\Http\Controllers\RenderController::class, 'render_other_post'])->name('render_other_post');


// For Youth
Route::get('render_youthstats', [App\Http\Controllers\RenderController::class, 'render_youthstats'])->name('render_youthstats');
Route::get('render_youthactivity', [App\Http\Controllers\RenderController::class, 'render_youthactivity'])->name('render_youthactivity');




// FOR CONTACT US

Route::get('admin/contactus/index', [ContactUsController::class, 'index'])->middleware('auth')->name('admin.contactus.index');
Route::post('admin/contactus/store', [ContactUsController::class, 'store'])->name('admin.contactus.store');
Route::get('admin/contactus/destroy/{id}', [ContactUsController::class, 'destroy'])->middleware('auth')->name('admin.contactus.destroy');
Route::get('admin/contactus/show/{id}', [ContactUsController::class, 'show'])->middleware('auth')->name('admin.contactus.show');

Route::get('portal/contact_page', [App\Http\Controllers\RenderController::class, 'contact_page'])->name('contact_page');





