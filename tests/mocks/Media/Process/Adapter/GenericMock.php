<?php
/**
 * mm: the PHP media library
 *
 * Copyright (c) 2007-2013 David Persson
 *
 * Distributed under the terms of the MIT License.
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright  2007-2013 David Persson <nperson@gmx.de>
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link       http://github.com/davidpersson/mm
 */

require_once 'Media/Process/Adapter.php';

class Media_Process_Adapter_GenericMock extends Media_Process_Adapter {

	public $storeCopyFromStream;

	public function __construct($handle) {}

	public function store($handle) {
		if ($this->storeCopyFromStream) {
			stream_copy_to_stream($this->storeCopyFromStream, $handle);
		}
		return true;
	}

	public function convert($mimeType) {
		return true;
	}

	public function passthru($key, $value) {
		return true;
	}
}

?>