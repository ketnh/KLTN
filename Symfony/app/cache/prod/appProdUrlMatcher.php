<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // acme_kl_homepage
        if ($pathinfo === '/template') {
            return array (  '_controller' => 'Acme\\KLBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_kl_homepage',);
        }

        // acme_store_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_store_homepage')), array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::indexAction',));
        }

        // acme_store_db
        if ($pathinfo === '/createDB') {
            return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::createProductAction',  '_route' => 'acme_store_db',);
        }

        // acme_show_db
        if ($pathinfo === '/showDB') {
            return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::showDBAction',  '_route' => 'acme_show_db',);
        }

        // acme_show_form
        if ($pathinfo === '/form') {
            return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::newAction',  '_route' => 'acme_show_form',);
        }

        // acme_show_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_show_edit')), array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::editAction',));
        }

        // upload
        if (rtrim($pathinfo, '/') === '/upload') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'upload');
            }

            return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::uploadAction',  '_route' => 'upload',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
