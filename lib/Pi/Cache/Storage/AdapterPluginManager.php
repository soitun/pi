<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

namespace Pi\Cache\Storage;

use Zend\Cache\Storage\AdapterPluginManager as ZendAdapterPluginManager;

/**
 * Cache adapter plugin manager class
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class AdapterPluginManager extends ZendAdapterPluginManager
{
    /**
     * Default set of adapters
     *
     * @var array
     */
    protected $invokableClasses = array(
        'filesystem'     => 'Pi\Cache\Storage\Adapter\Filesystem',
        'memcached'      => 'Pi\Cache\Storage\Adapter\Memcached',
        'redis'          => 'Pi\Cache\Storage\Adapter\Redis',

        'apc'            => 'Zend\Cache\Storage\Adapter\Apc',
        //'memcached'      => 'Zend\Cache\Storage\Adapter\Memcached',
        'memory'         => 'Zend\Cache\Storage\Adapter\Memory',
        //'redis'          => 'Zend\Cache\Storage\Adapter\Redis',
        'dba'            => 'Zend\Cache\Storage\Adapter\Dba',
        'wincache'       => 'Zend\Cache\Storage\Adapter\WinCache',
        'zendserverdisk' => 'Zend\Cache\Storage\Adapter\ZendServerDisk',
        'zendservershm'  => 'Zend\Cache\Storage\Adapter\ZendServerShm',
    );
}
