<?php

    $QueryState = $_GET['state'];
    $QueryCity = str_replace(' ', '_', $_GET['city']);

    $string = file_get_contents("http://api.wunderground.com/api/_YOUR_API_KEY_GOES_HERE_/conditions/q/" . $QueryState . "/" . $QueryCity . ".json");
    $json_a = json_decode($string,true);


    // <---------- Current Conditions ----------> //
        //Display Location
        $location_full = $json_a['current_observation']['display_location']['full'];
        $location_city = $json_a['current_observation']['display_location']['city'];
        $location_state = $json_a['current_observation']['display_location']['state'];
        $location_state_name = $json_a['current_observation']['display_location']['state_name'];
        $location_country = $json_a['current_observation']['display_location']['country'];
        $location_zip = $json_a['current_observation']['display_location']['zip'];
        $location_latitude = $json_a['current_observation']['display_location']['latitude'];
        $location_longitude = $json_a['current_observation']['display_location']['longitude'];
        $location_elevation = $json_a['current_observation']['display_location']['elevation'];
    
        //Observation Location
        $observation_location_full = $json_a['current_observation']['observation_location']['full'];
        $observation_location_city = $json_a['current_observation']['observation_location']['city'];
        $observation_location_state = $json_a['current_observation']['observation_location']['state'];
        $observation_location_country = $json_a['current_observation']['observation_location']['country'];
        $observation_location_latitude = $json_a['current_observation']['observation_location']['latitude'];
        $observation_location_longitude = $json_a['current_observation']['observation_location']['longitude'];
        $observation_location_elevation = $json_a['current_observation']['observation_location']['elevation'];
    
        //Station Data
        $current_station_id = $json_a['current_observation']['station_id'];
        $current_observation_time = $json_a['current_observation']['observation_time'];
        $current_observation_time = $json_a['current_observation']['observation_time'];
    
        //Weather Data
        $weather = $json_a['current_observation']['weather'];
        $weather_temperature_string = $json_a['current_observation']['temperature_string'];
        $weather_temp_f = $json_a['current_observation']['temp_f'];
        $weather_temp_c = $json_a['current_observation']['temp_c'];
        $weather_relative_humidity = $json_a['current_observation']['relative_humidity'];
        $weather_wind_string = $json_a['current_observation']['wind_string'];
        $weather_wind_dir = $json_a['current_observation']['wind_dir'];
        $weather_wind_degrees = $json_a['current_observation']['wind_degrees'];
        $weather_wind_mph = $json_a['current_observation']['wind_mph'];
        $weather_wind_gust_mph = $json_a['current_observation']['wind_gust_mph'];
        $weather_wind_kph = $json_a['current_observation']['wind_kph'];
        $weather_wind_gust_kph = $json_a['current_observation']['wind_gust_kph'];
        $weather_pressure_mb = $json_a['current_observation']['pressure_mb'];
        $weather_pressure_in = $json_a['current_observation']['pressure_in'];
        $weather_pressure_trend = $json_a['current_observation']['pressure_trend'];
        $weather_dewpoint_string = $json_a['current_observation']['dewpoint_string'];
        $weather_dewpoint_f = $json_a['current_observation']['dewpoint_f'];
        $weather_dewpoint_c = $json_a['current_observation']['dewpoint_c'];
        $weather_heat_index_string = $json_a['current_observation']['heat_index_string'];
        $weather_heat_index_f = $json_a['current_observation']['heat_index_f'];
        $weather_heat_index_c = $json_a['current_observation']['heat_index_c'];
        $weather_windchill_string = $json_a['current_observation']['windchill_string'];
        $weather_windchill_f = $json_a['current_observation']['windchill_f'];
        $weather_windchill_c = $json_a['current_observation']['windchill_c'];
        $weather_feelslike_string = $json_a['current_observation']['feelslike_string'];
        $weather_feelslike_f = $json_a['current_observation']['feelslike_f'];
        $weather_feelslike_c = $json_a['current_observation']['feelslike_c'];
        $weather_visibility_mi = $json_a['current_observation']['visibility_mi'];
        $weather_visibility_km = $json_a['current_observation']['visibility_km'];
        $weather_solarradiation = $json_a['current_observation']['solarradiation'];
        $weather_UV = $json_a['current_observation']['UV'];
        $weather_precip_1hr_string = $json_a['current_observation']['precip_1hr_string'];
        $weather_precip_1hr_in = $json_a['current_observation']['precip_1hr_in'];
        $weather_precip_1hr_metric = $json_a['current_observation']['precip_1hr_metric'];
        $weather_precip_today_string = $json_a['current_observation']['precip_today_string'];
        $weather_precip_today_in = $json_a['current_observation']['precip_today_in'];
        $weather_precip_today_metric = $json_a['current_observation']['precip_today_metric'];
        $weather_icon = $json_a['current_observation']['icon'];
        $weather_icon_url = $json_a['current_observation']['icon_url'];
    // <---------- End Current Conditions ----------> //
