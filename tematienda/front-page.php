<?php get_header(); ?>

<main>
<figure class="bg-gray-100 rounded-xl">
<p class="text-5xl md:flex hero container max-w-screen-lg mx-auto pb-10 flex justify-center">Descripción Personal</p><br>
    <div class="flex items-center space-x-10 md:flex hero container max-w-screen-lg mx-auto pb-10 flex justify-center">
        <div class="w-4/12 md:flex">
            <img class="rounded-full md:flex" src="<?php echo get_template_directory_uri(  ) ?>/assets/img/gabriel.jpg" style="width:200px;heigth: 100px">
        </div>
        <div class="w-6/12 md:flex">
            <p>Mi nombre es Gabriel Alejandro Fierro Mora, naci el 22 de septiembre del 2000, tengo 20 años, soy estudiante del Istituto Tecnologico Quito en la carrera de Analisis de Sistemas.</p>
        </div>
    </div>
</figure>
    <br>
    <p class="text-3xl md:flex hero container max-w-screen-lg mx-auto pb-10 flex justify-center">lenguajes de Programacion que conozco</p><br>
    <img class="rounded-full md:flex hero container max-w-screen-lg mx-auto pb-10 flex justify-center" src="<?php echo get_template_directory_uri(  ) ?>/assets/img/java.jpg" style="width:200px;heigth: 100px">  
    <img class="rounded-full md:flex hero container max-w-screen-lg mx-auto pb-10 flex justify-center" src="<?php echo get_template_directory_uri(  ) ?>/assets/img/php.png" style="width:200px;heigth: 100px">  
    <img class="rounded-full md:flex hero container max-w-screen-lg mx-auto pb-10 flex justify-center" src="<?php echo get_template_directory_uri(  ) ?>/assets/img/vBasic.png" style="width:200px;heigth: 100px"> 
</main>
<?php get_footer(); ?>