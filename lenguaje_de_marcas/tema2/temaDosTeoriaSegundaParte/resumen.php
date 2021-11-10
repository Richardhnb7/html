<?php
/*segunda parte del tema de html;

1. imagenes-
    las imagenes estan vinculadas no incrustadas, mejoran el diseño, para 
    que no sea monotona.
    <img>; crea un espacio para esta, vacia que no hace falt de cerrarla pero 
    tiene atributos, src. especifica la ruta , alt: texto alternativo.
    se puede usar el style para especificar en ancho y la altura pero se pondra 
    con px
        <img src=”URL" alt=”texto alternativo" style="width:500px;height:600px;">
    el ancho y alto se puede poner sin el style,siendo atributos, definido en pixeles 
    recomendable utilizarlos con style, para las hojas de estilo
    tambien podemos uitilixar gif con esta etiqueta
    otra propidad es el float que se usa para que la imagen folte a la izquierda o derecha 
        el texto, especificando a su posicion
    De fondo para caso todos los elementos con: 
        background-image:URL("") dentro de un
        style, sila pagina es pequeña se repetira, pero sino quieres que se repiita seria con
        el background-repeat: no-repeat. 
        backgrrund-position: center(ppropedad para centrar la imagen no se estirara ). 
        background-size:cover; estrira la imagen, la centrara y la deja proporcional aunque 
        se recorte y la calidad disminuya. tambien se puede usar con porcentaje.

    <picture>: difrenetes opciones para mostrar una imagen, misma imagen con diferente tamaño o peso
        , poder elegir el tamaño de la imagen dependiendo de la resolucion( o del dispositivo), pero 
        solo una.
        <source media "(min-width:1150px)" srct="..."> 
        <source media "(min-width:1150px)" srct="..."> 
        
    para cambiar el color dela letra solo con color:white

2. tablas-

    tr: table rows: th:table header: td:table data
    Para evitar el borde doble y se vea como  un solo borde : border-collapse:collapse.
    Se ajustan al contenido, pero las puedes ajustar a tu manera, 
        <th style ="width:40%">nombre</th>
    pading inserta un relleno(espacio entre el borde y el contenido de la celda),(este y los
        margenes el resultado puede ser el mismo)

    selectores:
        Pàra aplicar un stylo a un numero de hijo  determinado seria
            tr:nth-child(numero de hijo);
            para las pares tr:nth-child(2n / even)
            para las impares tr:nth-child(2n+1 / odd)
            estilo o efecto cebra.
            mejor definirlo de manera externa o interna y no inline 
            si queremos expecificar, mejor usar idenficadores 
        
        colgroup:para diseñar un style para columnas especificas en una tabla 
            <coldgruop>
                <col span="2"> 



3.listas
    dos ul(listas desordenadas) y las ol(listas ordenadas), otro tipo dl "son de 
    tipo descripcion"
    propiedad-list-style-type: para cambiar el tipo del marcador 

    en las listas ordenadas con el tipe con difrentes letras te dara un marcador diferente

    propiedad star, indicar en que enumeracion empezar

4.propiedades y atributos

    div
        agrupar elementos que tienen algo en comun, con el mismo style o id
        Este genera espacio antes y despues

    span
        elemento de linea si queremeos darle un estilo concreto a varias 
        plaabras sin que se salte a la siguiente linea 
    
    atributo class
        especifica a una clase en concreto
        se define con un "."

    atributo id 
        sirbe para tener enlaces internos 

    elemento iframe
        para compartir, o tener videos de youtube, crea el marco en el que saldra
        tienes casi las mismas atributos que el img
        tambien sirve parra añadir otra pag web o cualquier elemento html

    elemento Head
         de tipo metadato contneido que se muestra en lapestaña de la pag, solo
         contiene texto 
         title
         style
         link(para enlazar ojas de estilo por ejemplo)
         meta(para especificar el conjuto de caracteres utilizado, no se muestra)
         viewport area visible del usuario de una pagina web
         script- para poder introducir javascritp
         base-

5- Layout
        
        

    

    
*/


?>