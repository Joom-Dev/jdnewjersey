<?php
/**
 * @package	HikaShop for Joomla!
 * @version	3.2.1
 * @author	hikashop.com
 * @copyright	(C) 2010-2017 HIKARI SOFTWARE. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
defined('_JEXEC') or die('Restricted access');
?><?php
class JButtonExport extends JButton {
	private $name = 'Export';

	public function fetchButton($type = 'Export', $namekey = '', $id = 'export') {
		$doc = JFactory::getDocument();
		$js = "
function hikaExport(){
	submitbutton('export');
	var form = document.getElementById('adminForm');
	form.task.value = '';
	return false;
}";
		$doc->addScriptDeclaration($js);
		if(!HIKASHOP_J30)
			return '<a href="#" target="_blank" onclick="return hikaExport();" class="toolbar"><span class="icon-32-archive" title="' . JText::_('HIKA_EXPORT', true) . '"></span>' . JText::_('HIKA_EXPORT') . '</a>';
		return '<button class="btn btn-small" onclick="return hikaExport();"><i class="icon-upload"></i> '.JText::_('HIKA_EXPORT').'</button>';
	}

	public function fetchId($type = 'Export', $html = '', $id = 'export') {
		return $this->name . '-' . $id;
	}
}

class JToolbarButtonExport extends JButtonExport {}
