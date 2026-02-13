@extends('layouts.app')

@section('title', 'Poupo - Login')

@section('content')
    <div class="login min-h-screen from-gray-50 via-white to-gray-100 dark:from-dark dark:via-dark-light dark:to-dark flex items-center justify-center p-6">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">                
                <div class="flex items-center justify-center space-x-2 mb-4">                    
                    <h1 class="text-3xl font-bold text-white">Poupo</h1>
                </div>
                <h2 class="text-2xl font-semibold text-white">Bem-vindo de volta!</h2>
                <p class="text-gray-600 dark:text-light mt-2">Entre para acessar suas finanças</p>                
            </div>
            <div class="rounded-xl shadow-lg transition-all duration-300 bd hover:shadow-xl">
                <div class="p-6 ">
                    <form class="space-y-6">
                        <div class="mb-4">
                            <label for="input-3l6ag7wtx" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                            <div class="relative">
                                <div class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-5 h-5">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                </div>
                                <input id="input-3l6ag7wtx" class="w-full px-4 py-3 border-2 rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-opacity-50 bg-white dark:bg-dark-light text-gray-900 dark:text-light placeholder:text-gray-500 dark:placeholder:text-gray-400 disabled:opacity-50 disabled:cursor-not-allowed relative z-0 border-gray-300 dark:border-gray-600 focus:border-primary pl-10" type="email" name="email" placeholder="seu@email.com" value="">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="input-gydowjl8o" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Senha</label>
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
                        <button class="inline-flex items-center justify-center font-medium btn-link px-4 py-2 text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none active:scale-95 hover:shadow-lg hover:shadow-primary/25 focus:ring-primary shadow-sm px-6 py-3 text-base w-full" type="submit">
                            Entrar
                        </button>
                    </form>
                </div>
                <div class="p-6 pt-0 ">
                    <div class="text-center">
                        <p class="text-gray-600 dark:text-light">Não tem uma conta?</p>
                        <a class="text-white hover:text-primary-dark font-medium mt-1 transition-colors" href="{{ route('register') }}">Criar conta gratuita</a>
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
@endsection