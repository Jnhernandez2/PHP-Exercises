<?php



function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    // $handle = fopen($filename, 'r');
    // $contents = fread($handle, filesize($filename));

    $contents = file_get_contents($filename);

    $contacts = explode("\n", trim($contents));
    // for ($i = 0; $i < count($contacts); $i++) {
    // 	$contactInfo = explode('|', $contacts[$i]);
    // }

	$contactInfo = [];
    foreach ($contacts as $contact) {
    	$contact = explode('|', $contact);
    	$contact[1] = substr($contact[1], 0, 3) . '-' . substr($contact[1], 3, 3) . '-' . substr($contact[1], 6);
    	$contactInfo[] = ['name' => $contact[0], 'number' => $contact[1]];
    }

	//array_push($contacts, $contactInfo);
	
    return $contactInfo;
}

var_dump(parseContacts('contacts.txt'));
