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

        // msim_client_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'msim_client_default_index')), array (  '_controller' => 'MSIM\\ClientBundle\\Controller\\DefaultController::indexAction',));
        }

        // msim_client_default_ajout
        if (0 === strpos($pathinfo, '/ajout') && preg_match('#^/ajout/(?P<nom>[^/]++)/(?P<adresse>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'msim_client_default_ajout')), array (  '_controller' => 'MSIM\\ClientBundle\\Controller\\DefaultController::ajoutAction',));
        }

        // msim_client_default_formpr
        if (rtrim($pathinfo, '/') === '/FormPr') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'msim_client_default_formpr');
            }

            return array (  '_controller' => 'MSIM\\ClientBundle\\Controller\\DefaultController::FormPrAction',  '_route' => 'msim_client_default_formpr',);
        }

        // supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'MSIM\\ClientBundle\\Controller\\DefaultController::supprimerAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // affiche
            if (rtrim($pathinfo, '/') === '/affiche') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'affiche');
                }

                return array (  '_controller' => 'MSIM\\ClientBundle\\Controller\\DefaultController::afficheAction',  '_route' => 'affiche',);
            }

            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
