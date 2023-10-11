

    // Arreglo de URLs de imágenes que deseas mostrar
    var imagenes = ["https://images.gog-statics.com/c71ee717cfe721e9dfb51f3689b9341d4e481087c60cbc0cdcef451d239af80c_product_card_v2_mobile_slider_639.jpg", "https://m.media-amazon.com/images/I/51Z6BKBEK5L.jpg"];
    var indiceActual = 0;

    // Función para cambiar la imagen
    function cambiarImagen() {
        // Obtiene el elemento de imagen por su ID
        var img = document.getElementById("EDMW");

        // Cambia la URL de la imagen
        img.src = imagenes[indiceActual];

        // Incrementa el índice para apuntar a la siguiente imagen en el arreglo
        indiceActual = (indiceActual + 1) % imagenes.length;
    }

    // Llama a la función cambiarImagen cada 5 segundos (5000 milisegundos)
    setInterval(cambiarImagen, 3000);
