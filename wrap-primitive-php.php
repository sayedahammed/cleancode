<?php

class TimeLength {
    
    protected $seconds;
    
    public function __construct($seconds) {
        $this->seconds = $seconds;
    }
    
    public static function fromMinutes($minutes) {
        return new static($minutes * 60);
    }
    
    public static function fromHours($hours) {
        return new static($hours * 60 * 60);
    }
    
    public function inSeconds() {
        return $this->seconds;
    }
    
    public function inHours() {
        return $this->seconds / 60;
    }
    
}

$length = TimeLength::fromMinutes(1);
echo $length->inSeconds();
?>
