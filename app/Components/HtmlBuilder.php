<?php
/**
 * Created by PhpStorm.
 * User: Sistemas
 * Date: 09/05/2019
 * Time: 12:53 PM
 */

namespace TeachMe\Components;

use Illuminate\Config\Repository as Config;
use Illuminate\Contracts\View\Factory as View;
use Collective\Html\HtmlBuilder as CollevtiveHtmlBuilder;
use Illuminate\Routing\UrlGenerator;


class HtmlBuilder extends CollevtiveHtmlBuilder
{

    /**
     * @var Config
     */
    private $config;
    /**
     * @var View
     */
    private $view;

    public function __construct(Config $config, View $view, UrlGenerator $url)
    {
        $this->config = $config;
        $this->view = $view;
        $this->url = $url;
    }

    public function menu($items)
    {
        if( ! is_array($items)){
            $items = $this->config->get($items, array());
        }

        return $this->view->make('partials/menu', compact('items'));
    }


    public function classes(array $classes)
    {
        $html = '';
        foreach ($classes as $name => $bool) {
            if (is_int($name)) {
                $name = $bool;
                $bool = true;
            }
            if ($bool) {
                $html .= $name.' ';
            }
        }
        if (! empty($html)) {
            return ' class="'.trim($html).'"';
        }
        return '';
    }
}