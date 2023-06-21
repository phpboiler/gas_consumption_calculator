<?php
    function gas_consumption_calculator($initial_reading, $final_reading, $heater_efficiency = 0.9, $conversion_factor = 11.16) {
        // Calculate the total gas consumption
        $gas_consumed = $final_reading - $initial_reading;
        
        // Calculate the heating power produced
        $heating_power = $gas_consumed * $heater_efficiency * $conversion_factor;
        
        return $heating_power;
    }
    
    // Sample usage
    $initial_reading = 500;
    $final_reading = 1000;
    $heater_efficiency = 0.9;
    $conversion_factor = 11.16;  // average energy content of natural gas in kWh/m^3

    echo "Heating power produced: " . gas_consumption_calculator($initial_reading, $final_reading, $heater_efficiency, $conversion_factor) . " kWh";
?>
