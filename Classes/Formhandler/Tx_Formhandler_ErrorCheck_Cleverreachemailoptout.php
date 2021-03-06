<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Sven Wappler <typo3@wapplersystems.de>, WapplerSystems
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
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
 *
 * @author	Sven Wappler <typo3@wapplersystems.de>
 * @package	Tx_Formhandler
 * @subpackage	ErrorChecks
 */
class Tx_Formhandler_ErrorCheck_Cleverreachemailoptout extends Tx_Formhandler_ErrorCheck_Cleverreachemail {

	public function check() {
		$checkFailed = parent::check();
		if ($checkFailed != '') return $checkFailed;
		
		if (!$this->subscriber_found || !$this->subscriber_active) {
			// nicht im System oder inaktiv
			
			$checkFailed = $this->getCheckFailed();
		}
		
		return $checkFailed;
	}

}
?>