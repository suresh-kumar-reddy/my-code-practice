<!DOCTYPE html>

<head>
	<title>Electricity Bill Calculator</title>
</head>
<body>
<?php
class electric
{
    public $units;

    function set_units($units)
    {
        $this->units=$units;
    }
    function calculate_bill() 
    {
        $unit_cost_first = 3.50;
        $unit_cost_second = 4.00;
        $unit_cost_third = 5.20;
        $unit_cost_fourth = 6.50;

        if($this->units <= 50) 
        {
            $bill = $this->units * $unit_cost_first;
        }
        else if($this->units > 50 && $this->units <= 100) 
        {
            $temp = 50 * $unit_cost_first;
            $remaining_units = $this->units - 50;
            $bill = $temp + ($remaining_units * $unit_cost_second);
        }
        else if($this->units > 100 && $this->units <= 200) 
        {
            $temp = (50 * 3.5) + (100 * $unit_cost_second);
            $remaining_units = $this->units - 150;
            $bill = $temp + ($remaining_units * $unit_cost_third);
        }
        else 
        {
            $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
            $remaining_units = $this->units - 250;
            $bill = $temp + ($remaining_units * $unit_cost_fourth);
        }
        return number_format((float)$bill, 2, '.', ''); 
    }

}
$u=new electric();
$u->set_units(34);
echo $u->calculate_bill();
?>
</body>
</html>