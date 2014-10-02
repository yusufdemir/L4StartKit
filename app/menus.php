<?php
use Pingpong\Menus\Builder;
use Pingpong\Menus\MenuItem;

Menu::create('adminSidebar', function(Builder $menu)
{
    /*/ simple using route
    $menu->route('home', 'Home');
    // simple using route with parameters and attributes
    $menu->route('profile.user', 'View Profile', ['username' => 'gravitano'], ['class' => 'btn btn-default']);
    // using array*/
    //$menu->style('zurb-top-bar');
    $menu->setPresenter('ZurbTopBarPresenter');
    $menu->add([
        'url'   =>  '/',
        'title' =>  'Dashboard',
        'icon'  =>  'fa fa-home'
    ]);

    $menu->dropdown('Posts', function(MenuItem $sub)
    {
        $sub->url('admin/post/', 'All Posts');
        $sub->url('admin/post/create', 'New Post');

        /*$sub->dropdown('Account', function(MenuItem $sub)
        {
            $sub->url('settings/payment', 'Payment');
            // nested menu
            $sub->dropdown('Social Network', function(MenuItem $sub)
            {
                $sub->url('https://github.com/gravitano', 'Github', ['target' => '_blank']);
                $sub->url('https://facebook.com/warsono.m.faisyal', 'Facebook', ['target' => '_blank']);
                $sub->url('https://twitter.com/gravitano', 'Twitter', ['target' => '_blank']);
            });
        });*/
    });

    /*$menu->dropdown('Posts', function(MenuItem $sub)
    {
        $sub->url('admin/post1/', 'All Posts');
        $sub->url('admin/post1/create', 'New Post');        
    });*/

});


use Pingpong\Menus\Presenters\Presenter;

class ZurbTopBarPresenter extends Presenter
{
    /**
     * {@inheritdoc }
     */
    public function getOpenTagWrapper()
    {
        return  PHP_EOL . '<ul class="main-navigation-menu">' . PHP_EOL;
    }

    /**
     * {@inheritdoc }
     */
    public function getCloseTagWrapper()
    {
        return  PHP_EOL . '</ul>' . PHP_EOL;
    }

    /**
     * {@inheritdoc }
     */
    public function getMenuWithoutDropdownWrapper($item)
    {
        return '<li'.$this->getActiveState($item).'><a href="'. $item->getUrl() .'">'.$item->getIcon().' '.$item->title.'</a></li>';
    }

    /**
     * {@inheritdoc }
     */
    public function getActiveState($item)
    {
        return \Request::is($item->getRequest()) ? ' class="active"' : null;
    }

    /**
     * {@inheritdoc }
     */
    public function getDividerWrapper()
    {
        return '<li class="divider"></li>';
    }

    /**
     * {@inheritdoc }
     */
    public function getMenuWithDropDownWrapper($item)
    {
        return '<li>
                <a href="javascript:void(0)">
                 <i class="fa fa-sort-desc"></i>'.$item->getIcon().' '.$item->title.'
                </a>
                <ul class="sub-menu">
                  '.$this->getChildMenuItems($item).'
                </ul>
              </li>' . PHP_EOL;
        ;
    }
}