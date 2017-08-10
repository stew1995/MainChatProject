<?php
/**
 * Created by IntelliJ IDEA.
 * User: Stewart
 * Date: 09/08/2017
 * Time: 21:31
 */
require 'database.php';

//XML File
$doc = domxml_newdoc("1.0");
$node = $doc->create_element("marker");
$parnode = $doc->append_child($node);

$query = "SELECT * FROM marker WHERE 1";
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}
header("Content-type: text/xml");

//Go through the rows adding each to an XML file
while ($row = @mysqli_fetch_assoc($result)) {
    // Add to XML document node
    $node = $doc->create_element("marker");
    $newnode = $parnode->append_child($node);

    $newnode->set_attribute("id", $row['id']);
    $newnode->set_attribute("name", $row['name']);
    $newnode->set_attribute("address", $row['address']);
    $newnode->set_attribute("lat", $row['lat']);
    $newnode->set_attribute("lng", $row['lng']);
    $newnode->set_attribute("type", $row['type']);
}

$xmlfile = $doc->dump_mem();
echo $xmlfile;