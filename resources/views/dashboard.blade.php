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

      <h1 style="font-family: Agbalumo" class="text-slate-50 text-center flex pt-6 pl-6 text-6xl sm:text-2xl md:text-3xl xl:text-6xl">Bii-bi Express</h1>

      <div class="w-10 h-10 rounded-full border justify-self-end flex mr-6"></div>
      <div class="w-10 h-10 rounded-full border justify-self-end flex mr-12"></div>

    </nav>

    <h3 style="font-family: Nunito" class="mt-10 text-4xl font-bold justify-self-center sm:text-xl,flex,pl-6 md:text-2xl xl:text-4xl">Empresas parceiras</h3>

    <div class="grid grid-col-3 justify-items-center pt-14 justify-items-center pt-12">
      <div class="border w-120 h-75 col-span-1 col-start-1 rounded-xl shadow-xl bg-gray-100 sm:w-60,h-40 md:w-85,h-57 xl:w-120,h-75"></div>
      <div class="border w-120 h-75 col-span-1 col-start-2 rounded-xl shadow-xl bg-gray-100 sm:w-60,h-40 md:w-85,h-57 xl:w-120,h-75"></div>
      <div class="border w-120 h-75 col-span-1 col-start-3 rounded-xl shadow-xl bg-gray-100 sm:w-60,h-40 md:w-85,h-57 xl:w-120,h-75"></div>
    </div>

    <h3 style="font-family: Nunito" class="mt-10 text-4xl font-bold justify-self-center sm:text-xl,flex,pl-6 md:text-2xl xl:text-4xl">Entregadores</h3>

    <div class="w-190 h-28 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
        <div class="w-8 h-8 border rounded-full">user</div>
        <h4 style="font-family: Nunito" class="font-bold flex">nome do user</h4>
        <p style="font-family: Nunito" class="text-gray-100">comentário</p>
        <h3 style="font-family: Nunito" class="font-bold flex">Empresa: Amazon</h3>
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm border justify-self-end cursor-pointer">Ver mais</button>
    </div>

    <div class="w-190 h-28 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-8">
        <div class="w-8 h-8 border rounded-full">user</div>
        <h4 style="font-family: Nunito" class="font-bold flex">nome do user</h4>
        <p style="font-family: Nunito" class="text-gray-100">comentário</p>
        <h3 style="font-family: Nunito" class="font-bold flex">Empresa: Mercado livre</h3>
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm border justify-self-end cursor-pointer">Ver mais</button>
    </div>

    <div class="w-190 h-28 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-8">
        <div class="w-8 h-8 border rounded-full">user</div>
        <h4 style="font-family: Nunito" class="font-bold flex">nome do user</h4>
        <p style="font-family: Nunito" class="text-gray-100">comentário</p>
        <h3 style="font-family: Nunito" class="font-bold flex">Empresa: Correios</h3>
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm border justify-self-end cursor-pointer">Ver mais</button>
    </div>


    <!---Dashboard do Entregador-->
    <nav class="h-30 shadow bg-slate-900 mt-30">

      <h1 style="font-family: Agbalumo" class="text-slate-50 text-center flex pt-6 pl-6 text-6xl sm:text-2xl md:text-3xl xl:text-6xl">Bii-bi Express</h1>

      <div class="w-10 h-10 rounded-full border justify-self-end flex mr-6"></div>
      <div class="w-10 h-10 rounded-full border justify-self-end flex mr-12"></div>

    </nav>

    <h3 style="font-family: Nunito" class="mt-10 text-4xl font-bold justify-self-center sm:text-xl,flex,pl-6 md:text-2xl xl:text-4xl">Empresas parceiras</h3>

    <div class="grid grid-col-3 justify-items-center pt-14 justify-items-center pt-12">
      <div class="border w-120 h-75 col-span-1 col-start-1 rounded-xl shadow-xl bg-gray-100 sm:w-60,h-40 md:w-85,h-57 xl:w-120,h-75"></div>
      <div class="border w-120 h-75 col-span-1 col-start-2 rounded-xl shadow-xl bg-gray-100 sm:w-60,h-40 md:w-85,h-57 xl:w-120,h-75"></div>
      <div class="border w-120 h-75 col-span-1 col-start-3 rounded-xl shadow-xl bg-gray-100 sm:w-60,h-40 md:w-85,h-57 xl:w-120,h-75"></div>
    </div>

    <h3 style="font-family: Nunito" class="mt-10 text-4xl font-bold justify-self-center sm:text-xl,flex,pl-6 md:text-2xl xl:text-4xl">Pedidos</h3>

    <div class="w-190 h-28 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
        <div class="w-8 h-8 border rounded-full">user</div>
        <h4 style="font-family: Nunito" class="font-bold flex">nome do user</h4>
        <p style="font-family: Nunito" class="font-bold flex">comentário</p>
        <p style="font-family: Nunito" class="font-bold flex">Tamanho:</p>
        <p style="font-family: Nunito" class="font-bold flex">Frágil:</p>
        <p style="font-family: Nunito" class="font-bold flex">Distância:</p>
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm border justify-self-end cursor-pointer">Ver mais</button>
    </div>

    <div class="w-190 h-28 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
        <div class="w-8 h-8 border rounded-full">user</div>
        <h4 style="font-family: Nunito" class="font-bold flex">nome do user</h4>
        <p style="font-family: Nunito" class="font-bold flex">comentário</p>
        <p style="font-family: Nunito" class="font-bold flex">Tamanho:</p>
        <p style="font-family: Nunito" class="font-bold flex">Frágil:</p>
        <p style="font-family: Nunito" class="font-bold flex">Distância:</p>
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm border justify-self-end cursor-pointer">Ver mais</button>
    </div>

    <div class="w-190 h-28 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
        <div class="w-8 h-8 border rounded-full">user</div>
        <h4 style="font-family: Nunito" class="font-bold flex">nome do user</h4>
        <p style="font-family: Nunito" class="font-bold flex">comentário</p>
        <p style="font-family: Nunito" class="font-bold flex">Tamanho:</p>
        <p style="font-family: Nunito" class="font-bold flex">Frágil:</p>
        <p style="font-family: Nunito" class="font-bold flex">Distância:</p>
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm border justify-self-end cursor-pointer">Ver mais</button>
    </div>


    <!---Dashboard da Empresa-->
    <nav class="h-30 shadow bg-slate-900 mt-30">

      <h1 style="font-family: Agbalumo" class="text-slate-50 text-center flex pt-6 pl-6 text-6xl sm:text-2xl md:text-3xl xl:text-6xl">Bii-bi Express</h1>

      <div class="w-10 h-10 rounded-full border justify-self-end flex mr-6"></div>
      <div class="w-10 h-10 rounded-full border justify-self-end flex mr-12"></div>

    </nav>

    <h3 style="font-family: Nunito" class="mt-10 text-4xl font-bold justify-self-center sm:text-xl,flex,pl-6 md:text-2xl xl:text-4xl">Estatísticas</h3>

    <div class="grid grid-col-3 justify-items-center pt-14 justify-items-center pt-12">
      <div style="font-family: Nunito" class="border w-120 h-75 col-span-1 col-start-1 rounded-xl shadow-xl bg-gray-100 sm:w-60,h-40 md:w-85,h-57 xl:w-120,h-75 text-center text-4xl text-slate-50">Pedidos: 340</div>
      <div style="font-family: Nunito" class="border w-120 h-75 col-span-1 col-start-2 rounded-xl shadow-xl bg-gray-100 sm:w-60,h-40 md:w-85,h-57 xl:w-120,h-75 text-center text-4xl text-slate-50">Entregadores: 12</div>
      <div style="font-family: Nunito" class="border w-120 h-75 col-span-1 col-start-3 rounded-xl shadow-xl bg-gray-100 sm:w-60,h-40 md:w-85,h-57 xl:w-120,h-75 text-center text-4xl text-slate-50">Avaliações: 1203</div>
    </div>

    <h3 style="font-family: Nunito" class="mt-10 text-4xl font-bold justify-self-center sm:text-xl,flex,pl-6 md:text-2xl xl:text-4xl">Pedidos</h3>

    <div class="w-190 h-28 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
        <div class="w-8 h-8 border rounded-full">user</div>
        <h4 style="font-family: Nunito" class="font-bold flex">nome do user</h4>
        <p style="font-family: Nunito" class="font-bold flex">comentário</p>
        <p style="font-family: Nunito" class="font-bold flex">Tamanho:</p>
        <p style="font-family: Nunito" class="font-bold flex">Frágil:</p>
        <p style="font-family: Nunito" class="font-bold flex">Distância:</p>
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm border justify-self-end cursor-pointer">Ver mais</button>
    </div>

    <div class="w-190 h-28 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
        <div class="w-8 h-8 border rounded-full">user</div>
        <h4 style="font-family: Nunito" class="font-bold flex">nome do user</h4>
        <p style="font-family: Nunito" class="font-bold flex">comentário</p>
        <p style="font-family: Nunito" class="font-bold flex">Tamanho:</p>
        <p style="font-family: Nunito" class="font-bold flex">Frágil:</p>
        <p style="font-family: Nunito" class="font-bold flex">Distância:</p>
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm border justify-self-end cursor-pointer">Ver mais</button>
    </div>

    <button style="font-family: Nunito" class="text-xl text-slate-50 font-bold bg-slate-800 mt-20 w-190 h-17 border rounded-xl cursor-pointer">Ver mais pedidos</button>

    <h3 style="font-family: Nunito" class="mt-25 text-4xl font-bold justify-self-center sm:text-xl,flex,pl-6 md:text-2xl xl:text-4xl">Entregadores</h3>

    <div class="w-190 h-28 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
        <div class="w-8 h-8 border rounded-full">user</div>
        <h4 style="font-family: Nunito" class="font-bold flex">nome do user</h4>
        <p style="font-family: Nunito" class="text-gray-100">comentário</p>
        <h3 style="font-family: Nunito" class="font-bold flex">Empresa: Amazon</h3>
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm border justify-self-end cursor-pointer">Ver mais</button>
    </div>

    <div class="w-190 h-28 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-8">
        <div class="w-8 h-8 border rounded-full">user</div>
        <h4 style="font-family: Nunito" class="font-bold flex">nome do user</h4>
        <p style="font-family: Nunito" class="text-gray-100">comentário</p>
        <h3 style="font-family: Nunito" class="font-bold flex">Empresa: Mercado livre</h3>
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm border justify-self-end cursor-pointer">Ver mais</button>
    </div>

    <button style="font-family: Nunito" class="text-xl text-slate-50 font-bold bg-slate-800 mt-20 w-190 h-17 border rounded-xl cursor-pointer">Ver mais entregadores</button>

    <h3 style="font-family: Nunito" class="mt-25 text-4xl font-bold justify-self-center sm:text-xl,flex,pl-6 md:text-2xl xl:text-4xl">Avaliações</h3>
?>
</body>
</html>
