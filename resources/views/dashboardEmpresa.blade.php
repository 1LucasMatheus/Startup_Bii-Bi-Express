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
          <h1 style="font-family: Agbalumo" class="text-slate-50 text-4xl ml-4 justify-self-start w-100">Bii-Bi Express</h1>
          <div class="size-14 rounded-full border border-slate-50 mr-6 justify-self-end"></div>
          <div class="size-14 rounded-full border border-slate-50 mr-4"></div>
      </div>

    </nav>

    <h3 style="font-family: Nunito" class="mt-10 text-2xl ml-4 font-bold">Estatísticas</h3>

    <div class="flex gap-8 pt-12 justify-items-center pt-12 justify-self-center">
      <div style="font-family: Nunito" class="border w-40 h-30 rounded-xl shadow-xl bg-gray-100 text-center text-xl font-bold text-slate-50 bg-slate-900 py-7 px-9">
        <p>Pedidos:</p>
        <p class="mt-2">20</p>
      </div>

      <div style="font-family: Nunito" class="border w-40 h-30 rounded-xl shadow-xl bg-gray-100 text-center text-xl font-bold text-slate-50 bg-orange-400 py-7 px-3">
        <p>Entregadores:</p>
        <p class="mt-2">200</p>
      </div>

      <div style="font-family: Nunito" class="border w-40 h-30 rounded-xl shadow-xl bg-gray-100 text-center text-xl font-bold text-slate-50 bg-slate-900 py-7 px-9">
        <p>Pedidos:</p>
        <p class="mt-2">80</p>
      </div>

    </div>

    <div class="flex mt-22 w-190">
      <h3 style="font-family: Nunito" class="text-4xl font-bold flex ml-4">Pedidos</h3>

      <div class="size-10 border justify-self-end ml-88"></div>
    </div>

    <div class="w-135 h-34 shadow-2xl rounded-xl justify-self-center border mt-12">
      <div class="flex gap-2">
        <div class="size-11 ml-4 mt-2 border rounded-full"></div>
        <h4 style="font-family: Nunito" class="font-bold flex my-4 text-2xl">Paulo Augusto</h4>
      </div>
        <p style="font-family: Nunito" class="text-gray-500 text-sm ml-4 mt-3">Tenho um pacote para ser buscado no correio de Russas...</p>

      <div class="flex">
        <div class="flex">
          <h3 style="font-family: Nunito" class="font-bold flex ml-4 mt-3">Tamanho: <span class="text-gray-500">Médio</span></h3>

          <h3 style="font-family: Nunito" class="font-bold flex ml-3 mt-3">Frágil: <div class="size-5 border"></div></h3>

          <h3 style="font-family: Nunito" class="font-bold flex ml-3 mt-3">Distância: <span class="text-gray-500">29.7Km</span></h3>
        </div>
        
        <button style="font-family: Nunito" class="bg-orange-400 h-8 ml-25 text-slate-50 text-sm font-bold justify-self-end cursor-pointer p-1 rounded-sm mb-2">Ver mais</button>
      </div>
    </div>

    <div class="w-190 h-34 shadow-2xl rounded-xl justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12">
      <div class="flex gap-2">
        <div class="size-11 ml-3 mt-2 border rounded-full"></div>
        <h4 style="font-family: Nunito" class="font-bold flex my-3 text-2xl">Ângelo Lima</h4>
      </div>
        <p style="font-family: Nunito" class="text-gray-200 text-sm ml-3 w-164 mt-2">Preciso que busque um pacote para mim nos coreios</p>

      <div class="flex mt-2">
        <div class="flex">
          <h3 style="font-family: Nunito" class="font-bold flex ml-3 mt-2">Tamanho: <span class="text-gray-200">Pequeno</span></h3>

          <h3 style="font-family: Nunito" class="font-bold flex ml-3 mt-2">Frágil: <div class="size-5 border"></div></h3>

          <h3 style="font-family: Nunito" class="font-bold flex ml-3 mt-2">Distância: <span class="text-gray-200">1.5Km</span></h3>
        </div>
        
        <button style="font-family: Nunito" class="bg-orange-300 text-slate-50 text-sm font-bold border justify-self-end cursor-pointer mr-3 p-1 rounded-sm">Ver mais</button>
      </div>

      <button class="w-190 h-20 shadow-2xl rounded-md justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12 text-2xl font-bold text-slate-50 bg-slate-900 cursor-pointer">Ver mais pedidos</button>




    <div class="flex mt-22 w-190">
      <h3 style="font-family: Nunito" class="text-4xl font-bold justify-self-center sm:text-xl,flex,pl-6 md:text-2xl xl:text-4xl">Entregadores</h3>

      <div class="size-10 border justify-self-end"></div>
    </div>

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

    <button class="w-190 h-20 shadow-2xl rounded-md justify-self-center border sm:w-70,w-8 md:w-110,h-13 xl:w-190,h-20 mt-12 text-2xl font-bold text-slate-50 bg-slate-900 cursor-pointer">Ver mais pedidos</button>



    <div class="flex mt-22 w-190">
      <h3 style="font-family: Nunito" class="text-4xl font-bold justify-self-center sm:text-xl,flex,pl-6 md:text-2xl xl:text-4xl">Avaliações</h3>

      <div class="size-10 border justify-self-end"></div>
    </div>

    </div>
    
    </div>
  </div>
?>
</body>
</html>
