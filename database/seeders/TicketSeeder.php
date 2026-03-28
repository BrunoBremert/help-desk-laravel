<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::create([
            'title' => 'Problema com login',
            'description' => 'Não consigo fazer login na plataforma',
            'status' => 'open',
            'priority' => 'high',
        ]);

        Ticket::create([
            'title' => 'Erro ao salvar formulário',
            'description' => 'O formulário de cadastro está gerando erro',
            'status' => 'in_progress',
            'priority' => 'medium',
        ]);

        Ticket::create([
            'title' => 'Dúvida sobre features',
            'description' => 'Gostaria de saber mais sobre a feature de relatórios',
            'status' => 'closed',
            'priority' => 'low',
        ]);
    }
}
