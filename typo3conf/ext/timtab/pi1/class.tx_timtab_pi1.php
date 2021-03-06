<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2004 Ingo Renner (typo3@ingo-renner.com)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Plugin 'blogroll' for the 'timtab' extension.
 *
 * $Id: class.tx_timtab_pi1.php,v 1.7 2005/10/30 01:41:41 ingorenner Exp $
 *
 * @author	Ingo Renner <typo3@ingo-renner.com>
 */
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   49: class tx_timtab_pi1 extends tslib_pibase
 *   63:     function main($content, $conf)
 *  110:     function init($conf)
 *  138:     function buildRelAttr($row)
 *
 * TOTAL FUNCTIONS: 3
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */


require_once(PATH_tslib.'class.tslib_pibase.php');

class tx_timtab_pi1 extends tslib_pibase {
	var $prefixId = 'tx_timtab_pi1';		// Same as class name
	var $scriptRelPath = 'pi1/class.tx_timtab_pi1.php';	// Path to this script relative to the extension dir.
	var $extKey = 'timtab';	// The extension key.
	var $enableFields;

	/**
	 * main funtction for blogroll
	 *
	 * @param	string		plugin output is added to this
	 * @param	array		configuration array
	 * @return	string		complete content generated by the blogroll plugin
	 */
	function main($content, $conf)	{
		$this->init($conf);
		$blogroll = '<ul';

		$listClass = trim($this->conf['listClass']);
		if($listClass) {
			$blogroll .= ' class="'.$listClass.'"';
		}

		$blogroll .= '>'."\n";

		$res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
			'url, name, description, rel_identity, rel_friendship, rel_physical, rel_professional, rel_geographical, rel_family, rel_romantic, target',
			'tx_timtab_blogroll',
			'1=1'.$this->enableFields.' AND pid IN ('.$this->conf['pidList'].')',
			'',
			'sorting'
		);


		while($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
			$link  = "\t".'<li><a href="';
			$link .= substr($row['url'], 0, 7) == 'http://'?$row['url']:'http://'.$row['url'];
			$link .= '"'.$this->buildRelAttr($row);
			$link .= !empty($row['description'])?' title="'.$row['description'].'"':'';

			if($row['target'] == 1) {
				$link .= ' target="_blank"';
			} elseif($row['target'] == 2) {
				$link .= ' target="_top"';
			}

			$link .= '>'.$row['name'].'</a></li>'."\n";

			$blogroll .= $link;
		}

		$blogroll .= '</ul>';

		$content .= $this->cObj->stdWrap($blogroll, $this->conf['header_stdWrap.']);

		if($this->conf['dontWrapInDiv'] == 1) {
			return $content;
		} else {
			return $this->pi_wrapInBaseClass($content);
		}
	}

	/**
	 * initializes the configuration for this plugin
	 *
	 * @param	array		configuration array
	 * @return	[type]		...
	 */
	function init($conf) {
		$this->conf = $conf;
		$this->pi_setPiVarDefaults();
		$this->pi_loadLL();
		$this->enableFields = $this->cObj->enableFields('tx_timtab_blogroll');

		// pidList is the pid/list of pids from where to fetch the faq items.
		$cePidList = $this->cObj->data['pages']; //ce = Content Element
		$pidList   = $cePidList ?
			$cePidList :
			trim($this->cObj->stdWrap(
				$this->conf['pid_list'], $this->conf['pid_list.']
			));

		$this->conf['pidList'] = $pidList ?
			implode(t3lib_div::intExplode(',', $pidList), ',') :
			$GLOBALS['TSFE']->id;

		unset($this->conf['pid_list']);
	}

	/**
	 * builds the rel attribute for the anchor
	 *
	 * @param	array		data row of the current link
	 * @return	string		the rel attribute
	 */
	function buildRelAttr($row) {
		$rel = array();

		if($row['rel_identity'] == 1) {
			return ' rel="me"';
		}

		switch($row['rel_friendship']) {
			case 1:
				$rel[] = 'acquaintance';
				break;
			case 2:
				$rel[] = 'contact';
				break;
			case 3:
				$rel[] = 'friend';
				break;
		}

		if($row['rel_physical'] == 1) {
			$rel[] = 'met';
		}

		//bitmask!
		switch($row['rel_professional']) {
			case 1:
				$rel[] = 'co-worker';
				break;
			case 2:
				$rel[] = 'colleague';
				break;
			case 3: //1 + 2 = 3
				$rel[] = 'co-worker colleague';
				break;
		}

		switch($row['rel_geographical']) {
			case 1:
				$rel[] = 'co-resident';
				break;
			case 2:
				$rel[] = 'neighbor';
				break;
		}

		switch($row['rel_family']) {
			case 1:
				$rel[] = 'child';
				break;
			case 2:
				$rel[] = 'kin';
				break;
			case 3:
				$rel[] = 'parent';
				break;
			case 4:
				$rel[] = 'sibling';
				break;
			case 5:
				$rel[] = 'spouse';
				break;
		}

		//until here we can have a maximum of 6 relationship attributes
		//romantic is a bitmask: 1 2 4 8
		$bitmask = $row['rel_romantic'];
		if(($bitmask - 8) >= 0 ) {
			$rel[9] = 'sweetheart'; //9 is the maximum key of relationship attributes
			$bitmask -= 8;
		}
		if(($bitmask - 4) >= 0 ) {
			$rel[8] = 'date';
			$bitmask -= 4;
		}
		if(($bitmask - 2) >= 0 ) {
			$rel[7] = 'crush';
			$bitmask -= 2;
		}
		if(($bitmask - 1) >= 0 ) {
			$rel[6] = 'muse';
			$bitmask -= 1;
		}

		ksort($rel);

		//put everything together
		if(count($rel)) {
			$relAttr = ' rel="'.implode(' ', $rel).'"';
		} else {
			$relAttr = '';
		}

		return $relAttr;
	}
}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/timtab/pi1/class.tx_timtab_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/timtab/pi1/class.tx_timtab_pi1.php']);
}

?>