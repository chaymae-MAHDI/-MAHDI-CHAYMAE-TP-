<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.emprunte.php
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
 * include Livres
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Livres.php');

/* user defined includes */
// section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:0000000000001055-includes begin
// section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:0000000000001055-includes end

/* user defined constants */
// section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:0000000000001055-constants begin
// section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:0000000000001055-constants end

/**
 * Short description of class emprunte
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class emprunte
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute date_emprunt
     *
     * @access public
     * @var date
     */
    public $date_emprunt = null;

    /**
     * Short description of attribute date_retour
     *
     * @access public
     * @var date
     */
    public $date_retour = null;

    // --- OPERATIONS ---

    /**
     * Short description of method periode_emprunt
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function periode_emprunt()
    {
        // section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:00000000000010A3 begin
        // section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:00000000000010A3 end
    }

} /* end of class emprunte */

?>