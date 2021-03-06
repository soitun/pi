<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

namespace Pi\File\Transfer;

use Pi;
use Zend\File\Transfer\Transfer as TransferHandler;
use Zend\File\Exception;

/**
 * File transfer
 *
 * {@inheritDoc}
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class Transfer extends TransferHandler
{
    /**
     * {@inheritDoc}
     */
    public function setAdapter(
        $adapter,
        $direction = false,
        $options = array()
    ) {
        if (!is_string($adapter)) {
            throw new Exception\InvalidArgumentException(
                'Adapter must be a string'
            );
        }

        if ($adapter[0] != '\\') {
            $adapter = '\Pi\File\Transfer\Adapter\\' . ucfirst($adapter);
            if (!class_exists($adapter)) {
                $adapter = '\Zend\File\Transfer\Adapter\\' . ucfirst($adapter);
            }
        }
        parent::setAdapter($adapter, $direction, $options);

        return $this;
    }
}
