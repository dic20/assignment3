<?php
	// This is the file for the parent class

	class Alteration {

		protected $item;
		protected $alteration;

		public function __construct($i, $t) {
			$this->item = $i;
			$this->alteration = $t;
		}

		public function __destruct() {}

		public function color_start($color) {
			echo "<" . $this->item . ' style="color: ' . $color . '";>' . $this->alteration . "</" . $this->item. ">";
		}

		public function add_more_content($content, $class) {
			echo "<div class=" . $class . ">" . $content . "</div>";
		}
	}
?>
