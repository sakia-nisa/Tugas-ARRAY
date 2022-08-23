<?php
$belajarngoding = ['Sakia','Silviya','Bulan','Sefi','indah','Fika','Nanik'];
foreach($belajarngoding as $data){
 echo $data. ',';
}
echo "<pre>";
var_dump($belajarngoding);
echo "</pre>";
$mahasiswa = [
 'nama' => 'Sakia',
 'alamat' => 'WringinJajar',
 'tanggal_lahir' => '7 Desember 2004',
 'umur' => 17
];
foreach($mahasiswa as $v => $k){
 echo $v.':'.$k .'<br/>';
}
$arraymultidimensi = [
 [2,3,5],
 [7,6,10],
 [5,7,8],
];
echo "<pre>";
var_dump($arraymultidimensi);
echo "</pre>";
$mahasiswas = [
 [
    'nama' => 'Sakia',
    'alamat' => 'WringinJajar',
    'tanggal_lahir' => '7 Desember 2004',
    'umur' => 17
 ],
 [
 'nama' => 'Silviya',
 'alamat' => 'Onggorawe',
 'tanggal_lahir' =>'12 Januari 2004',
 'umur' => 18,
 ],
];
foreach($mahasiswas as $mahasiswa){
 echo "Nama: ".$mahasiswa['nama']."<br/>";
 echo "Alamat: ".$mahasiswa['alamat']."<br/>";
 echo "Tanggal Lahir: ".$mahasiswa['tanggal_lahir']."<br/>";
 echo "Umur: ".$mahasiswa['umur']."<br/>";
}
?>
<table border="1">
 <tr>
 <td>No</td>
 <td>Nama</td>
 <td>Alamat</td>
 <td>Tanggal Lahir</td>
 <td>Umur</td>
 </tr>
<?php
$no = 1;
foreach($mahasiswas as $mahasiswa){
 echo "<tr>";
 echo "<td>".$no."</td>
 <td>".$mahasiswa['nama']."</td>
 <td>".$mahasiswa['alamat']."</td>
 <td>".$mahasiswa['tanggal_lahir']."</td>
 <td>".$mahasiswa['umur']."</td>";
 echo "</tr>";
 $no++;
}