<?php

/**
 * interface that represents a compilable plugin
 *
 * implement this to notify the compiler that this plugin does not need to be loaded at runtime.
 *
 * to implement it right, you must implement <em>public static function compile(Dwoo_Compiler $compiler, $arg, $arg, ...)</em>,
 * which replaces the <em>process()</em> method (that means <em>compile()</em> should have all arguments it requires).
 *
 * This software is provided 'as-is', without any express or implied warranty.
 * In no event will the authors be held liable for any damages arising from the use of this software.
 *
 * @author     Jordi Boggiano <j.boggiano@seld.be>
 * @author     David Sanchez <david38sanchez@gmail.com>
 * @copyright  2008-2013 Jordi Boggiano
 * @copyright  2013-2016 David Sanchez
 * @license    http://dwoo.org/LICENSE   Modified BSD License
 * @link       http://dwoo.org/
 * @version    1.2.3
 * @date       2016-10-15
 * @package    Dwoo
 */
interface Dwoo_ICompilable
{
	// this replaces the process function
	//public static function compile(Dwoo_Compiler $compiler, $arg, $arg, ...);
}
