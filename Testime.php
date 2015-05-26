reated by PhpStorm.
 * User: internfour
 * Date: 5/26/15
 * Time: 7:19 PM
 */
require_once 'Time.php';


$t1 = new MyTime(23, 59, 59);


echo "The time as instantiated by object t1 is: $t1\n";
echo "The Hour is: {$t1->getHour()}\n";

$t1->setHour(12);//set hour via the setter method and call the toString() method. The values for minutes and seconds remains.
echo "$t1\n";

// Increment 3 second and invoke __toString()
echo $t1->nextSecond()->nextSecond()->nextSecond(), "\n";



// Exception handling with try-catch
try {
    $t2 = new MyTime(25);
    echo "\n";
} catch (InvalidArgumentException $e) {
    echo 'Caught InvalidArgumentException: ', $e->getMessage(), "\n";
}

echo "Done.\n";
// Run the destructor before deallocating the instances at end of file.
?>
