<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 * @package         Form
 */

namespace Pi\Form\View\Helper;

use Zend\Form\View\Helper\FormElement as ZendFormElement;
use Zend\Form\ElementInterface;

/**
 * Form element helper
 *
 * {@inheritDoc}
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class FormElement extends ZendFormElement
{
    /**
     * Render an element
     *
     * {@inheritdoc}
     */
    public function render(ElementInterface $element)
    {
        $renderer = $this->getView();
        if (!method_exists($renderer, 'plugin')) {
            // Bail early if renderer is not pluggable
            return '';
        }

        $type = $element->getAttribute('type');
        if ($type) {
            if (false === strpos($type, '\\')) {
                $type = sprintf('form_%s', str_replace('-', '_', $type));
            }
            $helper = $renderer->plugin($type);
            if ($helper) {
                return $helper($element);
            }
        }

        return parent::render($element);
    }
}
