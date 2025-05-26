foreach ($fileData as $row) {
if (count($row) !== 4 || empty($row[0]) || empty($row[1]) || empty($row[2]) || empty($row[3])) {
continue; // Skip invalid rows
}

Record::create([
'firstName' => $row[0],
'lastName' => $row[1],
'semester' => $row[2],
'course' => $row[3],
]);
}