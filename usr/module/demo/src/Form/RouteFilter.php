<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

namespace Module\Demo\Form;

use Pi;
use Zend\InputFilter\InputFilter;

class RouteFilter extends InputFilter
{
    public function __construct()
    {
        $this->add(array(
            'name'          => 'name',
            'filters'       => array(
                array(
                    'name'  => 'StringTrim',
                ),
            ),
            'validators'    => array(
                new \Module\Demo\Validator\RouteNameDuplicate(),
            ),
        ));

        $this->add(array(
            'name'          => 'type',
            'filters'       => array(
                array(
                    'name'  => 'StringTrim',
                ),
            ),
        ));

        $this->add(array(
            'name'          => 'priority',

            'filters'       => array(
                array(
                    'name'  => 'Int',
                ),
            ),

        ));

        $this->add(array(
            'name'          => 'id',
            'required'      => false,
        ));

        $this->add(array(
            'name'          => 'module',
            'required'      => false,
        ));

        $this->add(array(
            'name'          => 'section',
            'required'      => false,
        ));
    }
}
