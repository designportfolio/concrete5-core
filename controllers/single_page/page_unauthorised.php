<?php namespace Concrete\Controller\SinglePage;

use Concrete\Core\Http\Response;
use Concrete\Core\Page\Controller\PageController;
use Events;
use Page;

class PageUnauthorised extends PageController
{

    /**
     * @param $method
     * @param $arguments
     *
     * @return Response|mixed
     */
    public function __call($method, $arguments)
    {
        if (method_exists($this, $method)) {
            return call_user_func_array(array($this, $method), $arguments);
        }
        return $this->view();
    }

    /**
     * @return Response
     */
    public function view()
    {
        Events::dispatch('on_page_unauthorised');
        return new Response($this->getViewObject()->render(), 404);
    }

    /**
     * Overrides built-in request validation.
     *
     * @return true
     */
    public function validateRequest()
    {
        return true;
    }

}
