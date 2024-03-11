<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = [
            [
                'id' => 0,
                'titulo' => 'Placa de Vídeo Zotac NVIDIA GeForce RTX 3090',
                'preco' => 'R$ 7000,00',
                'descricao' => 'A placa de vídeo GeForce RTX™ 3090.'
            ],
            [
                'id' => 1,
                'titulo' => 'AMD Ryzen 5950x3d',
                'preco' => 'R$ 3500,00',
                'descricao' => 'O processador Ryzen 9 5950X é o modelo topo de linha em desempenho da arquitetura Zen3 da AMD.'
            ],
            [
                'id' => 2,
                'titulo' => 'Kit Memória Kingston Fury Beast, 64GB (2x32GB), 3200MHz, DDR4, CL16, Preto',
                'preco' => 'R$ 1100,00',
                'descricao' => 'A memória VENGEANCE LPX foi projetada para overclocking de alto desempenho.'
            ]
        ];

        return view('produtos', ['produtos' => $produtos]);
    }

    public function show($id)
    {
        $produtos = [
            [
                'titulo' => 'Placa de Vídeo Zotac NVIDIA GeForce RTX 3090',
                'preco' => 'R$ 7000,00',
                'descricao' => 'Características: - Marca: Zotac - Modelo: ZT-A30900D-10P
                 Especificações:
                 GPU: - GeForce RTX 3090 - Núcleos CUDA: 10496- Clock de motorBoost: 1695 MH
                 Memória: - Capacidade: 24GB- Tipo: GDDR6X - Barramento: 384-bit - Clock: 19.5 Gbps
                 Interface: - PCI Express4.0 16x
                 Conexões: - 3x DisplayPort 1.4a (até 7680 x 4320 @60Hz) - HDMI 2.1* (Até 7680 x 4320 @60Hz)
                 Energia: - Fonte de alimentação recomendada: 750W - Consumo de energia: 350W - Entrada de energia: 2x 8-pin
                 Sistema: - Direct: X12 Ultimate - OpenGL: 4.6 - Resfriamento: IceStorm 2.0 - Tamanho de slot: 2.5 slot - SLINVLink Ready
                 OS Suportado: - Windows 10 64-bit (2004 ou posterior) - Suporte HDCP2.3 - Capacidade de Multi Display: Quad Display
                 Conteúdo da Embalagem: - 1x Placa de Vídeo Zotac NVIDIA GeForce RTX 3090 - 2x cabo duplo de 6 pinos para 8 pinos'
            ],
            [
                'titulo' => 'AMD Ryzen 5950x3d',
                'preco' => 'R$ 3500,00',
                'descricao' => 'Características: - Marca: AMD - Modelo: 100-100000059WOF
                ESPECIFICAÇÕES
                CPU: - Núcleos de CPU: 16 - Threads: 32 - Clock básico: 3.4GHz - Clock de Max Boost: Até 4.9GHz - Cachê L2 total: 8MB - Cachê L3 total: 64MB
                     - Desbloqueado - CMOS: TSMC 7nm FinFET - Soquete: AM4 - Versão do PCI Express PCIe 4.0 - TDP / TDP Padrão: 105W
                Memória: - Velocidade máxima: 3200MHz - Tipo: DDR4
                Tecnologias compatíveis:  - Tecnologia AMD StoreMI  - Utilitário AMD Ryzen Master - AMD Ryzen VR-Ready Premium
                Conteúdo da Embalagem: - Processador AMD'
            ],
            [
                'titulo' => 'Kit Memória Kingston Fury Beast, 64GB (2x32GB), 3200MHz, DDR4, CL16, Preto',
                'preco' => 'R$ 1100,00',
                'descricao' => 'Características: - Marca: Corsair - Modelo: CMK64GX4M2A2400C16
                Especificações: - Cor: Preto - Série: Vengeance LPX - Tipo de memória: DDR4 - Capacidade total: 64GB (2x32GB) - Latência: 16-16-16-39
                                - Tensão: 1.2V - Velocidade: 2400MHz - Latência SPD: 15-15-15-36 - Velocidade SPD: 2133MHz - Tensão SPD: 1.2V 
                                - Classificação de velocidade: PC4-19200 (2400MHz) - Compatibilidade: Intel 390, AMD 400 Series, AMD X570
                                - Dissipador de alumínio: Alumínio anodizado  - Formato: DIMM - Perfil de desempenho: XMP 2.0 - Pinagem: 288'
            ]
        ];

        $produto = $produtos[$id] ?? null;

        return view('detalhesProdutos', ['produto' => $produto]);
    }
}
