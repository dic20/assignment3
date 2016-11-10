<?php
	// this file will extend PArentClass.php

	class Text extends Alteration {
		private $text;
		public $oject;
		public $clone_object;

		public function __construct($t) {
			$this->text=$t;
			Alteration::__construct("p", $this->text);
		}

		public function size($s) {
			echo "<p style='font-size: " . $s . "';>" . $this->text . "</p>";
		}

		public function __clone() {
			$this->object = clone $this->clone_object;
		}
	}
?>
