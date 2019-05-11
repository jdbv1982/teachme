<?php
/**
 * Created by PhpStorm.
 * User: Sistemas
 * Date: 09/05/2019
 * Time: 01:17 PM
 */

namespace TeachMe\Providers;


use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use TeachMe\Components\HtmlBuilder;

class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{
    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app->bindShared('html', function($app)
        {
            return new HtmlBuilder($app['config'], $app['view'], $app['url']);
        });
    }
}