<?php
class De() {
    public function de(int $case) {
        int $de_value;
        $de_value = rand(1,6);
        $case = $case + $de_value;
        return $case;
    }
}
?>
