<?php 
namespace App\library 
{
    class menu 
    {
            
        public static function data () 
        {
            $menu[] = array(
                    'label' => 'Home',
                    'href' => url('/'),
                    'class' => 'home-menu',
                    'id' => 'home',
                    'name' => 'home-page'
                );

            $menu[] = array(
                    'label' => 'About',
                    'href' => url('/about'),
                    'class' => 'about-menu',
                    'id' => 'about',
                    'name' => 'about-page'
                );

            $menu[] = array(
                    'label' => 'Login',
                    'href' => route('login'),
                    'class' => 'login-menu',
                    'id' => 'login',
                    'name' => 'login-page'
                );

            $menu[] = array(
                    'label' => 'Register',
                    'href' => route('register'),
                    'class' => 'register-menu',
                    'id' => 'register',
                    'name' => 'register-page'
                );

            $menu[] = array(
                    'label' => 'Docs',
                    'href' => url('/docs'),
                    'class' => 'docs-menu',
                    'id' => 'docs',
                    'name' => 'docs-page'
                );

            return $menu;
        }

        public static function pages ( $current=null ) 
        {
            $html = null;
            $urli = explode( '/', url()->current() );

            $is_page = $current == 'auth' ? end( $urli ) : $current; 

            $menu = static::data(); 
            foreach( $menu as $keys => $results ) :
                $html .= '<li class="'.$results['class'].'">';

                $is_current = $results['id'] == $is_page ? 'current-menu' : null;

                $html .= '<a href="'.$results['href'].'" class="'.$results['class'].' '.$is_current.'" id="'.$results['id'].'" name="'.$results['name'].'">';
                $html .= $results['label'];
                $html .= '</a>';

                $html .= '</li>';
            endforeach;
            
            return $html;
        }

        // END
    }
}