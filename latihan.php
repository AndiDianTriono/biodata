<?php
$employeeData = '{   
	"nim": 1234567,    
	"nama": "Jeff Fox",    
	"phone": "08979230805",    
	"location": "Kaliwungu Kendal",
	"makul": "M1","M2","M3"
}';
$obj = json_decode($employeeData);
echo $obj->{'name'};
?>