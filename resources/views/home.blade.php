@extends('layouts.app')

@section('title', 'Poupo - Home')

@section('content')        
    <section class="relative py-28 px-6 ">
        <div class="container mx-auto text-center"> 
            <div class="max-w-4xl mx-auto">
                <div class="floating">
                    <div class='flex justify-center'>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="40px">
                            <path fill="#ffffff" d="M320 32C373 32 416 75 416 128C416 181 373 224 320 224C267 224 224 181 224 128C224 75 267 32 320 32zM80 368C80 297.9 127 236.6 197.1 203.1C222.4 244.4 268 272 320 272C375.7 272 424.1 240.3 448 194C463.8 182.7 483.1 176 504 176L523.5 176C533.9 176 541.5 185.8 539 195.9L521.9 264.2C531.8 276.6 540.1 289.9 546.3 304L568 304C581.3 304 592 314.7 592 328L592 440C592 453.3 581.3 464 568 464L528 464C511.5 486 489.5 503.6 464 514.7L464 544C464 561.7 449.7 576 432 576L399 576C384.7 576 372.2 566.5 368.2 552.8L361.1 528L278.8 528L271.7 552.8C267.8 566.5 255.3 576 241 576L208 576C190.3 576 176 561.7 176 544L176 514.7C119.5 490 80 433.6 80 368zM456 384C469.3 384 480 373.3 480 360C480 346.7 469.3 336 456 336C442.7 336 432 346.7 432 360C432 373.3 442.7 384 456 384z"/>
                        </svg>
                    </div>
                    <h1 class="text-5xl font-bold text-center mt-4 text-white">Organize suas finanças</h1>
                    <p class="text-center mt-4 text-white max-w-3xl mx-auto">Sistema completo de organização financeira com inteligência artificial. Controle seus gastos, planeje seu futuro e alcance suas metas financeiras.</p>            
                    <div class="flex justify-center mt-6">
                        <a class="btn-link px-4 py-2 text-white" href="#">
                            Começar Agora
                        </a>
                    </div>
                </div>    
            </div>                    
        </div>
    </section>

    <section class="py-16 hr-section">
        <div class="mx-auto px-4"> 
            <div class="mx-auto sm:max-w-[576px] md:max-w-[768px] lg:max-w-[992px] xl:max-w-[1200px] 2xl:max-w-[1400px]">
                <h2 class="text-4xl font-bold text-center mt-4 text-white">Por que escolher o Poupo?</h2>
                <p class="text-center mt-4 text-white">Ferramentas poderosas para transformar sua relação com o dinheiro</p>            
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 pt-6">
                    <div class="card text-center p-6">
                        <div class="flex justify-center pb-4">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path fill="#ffffff" d="M128 128C128 110.3 113.7 96 96 96C78.3 96 64 110.3 64 128L64 464C64 508.2 99.8 544 144 544L544 544C561.7 544 576 529.7 576 512C576 494.3 561.7 480 544 480L144 480C135.2 480 128 472.8 128 464L128 128zM534.6 214.6C547.1 202.1 547.1 181.8 534.6 169.3C522.1 156.8 501.8 156.8 489.3 169.3L384 274.7L326.6 217.4C314.1 204.9 293.8 204.9 281.3 217.4L185.3 313.4C172.8 325.9 172.8 346.2 185.3 358.7C197.8 371.2 218.1 371.2 230.6 358.7L304 285.3L361.4 342.7C373.9 355.2 394.2 355.2 406.7 342.7L534.7 214.7z"/>
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold mb-2 text-white">Controle Total</h3>
                        <p class="text-white">Tenha uma visão completa das suas finanças, com gráficos e relatórios detalhados para entender seus gastos e economias.</p>
                    </div>

                    <div class="card text-center p-6">
                        <div class="flex justify-center pb-4">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path fill="#ffffff" d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <h3 class="text-2xl font-bold mb-2 text-white">Segurança Garantida</h3>
                        <p class="text-white">Seus dados financeiros protegidos com criptografia avançada</p>
                    </div>

                    <div class="card text-center p-6">
                        <div class="flex justify-center pb-4">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path fill="#ffffff" d="M128 128C128 92.7 156.7 64 192 64L341.5 64C358.5 64 374.8 70.7 386.8 82.7L493.3 189.3C505.3 201.3 512 217.6 512 234.6L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 128zM336 122.5L336 216C336 229.3 346.7 240 360 240L453.5 240L336 122.5zM248 320C234.7 320 224 330.7 224 344C224 357.3 234.7 368 248 368L392 368C405.3 368 416 357.3 416 344C416 330.7 405.3 320 392 320L248 320zM248 416C234.7 416 224 426.7 224 440C224 453.3 234.7 464 248 464L392 464C405.3 464 416 453.3 416 440C416 426.7 405.3 416 392 416L248 416z"/>
                                </svg>
                            </div>
                        </div>                     
                        
                        <h3 class="text-2xl font-bold mb-2 text-white">Relatórios Inteligentes</h3>
                        <p class="text-white">Visualize seus padrões financeiros com gráficos e análises</p>
                    </div>
                    
                </div>
            </div>            
        </div>
    </section>

    <section class="py-16 section-gradient">
        <div class="mx-auto px-4"> 
            <div class="mx-auto sm:max-w-[576px] md:max-w-[768px] lg:max-w-[992px] xl:max-w-[1200px] 2xl:max-w-[1400px]">
                         
                <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4 pt-6 ">                    

                    <div class="text-center p-6">
                        <div class="flex justify-center pb-4">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path fill="#ffffff" d="M296 88C296 74.7 306.7 64 320 64C333.3 64 344 74.7 344 88L344 128L400 128C417.7 128 432 142.3 432 160C432 177.7 417.7 192 400 192L285.1 192C260.2 192 240 212.2 240 237.1C240 259.6 256.5 278.6 278.7 281.8L370.3 294.9C424.1 302.6 464 348.6 464 402.9C464 463.2 415.1 512 354.9 512L344 512L344 552C344 565.3 333.3 576 320 576C306.7 576 296 565.3 296 552L296 512L224 512C206.3 512 192 497.7 192 480C192 462.3 206.3 448 224 448L354.9 448C379.8 448 400 427.8 400 402.9C400 380.4 383.5 361.4 361.3 358.2L269.7 345.1C215.9 337.5 176 291.4 176 237.1C176 176.9 224.9 128 285.1 128L296 128L296 88z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <h3 class="text-4xl font-bold mb-2 text-white">100%</h3>
                        <p class="text-white">Gratuito</p>
                    </div>

                    <div class="text-center p-6">
                        <div class="flex justify-center pb-4">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path fill="#ffffff" d="M320 32C373 32 416 75 416 128C416 181 373 224 320 224C267 224 224 181 224 128C224 75 267 32 320 32zM80 368C80 297.9 127 236.6 197.1 203.1C222.4 244.4 268 272 320 272C375.7 272 424.1 240.3 448 194C463.8 182.7 483.1 176 504 176L523.5 176C533.9 176 541.5 185.8 539 195.9L521.9 264.2C531.8 276.6 540.1 289.9 546.3 304L568 304C581.3 304 592 314.7 592 328L592 440C592 453.3 581.3 464 568 464L528 464C511.5 486 489.5 503.6 464 514.7L464 544C464 561.7 449.7 576 432 576L399 576C384.7 576 372.2 566.5 368.2 552.8L361.1 528L278.8 528L271.7 552.8C267.8 566.5 255.3 576 241 576L208 576C190.3 576 176 561.7 176 544L176 514.7C119.5 490 80 433.6 80 368zM456 384C469.3 384 480 373.3 480 360C480 346.7 469.3 336 456 336C442.7 336 432 346.7 432 360C432 373.3 442.7 384 456 384z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <h3 class="text-4xl font-bold mb-2 text-white">∞</h3>
                        <p class="text-white">Economias</p>
                    </div>

                </div>                    
            </div>            
        </div>
    </section>

    <section class="py-16 ">
        <div class="mx-auto px-4"> 
            <div class="mx-auto sm:max-w-[576px] md:max-w-[768px] lg:max-w-[992px] xl:max-w-[1200px] 2xl:max-w-[1400px]">
                <h2 class="text-4xl font-bold text-center mt-4 text-white">Pronto para transformar suas finanças?</h2>
                <p class="text-center mt-4 text-white">Junte-se a milhares de usuários que já organizaram suas vidas financeiras</p>
                <div class="flex justify-center mt-6">
                    <a class="btn-link px-4 py-2 text-white" href="#">
                        Criar uma conta
                    </a>
                </div>
            </div>            
        </div>
    </section>
@endsection