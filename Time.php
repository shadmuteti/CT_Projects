reated by PhpStorm.
 * User: internfour
 * Date: 5/26/15
 * Time: 7:18 PM
 */
class MyTime {
    private $hour, $minute, $second;


    public function __construct($hour = 0, $minute = 0, $second = 0) {
        $this->setTime($hour, $minute, $second);

           }


    public function __destruct() {
        echo 'Destructed instance ', $this, ' of ', __CLASS__, ".\n";
    }


    public function getHour()   { return $this->hour;   }

    public function getMinute() { return $this->minute; }

    public function getSecond() { return $this->second; }


    public function setHour($hour) {
        if ($hour < 0 or $hour > 23) {
            throw new InvalidArgumentException("Invalid hour $hour. Hour shall be 0-23.\n");
        }
        $this->hour = $hour;
    }

    public function setMinute($minute) {
        if ($minute < 0 or $minute > 59) {
            throw new InvalidArgumentException("Invalid minute $minute. Minute shall be 0-59.\n");
        }
        $this->minute = $minute;
    }

    public function setSecond($second) {
        if ($second < 0 or $second > 59) {
            throw new InvalidArgumentException("Invalid second $second. Second shall be 0-59.\n");
        }
        $this->second = $second;
    }


    public function setTime($hour = 0, $minute = 0, $second = 0) {
        $this->setHour($hour);
        $this->setMinute($minute);
        $this->setSecond($second);
    }


    public function __toString() {
        return sprintf("The time is: %02d:%02d:%02d", $this->hour, $this->minute, $this->second);
    }


    public function nextSecond() {
        ++$this->second;
        if ($this->second > 59) {
            $this->second = 0;
            ++$this->minute;
        }
        if ($this->minute > 59) {
            $this->minute = 0;
            ++$this->hour;
        }
        if ($this->hour > 23) {
            $this->hour = 0;
        }
        return $this;
    }
}
?>
