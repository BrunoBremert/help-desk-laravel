<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk - Sistema de Suporte</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">

    <!-- Header -->
    <header class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center">
                    <i class="fas fa-headset text-3xl text-blue-600 mr-3"></i>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Help Desk</h1>
                        <p class="text-sm text-gray-600">Sistema de Suporte Técnico</p>
                    </div>
                </div>
                <nav class="flex space-x-4">
                    <a href="/" class="text-blue-600 font-medium hover:text-blue-800 transition duration-200">Home</a>
                    <a href="/dashboard" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                        <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                    Bem-vindo ao <span class="text-blue-600">Help Desk</span>
                </h2>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Sistema completo para gerenciamento de tickets de suporte técnico.
                    Abra tickets, acompanhe o progresso e resolva problemas de forma eficiente.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/dashboard" class="bg-blue-600 text-white px-8 py-3 rounded-lg text-lg font-medium hover:bg-blue-700 transition duration-200">
                        <i class="fas fa-plus-circle mr-2"></i>Abrir Novo Ticket
                    </a>
                    <a href="#features" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg text-lg font-medium hover:bg-blue-50 transition duration-200">
                        <i class="fas fa-info-circle mr-2"></i>Saiba Mais
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Funcionalidades Principais</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Tudo que você precisa para gerenciar suporte técnico de forma profissional
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center p-6 rounded-lg border border-gray-200 hover:shadow-lg transition duration-200">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-ticket-alt text-2xl text-blue-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Gestão de Tickets</h4>
                    <p class="text-gray-600">
                        Abra, edite e acompanhe o status de todos os seus tickets de suporte em tempo real.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center p-6 rounded-lg border border-gray-200 hover:shadow-lg transition duration-200">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-comments text-2xl text-green-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Histórico de Conversas</h4>
                    <p class="text-gray-600">
                        Mantenha um registro completo de todas as interações e comentários em cada ticket.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center p-6 rounded-lg border border-gray-200 hover:shadow-lg transition duration-200">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-chart-line text-2xl text-purple-600"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-900 mb-2">API REST</h4>
                    <p class="text-gray-600">
                        Integre com outros sistemas através de nossa API REST completa e documentada.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl font-bold text-blue-600 mb-2">99%</div>
                    <div class="text-gray-600">Satisfação</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-green-600 mb-2">24/7</div>
                    <div class="text-gray-600">Suporte</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-purple-600 mb-2">500+</div>
                    <div class="text-gray-600">Tickets Resolvidos</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-orange-600 mb-2">5min</div>
                    <div class="text-gray-600">Tempo Médio</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-3xl font-bold text-white mb-4">
                Pronto para começar?
            </h3>
            <p class="text-blue-100 mb-8 text-lg">
                Acesse seu dashboard e abra seu primeiro ticket de suporte.
            </p>
            <a href="/dashboard" class="bg-white text-blue-600 px-8 py-3 rounded-lg text-lg font-medium hover:bg-gray-50 transition duration-200">
                <i class="fas fa-rocket mr-2"></i>Começar Agora
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center mb-4 md:mb-0">
                    <i class="fas fa-headset text-2xl text-blue-400 mr-2"></i>
                    <span class="text-xl font-bold">Help Desk</span>
                </div>
                <div class="text-gray-400 text-sm">
                    © 2026 Help Desk. Todos os direitos reservados.
                </div>
            </div>
        </div>
    </footer>

</body>
</html>