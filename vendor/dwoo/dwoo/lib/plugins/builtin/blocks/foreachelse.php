<?php

/**
 * This plugin serves as a {else} block specifically for the {foreach} plugin.
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
class Dwoo_Plugin_foreachelse extends Dwoo_Block_Plugin implements Dwoo_ICompilable_Block
{
	public function init()
	{
	}

	public static function preProcessing(Dwoo_Compiler $compiler, array $params, $prepend, $append, $type)
	{
		$with =& $compiler->findBlock('foreach', true);

		$params['initialized'] = true;
		$compiler->injectBlock($type, $params);

		return '';
	}

	public static function postProcessing(Dwoo_Compiler $compiler, array $params, $prepend, $append, $content)
	{
		if (!isset($params['initialized'])) {
			return '';
		}

		$block =& $compiler->getCurrentBlock();
		$block['params']['hasElse'] = Dwoo_Compiler::PHP_OPEN."else {\n".Dwoo_Compiler::PHP_CLOSE . $content . Dwoo_Compiler::PHP_OPEN."\n}".Dwoo_Compiler::PHP_CLOSE;
		return '';
	}
}
