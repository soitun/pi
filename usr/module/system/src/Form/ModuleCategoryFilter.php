<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

namespace Module\System\Form;

use Pi;
use Zend\InputFilter\InputFilter;

/**
 * Module category form filter
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class ModuleCategoryFilter extends InputFilter
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->add(array(
            'name'          => 'title',
            'filters'       => array(
                array(
                    'name'  => 'StringTrim',
                ),
            ),
        ));

        $this->add(array(
            'name'          => 'icon',
            'filters'       => array(
                array(
                    'name'  => 'StringTrim',
                ),
            ),
            'required'      => false,
        ));

        $this->add(array(
            'name'          => 'order',
            'filters'       => array(
                array(
                    'name'  => 'Int',
                ),
            ),
            'required'      => false,
        ));

        $this->add(array(
            'name'          => 'id',
            'required'      => false,
        ));
    }
}
