<?php

$own_home = (!empty($_GET['own_home'])) ? $_GET['own_home'] : '';
$approx_shading_of_roof = (!empty($_GET['approx_shading_of_roof'])) ? $_GET['approx_shading_of_roof'] : '';
$average_monthly_electric_bill = (!empty($_GET['average_monthly_electric_bill'])) ? $_GET['average_monthly_electric_bill'] : '';
$name_electric_company = (!empty($_GET['name_electric_company'])) ? $_GET['name_electric_company'] : '';
$first_name = (!empty($_GET['first_name'])) ? $_GET['first_name'] : '';
$last_name = (!empty($_GET['last_name'])) ? $_GET['last_name'] : '';
$email_address = (!empty($_GET['email_address'])) ? $_GET['email_address'] : '';
$street_address = (!empty($_GET['street_address'])) ? $_GET['street_address'] : '';
$city = (!empty($_GET['city'])) ? $_GET['city'] : '';
$state = (!empty($_GET['state'])) ? $_GET['state'] : '';
$zipcode = (!empty($_GET['zipcode'])) ? $_GET['zipcode'] : '';
$phone = (!empty($_GET['phone'])) ? $_GET['phone'] : '';


$data = array('own_home' => $own_home, 
              'approx_shading_of_roof' => $approx_shading_of_roof, 
              'average_monthly_electric_bill' => $average_monthly_electric_bill, 
              'name_electric_company' => $name_electric_company, 
              'first_name' => $first_name, 
              'last_name' => $last_name, 
              'email_address' => $email_address, 
              'street_address' => $street_address, 
              'city' => $city, 
              'state' => $state, 
              'zipcode' => $zipcode, 
              'phone' => $phone  
);
$jsonEncodedData = json_encode($data);
$curl = curl_init();
$opts = array(
    CURLOPT_URL             => 'https://hooks.zapier.com/hooks/catch/6847465/ome2ixf/',
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_CUSTOMREQUEST   => 'POST',
    CURLOPT_POST            => 1,
    CURLOPT_POSTFIELDS      => $jsonEncodedData,
    CURLOPT_HTTPHEADER  => array('Content-Type: application/json','Content-Length: ' . strlen($jsonEncodedData))                                                                       
);
foreach ($opts as $key => $value) {
    curl_setopt($curl, $key, $value);
}
$results = curl_exec($curl);
echo $results;
curl_close($curl);

header("Location: /savewithsolar/start-now.php?success_stat=true&zipcode=".$zipcode); 

?>