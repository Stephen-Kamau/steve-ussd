<?php
// this is a starter in ussd development


// get the session id
$sessionId = $_POST['sessionId'];
// get tge service code
$serviceCode = $_POST['serviceCode'];

// get the inpute of the user
$text  = $_POST['text'];




#What will be shown on the screen first
#this is implimented using if statements
#its a booking system using ussd

if ($text == '1'){
    $response = 'CON Hi Welcome to our booking system app\n';

    $response .= '1. Enter 1 to continue';
}

else if ($text ==  1){
    $response = 'CON Pick your option for booking below';
    $response .= '1. Two bedroom';
    $response .= '2. Single room';
    $response .= '3. Bed sitter';
}
#else more than two string were put
#a string is separated by *
#for those who selects 1
else if($text == '1*1'){
    $response = 'CON You are about to book two bedroom rooms';
    $response .= 'Enter 1 to continue';
}
#else three strings were entered
else if ($text == '1*1*1'){
    $response = 'CON 2bedroom costs KSHS. 5000';
    $response .= 'Enter 1 to confirm';
    $response .= 'Enter 0 to exit';
}
#esle if it was 4 strinfs

else if($text == '1*1*1*1'){
    $response = 'END You have successfully booked two bedroom house\n at kshs. 5000 Thank you for your support.';
}


else if($text == '1*1*1*0'){
    $response ='END You have canceled booking for two bedrooms';
}


#menu for 2 selectors
else if($text == '1*2'){
    $response = 'CON You are about to book siingle room';
    $response .='Enter 1 to continue';
}
else if($text == '1*2*1'){
    $response = 'CON single room costs KSHS. 2000';
    $response .= 'Enter 1 to confirm';
    $response .= 'Enter 0 to exit';
}
else if($text == 1*2*1*1){
    $response = 'END You have booked successfully Singele room \n Amounting to kshs.2000\nThank you for yoiur support';
}
else if($text == '1*2*1*0'){
    $response ='END You have canceled booking for single room';
}
#menu for 3 selectors
else if($text == '1*3'){
    $response = 'CON You are about to book a bedsiiter room';
    $response .='Enter 1 to continue';
}
else if($text == '1*3*1'){
    $response = 'CON bedsitter costs KSHS. 3000';
    $response .= 'Enter 1 to confirm';
    $response .= 'Enter 0 to exit';
}
else if($text == 1*3*1*1){
    $response = 'END You have booked successfully Bed siiter room \n Amounting to kshs.3000\nThank you for yoiur support';
}
else if($text == '1*2*1*0'){
    $response ='END You have canceled booking for Bed siiter room';
}
?>