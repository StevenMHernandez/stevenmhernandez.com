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
$app->group(['middleware' => 'auth', 'namespace' => 'App\Http\Controllers', 'prefix' => 'admin'], function ($app) {
    $app->get('/', [
        'as' => 'admin', 'uses' => 'AdminController@index'
    ]);


    /*
     *
     * Admin Portfolios
     *
     */
    $app->get('portfolio', [
        'as' => 'admin.portfolio.index', 'uses' => 'PortfolioController@index'
    ]);
    $app->get('portfolio/create', [
        'as' => 'admin.portfolio.create', 'uses' => 'PortfolioController@create'
    ]);
    $app->post('portfolio', [
        'as' => 'admin.portfolio.store', 'uses' => 'PortfolioController@store'
    ]);
    $app->get('portfolio/{id}/edit', [
        'as' => 'admin.portfolio.edit', 'uses' => 'PortfolioController@edit'
    ]);
    $app->put('portfolio/{id}', [
        'as' => 'admin.portfolio.update', 'uses' => 'PortfolioController@update'
    ]);
    $app->delete('portfolio/{id}', [
        'as' => 'admin.portfolio.destroy', 'uses' => 'PortfolioController@destroy'
    ]);


    /*
     *
     * Admin Projects
     *
     */
    $app->get('project', [
        'as' => 'admin.project.index', 'uses' => 'ProjectController@index'
    ]);
    $app->get('project/create', [
        'as' => 'admin.project.create', 'uses' => 'ProjectController@create'
    ]);
    $app->post('project', [
        'as' => 'admin.project.store', 'uses' => 'ProjectController@store'
    ]);
    $app->get('project/{id}/edit', [
        'as' => 'admin.project.edit', 'uses' => 'ProjectController@edit'
    ]);
    $app->put('project/{id}', [
        'as' => 'admin.project.update', 'uses' => 'ProjectController@update'
    ]);
    $app->delete('project/{id}', [
        'as' => 'admin.project.destroy', 'uses' => 'ProjectController@destroy'
    ]);


    /*
     *
     * Admin Images
     *
     */
    $app->post('image', [
        'as' => 'admin.image.create', 'uses' => 'ImageController@create'
    ]);
});