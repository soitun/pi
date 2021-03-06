<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link         http://code.piengine.org for the Pi Engine source repository
 * @copyright    Copyright (c) Pi Engine http://piengine.org
 * @license      http://piengine.org/license.txt BSD 3-Clause License
 */

namespace Module\Article\Form;

use Pi;
use Pi\Form\Form as BaseForm;

/**
 * Category move form class
 * 
 * @author Zongshu Lin <lin40553024@163.com>
 */
class CategoryMoveForm extends BaseForm
{
    /**
     * Initializing form element
     */
    public function init()
    {
        $this->add(array(
            'name'       => 'from',
            'options'    => array(
                'label'     => __('From'),
            ),
            'attributes' => array(
                'id'        => 'from',
                'class'     => 'form-control',
            ),
            'type'       => 'Module\Article\Form\Element\Category',
        ));

        $this->add(array(
            'name'       => 'to',
            'options'    => array(
                'label'     => __('To'),
            ),
            'attributes' => array(
                'id'        => 'to',
                'class'     => 'form-control',
            ),
            'type'       => 'Module\Article\Form\Element\CategoryWithRoot',
        ));

        $this->add(array(
            'name'       => 'security',
            'type'       => 'csrf',
        ));

        $this->add(array(
            'name'       => 'submit',
            'attributes' => array(              
                'value'     => __('Submit'),
            ),
            'type'       => 'submit',
        ));
    }
}
