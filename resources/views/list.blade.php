<body>
<?php
// dd($files);
// print_r($files);
// foreach($files as $file){
//     echo $file . "<br>";
// }
?>

@foreach ($files as $file)
    <p>{{ $file }}</p>
@endforeach
    <!-- /* Use a Blade ForEach declarative to loop through the array and create downloadable links.*/
    /* */ -->


</body>
