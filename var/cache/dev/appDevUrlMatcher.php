<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // settings
        if ($pathinfo === '/settings') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::settingsAction',  '_route' => 'settings',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // users
            if ($pathinfo === '/users') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::usersAction',  '_route' => 'users',);
            }

            // useredit
            if (0 === strpos($pathinfo, '/useredit') && preg_match('#^/useredit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'useredit')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::usereditAction',));
            }

        }

        if (0 === strpos($pathinfo, '/writer')) {
            // writers
            if ($pathinfo === '/writers') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::writersAction',  '_route' => 'writers',);
            }

            // writeredit
            if (preg_match('#^/writer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'writeredit')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::writerEditAction',));
            }

            // writer
            if ($pathinfo === '/writer') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::writerAction',  '_route' => 'writer',);
            }

            // writerdetails
            if (0 === strpos($pathinfo, '/writerdetails') && preg_match('#^/writerdetails/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'writerdetails')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::writerDetailsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/genres')) {
            // genres
            if ($pathinfo === '/genres') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::genresAction',  '_route' => 'genres',);
            }

            // genresEdit
            if (preg_match('#^/genres/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'genresEdit')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::genresEditAction',));
            }

        }

        if (0 === strpos($pathinfo, '/book')) {
            // books
            if ($pathinfo === '/books') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::booksAction',  '_route' => 'books',);
            }

            if (0 === strpos($pathinfo, '/bookedit')) {
                // bookedit
                if (preg_match('#^/bookedit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bookedit')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::bookEditAction',));
                }

                // book
                if ($pathinfo === '/bookedit') {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::bookAction',  '_route' => 'book',);
                }

            }

            // bookdetails
            if (0 === strpos($pathinfo, '/bookdetails') && preg_match('#^/bookdetails/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bookdetails')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::bookDetailsAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
