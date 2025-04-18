<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
<?php
    <!---Dashboard do Usuário-->
    <nav class="h-30 shadow bg-slate-900">

      <div class="flex pt-8">
          <h1 style="font-family: Agbalumo" class="text-slate-50 text-6xl justify-self-start w-100 sm:mr-20 md:mr-50 lg:mr-100 xl:mr-330 ">Bii-Bi Express</h1>
          <div class="size-14 rounded-full border border-slate-50 mr-6 justify-self-end"></div>
          <div class="size-14 rounded-full border border-slate-50 mr-4"></div>
      </div>

    </nav>

    <h3 style="font-family: Nunito" class="mt-10 text-4xl font-bold justify-self-center sm:text-xl,flex,pl-6 md:text-2xl xl:text-4xl">Empresas parceiras</h3>

    <div class="flex justify-items-center gap-6 pt-12 justify-items-center pt-12">
      <div class="border size-10 rounded-xl shadow-xl bg-gray-100 sm:w-20 md:w-30 lg:w-50 xl:w-100  sm:h-20 md:h-30 lg:h-50 xl:h-100"></div>

      <div class="border size-10 rounded-xl shadow-xl bg-gray-100 sm:w-20 md:w-30 lg:w-50 xl:w-100  sm:h-20 md:h-30 lg:h-50 xl:h-100"></div>

      <div class="border size-10 rounded-xl shadow-xl bg-gray-100 sm:w-20 md:w-30 lg:w-50 xl:w-100  sm:h-20 md:h-30 lg:h-50 xl:h-100"></div>
    </div>

    <h3 style="font-family: Nunito" class="mt-10 text-4xl font-bold justify-self-center sm:text-xl,flex,pl-6 md:text-2xl xl:text-4xl">Entregadores</h3>

    <div class="w-190 h-34 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
      <div class="flex gap-2">
        <div class="size-11 ml-3 mt-2 border rounded-full"></div>
        <h4 style="font-family: Nunito" class="font-bold flex my-3 text-2xl">Marcus Pierre</h4>
      </div>
        <p style="font-family: Nunito" class="text-gray-200 text-sm ml-3 w-164">Me chamo Marcus Pierre e sou entregador da empresa Amazon, levo qualquer entrega que queira e solicitar para buscar</p>

      <div class="flex">
        <h3 style="font-family: Nunito" class="font-bold flex ml-3 mt-2">Empresa: <span class="text-gray-200">Amazon</span></h3>
        
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm font-bold border justify-self-end cursor-pointer mr-3 p-1 rounded-sm">Ver mais</button>
      </div>
    </div>

    <div class="w-190 h-34 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
      <div class="flex gap-2">
        <div class="size-11 ml-3 mt-2 border rounded-full"></div>
        <h4 style="font-family: Nunito" class="font-bold flex my-3 text-2xl">Ângela Maia</h4>
      </div>
        <p style="font-family: Nunito" class="text-gray-200 text-sm ml-3 w-164">Me chamo Ângela Maia e sou entregadora autônoma, levo qualquer entrega que queira e solicitar para buscar</p>

      <div class="flex">
        <h3 style="font-family: Nunito" class="font-bold flex ml-3 mt-2">Empresa: <span class="text-gray-200">Sem Empresa</span></h3>
        
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm font-bold border justify-self-end cursor-pointer mr-3 p-1 rounded-sm">Ver mais</button>
      </div>
    </div>

    <div class="w-190 h-34 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
      <div class="flex gap-2">
        <div class="size-11 ml-3 mt-2 border rounded-full"></div>
        <h4 style="font-family: Nunito" class="font-bold flex my-3 text-2xl">Lucas Mourais</h4>
      </div>
        <p style="font-family: Nunito" class="text-gray-200 text-sm ml-3 w-164">Me chamo Lucas Mourais e sou entregador da Shopee, levo qualquer entrega que queira e solicitar para buscar</p>

      <div class="flex">
        <h3 style="font-family: Nunito" class="font-bold flex ml-3 mt-2">Empresa: <span class="text-gray-200">Shopee</span></h3>
        
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm font-bold border justify-self-end cursor-pointer mr-3 p-1 rounded-sm">Ver mais</button>
      </div>
    </div>

    <div class="w-190 h-34 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
      <div class="flex gap-2">
        <div class="size-11 ml-3 mt-2 border rounded-full"></div>
        <h4 style="font-family: Nunito" class="font-bold flex my-3 text-2xl">Tiago Lima</h4>
      </div>
        <p style="font-family: Nunito" class="text-gray-200 text-sm ml-3 w-164">Me chamo Tiago Lima, me chame e irei buscar seu pedido</p>

      <div class="flex mt-4">
        <h3 style="font-family: Nunito" class="font-bold flex ml-3 mt-2">Empresa: <span class="text-gray-200">Sem Empresa</span></h3>
        
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm font-bold border justify-self-end cursor-pointer mr-3 p-1 rounded-sm">Ver mais</button>
    </div>

    <div class="w-190 h-34 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
      <div class="flex gap-2">
        <div class="size-11 ml-3 mt-2 border rounded-full"></div>
        <h4 style="font-family: Nunito" class="font-bold flex my-3 text-2xl">Ana Gabriela</h4>
      </div>
        <p style="font-family: Nunito" class="text-gray-200 text-sm ml-3 w-164">Me chamo Ana Gabriela, levo qualquer entrega que queira e solicitar para buscar</p>

      <div class="flex mt-4">
        <h3 style="font-family: Nunito" class="font-bold flex ml-3 mt-2">Empresa: <span class="text-gray-200">Sem Empresa</span></h3>
        
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm font-bold border justify-self-end cursor-pointer mr-3 p-1 rounded-sm">Ver mais</button>
      </div>
      </div>
    </div>
?>
</body>
</html>
    
