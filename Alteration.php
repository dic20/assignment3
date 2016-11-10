<?php
	// This is the file for the parent class

	class Alteration {

		protected $item;
		protected $alteration;

		public function __construct($i, $t) {
			$this->item = $i;
			$this->alteration = $t;
		}

		public function color_start($color) {
			echo "<" . $this->item . ' style="color: ' . $color . '";>' . $this->alteration . "</" . $this->item. ">";
		}
	}
	?>
