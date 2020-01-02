<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.Livres.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 17.12.2019, 11:07:29 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Adherents
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Adherents.php');

/**
 * include Volumes
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Volumes.php');

/**
 * include emprunte
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.emprunte.php');

/* user defined includes */
// section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:000000000000103E-includes begin
// section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:000000000000103E-includes end

/* user defined constants */
// section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:000000000000103E-constants begin
// section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:000000000000103E-constants end

/**
 * Short description of class Livres
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Livres
    extends Volumes
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute exite
     *
     * @access public
     * @var boolean
     */
    public $exite = false;

    // --- OPERATIONS ---

} /* end of class Livres */

?>