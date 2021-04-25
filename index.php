<h3>Biodata</h3>
<?php
$xml = new SimpleXMLElement('http://localhost/xml-187006095/data.xml', 0, true);

?>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kota</th>
        </tr>
    </thead>
    <tbody>

<?php foreach ($xml->data as $data) :?>
    <tr>
        <td><?php echo $data->id ?></td>
        <td><?php echo $data->nama ?></td>
        <td><?php echo $data->alamat ?></td>
        <td><?php echo $data->kota ?></td>
    </tr>
<?php endforeach; ?>
    </tbody>
</table>