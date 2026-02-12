<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>@yield('titulo') | SGV - Sistema de Gestão de Visitas</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* CONFIGURAÇÃO A4 */
        @page {
            size: A4;
            margin: 15mm;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            /* background: #e5e5e5; */
            margin: 0;
        }

        .a4 {
            width: 40rem;
            /* min-height: 297mm; */
            background: white;
            margin: auto;
            /* padding: 20mm; */
            /* box-shadow: 0 0 10px rgba(0,0,0,0.1); */
        }

        /* Cabeçalho */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .header p {
            font-size: 12px;
            color: #555;
        }

        /* Cards */
        .card {
            margin-bottom: 18px;
            border: 1px solid #d4d4d4;
            border-radius: 6px;
            padding: 12px 16px;
        }

        .card-title {
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 10px;
            border-bottom: 1px solid #e5e5e5;
            padding-bottom: 4px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 6px;
            font-size: 12px;
        }

        .row strong {
            font-weight: 600;
            color: #444;
            min-width: 120px;
        }

        .full {
            margin-bottom: 6px;
            font-size: 12px;
        }

        .status {
            font-weight: bold;
            font-size: 12px;
        }

        .status-pendente { color: #b45309; }
        .status-realizada { color: #166534; }
        .status-reagendar { color: #6b21a8; }
        .status-nao-localizado { color: #991b1b; }

        /* Remove sombra ao imprimir */
        @media print {
            body {
                background: white;
            }

            .a4 {
                box-shadow: none;
                margin: 0;
                width: 100%;
                padding: 0;
            }
        }
    </style>
</head>

<body>

<div class="a4">

    <div class="header">
        <h1>Detalhes do Cadastro</h1>
        <p>SGV - Sistema de Gestão de Visitas</p>
    </div>

    <!-- DADOS PESSOAIS -->
    <div class="card">
        <div class="card-title">
            <i class="fa-solid fa-user"></i> Dados Pessoais
        </div>

        <div class="full">
            <strong>Responsável:</strong> {{ $pessoa->nome_completo }}
        </div>

        <div class="row">
            <div><strong>CPF:</strong> {{ $pessoa->cpf }}</div>
            <div><strong>Telefone:</strong> {{ $pessoa->telefone }}</div>
        </div>

        <div class="full">
            <strong>Endereço:</strong> {{ $pessoa->endereço }}
        </div>
    </div>

    <!-- INFORMAÇÕES -->
    <div class="card">
        <div class="card-title">
            <i class="fa-solid fa-circle-info"></i> Informações do Cadastro
        </div>

        <div class="row">
            <div><strong>Tipo Família:</strong> {{ $pessoa->tipo_familia }}</div>
            <div><strong>Tipo Cadastro:</strong> {{ $pessoa->tipo_cadastro }}</div>
        </div>

        <div class="row">
            <div>
                <strong>Data Registro:</strong>
                {{ $pessoa->created_at->format('d/m/Y - H:i') }}
            </div>

            <div>
                <strong>Vencimento:</strong>
                {{ \Carbon\Carbon::parse($pessoa->data_cadastro)->format('d/m/Y') }}
            </div>
        </div>
    </div>

    <!-- OBSERVAÇÕES -->
    <div class="card">
        <div class="card-title">
            <i class="fa-solid fa-file-lines"></i> Observações
        </div>

        <div class="full">
            {{ $pessoa->observacoes ?? 'Nenhuma observação cadastrada.' }}
        </div>
    </div>

    <!-- HISTÓRICO -->
    <div class="card">
        <div class="card-title">
            <i class="fa-solid fa-door-open"></i> Histórico de Visitas
        </div>

        @foreach ($pessoa->visita as $visitas)

            @php
                $statusClass = match($visitas->status_visita) {
                    'Pendente' => 'status-pendente',
                    'Realizada' => 'status-realizada',
                    'Reagendar' => 'status-reagendar',
                    'Não localizado' => 'status-nao-localizado',
                    default => ''
                };
            @endphp

            <div style="margin-bottom:8px; border-bottom:1px solid #eee; padding-bottom:6px; font-size:12px;">
                <div class="row">
                    <div>
                        <strong>Data Prevista:</strong>
                        {{ \Carbon\Carbon::parse($visitas->data_prevista)->format('d/m/Y') }}
                    </div>
                    <div class="status {{ $statusClass }}">
                        {{ $visitas->status_visita }}
                    </div>
                </div>

                <div>
                    <strong>Responsável:</strong>
                    {{ $visitas->entrevistador->name }}
                </div>
            </div>

        @endforeach

    </div>

</div>

</body>
</html>