<?php

$contents = file_get_contents('contacts.txt');

function parseContacts($contents)
{
    

    // todo - read file and parse contacts
    // $handle = fopen($filename, 'r');
    // $contents = fread($handle, filesize($filename));
    //fclose($filename);
    $contacts = [];
    $contacts = explode("\n", trim($contents));

	$contactInfo = [];
    foreach ($contacts as $contact) {
    	$contact = explode('|', $contact);
    	$contact[1] = substr($contact[1], 0, 3) . '-' . substr($contact[1], 3, 3) . '-' . substr($contact[1], 6);
    	$contactInfo[] = ['name' => $contact[0], 'number' => $contact[1]];
    }
	
    return $contactInfo;
}

$contactInfo = parseContacts($contents);


function formatContacts($contactInfo) {
    $table = str_pad('NAME', 20, " ", STR_PAD_RIGHT);
    $table .= '|';
    $table .= str_pad('NUMBER', 15, " ", STR_PAD_LEFT);
    $table .= ' |' . PHP_EOL;
    $table .= '---------------------------------------' . PHP_EOL;
    foreach ($contactInfo as $contact) {
        $table .= str_pad($contact['name'], 20, " ", STR_PAD_RIGHT);
        $table .= '|';
        $table .= str_pad($contact['number'], 15, " ", STR_PAD_LEFT);
        $table .= ' |' . PHP_EOL;
    }

    return $table;
}

$table = formatContacts($contactInfo);

function addContacts($filename, $name, $number) {
   $appendedContacts = file_put_contents($filename, $name . '|' . $number, FILE_APPEND);
   return $appendedContacts;
}


function searchByName($contactInfo, $name) {
    foreach ($contactInfo as $contact) {
        if (strpos($contact['name'], $name) !== false) {
            $result = str_pad('NAME', 20, " ", STR_PAD_RIGHT);
            $result .= '|';
            $result .= str_pad('NUMBER', 15, " ", STR_PAD_LEFT);
            $result .= ' |' . PHP_EOL;
            $result .= '---------------------------------------' . PHP_EOL;
            $result .= str_pad($contact['name'], 20, " ", STR_PAD_RIGHT);
            $result .= '|';
            $result .= str_pad($contact['number'], 15, " ", STR_PAD_LEFT);
            $result .= ' |' . PHP_EOL;

            return $result;
        }
    }


}


do {
    echo "--MAIN MENU--\n";
    echo "1. View contacts.\n";
    echo "2. Add a new contact.\n";
    echo "3. Search a contact.\n";
    echo "4. Delete an existing contact.\n";
    echo "5. Exit.\n";
    echo "Enter an option (1, 2, 3, 4, or 5): ";  
    $userInput = trim(fgets(STDIN));
    switch ($userInput) {
        case 1:
            optionOne($userInput, $contactInfo);
            break;
        case 2:
            optionTwo($userInput, $contactInfo);
            break;
        case 3:
            optionThree($userInput, $contactInfo);
            break;
        case 4:
            optionFour($userInput);
            break;
    }
} while ($userInput != 5);

function optionOne($userInput, $contactInfo) {
   if (is_numeric($userInput)) {
        if ($userInput == 1) {
            print_r(formatContacts($contactInfo));
        }
    } 
}

function optionTwo($userInput, $contactInfo) {
    if (is_numeric($userInput)) {
        if ($userInput == 2) {
            echo 'Please enter a name: ';
            $name = trim(fgets(STDIN));
            echo 'Please enter a 10 digit phone number. ONLY NUMBERS: ';
            $number = trim(fgets(STDIN));
            if (is_numeric($number)) {
                if (strlen($number == 10)) {
                    $filename = 'contacts.txt';
                    print_r(addContacts($filename, $name, $number));
                    print_r(formatContacts($contactInfo));
                }
            }
        }
    }
}


function optionThree($userInput, $contactInfo) {
    if (is_numeric($userInput)) {
        if ($userInput == 3) {
            echo 'Please enter a name: ';
            $name = trim(fgets(STDIN));
            print_r(searchByName($contactInfo, $name));
        }
    }
}

function optionFive($userInput) {
    if (is_numeric($userInput)) {
        if ($userInput == 5) {
            exit();
        } 
    }
}



