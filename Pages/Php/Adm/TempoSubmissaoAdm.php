<!DOCTYPE html>
<html lang="pt-BR" class="h-full">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <link rel="canonical" href="https://novo.qedu.org.br/brasil" />

    <link ref="preload" href="../../Componentes/Js/cdn.min.js">
    <link ref="preload" href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,400;0,700;1,400&amp;display=swap">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="../../Componentes/Css/appdfe.css">
    <link rel="stylesheet" href="../../Componentes/Css/Adm.css">





</head>

<body x-data="bodyAlpine()" class="font-sans bg-gray-100 min-h-full flex flex-col">
    <div x-cloak @click="closeSubmenu()" x-show="blockBody" class="xl:hidden absolute w-full h-full bg-black opacity-70 top-0 left-0 z-20"></div>
    <nav x-cloak x-show="isSubmenuOpen" class="xl:hidden absolute w-5/6 h-screen bg-white opacity-100 top-0 left-0 z-30 shadow-lg px-7 py-20 transition duration-300 ease-in overflow-y-scroll overflow-x-hidden">
        <i @click="closeSubmenu()" class="cursor-pointer p-2 bx bx-x text-2xl float-right -mt-14"></i>

        <ul class="grid grid-cols-1 gap-2 text-lg">
            <li class="submenu-item flex-wrap submenu-current">
                <a href="PerfilAdmT.php"><i class="bx bx-home"></i> Pagina Inicial</a>
            </li>
        </ul>
        <br>
        <ul class="grid grid-cols-1 gap-2 text-lg">
            <li class="submenu-item flex-wrap submenu-current">
                <a href="TempoSubmissaoAdm.php"><i class="bx bx-alarm-add"></i> Tempo de Submissão</a>
            </li>
        </ul>


    </nav>
    <button title="Menu" @click="openSubmenu()" class="inline-block text-white border-none xl:hidden w-12 h-12 p-1 ml-4 mr-4">
        <span class="sr-only">Menu</span>
        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
    </button>

    <div class="bg-gray-100 p-0 w-full min-h-full flex-grow">
        <div class="lg:container mx-auto lg:grid lg:grid-cols-12 lg:min-h-full xs:grid-cols-1">
            <div class="col-span-2 bg-white min-h-full xs:hidden lg:block shadow-lg">
                <nav class="py-14">
                    <ul class="grid grid-cols-1 gap-2 text-lg">
                        <li class="submenu-item flex flex-row justify-start items-center gap-2 ">

                        </li>

                        <li class="submenu-item flex-wrap submenu-current">
                            <a href="PerfilAdmT.php"><i class="bx bx-home"></i> Pagina
                                Inicial</a>
                        </li>
                        <br>
                        <li class="submenu-item flex-wrap submenu-current">
                            <a href="TempoSubmissaoAdm.php"><i class="bx bx-alarm-add"></i> Tempo de Submissão</a>
                        </li>
                    </ul>
                </nav>

            </div>
            <div class="lg:col-span-10 bg-gray-100 px-4">


                <section class="flex flex-row justify-start items-start xs:p-2 lg:p-5 shadow bg-white mt-4  rounded-xl">
                    <div class="">

                    </div>


                    <div class="text-black flex flex-col w-auto">
                        <a class="text-lg font-bold cursor-pointer">ETEC DOUTORA RUTH CARDOSO</a>
                        <div class="flex gap-1 items-center text-xs text-gray-500">
                            <a>ADMINISTRADOR</a>
                            <span>/</span>
                            <p class="text-xs text-gray-500">DANTON SANTOS MEIRELES DE OLIVEIRA</p>
                        </div>
                    </div>
                </section>

                <main class="xs:px-1 xs:py-5 lg:px-0 lg:py-10">

                    <div class="p-0 w-full">

                        <div class="lg:container mx-auto lg:grid lg:grid-cols-3 xs:grid-cols-1 gap-8">
                            <section class="flex flex-col col-span-2 xs:gap-6 lg:gap-8">

                                <section class="flex flex-col border bg-white border-gray-200 rounded-xl pb-6">



                                    <div class="flex flex-col gap-6">
                                        <div class="flex flex-row justify-between items-center px-8 py-6">
                                            <h1 class="font-lg font-bold">Contador</h1>
                                            <a class="text-blue-600 font-bold">Contagem regressivapara fechar edital</a>
                                        </div>
                                        <div class="body1">
                                            <div class="capaContador">
                                                <div class="contador">
                                                    <div id="dias">00</div>
                                                    <span>DIAS</span>
                                                </div>
                                                <div class="meio">:</div>
                                                <div class="contador">
                                                    <div id="horas">00</div>
                                                    <span>HORAS</span>
                                                </div>
                                                <div class="meio">:</div>
                                                <div class="contador">
                                                    <div id="minutos">00</div>
                                                    <span>MINUTOS</span>
                                                </div>
                                                <div class="meio">:</div>
                                                <div class="contador">
                                                    <div id="segundos">00</div>
                                                    <span>SEGUNDOS</span>
                                                </div>

                                                <form id="my-form" method="post" action="#">
                                                    <input type="date" name="inDate">
                                                    <input type="time" name="inTime">
                                                    <button type="submit">Iniciar</button>
                                                </form>
                                                <script type="text/javascript">
                                                    document.querySelector('form').addEventListener('submit', function(e) {
                                                        e.preventDefault();
                                                        var date = document.querySelector('input[name="inDate"]').value;
                                                        var time = document.querySelector('input[name="inTime"]').value;
                                                        to = new Date(date + ' ' + time);
                                                    });

                                                    function update() {
                                                        var from = new Date();
                                                        diff = to - from;
                                                        if (diff > 0) {
                                                            var dias = (Math.floor(diff / 1000 / 60 / 60 / 24)),
                                                                horas = (Math.floor(diff / 1000 / 60 / 60) % 24),
                                                                minutos = (Math.floor(diff / 1000 / 60) % 60),
                                                                segundos = (Math.floor(diff / 1000) % 60)
                                                            document.querySelector('#dias').innerText = dias
                                                            document.querySelector('#horas').innerText = horas
                                                            document.querySelector('#minutos').innerText = minutos
                                                            document.querySelector('#segundos').innerText = segundos
                                                        }
                                                    }
                                                    var interval = setInterval(update, 1000)
                                                </script>
                                            </div>

                                        </div>
                                </section>


                                <style>
                                    .animated {
                                        -webkit-animation-duration: 1s;
                                        animation-duration: 1s;
                                        -webkit-animation-fill-mode: both;
                                        animation-fill-mode: both;
                                    }

                                    .animated.faster {
                                        -webkit-animation-duration: 500ms;
                                        animation-duration: 500ms;
                                    }

                                    .fadeIn {
                                        -webkit-animation-name: fadeIn;
                                        animation-name: fadeIn;
                                    }

                                    .fadeOut {
                                        -webkit-animation-name: fadeOut;
                                        animation-name: fadeOut;
                                    }

                                    @keyframes fadeIn {
                                        from {
                                            opacity: 0;
                                        }

                                        to {
                                            opacity: 1;
                                        }
                                    }

                                    @keyframes fadeOut {
                                        from {
                                            opacity: 1;
                                        }

                                        to {
                                            opacity: 0;
                                        }
                                    }
                                </style>

                            </section>
                            <section class="flex flex-col col-span-1 xs:gap-6 lg:gap-8">
                                <section class="flex flex-col rounded-xl bg-white border-gray-200 border ">
                                    <h1 class="p-6 font-bold xs:text-base lg:text-lg flex flex-col">Situação da
                                        Instituição</h1>
                                    <div class="flex gap-4 flex-col p-6 flex-grow">

                                        <div class="flex justify-between items-end">
                                            <div class="flex xs:gap-4 lg:gap-2">
                                                <i class="text-qedu-blue-dark fas bx bx-book-open"></i>
                                                <div class="flex flex-col items-start justify-center gap-1">
                                                    <p class="text-sm">Artigos</p>
                                                    <p class="font-bold">...</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        

                                        <div class="mx-auto bg-gray-200 w-11/12 h-px">
                                        </div>

                                        <div class="flex justify-between items-end">
                                            <div class="flex xs:gap-4 lg:gap-2">
                                                <i class="text-qedu-blue-dark fas bx bx-user"></i>
                                                <div class="flex flex-col items-start justify-center gap-1">
                                                    <p class="text-sm">Alunos </p>
                                                    <p class="font-bold">...</p>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="mx-auto bg-gray-200 w-11/12 h-px">
                                        </div>

                                        <div class="flex justify-between items-end">
                                            <div class="flex xs:gap-4 lg:gap-2">
                                                <i class="text-qedu-blue-dark fas bx bx-pencil"></i>
                                                <div class="flex flex-col items-start justify-center gap-1">
                                                    <p class="text-sm">Avaliadores</p>
                                                    <p class="font-bold">...</p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                </section>

                            </section>

                            <style>
                                .animated {
                                    -webkit-animation-duration: 1s;
                                    animation-duration: 1s;
                                    -webkit-animation-fill-mode: both;
                                    animation-fill-mode: both;
                                }

                                .animated.faster {
                                    -webkit-animation-duration: 500ms;
                                    animation-duration: 500ms;
                                }

                                .fadeIn {
                                    -webkit-animation-name: fadeIn;
                                    animation-name: fadeIn;
                                }

                                .fadeOut {
                                    -webkit-animation-name: fadeOut;
                                    animation-name: fadeOut;
                                }

                                @keyframes fadeIn {
                                    from {
                                        opacity: 0;
                                    }

                                    to {
                                        opacity: 1;
                                    }
                                }

                                @keyframes fadeOut {
                                    from {
                                        opacity: 1;
                                    }

                                    to {
                                        opacity: 0;
                                    }
                                }
                            </style>
                            
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>




    
</body>

</html>