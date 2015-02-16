<?php
/**
 * Created by PhpStorm.
 * User: flow
 * Date: 2/6/15
 * Time: 7:25 PM
 */

namespace SemanticUi\View\Widget;

use Cake\View\Widget\ButtonWidget as CakeButtonWidget;
use Cake\View\Form\ContextInterface;

class ButtonWidget extends CakeButtonWidget
{

    public function render(array $data, ContextInterface $context)
    {
        if (!isset($data['class'])) {
            $data['class'] = 'ui submit button';
        }

        return parent::render($data, $context);
    }

}
