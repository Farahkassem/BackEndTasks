<!DOCTYPE html>
<html>
<body>
  
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Enter number 1" required><br><br>
        <input type="number" name="num2" placeholder="Enter number 2" required><br><br>
        <select name="operator">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
        </select><br><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
   
    class Calculator
    {
        private $num1;
        private $num2;
        private $operator;

        public function __construct($num1, $num2, $operator)
        {
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->operator = $operator;
        }

        public function calculate()
        {
            switch ($this->operator) {
                case 'add':
                    $result = $this->num1 + $this->num2;
                    return $result;
                case 'subtract':
                    $result = $this->num1 - $this->num2;
                    return $result;
                case 'multiply':
                    $result = $this->num1 * $this->num2;
                    return $result;
                default:
                    return "Invalid operator";
            }
        }
    }

    
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

       
        $calculator = new Calculator($num1, $num2, $operator);
        $result = $calculator->calculate();
        echo "Result: " . $result;
    }
    ?>
</body>
</html>
