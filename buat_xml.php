<?php
Header('Content-type: text/xml');
$connection = mysqli_connect("localhost", "root", "", "data_xml") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');
$sql = "select * from biodata ";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('biodata');
    $track->addChild('id', $row['id']);
    $track->addChild('nama', $row['nama']);
    $track->addChild('alamat', $row['alamat']);
    $track->addChild('kota', $row['kota']);
}

print($xml->asXML());
mysqli_close($connection);
?>