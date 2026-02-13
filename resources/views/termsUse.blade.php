@extends('layouts.app')

@section('title', 'Poupo - Termos de Uso')

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
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Bem-vindo ao <strong>Poupo</strong>, um sistema de organização financeira pessoal desenvolvido para ajudar você a gerenciar suas finanças de forma eficiente e segura. Estes Termos de Uso regem o uso do sistema e estabelecem os direitos e responsabilidades entre você e o desenvolvedor.</p>
                <div class="mt-4 p-4 rounded-lg bd transition-colors duration-300">
                    <p class="text-sm text-white"><strong>Importante:</strong> Ao usar o sistema Poupo, você concorda com estes termos. Se não concordar, não utilize o sistema.</p>
                </div>
            </div>
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                        <path fill="#ffffff" d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM320 112C205.1 112 112 205.1 112 320C112 434.9 205.1 528 320 528C434.9 528 528 434.9 528 320C528 205.1 434.9 112 320 112zM390.7 233.9C398.5 223.2 413.5 220.8 424.2 228.6C434.9 236.4 437.3 251.4 429.5 262.1L307.4 430.1C303.3 435.8 296.9 439.4 289.9 439.9C282.9 440.4 276 437.9 271.1 433L215.2 377.1C205.8 367.7 205.8 352.5 215.2 343.2C224.6 333.9 239.8 333.8 249.1 343.2L285.1 379.2L390.7 234z"/>
                    </svg>
                    <h2 class="text-xl font-semibold text-white">Aceitação dos Termos</h2>
                </div>
                <div class="space-y-3">
                    <div class="flex items-start space-x-3">
                        <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                        <p class="text-gray-600 dark:text-gray-300">Ao criar uma conta ou usar o sistema, você confirma que leu, entendeu e concorda com estes Termos de Uso.</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                        <p class="text-gray-600 dark:text-gray-300">Você deve ter pelo menos 18 anos de idade para usar o sistema, ou ter o consentimento de um responsável legal.</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                        <p class="text-gray-600 dark:text-gray-300">Estes termos se aplicam a todos os usuários do sistema, incluindo visitantes e usuários registrados.</p>
                    </div>
                </div>
            </div>
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                        <path fill="#ffffff" d="M544 269.8C529.2 279.6 512.2 287.5 494.5 293.8C447.5 310.6 385.8 320 320 320C254.2 320 192.4 310.5 145.5 293.8C127.9 287.5 110.8 279.6 96 269.8L96 352C96 396.2 196.3 432 320 432C443.7 432 544 396.2 544 352L544 269.8zM544 192L544 144C544 99.8 443.7 64 320 64C196.3 64 96 99.8 96 144L96 192C96 236.2 196.3 272 320 272C443.7 272 544 236.2 544 192zM494.5 453.8C447.6 470.5 385.9 480 320 480C254.1 480 192.4 470.5 145.5 453.8C127.9 447.5 110.8 439.6 96 429.8L96 496C96 540.2 196.3 576 320 576C443.7 576 544 540.2 544 496L544 429.8C529.2 439.6 512.2 447.5 494.5 453.8z"/>
                    </svg>
                    <h2 class="text-xl font-semibold text-white">Descrição do Serviço</h2>
                </div>
                <div class="p-4 rounded-lg bd transition-colors duration-300">
                    <p class="text-gray-600 dark:text-gray-300 mb-4">O Poupo é um sistema web que oferece as seguintes funcionalidades:</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <h3 class="font-semibold text-sm text-white">Gestão Financeira:</h3>
                            <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                                <li>• Registro de receitas e despesas</li>
                                <li>• Controle de despesas fixas</li>
                                <li>• Gestão de contas bancárias</li>
                                <li>• Relatórios e resumos financeiros</li>
                            </ul>
                        </div>
                        <div class="space-y-2">
                            <h3 class="font-semibold text-sm text-white">Recursos Avançados:</h3>
                            <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                                <li>• Conselhos financeiros com IA</li>
                                <li>• Modo privacidade</li>
                                <li>• Exportação de dados em PDF</li>
                                <li>• Interface responsiva</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                        <path fill="#ffffff" d="M240 192C240 147.8 275.8 112 320 112C364.2 112 400 147.8 400 192C400 236.2 364.2 272 320 272C275.8 272 240 236.2 240 192zM448 192C448 121.3 390.7 64 320 64C249.3 64 192 121.3 192 192C192 262.7 249.3 320 320 320C390.7 320 448 262.7 448 192zM144 544C144 473.3 201.3 416 272 416L368 416C438.7 416 496 473.3 496 544L496 552C496 565.3 506.7 576 520 576C533.3 576 544 565.3 544 552L544 544C544 446.8 465.2 368 368 368L272 368C174.8 368 96 446.8 96 544L96 552C96 565.3 106.7 576 120 576C133.3 576 144 565.3 144 552L144 544z"/>
                    </svg>
                    <h2 class="text-xl font-semibold text-white">Conta de Usuário</h2>
                </div>
                <div class="space-y-4">
                    <div class="p-4 rounded-lg bd transition-colors duration-300">
                        <h3 class="font-semibold mb-2 text-white">Criação de Conta</h3>
                        <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                            <li>• Você deve fornecer informações verdadeiras e atualizadas</li>
                            <li>• É responsável por manter a confidencialidade de sua senha</li>
                            <li>• Deve notificar imediatamente sobre uso não autorizado</li>
                            <li>• Uma conta por pessoa física</li>
                        </ul>
                    </div>
                    <div class="p-4 rounded-lg bd transition-colors duration-300">
                        <h3 class="font-semibold mb-2 text-white">Responsabilidades do Usuário</h3>
                        <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                            <li>• Manter informações pessoais atualizadas</li>
                            <li>• Usar o sistema de forma ética e legal</li>
                            <li>• Não compartilhar credenciais de acesso</li>
                            <li>• Reportar problemas ou vulnerabilidades</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                        <path fill="#ffffff" d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64z"/>
                    </svg>
                    <h2 class="text-xl font-semibold text-white">Uso Aceitável</h2>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="p-4 rounded-lg border transition-colors duration-300 border-green-600 bg-green-900/20">
                        <h3 class="font-semibold mb-3 flex items-center space-x-2 text-green-700 dark:text-green-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle w-4 h-4">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg><span>Uso Permitido</span></h3>
                        <ul class="text-sm text-green-600 dark:text-green-300 space-y-1">
                            <li>• Gestão de finanças pessoais</li>
                            <li>• Análise de gastos e receitas</li>
                            <li>• Planejamento financeiro</li>
                            <li>• Exportação de relatórios</li>
                            <li>• Uso educacional e pessoal</li>
                        </ul>
                    </div>
                    <div class="p-4 rounded-lg border transition-colors duration-300 border-red-600 bg-red-900/20">
                        <h3 class="font-semibold mb-3 flex items-center space-x-2 text-red-700 dark:text-red-300"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-xcircle w-4 h-4">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m15 9-6 6"></path>
                                <path d="m9 9 6 6"></path>
                            </svg><span>Uso Proibido</span></h3>
                        <ul class="text-sm text-red-600 dark:text-red-300 space-y-1">
                            <li>• Atividades ilegais ou fraudulentas</li>
                            <li>• Tentativas de hackear o sistema</li>
                            <li>• Uso comercial não autorizado</li>
                            <li>• Spam ou atividades maliciosas</li>
                            <li>• Violação de direitos de terceiros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                        <path fill="#ffffff" d="M128 128C128 92.7 156.7 64 192 64L341.5 64C358.5 64 374.8 70.7 386.8 82.7L493.3 189.3C505.3 201.3 512 217.6 512 234.6L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 128zM336 122.5L336 216C336 229.3 346.7 240 360 240L453.5 240L336 122.5zM248 320C234.7 320 224 330.7 224 344C224 357.3 234.7 368 248 368L392 368C405.3 368 416 357.3 416 344C416 330.7 405.3 320 392 320L248 320zM248 416C234.7 416 224 426.7 224 440C224 453.3 234.7 464 248 464L392 464C405.3 464 416 453.3 416 440C416 426.7 405.3 416 392 416L248 416z"/>
                    </svg>
                    <h2 class="text-xl font-semibold text-white">Propriedade Intelectual</h2>
                </div>
                <div class="p-4 rounded-lg bd transition-colors duration-300">
                    <div class="space-y-3">
                        <p class="text-gray-600 dark:text-gray-300"><strong>Direitos do Desenvolvedor:</strong> O sistema Poupo, incluindo seu código, design, funcionalidades e documentação, é propriedade do desenvolvedor Caio Leonni.</p>
                        <p class="text-gray-600 dark:text-gray-300"><strong>Seus Dados:</strong> Você mantém todos os direitos sobre seus dados pessoais e financeiros. O sistema apenas os processa conforme descrito na Política de Privacidade.</p>
                        <p class="text-gray-600 dark:text-gray-300"><strong>Licença de Uso:</strong> Ao usar o sistema, você recebe uma licença limitada, não exclusiva e revogável para usar o serviço conforme estes termos.</p>
                    </div>
                </div>
            </div>
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                        <path fill="#ffffff" d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/>
                    </svg>
                    <h2 class="text-xl font-semibold text-white">Limitação de Responsabilidade</h2>
                </div>
                <div class="p-4 rounded-lg border transition-colors duration-300 border-yellow-600 bg-yellow-900/20">
                    <div class="space-y-3">
                        <p class="text-yellow-700 dark:text-yellow-300"><strong>Isenção de Garantias:</strong> O sistema é fornecido "como está", sem garantias de qualquer tipo, expressas ou implícitas.</p>
                        <p class="text-yellow-700 dark:text-yellow-300"><strong>Limitação de Danos:</strong> O desenvolvedor não será responsável por danos diretos, indiretos, incidentais ou consequenciais resultantes do uso do sistema.</p>
                        <p class="text-yellow-700 dark:text-yellow-300"><strong>Conselhos Financeiros:</strong> Os conselhos gerados por IA são apenas sugestões e não substituem o aconselhamento profissional.</p>
                    </div>
                </div>
            </div>
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                        <path fill="#ffffff" d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z"/>
                    </svg>
                    <h2 class="text-xl font-semibold text-white">Privacidade e Segurança</h2>
                </div>
                <div class="space-y-3">
                    <div class="flex items-start space-x-3">
                        <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                        <p class="text-gray-600 dark:text-gray-300"><strong>Proteção de Dados:</strong> Implementamos medidas de segurança para proteger suas informações, mas nenhum sistema é 100% seguro.</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                        <p class="text-gray-600 dark:text-gray-300"><strong>Backup:</strong> Realizamos backups regulares, mas recomendamos que você mantenha cópias de seus dados importantes.</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-2 h-2 bg-primary rounded-full mt-2"></div>
                        <p class="text-gray-600 dark:text-gray-300"><strong>Comunicação:</strong> Podemos entrar em contato para questões relacionadas à sua conta ou atualizações do sistema.</p>
                    </div>
                </div>
            </div>
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                        <path fill="#ffffff" d="M320 112C434.9 112 528 205.1 528 320C528 434.9 434.9 528 320 528C205.1 528 112 434.9 112 320C112 205.1 205.1 112 320 112zM320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM231 231C221.6 240.4 221.6 255.6 231 264.9L286 319.9L231 374.9C221.6 384.3 221.6 399.5 231 408.8C240.4 418.1 255.6 418.2 264.9 408.8L319.9 353.8L374.9 408.8C384.3 418.2 399.5 418.2 408.8 408.8C418.1 399.4 418.2 384.2 408.8 374.9L353.8 319.9L408.8 264.9C418.2 255.5 418.2 240.3 408.8 231C399.4 221.7 384.2 221.6 374.9 231L319.9 286L264.9 231C255.5 221.6 240.3 221.6 231 231z"/>
                    </svg>
                    <h2 class="text-xl font-semibold text-white">Suspensão e Encerramento</h2>
                </div>
                <div class="p-4 rounded-lg bd transition-colors duration-300">
                    <div class="space-y-3">
                        <p class="text-gray-600 dark:text-gray-300"><strong>Encerramento por Você:</strong> Você pode encerrar sua conta a qualquer momento através das configurações do sistema.</p>
                        <p class="text-gray-600 dark:text-gray-300"><strong>Suspensão por Nós:</strong> Podemos suspender ou encerrar sua conta se você violar estes termos ou por motivos de segurança.</p>
                        <p class="text-gray-600 dark:text-gray-300"><strong>Efeitos do Encerramento:</strong> Após o encerramento, você perderá acesso à sua conta, mas seus dados serão mantidos conforme a Política de Privacidade.</p>
                    </div>
                </div>
            </div>
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                        <path fill="#ffffff" d="M128 128C128 92.7 156.7 64 192 64L341.5 64C358.5 64 374.8 70.7 386.8 82.7L493.3 189.3C505.3 201.3 512 217.6 512 234.6L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 128zM336 122.5L336 216C336 229.3 346.7 240 360 240L453.5 240L336 122.5zM248 320C234.7 320 224 330.7 224 344C224 357.3 234.7 368 248 368L392 368C405.3 368 416 357.3 416 344C416 330.7 405.3 320 392 320L248 320zM248 416C234.7 416 224 426.7 224 440C224 453.3 234.7 464 248 464L392 464C405.3 464 416 453.3 416 440C416 426.7 405.3 416 392 416L248 416z"/>
                    </svg>
                    <h2 class="text-xl font-semibold text-white">Modificações dos Termos</h2>
                </div>
                <div class="p-4 rounded-lg bd transition-colors duration-300">
                    <p class="text-gray-600 dark:text-gray-300">Reservamo-nos o direito de modificar estes termos a qualquer momento. Alterações significativas serão comunicadas através do sistema ou por e-mail. O uso continuado do sistema após as modificações constitui aceitação dos novos termos.</p>
                </div>
            </div>
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                        <path fill="#ffffff" d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64z"/>
                    </svg>
                    <h2 class="text-xl font-semibold text-white">Lei Aplicável</h2>
                </div>
                <div class="p-4 rounded-lg bd transition-colors duration-300">
                    <p class="text-gray-600 dark:text-gray-300">Estes termos são regidos pelas leis brasileiras. Qualquer disputa será resolvida nos tribunais competentes do Brasil. Se alguma disposição destes termos for considerada inválida, as demais disposições permanecerão em vigor.</p>
                </div>
            </div>
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24">
                        <path fill="#ffffff" d="M240 192C240 147.8 275.8 112 320 112C364.2 112 400 147.8 400 192C400 236.2 364.2 272 320 272C275.8 272 240 236.2 240 192zM448 192C448 121.3 390.7 64 320 64C249.3 64 192 121.3 192 192C192 262.7 249.3 320 320 320C390.7 320 448 262.7 448 192zM144 544C144 473.3 201.3 416 272 416L368 416C438.7 416 496 473.3 496 544L496 552C496 565.3 506.7 576 520 576C533.3 576 544 565.3 544 552L544 544C544 446.8 465.2 368 368 368L272 368C174.8 368 96 446.8 96 544L96 552C96 565.3 106.7 576 120 576C133.3 576 144 565.3 144 552L144 544z"/>
                    </svg>
                    <h2 class="text-xl font-semibold text-white">Contato</h2>
                </div>
                <div class="p-4 rounded-lg bd transition-colors duration-300">
                    <p class="text-gray-600 dark:text-gray-300 mb-3">Para questões relacionadas a estes Termos de Uso ou ao sistema Poupo:</p>
                    <div class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                        <p><strong>Desenvolvedor:</strong> Caio Leonni</p>
                        <p><strong>Sistema:</strong> Poupo - Organização Financeira Pessoal</p>
                        <p><strong>Versão:</strong> 2.0</p>
                        <p><strong>Data:</strong> Setembro de 2025</p>
                    </div>
                </div>
            </div>
            <div class="hr-section pt-6 mt-8">
                <div class="text-center">
                    <p class="text-sm text-gray-500 dark:text-gray-400">Estes Termos de Uso são complementados pela Política de Privacidade do sistema Poupo.</p>
                    <p class="text-xs text-gray-400 dark:text-gray-500 mt-2">© 2025 Poupo. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection