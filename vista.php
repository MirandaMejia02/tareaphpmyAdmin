<html>
<body>
    <?php
     //if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        
        // Mostrar los valores recuperados
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellidos: $apellidos</p>";   
   

    $folder_path = '../vista/imagenes/'; 
    $num_files = glob($folder_path . "*.{JPG,jpeg,gif,png,bmp}", GLOB_BRACE);
    $folder = opendir($folder_path); 
   
    if($num_files > 0){
        while(false !== ($file = readdir($folder)))  {
         $file_path = $folder_path.$file;
         $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
         if($extension=='jpeg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') {
          ?>
           <img class="tfoto" src="<?php echo $file_path; ?>" alt="Imagen de ejemplo" title="Imagen de ejemplo">
            <?php
            
         }}}             
       
       closedir($folder);
       ?> 
         

</body>

</html>
