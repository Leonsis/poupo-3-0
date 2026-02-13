<footer class="p-6">   
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="p-4 md:col-span-2">
            <a href="{{ route('home') }}" class="text-white hover:text-gray-300">
                <h3 class="text-xl font-bold mb-2 text-white">Poupo</h3>
            </a>
            <p class="text-white pb-4 text-base max-w-md">Sistema de organização financeira inteligente e seguro. Gerencie suas finanças pessoais com facilidade e confiança.</p>
            <span class="text-gray-400 text-sm">&copy; 2026 Poupo. Todos os direitos reservados.</span>
        </div>
        <div class="p-4">                
            <h3 class="text-xl font-bold mb-2 text-white">Informações Legais</h3>
            <ul>
                <li>
                    <a href="{{ route('privacy.policy') }}" class="text-gray-400 hover:underline">
                        <div class="flex items-center gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="20px">
                                    <path fill="#ffffff" d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64z"/>
                                </svg>
                            </div>
                            Política de Privacidade
                        </div>                            
                    </a>
                </li>
                <li>
                    <a href="{{ route('terms.use') }}" class="text-gray-400 hover:underline">
                        <div class="flex items-center gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="20px">
                                    <path fill="#ffffff" d="M128 128C128 92.7 156.7 64 192 64L341.5 64C358.5 64 374.8 70.7 386.8 82.7L493.3 189.3C505.3 201.3 512 217.6 512 234.6L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 128zM336 122.5L336 216C336 229.3 346.7 240 360 240L453.5 240L336 122.5zM248 320C234.7 320 224 330.7 224 344C224 357.3 234.7 368 248 368L392 368C405.3 368 416 357.3 416 344C416 330.7 405.3 320 392 320L248 320zM248 416C234.7 416 224 426.7 224 440C224 453.3 234.7 464 248 464L392 464C405.3 464 416 453.3 416 440C416 426.7 405.3 416 392 416L248 416z"/>
                                </svg>
                            </div>
                            Termos de Serviço
                        </div>                          
                    </a>
                </li>                    
            </ul>
        </div>
        <div class="p-4">                
            <h3 class="text-xl font-bold mb-2 text-white">Sistema</h3>
            <ul>
                <li class="text-gray-400">Versão 3.0</li>
                <li class="text-gray-400">Desenvolvido por Caio Leonni</a></li>
                <li class="text-gray-400">Laravel + Tailwind CSS</li>
                <li class="text-gray-400">MySQL Database</li>                        
            </ul>
        </div>                            
    </div>
    <div class="flex flex-col md:flex-row justify-between items-center m-4 hr-section pt-4">
        <div class="text-sm text-gray-500 mb-2 md:mb-0">Desenvolvido com ❤️ para ajudar na organização financeira pessoal</div>
        <div class="text-xs text-gray-600">Última atualização: 06 de setembro de 2026</div>
    </div>
</footer>