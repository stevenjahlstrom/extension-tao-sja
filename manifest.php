<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2019 (original work) sja;
 *               
 * 
 */

/**
 * Generated using taoDevTools 4.1.1
 */
return array(
    'name' => 'myExampleExtension',
    'label' => 'sja\'s sample extension',
    'description' => '',
    'license' => 'GPL-2.0',
    'version' => '0.1.0',
    'author' => 'sja',
    'requires' => array(
        'tao' => '>=24.3.0'
    ),
    'managementRole' => 'http://www.tao.lu/Ontologies/generis.rdf#myExampleExtensionManager',
    'acl' => array(
        array('grant', 'http://www.tao.lu/Ontologies/generis.rdf#myExampleExtensionManager', array('ext'=>'myExampleExtension')),
    ),
    'install' => array(
    ),
    'uninstall' => array(
    ),
    'routes' => array(
        '/myExampleExtension' => 'stevenjahlstrom\\myExampleExtension\\controller'
    ),    
    'constants' => array(
        # views directory
        "DIR_VIEWS" => dirname(__FILE__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR,
        
        #BASE URL (usually the domain root)
        'BASE_URL' => ROOT_URL.'myExampleExtension/',
    ),
    'extra' => array(
        'structures' => dirname(__FILE__).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'structures.xml',
    )
);