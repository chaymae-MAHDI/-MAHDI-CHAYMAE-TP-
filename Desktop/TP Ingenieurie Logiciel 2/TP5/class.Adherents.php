<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.Adherents.php
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
 * include Bibliotheque
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Bibliotheque.php');

/**
 * include Livres
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Livres.php');

/**
 * include emprunte
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.emprunte.php');

/* user defined includes */
// section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:0000000000001038-includes begin
// section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:0000000000001038-includes end

/* user defined constants */
// section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:0000000000001038-constants begin
// section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:0000000000001038-constants end

/**
 * Short description of class Adherents
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Adherents
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute prenom
     *
     * @access public
     * @var String
     */
    public $prenom = null;

    /**
     * Short description of attribute nom
     *
     * @access public
     * @var String
     */
    public $nom = null;

    // --- OPERATIONS ---

    /**
     * Short description of method emprune_livre
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function emprune_livre()
    {
        // section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:000000000000107A begin
        // section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:000000000000107A end
    }

    /**
     * Short description of method rendre_livre
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function rendre_livre()
    {
        // section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:000000000000107C begin
        // section -87--2-44--18--1f416d3e:16e1cedf03f:-8000:000000000000107C end
    }

} /* end of class Adherents */

?>