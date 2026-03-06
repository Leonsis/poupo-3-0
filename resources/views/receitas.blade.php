@extends('layouts.app')

@section('title', 'Poupo - Política de Privacidade')

@section('content')
    <div class="container mx-auto px-4 py-8 privacyPolicy">
        <div class="bd-solid  p-8">                            
        <!--  -->
            <form id="formRegisterEarnings">                
                <h2 class="text-base/7 font-semibold text-white">Registrar Receita</h2>
                <p class="mt-1 text-sm/6 text-gray-400">Registre a sua receita e tenha controle</p>
                            
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">                           
                    <div class="">
                        <label for="valor" class="block text-sm/6 font-medium text-white">Valor</label>
                        <div class="mt-2">
                            <input placeholder="R$ 0,00" id="valor" type="text" name="valor" autocomplete="given-name" class="inputValor block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                        </div>
                    </div>

                    <div class="">
                        <label for="origem_receita" class="block text-sm/6 font-medium text-white">Origem da receita</label>
                        <div class="mt-2">
                            <input placeholder="Trabalho" id="origem_receita" type="text" name="origem_receita" autocomplete="family-name" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                        </div>
                    </div>

                    <div class="">
                        <label for="dat_pagamento" class="block text-sm/6 font-medium text-white">Data do pagamento</label>
                        <div class="mt-2">
                            <input style="height: 36px;" id="dat_pagamento" name="dat_pagamento" class="w-full px-4 py-3 border-2 rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 bg-white dark:bg-dark-light text-gray-900 dark:text-light placeholder:text-gray-500 dark:placeholder:text-gray-400 disabled:opacity-50 disabled:cursor-not-allowed relative z-0 border-gray-300 dark:border-gray-600 focus:border-primary pl-10" type="date" value="">
                        </div>
                    </div>                                   
                </div>   

                <div class="mt-6">
                    <label for="descricao" class="block text-sm/6 font-medium text-white">Descrição</label>
                    <div class="mt-2">
                        <textarea placeholder="Salario de trabalho ..." id="descricao" name="descricao" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
                    </div>                        
                </div>

                <button class=" mt-6 inline-flex items-center justify-center font-medium btn-link px-4 py-2 text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none active:scale-95 hover:shadow-lg hover:shadow-primary/25 focus:ring-primary shadow-sm px-6 py-3 text-base w-full" type="submit">
                    Registrar
                </button>         
            </form>
        <!--  -->        
        </div>

        <!-- <div class="bd-solid p-4 mt-8"> -->
        <div class="bd-solid mt-8">                            
        <!--  -->
            <div class="p-6 rounded-2xl shadow-md w-full max-w-2xl mx-auto">
                <h2 class="text-xl font-semibold mb-4 text-white">Ganhos Mensais</h2>
                <canvas id="earningsChart"></canvas>
            </div>
        <!--  -->        
        </div>

        <div class="bd-solid p-8 mt-8">
            <div class="flex items-center space-x-3 mb-4">                
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                    <path fill="rgb(255, 255, 255)" d="M128 128C92.7 128 64 156.7 64 192L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 192C576 156.7 547.3 128 512 128L128 128zM320 208C381.9 208 432 258.1 432 320C432 381.9 381.9 432 320 432C258.1 432 208 381.9 208 320C208 258.1 258.1 208 320 208zM128 248L128 200C128 195.6 131.6 192 136 192L184 192C188.4 192 192.1 195.6 191.5 200C187.9 229 164.9 251.9 136 255.5C131.6 256 128 252.4 128 248zM128 392C128 387.6 131.6 383.9 136 384.5C165 388.1 187.9 411.1 191.5 440C192 444.4 188.4 448 184 448L136 448C131.6 448 128 444.4 128 440L128 392zM504 255.5C475 251.9 452.1 228.9 448.5 200C448 195.6 451.6 192 456 192L504 192C508.4 192 512 195.6 512 200L512 248C512 252.4 508.4 256.1 504 255.5zM512 392L512 440C512 444.4 508.4 448 504 448L456 448C451.6 448 447.9 444.4 448.5 440C452.1 411 475.1 388.1 504 384.5C508.4 384 512 387.6 512 392zM304 252C293 252 284 261 284 272C284 281.7 290.9 289.7 300 291.6L300 340L296 340C285 340 276 349 276 360C276 371 285 380 296 380L344 380C355 380 364 371 364 360C364 349 355 340 344 340L340 340L340 272C340 261 331 252 320 252L304 252z"/>
                </svg>
                <h2 class="text-base/7 font-semibold text-white">Receitas Registradas</h2>
            </div>
            <table class="min-w-full text-sm text-left text-gray-600">
                
                <!-- Cabeçalho -->
                <thead class=" text-xs uppercase hr-bottom">
                    <tr>
                        <th class="px-6 py-4 text-sm/6 font-medium text-white">Data</th>
                        <th class="px-6 py-4 text-sm/6 font-medium text-white">Origem</th>
                        <th class="px-6 py-4 text-sm/6 font-medium text-white">Descrição</th>
                        <th class="px-6 py-4 text-right text-sm/6 font-medium text-white">Valor</th>
                        <th class="px-6 py-4 text-center text-sm/6 font-medium text-white">Ações</th>
                    </tr>
                </thead>

                <!-- Corpo -->
                <tbody class="divide-y divide-gray-100">
                    @forEach($earnings as $earning)
                        <tr class="hr-bottom">
                            <form action="" method="">
                                <td class="px-6 py-4 text-white">
                                    <input class="input_edit" type="date" readonly value="{{ $earning->dat_pagamento->format('Y-m-d') }}">
                                </td>
                                <td class="px-6 py-4 text-white">                                
                                    <input class="input_edit" type="text" readonly value="{{ $earning->origem_receita }}">
                                </td>
                                <td class="px-6 py-4 text-white">                                                                        
                                    <input class="input_edit" type="text" readonly value="{{ $earning->descricao }}">
                                </td>
                                <td class="px-6 py-4 text-right text-green-600 font-semibold">
                                    <input class="text-right input_edit" type="text" readonly value="R$ {{ number_format($earning->valor, 2, ',', '.') }}">
                                </td>
                            </form>
                            <td class="px-6 py-4 text-center space-x-2">
                                <button style="margin: 5px;" onclick="edit_input()" class="px-3 py-1 text-xs bg-blue-500 text-white rounded-lg hover:bg-blue-600 btn-edit">
                                    Editar
                                </button>

                                <button style="margin: 5px; display: none;" onclick="save_edit()" class="px-3 py-1 text-xs bg-blue-500 text-white rounded-lg hover:bg-blue-600 btn-save">
                                    Salvar
                                </button>
                            
                                <form action="{{ route('earnings.delete',  $earning->id) }}" method="POST">
                                    @CSRF
                                    @method('DELETE')
                                    <button type="submit" style="margin: 5px;" onclick="return confirm('Tem certeza que deseja excluir essa receita?')" class="px-3 py-1 text-xs bg-red-500 text-white rounded-lg hover:bg-red-600">                                    
                                        Excluir
                                    </button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    
    @php
        $dat_pagamentos = [];
        $valores = [];

        foreach ($earnings as $earning) {
            $dat_pagamentos[] = \Carbon\Carbon::parse($earning->dat_pagamento)->format('d/m/Y');
            $valores[] = (float) $earning->valor;
        }
    @endphp
    <script>
        

        function edit_input() {
            if(!confirm('Deseja realmente editar essa receita?')) {
                return;
            }
            document.querySelectorAll('.input_edit').forEach(function(input) {                
                input.removeAttribute('readonly');
                input.classList.add('border', 'border-gray-300', 'rounded-md', 'bg-white/10', 'px-2', 'py-1', 'text-white');
                
                document.querySelectorAll('.btn-edit').forEach(function(btnEdit) {
                    btnEdit.style.display = 'none';
                    
                    document.querySelectorAll('.btn-save').forEach(function(btnSave) {
                        btnSave.style.display = 'block';
                    });
                });
            });
        }

        function save_edit() {

        }

        // Grafico
        const dat_pagamentos = @json(
            $dados_mes_total->map(function ($item) {
                return \Carbon\Carbon::create($item->ano, $item->mes)
                    ->translatedFormat('M/Y');
            })
        );

        const valores = @json(
            $dados_mes_total->pluck('total')
                ->map(fn($v) => (float) $v)
        );
        
        const ctx = document.getElementById('earningsChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: dat_pagamentos,
                datasets: [{
                    label: 'Ganhos (R$)',
                    data: valores,
                    backgroundColor: '#625fffb0',
                    borderColor: '#615fff',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            color: '#ffffff', // cor do texto
                            font: {
                                size: 14
                            }
                        }
                    },
                    title: {
                        display: true,
                        text: 'Relatório de Ganhos',
                        color: '#ffffff', // título branco
                        font: {
                            size: 18
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return 'R$ ' + context.raw.toLocaleString('pt-BR');
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: '#ffffff', // números do eixo Y branco
                            callback: function(value) {
                                return 'R$ ' + value.toLocaleString('pt-BR');
                            }
                            
                        },
                        grid: {
                            color: 'rgb(255, 255, 255)'
                        }
                    },
                    x: {
                        ticks: {
                            color: '#ffffff' // datas branco
                        },
                        grid: {
                            display: false
                        }
                    }
                },
                animation: {
                    duration: 1000
                }
            }
        });

        // JavaScript para a verificação de dados e envio dos dados do formulario via Ajax.
        document.getElementById('formRegisterEarnings').addEventListener('submit', function(e) {
            e.preventDefault(); // Impede o envio do formulário para validação
            
            let form = this;        
            
            // Validação para verificar se os campos estão preenchidos
            let inputs = form.querySelectorAll("input, select");
            let camposVazios = [];
            
            inputs.forEach(function(input) {
                if (input.value.trim() === "") {
                    camposVazios.push(input.name);
                }
            });

            if(camposVazios.length > 0) {
                alert("A " + camposVazios.length + " Campos vazios , por geteleza preencha os campos");
                return;
            }            
            
            // Envio dos dados do formulário
            let formData = new FormData(form);
            let xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ route("earnings.store") }}', true); // Método e Rota
            // CSRF Token
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.setRequestHeader('Accept', 'application/json'); // Espera resposta JSON
            xhr.onload = function() {
                if (xhr.status === 200) {
                    alert('Receita registrado com sucesso!');
                    window.location.reload();
                }

                if (xhr.status === 422) {
                    let response = JSON.parse(xhr.responseText);
                    console.log(response.errors);
                    alert(Object.values(response.errors)[0][0]);
                }

                if (xhr.status === 500) {
                    console.error(xhr.responseText);
                }
            } 
            xhr.send(formData);
            console.log(xhr.responseText); // Para depuração
        });    
    </script>
@endsection