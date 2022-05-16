<?php
class Player {
    public int $case;
    public string $name;
    public bool $play;

    public function __construct(string $name) {
        $this -> case = 0;
        $this -> name = $name;
        $this -> play = true;
    }
}
?>
