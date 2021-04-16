<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware;
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

Route::get('/admin', function () {
    return view('auth.login');
})->name('login');


Route::middleware('auth')->group(function() {
    Route::middleware('checkRole')->prefix('admin')->group(function () {
        // dashboard
        Route::post('/dashboard', 'AdminController@dashboard');
        Route::get('/dashboard', 'AdminController@show_dashboard');

        Route::get('/', 'CustomerController@login');
        Route::get('/category', 'CategoryController@category');
        Route::post('/add-category' , 'CategoryController@add_category');
        
        Route::get('/edit-category/{slug}' , 'CategoryController@edit_category');
        Route::post('/update-category/{slug}' , 'CategoryController@update_category');

        Route::get('/delete-category/{slug}' , 'CategoryController@delete_category');

        Route::get('/add-job', 'JobController@add_job');
        Route::post('/insert-job', 'JobController@insert_job');
        Route::get('/show-job', 'JobController@show_job');
        Route::get('/edit-job/{id}', 'JobController@edit_job');
        Route::post('/update-job/{id}', 'JobController@update_job');
        Route::get('/delete-job/{id}', 'JobController@delete_job');

        // Doi mat khau
        Route::get('/change-password', 'AdminController@change_password');
        Route::post('/change-password-confirm', 'AdminController@change_password_confirm');

        // Employers
        Route::get('/show-employer', 'EmployerController@show_employer');
        Route::get('/show-candidate', 'CandidateController@show_candidate');
        
        //Articles
        Route::get('/show-articles', 'ArticleController@manage_article');
        Route::get('/manage-article-details/{id}', 'ArticleController@manage_article_details');
        Route::get('/accept-article/{id}', 'ArticleController@accept_article');
        Route::get('/delete-article/{id}', 'ArticleController@delete_article');

        // Xem hỗ trợ
        Route::get('/show-helps', 'AdminController@show_helps');
        Route::get('/help-infor/{id}', 'AdminController@help_infor');
        Route::post('/reply-help-require/{id}', 'AdminController@reply_help');

        // Người dùng
        Route::get('/user', 'AdminController@user');
        Route::get('/user/change-state/{id}', 'AdminController@change_state_user');
        Route::put('/change-role/{id}', 'AdminController@change_role');

        // Bình luận
        Route::get('/comments', 'AdminController@comments');
        Route::post('/reply-comment/{parentID}', 'AdminController@reply_comment');
        Route::get('/comment/change-state/{id}', 'AdminController@comment_change_state');
    });

    Route::get('/career/{slug}', 'JobController@job_details');

    Route::get('/user/information/{id}', 'CustomerController@user_information');
    Route::post('user/update/{id}', 'CustomerController@user_information_update');

    // Change phone number
    Route::get('/change-phone-number/{id}', 'CustomerController@change_phone_number');
    Route::post('/update-phoneNumber/{id}', 'CustomerController@update_phone_number');

    // Change password
    Route::get('user/change-password', 'CustomerController@change_password');
    Route::post('update-password/{id}', 'CustomerController@update_password');

    Route::get('apply-job/{job_id}/{user_id}', 'CandidateController@apply_job');

    Route::get('user/applied-job', 'CandidateController@applied_job');
    Route::get('user/deleted-job', 'CandidateController@deleted_job');
    Route::get('/user/delete-applied-job/{id}', 'CandidateController@delete_applied_job');

    Route::get('employer/posted-job', 'EmployerController@posted_job');
    Route::get('employer/add-job', 'EmployerController@add_job');
    Route::get('/employer/respond-job', 'EmployerController@respond_job');
    
    // Giay phep kinh doanh
    Route::get('/user/business-paper', 'EmployerController@business_paper');
    Route::post('/update-business-paper', 'EmployerController@update_business_paper');
    Route::get('/user/delete-business-paper', 'EmployerController@delete_business_paper');

    // Quản lý hồ sơ đã ứng tuyển
    Route::get('/user/candidate-posted-job', 'EmployerController@candidate_posted_job');

    Route::post('employer/insert-job', 'EmployerController@employer_insert_job');
    Route::get('employer/edit/{id}', 'EmployerController@employer_edit_job');
    Route::post('employer/update-job/{id}', 'EmployerController@employer_update_job');

    // Delete job by employer
    Route::get('employer/delete/{id}', 'EmployerController@employer_delete_job');
    // Thống kê
    Route::get('/category/statistic', 'CategoryController@jobs_statistic');

    // Show CV
    Route::get('/user/show-cv/{id}', 'CandidateController@show_cv');
    Route::post('/update-cv/{id}', 'CandidateController@update_cv');
    Route::get('/user/delete-cv', 'CandidateController@delete_cv');

    //Xem thông tin người khác
    Route::get('/public-candidate-infor/{id}', 'CustomerController@public_candidate_infor');
    Route::get('/public-employer-infor/{id}', 'CustomerController@public_employer_infor');

    // suggest job for candidate
    Route::get('user/suitable-job', 'CandidateController@suitable_job');
    Route::post('user/change-suitable-category', 'CandidateController@update_suitable_category')->name('change_suitable_category');

    // Viết bài
    Route::get('/user/write-advice-article', 'ArticleController@write_new_article');
    Route::post('/user/add-new-article', 'ArticleController@add_new_article')->name('add_new_article');

    // Comments
    Route::post('/article/add-comments', 'ArticleController@add_comments');
    Route::get('/user/report-comment/{id}', 'ArticleController@report_comments');
    Route::get('/user/like-comment/{commentID}','ArticleController@like_comment');

    // Articles
    Route::get('/user/my-articles', 'CustomerController@my_articles');

    // Thêm coins
    Route::get('user/add-coins', 'CustomerController@add_coins')->name('add_coins');
    Route::post('/insert-coin-bank', 'CustomerController@insert_coin_bank');
    Route::post('/insert-coin-card', 'CustomerController@insert_coin_card');

    // Gữi hỗ trợ
    Route::get('/help', 'HomeController@show_help');
    Route::get('/send-help', 'HomeController@help_require');
    Route::post('/send-help-require', 'HomeController@send_help_require');
    Route::get('/help-infor/{id}', 'HomeController@help_infor');

    // Thay đổi avatar
    Route::post('/change-avatar', 'CustomerController@change_avatar');

    // Api
    Route::prefix('api')->group(function () {
        Route::apiResource('comment', 'Api\CommentController');
        Route::apiResource('job', 'Api\JobController');
    });
    
}); 



Route::get('/logout', 'AdminController@logout');

// User Login
Route::get('/user/login', 'CustomerController@login')->name('user_login');
Route::post('/user/home', 'CustomerController@loginHome');

Route::get('/user/register', 'CustomerController@register');
Route::post('/user/registerConfirm', 'CustomerController@registerConfirm');

Route::get('/user/logout', 'CustomerController@logout');

//Main homepage
Route::get('/', 'HomeController@index');

Route::get('/new-job', 'HomeController@new_job');

Route::get('/articles', 'ArticleController@articles_show');
Route::get('article-details/{slug}', 'ArticleController@article_details');

// Filter job
Route::get('/search', 'JobController@filter_job');

// Forgot password
Route::get('/forgot-password', 'CustomerController@forgot_password')->name('forgot-password');
Route::post('/update-new-password','CustomerController@update_new_password')->name('update-new-password');
Route::get('/confirm-code/{id}', 'CustomerController@confirm_code_view');
Route::post('/confirm-code-forgot/{id}', 'CustomerController@confirm_code_forgot');
Route::post('/forgot-password-update/{id}', 'CustomerController@forgor_password_update');



