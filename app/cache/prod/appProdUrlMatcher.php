<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/Blog_Cuisine')) {
            // esiea_blog_home
            if (preg_match('#^/Blog_Cuisine(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_home')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\AdvertController::indexAction',  'page' => 1,));
            }

            // esiea_blog_view
            if (0 === strpos($pathinfo, '/Blog_Cuisine/advert') && preg_match('#^/Blog_Cuisine/advert/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_view')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\AdvertController::viewAction',));
            }

            // esiea_blog_edit
            if (0 === strpos($pathinfo, '/Blog_Cuisine/edit') && preg_match('#^/Blog_Cuisine/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_edit')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\AdvertController::editAction',));
            }

            // esiea_blog_add
            if ($pathinfo === '/Blog_Cuisine/add') {
                return array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\AdvertController::addAction',  '_route' => 'esiea_blog_add',);
            }

            // esiea_blog_delete
            if (0 === strpos($pathinfo, '/Blog_Cuisine/delete') && preg_match('#^/Blog_Cuisine/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_delete')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\AdvertController::deleteAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
