<?php

/*
 *
 * Portfolio
 *
 */
$app->group(['namespace' => 'App\Http\Controllers'], function ($app) {
    $app->get('/', [
        'as' => 'home', 'uses' => 'PortfolioController@home'
    ]);

    $app->get('project/{slug}', [
        'as' => 'project.show', 'uses' => 'ProjectController@show'
    ]);

    $app->get('portfolio/for/{slug}', [
        'as' => 'portfolio.show', 'uses' => 'PortfolioController@show'
    ]);


    /*
     *
     * Contact
     *
     */
    $app->post('contact', [
        'as' => 'contact.send', 'uses' => 'ContactController@send'
    ]);
});


/*
 *
 * Auth
 *
 */
$app->group(['namespace' => 'App\Http\Controllers'], function ($app) {
    $app->get('login', [
        'as' => 'login',
        'uses' => 'AuthController@login',
        'middleware' => 'guest'
    ]);

    $app->post('login', [
        'as' => 'login.attempt',
        'uses' => 'AuthController@attempt',
        'middleware' => 'guest'
    ]);

    $app->get('logout', [
        'as' => 'logout',
        'uses' => 'AuthController@logout',
        'middleware' => 'auth'
    ]);
});


/*
 *
 * Admin
 *
 */
$app->group(['middleware' => 'auth', 'namespace' => 'App\Http\Controllers'], function ($app) {
    $app->get('admin', [
        'as' => 'admin', 'uses' => 'AdminController@index'
    ]);


    /*
     *
     * Admin Portfolios
     *
     */
    $app->get('admin/portfolio', [
        'as' => 'admin.portfolio.index', 'uses' => 'PortfolioController@index'
    ]);
    $app->get('admin/portfolio/create', [
        'as' => 'admin.portfolio.create', 'uses' => 'PortfolioController@create'
    ]);
    $app->post('admin/portfolio', [
        'as' => 'admin.portfolio.store', 'uses' => 'PortfolioController@store'
    ]);
    $app->get('admin/portfolio/{id}/edit', [
        'as' => 'admin.portfolio.edit', 'uses' => 'PortfolioController@edit'
    ]);
    $app->put('admin/portfolio/{id}', [
        'as' => 'admin.portfolio.update', 'uses' => 'PortfolioController@update'
    ]);
    $app->delete('admin/portfolio/{id}', [
        'as' => 'admin.portfolio.destroy', 'uses' => 'PortfolioController@destroy'
    ]);


    /*
     *
     * Admin Projects
     *
     */
    $app->get('admin/project', [
        'as' => 'admin.project.index', 'uses' => 'ProjectController@index'
    ]);
    $app->get('admin/project/create', [
        'as' => 'admin.project.create', 'uses' => 'ProjectController@create'
    ]);
    $app->post('admin/project', [
        'as' => 'admin.project.store', 'uses' => 'ProjectController@store'
    ]);
    $app->get('admin/project/{id}/edit', [
        'as' => 'admin.project.edit', 'uses' => 'ProjectController@edit'
    ]);
    $app->put('admin/project/{id}', [
        'as' => 'admin.project.update', 'uses' => 'ProjectController@update'
    ]);
    $app->delete('admin/project/{id}', [
        'as' => 'admin.project.destroy', 'uses' => 'ProjectController@destroy'
    ]);


    /*
     *
     * Admin Images
     *
     */
    $app->post('admin/image', [
        'as' => 'admin.image.create', 'uses' => 'ImageController@create'
    ]);
});