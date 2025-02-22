<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eros</title>
        @stack('styles')  
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    {{-- @yield('header')  --}}
    <header>
        <div class="justify-between flex items-center">
            <x-common.logo/>
            <span>MENU</span>
        </div>
    </header>
    <main>
        @yield('content')  
    </main>
    <footer class="flex justify-between">
        {{-- @yield('footer') --}}
        <div>
            <h3>Quer desenvolver um projeto, tirar dúvidas, ou apenas trocar uma ideia? Clique no botão abaixo! </h3>
            <span class="span-footer">(CONTATO)</span>
            <h3>Ou envie um email para <a href="" style="color:black; text-decoration: underline">hello@studioeros.com.br</a></h3>
        </div> 
        <div class="flex flex-col">
            <h3>Social</h3>
            <div class="flex flex-col">
                <a target="_blank" href="https://www.instagram.com/eros.std/">Instagram</a>
                <a target="_blank" href="https://www.linkedin.com/company/erosagencia/">Linkedin</a>
            </div>
            <div>
                <h3>Based in Minas Gerais - Brazil </h3>
            </div>
        </div>
    </footer>
</body>
</html>