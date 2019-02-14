<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', [
    'namespace' => 'App\Http\Controllers\Api'
], function($api) {
//用户注册
    $api->post('users', 'UsersController@store')
        ->name('api.users.store');
//验证手机号是否注册
    $api->post('phones', 'UsersController@phones')
        ->name('api.users.phones');
    //用户登录
    $api->post('logins', 'UsersController@logins')
        ->name('api.users.logins');
    //密码修改
    $api->post('passresets', 'UsersController@passresets')
        ->name('api.users.passresets');
    //用户信息获取
    $api->post('userinfos', 'UsersController@userinfos')
        ->name('api.users.userinfos');


});
