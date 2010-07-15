<?php

/*
 * This file is part of the dinMailerPlugin package.
 * (c) DineCat, 2010 http://dinecat.com/
 * 
 * For the full copyright and license information, please view the LICENSE file,
 * that was distributed with this package, or see http://www.dinecat.com/din/license.html
 */

/**
 * Plugin class for performing query and update operations for DinMailerTemplate model table
 * 
 * @package     dinMailerPlugin
 * @subpackage  lib.model.doctrine
 * @author      Nicolay N. Zyk <relo.san@gmail.com>
 */
class PluginDinMailerTemplateTable extends dinDoctrineTable
{

    /**
     * Returns an instance of PluginDinMailerTemplateTable
     * 
     * @return  PluginDinMailerTemplateTable
     */
    public static function getInstance()
    {

        return Doctrine_Core::getTable( 'PluginDinMailerTemplate' );

    } // PluginDinMailerTemplateTable::getInstance()

} // PluginDinMailerTemplateTable

//EOF