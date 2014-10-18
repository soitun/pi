<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link         http://code.pialog.org for the Pi Engine source repository
 * @copyright    Copyright (c) Pi Engine http://pialog.org
 * @license      http://pialog.org/license.txt BSD 3-Clause License
 */

namespace Module\Article\Form\Element;

/**
 * Cluster form class for extending cluster selection
 * 
 * @author Zongshu Lin <lin40553024@163.com>
 */
class Cluster extends Category
{
    /**
     * Table name
     * @var string 
     */
    protected $table = 'cluster';
}