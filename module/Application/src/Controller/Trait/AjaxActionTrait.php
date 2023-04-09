<?php

declare(strict_types=1);

namespace Application\Controller\Trait;

use Laminas\View\Model\ModelInterface;
use Laminas\View\Model\ViewModel;

trait AjaxActionTrait
{
    public function ajaxAction(?ViewModel $view = null): bool
    {
        if ($this->request->isXmlHttpRequest()) {
            if ($view !== null) {
                $view->setTerminal(true);
            }
            if (isset($this->view) && $this->view instanceof ModelInterface) {
                $this->view->setTerminal(true);
            }
            return true;
        } else {
            return false;
        }
    }
}
