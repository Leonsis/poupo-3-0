@extends('layouts.app')

@section('title', 'Poupo - Política de Privacidade')

@section('content')
    <div class="container mx-auto px-4 py-8 max-w-4xl privacyPolicy">
        <div class="rounded-lg bd transition-colors duration-300">
            <div class="p-8">
                <div class="mb-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                            <path fill="#ffffff" d="M128 128C128 92.7 156.7 64 192 64L341.5 64C358.5 64 374.8 70.7 386.8 82.7L493.3 189.3C505.3 201.3 512 217.6 512 234.6L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 128zM336 122.5L336 216C336 229.3 346.7 240 360 240L453.5 240L336 122.5zM248 320C234.7 320 224 330.7 224 344C224 357.3 234.7 368 248 368L392 368C405.3 368 416 357.3 416 344C416 330.7 405.3 320 392 320L248 320zM248 416C234.7 416 224 426.7 224 440C224 453.3 234.7 464 248 464L392 464C405.3 464 416 453.3 416 440C416 426.7 405.3 416 392 416L248 416z"/>
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Introdução</h2>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">O <strong>Poupo</strong> é um sistema de organização financeira pessoal desenvolvido para ajudar usuários a gerenciar suas finanças de forma segura e eficiente. Esta Política de Privacidade descreve como coletamos, usamos, armazenamos e protegemos suas informações pessoais.</p>
                </div>
                <div class="mb-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                            <path fill="#ffffff" d="M544 269.8C529.2 279.6 512.2 287.5 494.5 293.8C447.5 310.6 385.8 320 320 320C254.2 320 192.4 310.5 145.5 293.8C127.9 287.5 110.8 279.6 96 269.8L96 352C96 396.2 196.3 432 320 432C443.7 432 544 396.2 544 352L544 269.8zM544 192L544 144C544 99.8 443.7 64 320 64C196.3 64 96 99.8 96 144L96 192C96 236.2 196.3 272 320 272C443.7 272 544 236.2 544 192zM494.5 453.8C447.6 470.5 385.9 480 320 480C254.1 480 192.4 470.5 145.5 453.8C127.9 447.5 110.8 439.6 96 429.8L96 496C96 540.2 196.3 576 320 576C443.7 576 544 540.2 544 496L544 429.8C529.2 439.6 512.2 447.5 494.5 453.8z"/>
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Informações que Coletamos</h2>
                    </div>
                    <div class="space-y-4">
                        <div class="p-4 rounded-lg bd transition-colors duration-300 ">
                            <h3 class="font-semibold mb-2 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                                    <path fill="#ffffff" d="M240 192C240 147.8 275.8 112 320 112C364.2 112 400 147.8 400 192C400 236.2 364.2 272 320 272C275.8 272 240 236.2 240 192zM448 192C448 121.3 390.7 64 320 64C249.3 64 192 121.3 192 192C192 262.7 249.3 320 320 320C390.7 320 448 262.7 448 192zM144 544C144 473.3 201.3 416 272 416L368 416C438.7 416 496 473.3 496 544L496 552C496 565.3 506.7 576 520 576C533.3 576 544 565.3 544 552L544 544C544 446.8 465.2 368 368 368L272 368C174.8 368 96 446.8 96 544L96 552C96 565.3 106.7 576 120 576C133.3 576 144 565.3 144 552L144 544z"/>
                                </svg>    
                            <span class="text-white">Informações Pessoais</span></h3>
                            <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                                <li>• Nome completo</li>
                                <li>• Endereço de e-mail</li>
                                <li>• Data de nascimento</li>
                                <li>• Número de telefone (opcional)</li>
                                <li>• Salário bruto (opcional)</li>
                            </ul>
                        </div>
                        <div class="p-4 rounded-lg bd transition-colors duration-300">
                            <h3 class="font-semibold mb-2 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                                    <path fill="#ffffff" d="M128 128C128 92.7 156.7 64 192 64L341.5 64C358.5 64 374.8 70.7 386.8 82.7L493.3 189.3C505.3 201.3 512 217.6 512 234.6L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 128zM336 122.5L336 216C336 229.3 346.7 240 360 240L453.5 240L336 122.5zM248 320C234.7 320 224 330.7 224 344C224 357.3 234.7 368 248 368L392 368C405.3 368 416 357.3 416 344C416 330.7 405.3 320 392 320L248 320zM248 416C234.7 416 224 426.7 224 440C224 453.3 234.7 464 248 464L392 464C405.3 464 416 453.3 416 440C416 426.7 405.3 416 392 416L248 416z"/>
                                </svg>
                                <span class="text-white">Dados Financeiros</span>
                            </h3>
                            <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                                <li>• Receitas e despesas</li>
                                <li>• Despesas fixas</li>
                                <li>• Contas bancárias e saldos</li>
                                <li>• Histórico de transações</li>
                                <li>• Resumos financeiros mensais</li>
                            </ul>
                        </div>
                        <div class="p-4 rounded-lg bd transition-colors duration-300">
                            <h3 class="font-semibold mb-2 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                                    <path fill="#ffffff" d="M320 144C254.8 144 201.2 173.6 160.1 211.7C121.6 247.5 95 290 81.4 320C95 350 121.6 392.5 160.1 428.3C201.2 466.4 254.8 496 320 496C385.2 496 438.8 466.4 479.9 428.3C518.4 392.5 545 350 558.6 320C545 290 518.4 247.5 479.9 211.7C438.8 173.6 385.2 144 320 144zM127.4 176.6C174.5 132.8 239.2 96 320 96C400.8 96 465.5 132.8 512.6 176.6C559.4 220.1 590.7 272 605.6 307.7C608.9 315.6 608.9 324.4 605.6 332.3C590.7 368 559.4 420 512.6 463.4C465.5 507.1 400.8 544 320 544C239.2 544 174.5 507.2 127.4 463.4C80.6 419.9 49.3 368 34.4 332.3C31.1 324.4 31.1 315.6 34.4 307.7C49.3 272 80.6 220 127.4 176.6zM320 400C364.2 400 400 364.2 400 320C400 290.4 383.9 264.5 360 250.7C358.6 310.4 310.4 358.6 250.7 360C264.5 383.9 290.4 400 320 400zM240.4 311.6C242.9 311.9 245.4 312 248 312C283.3 312 312 283.3 312 248C312 245.4 311.8 242.9 311.6 240.4C274.2 244.3 244.4 274.1 240.5 311.5zM286 196.6C296.8 193.6 308.2 192.1 319.9 192.1C328.7 192.1 337.4 193 345.7 194.7C346 194.8 346.2 194.8 346.5 194.9C404.4 207.1 447.9 258.6 447.9 320.1C447.9 390.8 390.6 448.1 319.9 448.1C258.3 448.1 206.9 404.6 194.7 346.7C192.9 338.1 191.9 329.2 191.9 320.1C191.9 309.1 193.3 298.3 195.9 288.1C196.1 287.4 196.2 286.8 196.4 286.2C208.3 242.8 242.5 208.6 285.9 196.7z"/>
                                </svg>
                                <span class="text-white">Dados de Uso</span>
                            </h3>
                            <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                                <li>• Logs de acesso e atividade</li>
                                <li>• Preferências de interface (modo escuro/claro)</li>
                                <li>• Configurações de privacidade</li>
                                <li>• Timestamps de ações</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mb-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                            <path fill="#ffffff" d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z"/>
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Como Usamos suas Informações</h2>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                            <p class="text-gray-600 dark:text-gray-300"><strong>Fornecimento do Serviço:</strong> Para criar e manter sua conta, processar transações financeiras e fornecer funcionalidades do sistema.</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                            <p class="text-gray-600 dark:text-gray-300"><strong>Análise Financeira:</strong> Para gerar resumos, gráficos e conselhos financeiros personalizados usando inteligência artificial.</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                            <p class="text-gray-600 dark:text-gray-300"><strong>Comunicação:</strong> Para enviar notificações importantes sobre sua conta e atualizações do sistema.</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                            <p class="text-gray-600 dark:text-gray-300"><strong>Segurança:</strong> Para detectar e prevenir fraudes, proteger contra acesso não autorizado e manter a integridade do sistema.</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                            <p class="text-gray-600 dark:text-gray-300"><strong>Melhorias:</strong> Para analisar o uso do sistema e desenvolver novas funcionalidades que atendam às suas necessidades.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                            <path fill="#ffffff" d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64z"/>
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Compartilhamento de Informações</h2>
                    </div>
                    <div class="p-4 rounded-lg bd transition-colors duration-300">
                        <p class="text-gray-600 dark:text-gray-300 mb-4"><strong>Não vendemos, alugamos ou compartilhamos suas informações pessoais com terceiros</strong>, exceto nas seguintes circunstâncias:</p>
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                                <p class="text-sm text-gray-600 dark:text-gray-300"><strong>Inteligência Artificial:</strong> Utilizamos o Google Gemini AI para gerar conselhos financeiros. Os dados enviados são anonimizados e não incluem informações pessoais identificáveis.</p>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                                <p class="text-sm text-gray-600 dark:text-gray-300"><strong>Obrigação Legal:</strong> Quando exigido por lei, ordem judicial ou processo legal.</p>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                                <p class="text-sm text-gray-600 dark:text-gray-300"><strong>Proteção de Direitos:</strong> Para proteger nossos direitos, propriedade ou segurança, ou de nossos usuários.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                            <path fill="#ffffff" d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z"/>
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Segurança dos Dados</h2>
                    </div>
                    <div class="space-y-4">
                        <div class="p-4 rounded-lg bd transition-colors duration-300">
                            <h3 class="font-semibold mb-2 text-white">Criptografia</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Todas as senhas são criptografadas usando bcrypt com salt rounds de 12. Os dados são transmitidos usando HTTPS e armazenados de forma segura.</p>
                        </div>
                        <div class="p-4 rounded-lg bd transition-colors duration-300">
                            <h3 class="font-semibold mb-2 text-white">Controle de Acesso</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Implementamos autenticação JWT e controle de acesso baseado em roles. Apenas usuários autorizados podem acessar dados específicos.</p>
                        </div>
                        <div class="p-4 rounded-lg bd transition-colors duration-300">
                            <h3 class="font-semibold mb-2 text-white">Backup e Recuperação</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300">Realizamos backups regulares dos dados e mantemos sistemas de recuperação para garantir a disponibilidade e integridade das informações.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                            <path fill="#ffffff" d="M240 192C240 147.8 275.8 112 320 112C364.2 112 400 147.8 400 192C400 236.2 364.2 272 320 272C275.8 272 240 236.2 240 192zM448 192C448 121.3 390.7 64 320 64C249.3 64 192 121.3 192 192C192 262.7 249.3 320 320 320C390.7 320 448 262.7 448 192zM144 544C144 473.3 201.3 416 272 416L368 416C438.7 416 496 473.3 496 544L496 552C496 565.3 506.7 576 520 576C533.3 576 544 565.3 544 552L544 544C544 446.8 465.2 368 368 368L272 368C174.8 368 96 446.8 96 544L96 552C96 565.3 106.7 576 120 576C133.3 576 144 565.3 144 552L144 544z"/>
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Seus Direitos</h2>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                            <p class="text-gray-600 dark:text-gray-300"><strong>Acesso:</strong> Você pode visualizar e atualizar suas informações pessoais a qualquer momento através da sua conta.</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                            <p class="text-gray-600 dark:text-gray-300"><strong>Correção:</strong> Você pode corrigir informações incorretas ou incompletas.</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                            <p class="text-gray-600 dark:text-gray-300"><strong>Exclusão:</strong> Você pode solicitar a exclusão de sua conta e dados pessoais (soft delete para fins de auditoria).</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                            <p class="text-gray-600 dark:text-gray-300"><strong>Portabilidade:</strong> Você pode exportar seus dados financeiros em formato PDF através do sistema.</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                            <p class="text-gray-600 dark:text-gray-300"><strong>Privacidade:</strong> Você pode ativar o modo privacidade para ocultar valores financeiros na interface.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                            <path fill="#ffffff" d="M544 269.8C529.2 279.6 512.2 287.5 494.5 293.8C447.5 310.6 385.8 320 320 320C254.2 320 192.4 310.5 145.5 293.8C127.9 287.5 110.8 279.6 96 269.8L96 352C96 396.2 196.3 432 320 432C443.7 432 544 396.2 544 352L544 269.8zM544 192L544 144C544 99.8 443.7 64 320 64C196.3 64 96 99.8 96 144L96 192C96 236.2 196.3 272 320 272C443.7 272 544 236.2 544 192zM494.5 453.8C447.6 470.5 385.9 480 320 480C254.1 480 192.4 470.5 145.5 453.8C127.9 447.5 110.8 439.6 96 429.8L96 496C96 540.2 196.3 576 320 576C443.7 576 544 540.2 544 496L544 429.8C529.2 439.6 512.2 447.5 494.5 453.8z"/>
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Retenção de Dados</h2>
                    </div>
                    <div class="p-4 rounded-lg bd transition-colors duration-300">
                        <p class="text-gray-600 dark:text-gray-300">Mantemos suas informações pessoais e financeiras enquanto sua conta estiver ativa. Quando você exclui sua conta, implementamos um "soft delete" que marca os dados como excluídos mas os mantém por um período limitado para fins de auditoria e recuperação de dados. Após esse período, os dados são permanentemente removidos.</p>
                    </div>
                </div>
                <div class="mb-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                            <path fill="#ffffff" d="M320 144C254.8 144 201.2 173.6 160.1 211.7C121.6 247.5 95 290 81.4 320C95 350 121.6 392.5 160.1 428.3C201.2 466.4 254.8 496 320 496C385.2 496 438.8 466.4 479.9 428.3C518.4 392.5 545 350 558.6 320C545 290 518.4 247.5 479.9 211.7C438.8 173.6 385.2 144 320 144zM127.4 176.6C174.5 132.8 239.2 96 320 96C400.8 96 465.5 132.8 512.6 176.6C559.4 220.1 590.7 272 605.6 307.7C608.9 315.6 608.9 324.4 605.6 332.3C590.7 368 559.4 420 512.6 463.4C465.5 507.1 400.8 544 320 544C239.2 544 174.5 507.2 127.4 463.4C80.6 419.9 49.3 368 34.4 332.3C31.1 324.4 31.1 315.6 34.4 307.7C49.3 272 80.6 220 127.4 176.6zM320 400C364.2 400 400 364.2 400 320C400 290.4 383.9 264.5 360 250.7C358.6 310.4 310.4 358.6 250.7 360C264.5 383.9 290.4 400 320 400zM240.4 311.6C242.9 311.9 245.4 312 248 312C283.3 312 312 283.3 312 248C312 245.4 311.8 242.9 311.6 240.4C274.2 244.3 244.4 274.1 240.5 311.5zM286 196.6C296.8 193.6 308.2 192.1 319.9 192.1C328.7 192.1 337.4 193 345.7 194.7C346 194.8 346.2 194.8 346.5 194.9C404.4 207.1 447.9 258.6 447.9 320.1C447.9 390.8 390.6 448.1 319.9 448.1C258.3 448.1 206.9 404.6 194.7 346.7C192.9 338.1 191.9 329.2 191.9 320.1C191.9 309.1 193.3 298.3 195.9 288.1C196.1 287.4 196.2 286.8 196.4 286.2C208.3 242.8 242.5 208.6 285.9 196.7z"/>
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Cookies e Tecnologias</h2>
                    </div>
                    <div class="p-4 rounded-lg bd transition-colors duration-300">
                        <p class="text-gray-600 dark:text-gray-300 mb-3">Utilizamos as seguintes tecnologias para melhorar sua experiência:</p>
                        <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                            <li>• <strong>JWT Tokens:</strong> Para autenticação segura</li>
                            <li>• <strong>Local Storage:</strong> Para armazenar preferências de interface</li>
                            <li>• <strong>Session Storage:</strong> Para dados temporários da sessão</li>
                            <li>• <strong>Logs de Sistema:</strong> Para monitoramento e segurança</li>
                        </ul>
                    </div>
                </div>
                <div class="mb-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                            <path fill="#ffffff" d="M128 128C128 92.7 156.7 64 192 64L341.5 64C358.5 64 374.8 70.7 386.8 82.7L493.3 189.3C505.3 201.3 512 217.6 512 234.6L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 128zM336 122.5L336 216C336 229.3 346.7 240 360 240L453.5 240L336 122.5zM248 320C234.7 320 224 330.7 224 344C224 357.3 234.7 368 248 368L392 368C405.3 368 416 357.3 416 344C416 330.7 405.3 320 392 320L248 320zM248 416C234.7 416 224 426.7 224 440C224 453.3 234.7 464 248 464L392 464C405.3 464 416 453.3 416 440C416 426.7 405.3 416 392 416L248 416z"/>
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Alterações nesta Política</h2>
                    </div>
                    <div class="p-4 rounded-lg bd transition-colors duration-300">
                        <p class="text-gray-600 dark:text-gray-300">Podemos atualizar esta Política de Privacidade periodicamente. Quando fizermos alterações significativas, notificaremos você através do sistema ou por e-mail. A data da última atualização será sempre exibida no topo desta página.</p>
                    </div>
                </div>
                <div class="mb-8">
                    <div class="flex items-center space-x-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                            <path fill="#ffffff" d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z"/>
                        </svg>
                        <h2 class="text-xl font-semibold text-white">Contato</h2>
                    </div>
                    <div class="p-4 rounded-lg bd transition-colors duration-300">
                        <p class="text-gray-600 dark:text-gray-300 mb-3">Se você tiver dúvidas sobre esta Política de Privacidade ou sobre como tratamos suas informações pessoais, entre em contato conosco:</p>
                        <div class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                            <p><strong>Desenvolvedor:</strong> Caio Leonni</p>
                            <p><strong>Sistema:</strong> Poupo - Organização Financeira Pessoal</p>
                            <p><strong>Versão:</strong> 2.0</p>
                        </div>
                    </div>
                </div>
                <div class="border-t pt-6 mt-8">
                    <div class="text-center">
                        <p class="text-sm text-gray-500 dark:text-gray-400">Esta Política de Privacidade é parte integrante dos Termos de Uso do sistema Poupo.</p>
                        <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">© 2025 Poupo. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection