<?php

/*
 *
 * Portfolio
 *
 */
$router->group([], function ($router) {
    $router->get('/', [
        'as' => 'home', 'uses' => 'PortfolioController@home'
    ]);

    $router->get('project/{slug}', [
        'as' => 'project.show', 'uses' => 'ProjectController@show'
    ]);

    $router->get('portfolio/for/{slug}', [
        'as' => 'portfolio.show', 'uses' => 'PortfolioController@show'
    ]);


    /*
     *
     * Contact
     *
     */
    $router->post('contact', [
        'as' => 'contact.send', 'uses' => 'ContactController@send'
    ]);
});


/*
 *
 * Auth
 *
 */
$router->group([], function ($router) {
    $router->get('login', [
        'as' => 'login',
        'uses' => 'AuthController@login',
        'middleware' => 'guest'
    ]);

    $router->post('login', [
        'as' => 'login.attempt',
        'uses' => 'AuthController@attempt',
        'middleware' => 'guest'
    ]);

    $router->get('logout', [
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
$router->group(['middleware' => 'auth', 'prefix' => 'admin'], function ($router) {
    $router->get('/', [
        'as' => 'admin', 'uses' => 'AdminController@index'
    ]);


    /*
     *
     * Admin Portfolios
     *
     */
    $router->get('portfolio', [
        'as' => 'admin.portfolio.index', 'uses' => 'PortfolioController@index'
    ]);
    $router->get('portfolio/create', [
        'as' => 'admin.portfolio.create', 'uses' => 'PortfolioController@create'
    ]);
    $router->post('portfolio', [
        'as' => 'admin.portfolio.store', 'uses' => 'PortfolioController@store'
    ]);
    $router->get('portfolio/{id}/edit', [
        'as' => 'admin.portfolio.edit', 'uses' => 'PortfolioController@edit'
    ]);
    $router->put('portfolio/{id}', [
        'as' => 'admin.portfolio.update', 'uses' => 'PortfolioController@update'
    ]);
    $router->delete('portfolio/{id}', [
        'as' => 'admin.portfolio.destroy', 'uses' => 'PortfolioController@destroy'
    ]);


    /*
     *
     * Admin Projects
     *
     */
    $router->get('project', [
        'as' => 'admin.project.index', 'uses' => 'ProjectController@index'
    ]);
    $router->get('project/create', [
        'as' => 'admin.project.create', 'uses' => 'ProjectController@create'
    ]);
    $router->post('project', [
        'as' => 'admin.project.store', 'uses' => 'ProjectController@store'
    ]);
    $router->get('project/{id}/edit', [
        'as' => 'admin.project.edit', 'uses' => 'ProjectController@edit'
    ]);
    $router->put('project/{id}', [
        'as' => 'admin.project.update', 'uses' => 'ProjectController@update'
    ]);
    $router->delete('project/{id}', [
        'as' => 'admin.project.destroy', 'uses' => 'ProjectController@destroy'
    ]);


    /*
     *
     * Admin Images
     *
     */
    $router->post('image', [
        'as' => 'admin.image.create', 'uses' => 'ImageController@create'
    ]);
});
