@extends('layouts.app')

@section('title', 'Poupo - Política de Privacidade')

@section('content')
    <style>
        section.privacyPolicy div.boder{
            border: 1px solid var(--color-two);
            border-radius: var(--border-radius-one);
            background-color: var(--color-four);                                
        }
    </style>
    <section class="relative py-8 px-6 privacyPolicy">
        <div class="container mx-auto"> 
            <div class="max-w-4xl mx-auto boder">
                <div class="p-8">
                    <div class="flex justify-center pb-4">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path fill="#ffffff" d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-5xl font-bold text-center mt-4 text-white">Política de Privacidade</h1>
                        <p class="text-center mt-2 max-w-3xl mx-auto text-gray-600">Última atualização: 06 de setembro de 2025</p>
                    </div>

                    <div class="mt-8">
                        <h2 class="text-3xl font-bold mt-4 text-white text-left">Introdução</h2>
                        <p class="mt-2 max-w-3xl text-white text-left">
                            O <strong>Poupo</strong> é um sistema de organização financeira pessoal desenvolvido para ajudar 
                            usuários a gerenciar suas finanças de forma segura e eficiente. 
                            Esta Política de Privacidade descreve como coletamos, usamos, armazenamos e protegemos suas 
                            informações pessoais.
                        </p>
                    </div>

                    <div class="mt-8">
                        <h2 class="text-3xl font-bold text-white text-left">Informações que Coletamos</h2>
                        <div class="boder p-4 mt-3">
                            <h3 class="text-xl font-bold text-white">Informações Pessoais</h3>
                            <ul class="list-disc list-inside mt-2 max-w-3xl text-white text-left">
                                <li class="text-white">Nome completo</li>
                                <li class="text-white">Endereço de e-mail</li>
                                <li class="text-white">Data de nascimento</li>
                                <li class="text-white">Número de telefone (opcional)</li>
                                <li class="text-white">Salário bruto (opcional)</li>
                            </ul>
                        </div>     
                        <div class="boder p-4 mt-3">
                            <h3 class="text-xl font-bold text-white">Dados Financeiros</h3>
                            <ul class="list-disc list-inside mt-2 max-w-3xl text-white text-left">
                                <li class="text-white">Receitas e despesas</li>
                                <li class="text-white">Despesas fixas</li>
                                <li class="text-white">Contas bancárias e saldos</li>
                                <li class="text-white">Histórico de transações</li>
                                <li class="text-white">Resumos financeiros mensais</li>
                            </ul>
                        </div>
                        <div class="boder p-4 mt-3">
                            <h3 class="text-xl font-bold text-white">Dados de Uso</h3>
                            <ul class="list-disc list-inside mt-2 max-w-3xl text-white text-left">
                                <li class="text-white">Logs de acesso e atividade</li>
                                <li class="text-white">Preferências de interface (modo escuro/claro)</li>
                                <li class="text-white">Configurações de privacidade</li>
                                <li class="text-white">Timestamps de ações</li>
                            </ul>
                        </div>      
                    </div>
                    
                    <div class="mt-8">
                        <h2 class="text-3xl font-bold mt-4 text-white text-left">Como Usamos suas Informações</h2>
                        <ul class="list-disc list-inside mt-2 max-w-3xl text-white text-left">
                            <li class="text-white py-2"><strong>Fornecimento do Serviço:</strong> Para criar e manter sua conta, processar transações financeiras e fornecer funcionalidades do sistema.</li>
                            <li class="text-white py-2"><strong>Melhorias contínuas:</strong> Para melhorar nosso sistema com base em dados de uso e feedback dos usuários.</li>
                            <li class="text-white py-2"><strong>Comunicação:</strong> Para enviar notificações importantes, atualizações e informações sobre o serviço.</li>
                            <li class="text-white py-2"><strong>Segurança:</strong> Para proteger nossos usuários contra fraudes e atividades maliciosas.</li>
                            <li class="text-white py-2"><strong>Melhorias:</strong> Para analisar o uso do sistema e desenvolver novas funcionalidades que atendam às suas necessidades.</li>
                        </ul>
                    </div>

                    <div class="mt-8">
                        <h2 class="text-3xl font-bold text-white text-left">Compartilhamento de Informações</h2>
                        <div class="boder p-4 mt-3">
                            <p class="text-white text-left">
                                <strong>Não vendemos, alugamos ou compartilhamos suas informações pessoais com terceiros</strong>, exceto nas seguintes circunstâncias:
                            </p>
                            <ul class="list-disc list-inside mt-2 max-w-3xl text-white text-left">
                                <li class="text-white py-2">                                    
                                    <strong>Inteligência Artificial:</strong> Utilizamos o Google Gemini AI para gerar conselhos financeiros. 
                                    Os dados enviados são anonimizados e não incluem informações pessoais identificáveis.                                    
                                </li>
                                <li class="text-white py-2">                                    
                                    <strong>Obrigação Legal:</strong>Quando exigido por lei, ordem judicial ou processo legal.                                    
                                </li>
                                <li class="text-white py-2">
                                    <strong>Proteção de Direitos:</strong> Para proteger nossos direitos, propriedade ou segurança, ou a de nossos usuários ou terceiros.                                                    
                                </li>                              
                            </ul>
                        </div>                                  
                    </div>
                    
                    <div class="mt-8">
                        <h2 class="text-3xl font-bold text-white text-left">Segurança dos Dados</h2>
                        <div class="boder p-4 mt-3">
                            <h3 class="text-xl font-bold text-white mb-3">Criptografia</h3>
                            <p class="text-white">
                                Todas as senhas são criptografadas usando bcrypt com salt rounds de 12. Os dados são transmitidos usando HTTPS e armazenados de forma segura.
                            </p>
                        </div>     
                        <div class="boder p-4 mt-3">
                            <h3 class="text-xl font-bold text-white mb-3">Controle de Acesso</h3>
                            <p class="text-white">
                                Implementamos autenticação JWT e controle de acesso baseado em roles. Apenas usuários autorizados podem acessar dados específicos.
                            </p>
                        </div>
                        <div class="boder p-4 mt-3">
                            <h3 class="text-xl font-bold text-white mb-3">Backup e Recuperação</h3>
                            <p class="text-white">
                                Realizamos backups regulares dos dados e mantemos sistemas de recuperação para garantir a disponibilidade e integridade das informações.
                            </p>
                        </div>      
                    </div>

                    <div class="mt-8">
                        <h2 class="text-3xl font-bold mt-4 text-white text-left">Seus Direitos</h2>
                        <ul class="list-disc list-inside mt-2 max-w-3xl text-white text-left">
                            <li class="text-white py-2"><strong>Acesso: </strong>  Você pode visualizar e atualizar suas informações pessoais a qualquer momento através da sua conta.</li>
                            <li class="text-white py-2"><strong>Correção: </strong>  Você pode corrigir informações incorretas ou incompletas.</li>
                            <li class="text-white py-2"><strong>Exclusão: </strong> Você pode solicitar a exclusão de sua conta e dados pessoais (soft delete para fins de auditoria).</li>
                            <li class="text-white py-2"><strong>Portabilidade: </strong>  Você pode exportar seus dados financeiros em formato PDF através do sistema.</li>
                            <li class="text-white py-2"><strong>Privacidade: </strong> Você pode ativar o modo privacidade para ocultar valores financeiros na interface.</li>
                        </ul>
                    </div>
                    
                    <div class="mt-8">
                        <h2 class="text-3xl font-bold text-white text-left">Retenção de Dados</h2>
                        <div class="boder p-4 mt-3">                            
                            <p class="text-white">
                                Mantemos suas informações pessoais e financeiras enquanto sua conta estiver ativa. Quando você exclui sua conta, implementamos um "soft delete" que marca os dados como excluídos mas os mantém por um período limitado para fins de auditoria e recuperação de dados. Após esse período, os dados são permanentemente removidos.
                            </p>
                        </div>                            
                    </div>

                    <div class="mt-8">
                        <h2 class="text-3xl font-bold text-white text-left">Cookies e Tecnologias</h2>
                        <div class="boder p-4 mt-3">
                            <p class="text-white text-left">
                                Utilizamos as seguintes tecnologias para melhorar sua experiência:
                            </p>
                            <ul class="list-disc list-inside mt-2 max-w-3xl text-white text-left">
                                <li class="text-white py-2">                                    
                                    <strong>JWT Tokens: </strong> Para autenticação segura                                   
                                </li>
                                <li class="text-white py-2">                                    
                                    <strong>Local Storage: </strong>Para armazenar preferências de interface                                  
                                </li>
                                <li class="text-white py-2">
                                    <strong>Session Storage: </strong>  Para dados temporários da sessão                                                    
                                </li>  
                                <li class="text-white py-2">
                                    <strong>Logs de Sistema: </strong>  Para monitoramento e segurança                                           
                                </li>                              
                            </ul>
                        </div>                                  
                    </div>

                    <div class="mt-8">
                        <h2 class="text-3xl font-bold text-white text-left">Alterações nesta Política</h2>
                        <div class="boder p-4 mt-3">                            
                            <p class="text-white">
                                Podemos atualizar esta Política de Privacidade periodicamente. Quando fizermos alterações significativas, notificaremos você através do sistema ou por e-mail. A data da última atualização será sempre exibida no topo desta página.
                            </p>
                        </div>                            
                    </div>

                    <div class="mt-8">
                        <h2 class="text-3xl font-bold text-white text-left">Contato</h2>
                        <div class="boder p-4 mt-3">                            
                            <p class="text-white">
                                Se você tiver dúvidas sobre esta Política de Privacidade ou sobre como tratamos suas informações pessoais, entre em contato conosco:
                            </p>
                            <ul class="text-white mt-2">
                                <li>
                                    <strong>Desenvolvedor: </strong>Caio Leonni
                                </li>
                                <li>
                                    <strong>Sistema: </strong>Poupo - Organização Financeira Pessoal
                                </li>
                                <li><strong>Versão: </strong>3.0</li>
                            </ul>
                        </div>                            
                    </div>

                    <div class="mt-8 hr-section pt-4 text-center">
                        <p class="text-gray-400 text-sm mb-2">
                            Esta Política de Privacidade é parte integrante dos Termos de Uso do sistema Poupo.
                        </p>
                        
                        <span class="text-gray-500 text-sm">&copy; 2026 Poupo. Todos os direitos reservados.</span>
                    </div>
                </div>    
            </div>                    
        </div>
    </section>
@endsection