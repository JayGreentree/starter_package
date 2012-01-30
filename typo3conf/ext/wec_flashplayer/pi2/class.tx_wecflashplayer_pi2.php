<?php
/***************************************************************
* Copyright notice
*
* (c) 2006 Foundation for Evangelism
* All rights reserved
*
* This file is part of the Web-Empowered Church (WEC)
* (http://webempoweredchurch.org) ministry of the Foundation for Evangelism
* (http://evangelize.org). The WEC is developing TYPO3-based
* (http://typo3.org) free software for churches around the world. Our desire
* is to use the Internet to help offer new life through Jesus Christ. Please
* see http://WebEmpoweredChurch.org/Jesus.
*
* You can redistribute this file and/or modify it under the terms of the
* GNU General Public License as published by the Free Software Foundation;
* either version 2 of the License, or (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This file is distributed in the hope that it will be useful for ministry,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the file!
***************************************************************/

/** 
 * Audio player class for the 'wec_flashplayer' extension.
 * 
 * @author		Web-Empowered Church Team <flashplayer@webempoweredchurch.org>
 */

require_once(t3lib_extMgm::extPath('wec_flashplayer').'class.tx_wecflashplayer.php');

/** 
 * Audio player class for the 'wec_flashplayer' extension.
 * Class is a simple shell that extends parent class and calls all functions from it.
 *
 * @author		Web-Empowered Church Team <flashplayer@webempoweredchurch.org>
 * @package		TYPO3
 * @subpackage	tx_wecflashplayer
 */
class tx_wecflashplayer_pi2 extends tx_wecflashplayer {
	var $prefixId = "tx_wecflashplayer_pi2";		// Same as class name
	var $scriptRelPath = "pi2/class.tx_wecflashplayer_pi2.php";	// Path to this script relative to the extension dir.	
}



if (defined("TYPO3_MODE") && $TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/wec_flashplayer/pi2/class.tx_wecflashplayer_pi2.php"])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/wec_flashplayer/pi2/class.tx_wecflashplayer_pi2.php"]);
}

?>