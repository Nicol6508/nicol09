<?php
// Crear una imagen de 300x200 píxeles
$image = imagecreate(300, 200);

// Definir colores
$blue = imagecolorallocate($image, 0, 0, 255);    // Azul
$red = imagecolorallocate($image, 255, 0, 0);     // Rojo
$white = imagecolorallocate($image, 255, 255, 255); // Blanco

// Rellenar fondo
imagefill($image, 0, 0, $blue);

// Agregar texto
imagestring($image, 5, 100, 90, 'Mi Imagen', $white);
imagestring($image, 3, 80, 110, 'Ejemplo Local', $white);

// Guardar como JPEG
imagejpeg($image, 'mi-imagem.jpg', 90);

// Liberar memoria
imagedestroy($image);

echo "Imagen creada exitosamente: mi-imagem.jpg";
?>