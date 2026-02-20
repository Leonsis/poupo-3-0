@extends('layouts.app')

@section('title', 'Poupo - Login')

@section('content')
    <div class="register min-h-screen from-gray-50 via-white to-gray-100 dark:from-dark dark:via-dark-light dark:to-dark flex items-center justify-center p-6">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">                
                <div class="flex items-center justify-center space-x-2 mb-4">                
                    <h1 class="text-3xl font-bold text-white">Poupo</h1>
                </div>
                <h2 class="text-2xl font-semibold text-white">Crie sua conta</h2>
                <p class="text-gray-600 dark:text-light mt-2">Comece sua jornada financeira</p>                
            </div>
            <div class="rounded-xl shadow-lg transition-all duration-300 bd hover:shadow-xl ">
                <div class="p-6 ">

                    <form class="space-y-6" id="formRegister">                                                
                         <!-- nwe block -->
                         <div class="w-full max-w-sm">
                            <label for="tipo_conta" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Tipo de usuário
                            </label>
                            <select  id="tipo_conta" name="tipo_conta" class="w-full rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm shadow-sm  focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-200">                                
                                <option value="">Selecione uma opção</option>
                                <option value="1">admin</option>
                                <option value="2">Pessoal</option>
                                <option value="3">Empresarial</option>
                            </select>
                        </div>
                        <!--  -->
                        <div class="mb-4">
                            <label for="input-im6icr8mw" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nome completo</label>
                            <div class="relative">
                                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-5 h-5">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                <input id="input-im6icr8mw" class="w-full px-4 py-3 border-2 rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 bg-white dark:bg-dark-light text-gray-900 dark:text-light placeholder:text-gray-500 dark:placeholder:text-gray-400 disabled:opacity-50 disabled:cursor-not-allowed relative z-0 border-gray-300 dark:border-gray-600 focus:border-primary pl-10" type="text" name="name" placeholder="Digite seu nome completo" value="">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="input-8qrzq4qxv" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                            <div class="relative">
                                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-5 h-5">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                </div>
                                <input id="input-8qrzq4qxv" class="w-full px-4 py-3 border-2 rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 bg-white dark:bg-dark-light text-gray-900 dark:text-light placeholder:text-gray-500 dark:placeholder:text-gray-400 disabled:opacity-50 disabled:cursor-not-allowed relative z-0 border-gray-300 dark:border-gray-600 focus:border-primary pl-10" type="email" name="email" placeholder="seu@email.com" value="">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="input-dxjzvdm1i" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Senha</label>
                            <div class="relative">
                                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock w-5 h-5">
                                        <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                </div>
                                <input class="input-password w-full px-4 py-3 border-2 rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 bg-white dark:bg-dark-light text-gray-900 dark:text-light placeholder:text-gray-500 dark:placeholder:text-gray-400 disabled:opacity-50 disabled:cursor-not-allowed relative z-0 border-gray-300 dark:border-gray-600 focus:border-primary pl-10 pr-10" type="password" name="password" placeholder="Digite sua senha" value="">
                                <div class="eye absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 z-10 cursor-pointer hover:text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-5 h-5">
                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="input-qnhnl8dxo" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Confirmar senha</label>
                            <div class="relative">
                                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock w-5 h-5">
                                        <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                </div>
                                <input class="input-password w-full px-4 py-3 border-2 rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 bg-white dark:bg-dark-light text-gray-900 dark:text-light placeholder:text-gray-500 dark:placeholder:text-gray-400 disabled:opacity-50 disabled:cursor-not-allowed relative z-0 border-gray-300 dark:border-gray-600 focus:border-primary pl-10 pr-10" type="password" name="confirmpassword" placeholder="Confirme sua senha" value="">
                                <div class="eye absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 z-10 cursor-pointer hover:text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-5 h-5">
                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="input-0tr29k4b9" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Data de nascimento</label>
                            <div class="relative">
                                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-5 h-5">
                                        <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                                        <line x1="16" x2="16" y1="2" y2="6"></line>
                                        <line x1="8" x2="8" y1="2" y2="6"></line>
                                        <line x1="3" x2="21" y1="10" y2="10"></line>
                                    </svg>
                                </div>
                                <input id="input-0tr29k4b9" class="w-full px-4 py-3 border-2 rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 bg-white dark:bg-dark-light text-gray-900 dark:text-light placeholder:text-gray-500 dark:placeholder:text-gray-400 disabled:opacity-50 disabled:cursor-not-allowed relative z-0 border-gray-300 dark:border-gray-600 focus:border-primary pl-10" type="date" name="dat_nasci" value="">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="input-mdoq58v6w" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Telefone</label>
                            <div class="relative">
                                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                </div>
                                <input id="input-mdoq58v6w" class="w-full px-4 py-3 border-2 rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 bg-white dark:bg-dark-light text-gray-900 dark:text-light placeholder:text-gray-500 dark:placeholder:text-gray-400 disabled:opacity-50 disabled:cursor-not-allowed relative z-0 border-gray-300 dark:border-gray-600 focus:border-primary pl-10" type="tel" name="tel" placeholder="(11) 99999-9999" value="">
                            </div>
                        </div>                       
                        <button class="inline-flex items-center justify-center font-medium btn-link px-4 py-2 text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none active:scale-95 hover:shadow-lg hover:shadow-primary/25 focus:ring-primary shadow-sm px-6 py-3 text-base w-full" type="submit">Criar conta</button>
                    </form>
                </div>
                <div class="p-6 pt-0 ">
                    <div class="text-center">
                        <p class="text-gray-600 dark:text-light">Já tem uma conta?</p>
                        <a class="text-white hover:text-primary-dark font-medium mt-1 transition-colors" href="{{ route('login') }}">Fazer login</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <a class="inline-flex items-center btn-link px-4 py-2 text-white" href="{{ route('home') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left w-4 h-4 mr-2">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>
                    Voltar ao início
                </a>
            </div>              
        </div>
    </div>

    <script>
        // JavaScript para a verificação de dados e envio dos dados do formulario via Ajax.
        document.getElementById('formRegister').addEventListener('submit', function(e) {
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

            // Validação para verificar se as senhas coincidem
            let password = form.querySelector('input[name="password"]').value;
            let confirmPassword = form.querySelector('input[name="confirmpassword"]').value;
            if(password !== confirmPassword) {
                alert('As senhas não coincidem. Por favor, tente novamente.');
                return;
            }
            
            // Envio dos dados do formulário
            let formData = new FormData(form);
            let xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ route("user.store") }}', true); // Método e Rota
            // CSRF Token
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.setRequestHeader('Accept', 'application/json'); // Espera resposta JSON
            xhr.onload = function() {
                if (xhr.status === 200) {
                    alert('Usuário registrado com sucesso!');
                    window.location.href = '{{ route("login") }}';
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