<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Leves
        DB::table('produtos')->insert([
            'nome' => 'SUPRA TECH 0W16',
            'descricao' => 'DULUB SUPRA TECH 0W16 é um lubriﬁcante de baixa
            viscosidade desenvolvido para aplicação em motores de
            veículos leves movidos a gasolina, etanol, ﬂex, GNV e híbridos
            com tecnologia aprimorada que visa atender e/ou superar os
            requisitos de desempenho da API SP e ILSAC GF-6B. Dulub Supra
            Tech é formulado com básicos sintéticos de alta qualidade
            e pacote de aditivos que combinam a melhor capacidade
            em termos de limpeza de pistão, estabilidade a oxidação e
            economia de combustível, proporcionando proteção
            antidesgaste ideal aos veículos com injeção direta de
            gasolina turboalimentada (TGDI) da pré-ignição ou LSPI.',            
            'comp_quimica' => 'Básico do grupo III, 
            anticorrosivo,  antidesgaste,  antiespumante, 
            antioxidante, detergente, dispersante,  agente de 
            reserva alcalina,  melhorador  de índice de 
            viscosidade e abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 0W16',
            'imagem' => 'images/produtos/Leves/SUPRA TECH 0W16 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/SUPRATECH 0W16 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Supratech 0W16.pdf"   
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ULTRATECH 0W20',
            'descricao' => 'DULUB ULTRA TECH é uma linha aprimorada de lubriﬁcantes
                de baixa viscosidade desenvolvida para atender motores de
                veículos leves movidos a gasolina, etanol, ﬂex, GNV e híbridos
                proporcionando nível máximo de eﬁciência de combustível e
                proteção ideal para os automóveis equipados com
                turbocompressor e injeção direta de combustíveis (TGDI) da
                pré-ignição ou LSPI. Dulub Ultra Tech está preparado para
                fornecer superior capacidade antioxidante e antidesgaste
                das partes móveis do motor, limpeza incomparável e economia
                de combustível atendendo e/ou superando as demandas da
                nova classiﬁcação API SP, ILSAC GF-6A e a 2ª Geração da
                dexos 1™.',            
            'comp_quimica' => 'Básico do grupo III, 
            anticorrosivo,  antidesgaste,  antiespumante, 
            antioxidante, detergente, dispersante,  agente de 
            reserva alcalina,  melhorador  de índice de 
            viscosidade e abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 0W20',
            'imagem' => 'images/produtos/Leves/ULTRATECH 0W20 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/ULTRATECH 0W20 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ -  Ultra Tech 0w20.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ULTRATECH 5W20',
            'descricao' => 'DULUB ULTRA TECH é uma linha aprimorada de lubriﬁcantes
                de baixa viscosidade desenvolvida para atender motores de
                veículos leves movidos a gasolina, etanol, ﬂex, GNV e híbridos
                proporcionando nível máximo de eﬁciência de combustível e
                proteção ideal para os automóveis equipados com
                turbocompressor e injeção direta de combustíveis (TGDI) da
                pré-ignição ou LSPI. Dulub Ultra Tech está preparado para
                fornecer superior capacidade antioxidante e antidesgaste
                das partes móveis do motor, limpeza incomparável e economia
                de combustível atendendo e/ou superando as demandas da
                nova classiﬁcação API SP, ILSAC GF-6A e a 2ª Geração da
                dexos 1™.',            
            'comp_quimica' => 'Básico do grupo III, 
            anticorrosivo,  antidesgaste,  antiespumante, 
            antioxidante, detergente, dispersante,  agente de 
            reserva alcalina,  melhorador  de índice de 
            viscosidade e abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 5W20',
            'imagem' => 'images/produtos/Leves/ULTRATECH 5W20 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/ULTRATECH 5W20 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ -  Ultra Tech 5w20.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ULTRATECH 5W30',
            'descricao' => 'DULUB ULTRA TECH é uma linha aprimorada de lubriﬁcantes
                de baixa viscosidade desenvolvida para atender motores de
                veículos leves movidos a gasolina, etanol, ﬂex, GNV e híbridos
                proporcionando nível máximo de eﬁciência de combustível e
                proteção ideal para os automóveis equipados com
                turbocompressor e injeção direta de combustíveis (TGDI) da
                pré-ignição ou LSPI. Dulub Ultra Tech está preparado para
                fornecer superior capacidade antioxidante e antidesgaste
                das partes móveis do motor, limpeza incomparável e economia
                de combustível atendendo e/ou superando as demandas da
                nova classiﬁcação API SP, ILSAC GF-6A e a 2ª Geração da
                dexos 1™.',            
            'comp_quimica' => 'Básico do grupo III, 
            anticorrosivo,  antidesgaste,  antiespumante, 
            antioxidante, detergente, dispersante,  agente de 
            reserva alcalina,  melhorador  de índice de 
            viscosidade e abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 5W30',
            'imagem' => 'images/produtos/Leves/ULTRATECH 5W30 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/ULTRATECH 5W30 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ -  Ultra Tech 5w30.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'TURBOTECH 5W30',
            'descricao' => 'DULUB TURBO TECH 5W30 é um lubriﬁcante multiviscoso
            100% sintético compatível com sistemas de pós-tratamento,
            conversor catalítico de gasolina e tecnologia de ﬁltro de
            partículas diesel (DPF) de veículos leves. Sua aditivação
            de alto desempenho e reduzido teor de cinzas sulfatadas,
            fósforo e enxofre, contribui para prolongar a vida útil
            desses componentes e auxilia no controle de lama que
            pode se formar durante a combustão. Dulub Turbo Tech
            5W30 atende aos requisitos das especiﬁcações ACEA
            C2/C3 2016 e é recomendado para motores quatro
            tempos a gasolina, etanol, GNV e diesel leves como de
            SUVs, Pick-ups, Vans e utilitários (VUC) das principais
            OEMs.',            
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antidesgaste, antioxidante, 
            antiespumante e agente de reserva alcalina.',
            'viscosidade' => 'SAE 5W30',
            'imagem' => 'images/produtos/Leves/TURBOTECH 5W30 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Pesados/TURBOTECH 5W30 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Pesados/FISPQ - TURBO TECH 5W30.pdf"   
        ]);
        DB::table('produtos')->insert([
            'nome' => 'TURBOTECH 5W40',
            'descricao' => 'DULUB TURBO TECH 5W40 é um lubriﬁcante multiviscoso
            100% sintético compatível com sistemas de pós-tratamento,
            conversor catalítico de gasolina e tecnologia de ﬁltro de
            partículas diesel (DPF) de veículos leves. Sua aditivação
            de alto desempenho e reduzido teor de cinzas sulfatadas,
            fósforo e enxofre, contribui para prolongar a vida útil
            desses componentes e auxilia no controle de lama que
            pode se formar durante a combustão. Dulub Turbo Tech
            5W40 atende aos requisitos das especiﬁcações ACEA
            C2/C3 2016 e é recomendado para motores quatro
            tempos a gasolina, etanol, GNV e diesel leves como de
            SUVs, Pick-ups, Vans e utilitários (VUC) das principais
            OEMs.',            
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antidesgaste, antioxidante, 
            antiespumante e agente de reserva alcalina.',
            'viscosidade' => 'SAE 5W40',
            'imagem' => 'images/produtos/Leves/TURBOTECH 5W40 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Pesados/TURBOTECH 5W40 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Pesados/TURBOTECH 5W40 - FISPQ.pdf"   
        ]);
        DB::table('produtos')->insert([
            'nome' => 'FLUIDTECH 5W30',
            'descricao' => 'Lubrificante  100% sintético  de última geração para 
                            motores  a gasolina, etanol, flex e GNV.  É 
                            recomendado para uso em todos os motores de 
                            alta performance. Seu pacote de aditivos garante
                            maior limpeza dos pistões, redução de formação 
                            de borra  e conservação do sistema  catalítico dos 
                            automóveis. Atende as especificações  API SN / 
                            ILSAC GF-5. Grau SAE 5W30.',            
            'comp_quimica' => 'Básico do grupo III, 
                                    anticorrosivo,  antidesgaste,  antiespumante, 
                                    antioxidante, detergente, dispersante,  agente de 
                                    reserva alcalina,  melhorador  de índice de 
                                    viscosidade e abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 5W30',
            'imagem' => 'images/produtos/Leves/FLUIDTECH 5W30 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/FLUIDTECH 5W30 - Ficha Técnica(1).pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Fluidtech 5W30.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'FLUIDTECH 5W40',
            'descricao' => 'Lubrificante  100% sintético  de última geração para 
                            motores  a gasolina, etanol, flex e GNV.  É 
                            recomendado para uso em todos os motores de 
                            alta performance. Seu pacote de aditivos garante
                            maior limpeza dos pistões, redução de formação 
                            de borra  e conservação do sistema  catalítico dos 
                            automóveis. Atende as especificações  API SN / 
                            ILSAC GF-5. Grau SAE 5W40.',            
            'comp_quimica' => 'Básico do grupo III, 
                                    anticorrosivo,  antidesgaste,  antiespumante, 
                                    antioxidante, detergente, dispersante,  agente de 
                                    reserva alcalina,  melhorador  de índice de 
                                    viscosidade e abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 5W40',
            'imagem' => 'images/produtos/Leves/FLUIDTECH 5W40 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/FLUIDTECH 5W40 - Ficha Técnica(1).pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Fluidtech 5W40.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'FLUIDTECH 10W30',
            'descricao' => 'Lubrificante  100% sintético  de última geração para 
                            motores  a gasolina, etanol, flex e GNV.  É 
                            recomendado para uso em todos os motores de 
                            alta performance. Seu pacote de aditivos garante
                            maior limpeza dos pistões, redução de formação 
                            de borra  e conservação do sistema  catalítico dos 
                            automóveis. Atende as especificações  API SN / 
                            ILSAC GF-5. Grau SAE 10W30.',            
            'comp_quimica' => 'Básico do grupo III, 
                                    anticorrosivo,  antidesgaste,  antiespumante, 
                                    antioxidante, detergente, dispersante,  agente de 
                                    reserva alcalina,  melhorador  de índice de 
                                    viscosidade e abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 10W30',
            'imagem' => 'images/produtos/Leves/FLUIDTECH 10W30 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/FLUIDTECH 10W30 - Ficha Técnica(1).pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Fluidtech 10W30.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'FLUIDTECH 10W40',
            'descricao' => 'Lubrificante  100% sintético  de última geração para 
                            motores  a gasolina, etanol, flex e GNV.  É 
                            recomendado para uso em todos os motores de 
                            alta performance. Seu pacote de aditivos garante
                            maior limpeza dos pistões, redução de formação 
                            de borra  e conservação do sistema  catalítico dos 
                            automóveis. Atende as especificações  API SN. Grau SAE 10W40.',            
            'comp_quimica' => 'Básico do grupo III, 
                                    anticorrosivo,  antidesgaste,  antiespumante, 
                                    antioxidante, detergente, dispersante,  agente de 
                                    reserva alcalina,  melhorador  de índice de 
                                    viscosidade e abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 10W40',
            'imagem' => 'images/produtos/Leves/FLUIDTECH 10W40 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/FLUIDTECH 10W40 - Ficha Técnica(1).pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Fluidtech 10W40.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'PROBASIC 5W30',
            'descricao' => 'Lubrificante semissintético para motores a 
            gasolina, etanol, flex e GNV. É recomendado para 
            uso em motores de alta performance dotados de 
            injeção eletrônica, multiválvulas de turbo 
            alimentados. Proporciona menor consumo de 
            lubrificante e economia de combustível. Atende as 
            especificações API SN / ILSAC GF-5. Grau SAE 
            5W30.',            
            'comp_quimica' => 'Óleo mineral  e  básicos  do 
            grupo III e aditivos anticorrosivo, antidesgaste,
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina,
            melhorador de índice de viscosidade e abaixador
            de ponto de fluidez.',
            'viscosidade' => 'SAE 5W30',
            'imagem' => 'images/produtos/Leves/PROBASIC 5W30 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/PROBASIC 5W30 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Probasic 5W30.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'PROBASIC 10W30',
            'descricao' => 'Lubrificante semissintético para motores a 
            gasolina, etanol, flex e GNV. É recomendado para 
            uso em motores de alta performance dotados de 
            injeção eletrônica, multiválvulas de turbo 
            alimentados. Proporciona menor consumo de 
            lubrificante e economia de combustível. Atende as 
            especificações API SN / ILSAC GF-5. Grau SAE 
            10W30.',            
            'comp_quimica' => 'Óleo mineral  e  básicos  do 
            grupo III e aditivos  anticorrosivo, antidesgaste,
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina,
            melhorador de índice de viscosidade e abaixador
            de ponto de fluidez.',
            'viscosidade' => 'SAE 10W30',
            'imagem' => 'images/produtos/Leves/PROBASIC 10W30 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/PROBASIC 10W30 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Probasic 10W30.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'PROBASIC 10W40',
            'descricao' => 'Lubrificante semissintético para motores a 
            gasolina, etanol, flex e GNV. É recomendado para 
            uso em motores de alta performance dotados de 
            injeção eletrônica, multiválvulas de turbo 
            alimentados. Proporciona menor consumo de 
            lubrificante e economia de combustível. Atende 
            especificação API SN. Grau SAE 10W40.',            
            'comp_quimica' => 'Óleo mineral  e  básicos  do 
            grupo III e aditivos anticorrosivo, antidesgaste,
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina,
            melhorador de índice de viscosidade e abaixador
            de ponto de fluidez.',
            'viscosidade' => 'SAE 10W40',
            'imagem' => 'images/produtos/Leves/PROBASIC 10W40 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/PROBASIC 10W40 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Probasic 10W40.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'PROBASIC 15W40',
            'descricao' => 'Lubrificante semissintético para motores a 
            gasolina, etanol, flex e GNV. É recomendado para 
            uso em motores de alta performance dotados de 
            injeção eletrônica, multiválvulas de turbo 
            alimentados. Proporciona menor consumo de 
            lubrificante e economia de combustível. Atende 
            especificação API SN. Grau SAE 15W40.',            
            'comp_quimica' => 'Óleo mineral e básicos  do 
            grupo III e aditivos anticorrosivo, antidesgaste,
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina,
            melhorador de índice de viscosidade e abaixador
            de ponto de fluidez.',
            'viscosidade' => 'SAE 15W40',
            'imagem' => 'images/produtos/Leves/PROBASIC 15W40 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/PROBASIC 15W40 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Probasic 15W40.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'SUPREME 15W40',
            'descricao' => 'Óleo lubriﬁcante mineral multiviscoso de desempenho superior
            para uso em modernos motores a gasolina, etanol, ﬂex e GNV.
            Atende ao nível de desempenho API SL. Pode ser usado em
            substituição aos óleos com nível API SF, SG, SH e SJ. Grau
            SAE 15W40. DULUB SUPREME 15W40 SL controla a formação
            borras e depósitos, mesmo em altas temperaturas, reduzindo os
            desgastes e a corrosão nas partes lubriﬁcadas. DULUB
            SUPREME 15W40 SL possui elevada resistência a oxidação e
            aditivação que confere ao óleo superior estabilidade térmica,
            proporcionando excelente desempenho em temperaturas
            extremas e ignições rápidas. DULUB SUPREME 15W40 SL é
            indicado para uso em motores de todas as potencias à gasolina,
            etanol, ﬂex e GNV de veículos nacionais ou importados com
            injeção eletrônica e/ou multiválvulas, sendo compatível com os
            conversores catalíticos dos automóveis modernos. Composição
            química: óleo mineral e aditivos anticorrosivo, antidesgaste,
            antiespumante, antioxidante, detergente, dispersante, agente de
            reserva alcalina e melhorador de ﬂuidez.',            
            'comp_quimica' => 'Óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante, detergente, dispersante, agente de 
            reserva alcalina e melhorador de fluidez.',
            'viscosidade' => 'SAE 15W40',
            'imagem' => 'images/produtos/Leves/SUPREME 15W40 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/SUPREME 15W40 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Supreme 15W40.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'SUPREME 20W50',
            'descricao' => 'Óleo lubriﬁcante mineral multiviscoso de última geração utilizado
            em modernos motores de automóveis atuais. Garante uma
            perfeita lubriﬁcação do motor, tanto nas partidas a frio quanto nas
            temperaturas de funcionamento do veículo. O Dulub Supreme
            atende ao nível de desempenho API SL e é indicado para todos
            os motores a gasolina, etanol ou GNV de todas as marcas e
            potências. Possui Grau SAE 20w50. DULUB SUPREME 20W50
            SL controla a formação borras e depósitos, mesmo a altas
            temperaturas, reduzindo os desgastes e a corrosão nas partes
            lubriﬁcadas. DULUB SUPREME 20W50 SL possui elevada
            resistência a oxidação e aditivação que confere ao óleo superior
            estabilidade térmica, proporcionando excelente desempenho
            em temperaturas extremas e ignições rápidas. DULUB
            SUPREME 20W50 SL é indicado para uso em motores de
            todas as potências a gasolina, etanol, ﬂex e GNV de veículos
            nacionais ou importados com injeção eletrônica e/ou multiválvulas,
            sendo compatível com os conversores catalíticos de automóveis
            modernos. Composição química: óleo mineral e aditivos
            anticorrosivo, antidesgaste, antiespumante, antioxidante,
            detergente, dispersante, agente de reserva alcalina e melhorador
            de ﬂuidez.',            
            'comp_quimica' => 'Óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante e agente de reserva alcalina.',
            'viscosidade' => 'SAE 20W50',
            'imagem' => 'images/produtos/Leves/SUPREME 20W50 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/SUPREME 20W50 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Supreme 20W50.docx" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'UNITECH SAE 30',
            'descricao' => 'Óleo lubrificante mineral monoviscoso de última
            geração para  motores a gasolina, etanol  e
            automóveis adaptados para uso de GNV.  O  Dulub 
            Unitech atende ao nível de desempenho API SL 
            e é compatível com todos os lubrificantes com esta
            especificação disponíveis no mercado. Possui 
            Grau SAE 30.',            
            'comp_quimica' => 'Óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante e agente de reserva alcalina.',
            'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Leves/UNITECH SAE 30 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/UNITECH SAE 30 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Unitech SAE 30.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'UNITECH SAE 40',
            'descricao' => 'Óleo lubrificante mineral monoviscoso de última
            geração para motores a gasolina, etanol  e
            automóveis adaptados para uso de GNV.  O  Dulub 
            Unitech atende ao nível de desempenho API SL 
            e é compatível com todos os lubrificantes com esta
            especificação disponíveis no mercado. Possui 
            Grau SAE 40.',            
            'comp_quimica' => 'Óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante e agente de reserva alcalina.',
            'viscosidade' => 'SAE 40',
            'imagem' => 'images/produtos/Leves/UNITECH SAE 40 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/UNITECH SAE 40 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Unitech SAE 40.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'UNITECH SAE 50',
            'descricao' => 'Óleo lubrificante mineral monoviscoso de última
            geração para motores a gasolina, etanol  e
            automóveis adaptados para uso de GNV.  O  Dulub 
            Unitech atende ao nível de desempenho API SL 
            e é compatível com todos os lubrificantes com esta
            especificação disponíveis no mercado. Possui 
            Grau SAE 50.',            
            'comp_quimica' => 'Óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante e agente de reserva alcalina.',
            'viscosidade' => 'SAE 50',
            'imagem' => 'images/produtos/Leves/UNITECH SAE 50 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'categoria_id' => 1,
            'ficha' => "fichas/Leves/UNITECH SAE 50 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Leves/FISPQ - Unitech SAE 50.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ECONOLINE SUPREME 20W50',
            'descricao' => 'Óleo lubriﬁcante mineral multiviscoso de última geração utilizado
            em modernos motores de automóveis atuais. Garante uma
            perfeita lubriﬁcação do motor, tanto nas partidas a frio quanto nas
            temperaturas de funcionamento do veículo. O Dulub Supreme
            atende ao nível de desempenho API SL e é indicado para todos
            os motores a gasolina, etanol ou GNV de todas as marcas e
            potências. ECONOLINE SUPREME 20W50 controla a formação
            borras e depósitos, mesmo a altas temperaturas, reduzindo os
            desgastes e a corrosão nas partes lubriﬁcadas. ECONOLINE
            SUPREME 20W50 possui elevada resistência a oxidação e
            aditivação que confere ao óleo superior estabilidade térmica,
            proporcionando excelente desempenho em temperaturas
            extremas e ignições rápidas. ECONOLINE SUPREME 20W50 é
            indicado para uso em motores de todas as potências a gasolina,
            etanol, ﬂex e GNV de veículos nacionais ou importados com
            injeção eletrônica e/ou multiválvulas, sendo compatível com os
            conversores catalíticos de automóveis modernos. Possui Grau
            SAE 20W50 API SL.',            
            'comp_quimica' => 'Óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante e agente de reserva alcalina.',
            'viscosidade' => 'SAE 20W50',
            'imagem' => 'images/produtos/Econoline/SUPREME 20W50 ECONOLINE - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'fichas/Econoline/Ficha Técnica - Supreme Econoline 20W30.pdf',
            'fispq' => 'none',
            'categoria_id' => 1,
        ]);

        //VEICULOS PESADOS
        DB::table('produtos')->insert([
            'nome' => 'TURBOTECH 5W30',
            'descricao' => 'DULUB TURBO TECH 5W30 é um lubriﬁcante multiviscoso
            100% sintético compatível com sistemas de pós-tratamento,
            conversor catalítico de gasolina e tecnologia de ﬁltro de
            partículas diesel (DPF) de veículos leves. Sua aditivação
            de alto desempenho e reduzido teor de cinzas sulfatadas,
            fósforo e enxofre, contribui para prolongar a vida útil
            desses componentes e auxilia no controle de lama que
            pode se formar durante a combustão. Dulub Turbo Tech
            5W30 atende aos requisitos das especiﬁcações ACEA
            C2/C3 2016 e é recomendado para motores quatro
            tempos a gasolina, etanol, GNV e diesel leves como de
            SUVs, Pick-ups, Vans e utilitários (VUC) das principais
            OEMs.',            
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antidesgaste, antioxidante, 
            antiespumante e agente de reserva alcalina.',
            'viscosidade' => 'SAE 5W30',
            'imagem' => 'images/produtos/Pesados/TURBOTECH 5W30 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'categoria_id' => 2,
            'ficha' => "fichas/Pesados/TURBOTECH 5W30 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Pesados/FISPQ - TURBO TECH 5W30.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX2TURBO 15W40',
            'descricao' => 'Óleo lubrificante de base mineral multiviscoso
            para motores diesel turbo alimentados de todas as 
            marcas e potência que requeiram do lubrificante 
            especificação API CH-4. Max 2 Turbo CH-4 
            proporciona menor desgaste das partes móveis do 
            motor. Possui Grau SAE 15W40. Atende  a 
            especificação API CH-4.',            
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antiatrito, antidesgaste,
            antiespumante, antioxidante, detergente, 
            dispersante, melhorador de índice de viscosidade e 
            abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 15W40',
            'imagem' => 'images/produtos/Pesados/MAX2TURBO 15W40 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'categoria_id' => 2,
            'ficha' => "fichas/Pesados/MAX2TURBO 15W40 CH4 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Pesados/FISPQ - MAX2TURBO 15W40.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX2TURBO 25W50',
            'descricao' => 'Óleo lubrificante de base mineral multiviscoso para motores diesel turbo alimentados e aspirados de alta quilometragem, de todas as marcas e potências que requeiram do lubrificante especificação API CH-4. Max 2 Turbo CH-4 possui Grau SAE 25W50 e atende a especificação API CH-4.',            
            'comp_quimica' => 'Óleo mineral e aditivos anticorrosivo, antidesgaste, antiespumante, antioxidante, detergente, dispersante, melhorador de índice de viscosidade e abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 25W50',
            'imagem' => 'images/produtos/Pesados/MAX2TURBO 25W50 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'categoria_id' => 2,
            'ficha' => "fichas/Pesados/MAX2TURBO 25W50 CH4 - Ficha Técnica.pdf",
            'fispq' => "none"   
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX3TURBO 10W40',
            'descricao' => 'Lubrificante semissintético multiviscoso para 
            motores diesel turbinados que operem em 
            condições extremas de severidade. Desenvolvido 
            para atender totalmente as exigências dos 
            modernos motores. Possui Grau SAE 10W40 e 
            atende as especificações API CI-4, ACEA E7-12, 
            ACEA A3/B3/B4-12, MB 229.1, MB 228.3, VOLVO 
            VDS-3 e MAN3275-1.',            
            'comp_quimica' => 'Óleo mineral, base sintética
            do grupo III e aditivos anticorrosivo, antiatrito, 
            antidesgaste, antiespumante, antioxidante, 
            detergente, dispersante, melhorador de índice de 
            viscosidade e abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 10W40',
            'imagem' => 'images/produtos/Pesados/MAX3TURBO 10W40 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'categoria_id' => 2,
            'ficha' => "fichas/Pesados/MAX3TURBO 10W40 CI-4 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Pesados/FISPQ - MAX3TURBO 10W40.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX3TURBO 15W40',
            'descricao' => 'Lubrificante mineral multiviscoso para motores 
            diesel turbinados que operam em condições 
            extremas de severidade. Desenvolvido para 
            atender as totais exigências dos modernos 
            motores, Possui Grau SAE 15W40. Atende as 
            especificações API CI-4, ACEA E7-12, MB 229.1, 
            MB 228.3, VOLVO VDS-3 e MAN3275-1.',            
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antiatrito, antidesgaste,
            antiespumante, antioxidante, detergente, 
            dispersante, melhorador de índice de viscosidade e 
            abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 15W40',
            'imagem' => 'images/produtos/Pesados/MAX3TURBO 15W40 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'categoria_id' => 2,
            'ficha' => "fichas/Pesados/MAX3TURBO 15W40 CI-4 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Pesados/FISPQ - MAX3TURBO 15W40.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX4TURBO 10W40',
            'descricao' => 'Óleo lubrificante multiviscoso sintético de última geração para motores a diesel turbinados de alta performance e de baixas emissões atmosféricas. Possui Grau SAE 10W40. Atende as especificações API CJ-4 / ACEA E9-12 / MB 228.31 / MAN M3575 / Cummins CES 20081 / Caterpillar ECF-3 / Volvo VDS-4.',            
            'comp_quimica' => 'Base sintética G-III e pacotes de aditivos com ação detergente, dispersante, antiespumante, antidesgaste, antiatrito, antioxidante, melhorador de índice de viscosidade e abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 10W40',
            'imagem' => 'images/produtos/Pesados/MAX4TURBO 10W40 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'categoria_id' => 2,
            'ficha' => "fichas/Pesados/MAX4TURBO 10W40 CI-4 - Ficha Técnica.pdf",
            'fispq' => "none"   
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX4TURBO 15W40',
            'descricao' => 'Óleo lubrificante mineral de última geração para 
            motores diesel turbinados de alta performance e de 
            baixa emissões atmosféricas, Possui Grau SAE 
            15W40. Atende as especificações API CJ-4 ACEA 
            E9-12, MB 228.31, MAN M3575, Cummins CES 
            20081, Caterpillar ECF-3, Volvo VDS-4.',            
            'comp_quimica' => 'Óleo mineral selecionado 
            do grupo II e aditivos anticorrosivo, antiatrito, 
            antidesgaste, antiespumante, antioxidante, 
            detergente, dispersante, melhorador de índice de 
            viscosidade e abaixador de ponto de fluidez.',
            'viscosidade' => 'SAE 15W40',
            'imagem' => 'images/produtos/Pesados/MAX4TURBO 15W40 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'categoria_id' => 2,
            'ficha' => "fichas/Pesados/MAX4TURBO 15W40 CJ-4 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Pesados/FISPQ - MAX4TURBO 15W40.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'STOPDIESEL SAE 30',
            'descricao' => 'Óleo lubrificante mineral monoviscoso composto 
            por lubrificantes básicos e aditivos para uso em 
            motores estacionários, ferroviários e marítimos. 
            Recomendado para motores ciclo diesel atendendo 
            as especificações API CF e SAE 30.',            
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antidesgaste, antioxidante, 
            antiespumante e agente de reserva alcalina.',
            'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Pesados/STOPDIESEL SAE30 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'categoria_id' => 2,
            'ficha' => "fichas/Pesados/STOPDIESEL SAE 30 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Pesados/FISPQ - STOPDIESEL SAE 30.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'STOPDIESEL SAE 40',
            'descricao' => 'Óleo lubrificante mineral monoviscoso composto 
            por lubrificantes básicos e aditivos para uso em 
            motores estacionários, ferroviários e marítimos. 
            Recomendado para motores ciclo diesel atendendo 
            as especificações API CF e SAE 40.',            
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antidesgaste, antioxidante, 
            antiespumante e agente de reserva alcalina.',
            'viscosidade' => 'SAE 40',
            'imagem' => 'images/produtos/Pesados/STOPDIESEL SAE40 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'categoria_id' => 2,
            'ficha' => "fichas/Pesados/STOPDIESEL SAE 40 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Pesados/FISPQ - STOPDIESEL SAE 40.pdf" 
        ]);
        DB::table('produtos')->insert([
            'nome' => 'STOPDIESEL SAE 50',
            'descricao' => 'Óleo lubrificante mineral monoviscoso composto 
            por lubrificantes básicos e aditivos para uso em 
            motores estacionários, ferroviários e marítimos. 
            Recomendado para motores ciclo diesel atendendo 
            as especificações API CF e SAE 50.',            
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antidesgaste, antioxidante, 
            antiespumante e agente de reserva alcalina.',
            'viscosidade' => 'SAE 50',
            'imagem' => 'images/produtos/Pesados/STOPDIESEL SAE50 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'categoria_id' => 2,
            'ficha' => "fichas/Pesados/STOPDIESEL SAE 50 - Ficha Técnica.pdf",
            'fispq' => "fispqs/Veículos Pesados/FISPQ - STOPDIESEL SAE 50.pdf" 
        ]);
        //MOTOCICLETAS
        DB::table('produtos')->insert([
            'nome' => 'MOTO 2T',
            'descricao' => 'Óleo lubrificante monoviscoso mineral para uso em 
            motores dois tempos movidos a gasolina, 
            lubrificados por mistura ou injeção de lubrificante. 
            Atende as especificações API TC/JASO FC e SAE 
            30.',            
            'comp_quimica' => 'Óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante, detergente, dispersante, agente de 
            reserva alcalina e melhorador de fluidez.',
            'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Motocicletas/MOTO 2T 500ml.png',
            'tamanhos' => 'images/Tamanhos/200-500-1L.svg',
            'ficha' => 'fichas/Motos/MOTO 2T - Ficha Técnica.pdf',
            'fispq' => "fispqs/Motocicletas/FISPQ - Moto 2T.pdf",
            'categoria_id' => 3,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MOTO 4T EXTREME',
            'descricao' => 'Óleo lubrificante multiviscoso mineral de avançada 
            tecnologia para uso em motores de motocicleta
            quatro tempos de alta rotação.  Atende  as 
            especificações de serviços API SL e JASO MA. 
            Disponível no grau SAE 20W50.            
            Dulub Moto 4T Extreme é recomendado para o uso em todos os motores de motocicletas 4 tempos, 
            e especialmente desenvolvido para proporcionar superior performance aos motores que operam em condições extremas.',            
            'comp_quimica' => 'Óleo mineral  e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante, detergente, dispersante, agente de 
            reserva alcalina e melhorador de fluidez.',
            'viscosidade' => 'SAE 20W50',
            'imagem' => 'images/produtos/Motocicletas/MOTO 4T EXTREME 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'ficha' => 'fichas/Motos/MOTO 4T EXTREME - Ficha Técnica.pdf',
            'fispq' => "fispqs/Motocicletas/FISPQ - Moto 4T Extreme.pdf",
            'categoria_id' => 3,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ULTRA MOTO 4T',
            'descricao' => 'Óleo lubrificante semissintético de alta
            performance e elevada estabilidade, desenvolvido 
            para proporcionar superior proteção contra o 
            desgaste e esforços mecânicos. Para uso em 
            motores de motocicleta quatro tempos de alta 
            rotação. Atende as especificações de serviços API 
            SN/JASO MA2. Disponível no grau SAE 10W30.',            
            'comp_quimica' => 'Óleo mineral do grupo II, 
            base sintética GIII e aditivos antidesgaste, 
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina, 
            modificador de viscosidade e depressor de ponto 
            de fluidez.',
            'viscosidade' => 'SAE 10W30',
            'imagem' => 'images/produtos/Motocicletas/ULTRA MOTO 4T 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'fichas/Motos/ULTRA MOTO 4T - Ficha Técnica.pdf',
            'fispq' => "fispqs/Motocicletas/FISPQ - Ultra Moto 4T 10W30.pdf",
            'categoria_id' => 3,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'POWER MOTO 4T',
            'descricao' => 'Óleo lubrificante de alta performance e elevada 
            estabilidade, elaborado com tecnologia
            semissintética. Dulub Power Moto 4T foi 
            desenvolvido para proporcionar excelente  limpeza 
            e proteção contra o desgaste. Recomendado para
            motores de motocicletas 4 tempos de alta rotação. 
            Atende as especificações de serviços  API 
            SN/JASO MA2. Disponível no grau SAE 10W40.',            
            'comp_quimica' => 'Óleo mineral  do grupo II, 
            base sintética GIII e aditivos  antidesgaste, 
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina, 
            modificador de viscosidade e depressor de ponto 
            de fluidez.',
            'viscosidade' => 'SAE 10W40',
            'imagem' => 'images/produtos/Motocicletas/POWER MOTO 4T 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'fichas/Motos/POWER MOTO 4T - Ficha Técnica.pdf',
            'fispq' => "fispqs/Motocicletas/FISPQ - Power Moto 4T 10W40.pdf",
            'categoria_id' => 3,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'RACE MOTO 4T',
            'descricao' => 'Avançado óleo lubrificante semissintético para 
            motores 4 tempos de alto desempenho e elevada 
            estabilidade. Desenvolvido com tecnologia para
            proporcionar elevado nível de proteção e 
            performance. Recomendado para motores de 
            motocicletas 4 tempos de alta rotação. Atende as 
            especificações de serviços API SN/JASO MA2. 
            Disponível no grau SAE 15W50.',            
            'comp_quimica' => 'Óleo mineral do grupo II, 
            base sintética GIII e aditivos antidesgaste, 
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina, 
            modificador de viscosidade e depressor de ponto 
            de fluidez.',
            'viscosidade' => 'SAE 15W50',
            'imagem' => 'images/produtos/Motocicletas/RACE MOTO 4T 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'fichas/Motos/RACE MOTO 4T - Ficha Técnica.pdf',
            'fispq' => "fispqs/Motocicletas/FISPQ - Race Moto 4T 15W50.pdf",
            'categoria_id' => 3,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'PRO MOTO 4T',
            'descricao' => 'Avançado óleo lubrificante semissintético para 
            motores 4 tempos de última geração e alta 
            performance. Sua tecnologia garante elevado nível 
            de proteção e limpeza. Recomendado para
            motores de motocicletas 4 tempos de alto 
            desempenho. Atende as especificações de 
            serviços API SN/JASO MA2. Disponível no grau 
            SAE 20W50.',            
            'comp_quimica' => 'Óleo mineral do grupo  II, 
            base sintética GIII e aditivos antidesgaste, 
            antiespumante, antioxidante, detergente, 
            dispersante, agente de reserva alcalina, 
            modificador de viscosidade e depressor de ponto 
            de fluidez.',
            'viscosidade' => 'SAE 20W50',
            'imagem' => 'images/produtos/Motocicletas/PRO MOTO 4T 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'fichas/Motos/PRO MOTO 4T - Ficha Técnica.pdf',
            'fispq' => "fispqs/Motocicletas/FISPQ - Pro Moto 4T 20W50.pdf",
            'categoria_id' => 3,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ECONOLINE MOTO 4T EXTREME 20W50',
            'descricao' => 'Óleo lubrificante multiviscoso mineral de avançada 
            tecnologia para uso em motores de motocicleta
            quatro tempos de alta rotação.  Atende  as 
            especificações de serviços API SL e JASO MA. 
            Disponível no grau SAE 20W50.            
            Econoline Moto 4T Extreme é recomendado para o uso em todos os motores de motocicletas 4 tempos, 
            e especialmente desenvolvido para proporcionar superior performance aos motores que operam em condições extremas.',            
            'comp_quimica' => 'Óleo mineral  e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante, detergente, dispersante, agente de 
            reserva alcalina e melhorador de fluidez.',
            'viscosidade' => 'SAE 20W50',
            'imagem' => 'images/produtos/Econoline/MOTO 4T EXTREME 20W50 ECONOLINE - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'fichas/Econoline/Ficha Técnica - Moto 4T Extreme Econoline.pdf',
            'fispq' => "fispqs/Motocicletas/FISPQ - Moto 4T Extreme.pdf",
            'categoria_id' => 3,
        ]);

        //TRANSMISSÃO
        DB::table('produtos')->insert([
            'nome' => 'HTF TASA SUFIXO A',
            'descricao' => 'Óleo lubrificante mineral tipo HTF para sistemas de transmissões automáticos industriais. 
            DULUB HTF SAE 10W20 SUFIXO A é um óleo hidráulico especialmente recomendado para uso em caixas de transmissão automáticas e sistemas hidráulicos 
            que requeiram um produto estável ao cisalhamento.',            
            'comp_quimica' => 'Óleo mineral premium,
            base sintética GIII, aditivos antidesgaste,
            antioxidantes, dispersantes, detergentes e corante
            vermelho.',
            'viscosidade' => 'SAE 10W20',
            'imagem' => 'images/produtos/Agricolas/ATF TASA - 1L.png',
            'tamanhos' => 'images/Tamanhos/200-500-1L-20L-200L.svg',
            'ficha' => 'fichas/Transmissoes/ATF TASA 10W20 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Transmissões/FISPQ - ATF TASA 10W20.pdf",
            'categoria_id' => 4,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ATF DX3 MINERAL',
            'descricao' => 'Fluido lubrificante mineral de alto desempenho
                para caixas de transferência, sistemas de direção
                hidráulica e transmissões automáticas (ATF) de
                automóveis modernos e aplicações pesadas que
                atendam aos requisitos de desempenho da GM
                DEXRON® IIIH e Allison C-4.',            
            'comp_quimica' => 'Óleo mineral premium,
            base sintética GIII, aditivos antidesgaste,
            antioxidantes, dispersantes, detergentes e corante
            vermelho.',
            'viscosidade' => 'DEXRON III-H',
            'imagem' => 'images/produtos/Agricolas/ATF DX3 MINERAL - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'ficha' => 'fichas/Transmissoes/FICHA TÉCNICA -DULUB ATF DX3 MINERAL.pdf',
            'fispq' => "fispqs/Transmissões/FISPQ - Dulub ATF DX3 MINERAL.pdf",
            'categoria_id' => 4,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ATF DX3',
            'descricao' => 'Fluido lubrificante semissintético de alto desempenho para
            caixas de transferência, sistema de direção hidráulica e
            transmissões automáticas (ATF) de automóveis modernos.
            DULUB ATF DX3 foi formulado para atender aos rigorosos
            requisitos de fluido de transmissão da General Motors e Ford.',            
            'comp_quimica' => 'Óleo mineral premium,
            base sintética GIII, aditivos antidesgaste,
            antioxidantes, dispersantes, detergentes e corante
            vermelho.',
            'viscosidade' => 'DEXRON III-H',
            'imagem' => 'images/produtos/Agricolas/ATF DX3 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-200L.svg',
            'ficha' => 'fichas/Transmissoes/ATF DX3 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Transmissões/FISPQ - ATF DX3.pdf",
            'categoria_id' => 4,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ATF MULTI',
            'descricao' => 'Fluido lubrificante 100% sintético de última geração para
            caixas de transferência, sistema de direção hidráulica,
            transmissões automáticas e continuamente variáveis (CVT).
            DULUB ATF MULTI é especialmente formulado com aditivos
            de alta performance e base sintética selecionada para atender
            aos mais exigentes requerimentos de fabricantes de
            transmissões automáticas CVT (Transmissão Continuamente
            Variável).',            
            'comp_quimica' => 'Óleo mineral premium,
            base sintética GIII, aditivos antidesgaste,
            antioxidantes, dispersantes, detergentes e corante
            vermelho.',
            'viscosidade' => 'CVT FLUID',
            'imagem' => 'images/produtos/Agricolas/ATF MULTI - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'fichas/Transmissoes/ATF MULTI CVT - Ficha Técnica.pdf',
            'fispq' => "fispqs/Transmissões/FISPQ - ATF MULTI CVT.pdf",
            'categoria_id' => 4,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX TDH TRACTOR 20W30',
            'descricao' => 'Óleo lubrificante mineral multiviscoso para 
            transmissões, sistemas hidráulicos, conversores de 
            torque, freios banhados a óleo e sistema de 
            arranque. Atende aos níveis de desempenho API 
            GL5 e grau SAE 20W30.',
            'comp_quimica' => 'Óleos minerais e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante.',
            'viscosidade' => 'SAE 20W30',
            'imagem' => 'images/produtos/Agricolas/MAX TDH TRACTOR 20W30 - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Transmissoes/MAX TDH TRACTOR 20W30 - Ficha Técnica.pdf',
            'fispq' => 'none',
            'categoria_id' => 4,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX TDH TRACTOR MT6',
            'descricao' => 'Óleo lubrificante mineral multiviscoso para 
            transmissões, sistemas hidráulicos, conversores de 
            torque, freios banhados a óleo e sistema de 
            arranque. Atende aos níveis de desempenho API 
            GL5 e grau SAE 10W30.',
            'comp_quimica' => 'Óleos minerais e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante.',
            'viscosidade' => 'SAE 10W30',
            'imagem' => 'images/produtos/Agricolas/MAX TDH TRACTOR MT6 - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Transmissoes/MAX TRACTOR TDH MT6 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Transmissões/FISPQ - MAXTRACTOR TDH MT6.pdf",
            'categoria_id' => 4,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'TDH TRACTOR 80W',
            'descricao' => 'Óleo lubrificante mineral monoviscoso para 
            transmissões, sistemas hidráulicos, freios 
            banhados a óleo e comandos finais. Atende aos 
            níveis de desempenho API GL4 e grau SAE 80.',
            'comp_quimica' => 'Óleos minerais e aditivos
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante e extrema pressão.',
            'viscosidade' => 'SAE 80W',
            'imagem' => 'images/produtos/Agricolas/TDH TRACTOR 80W - 20L.png',
            'tamanhos' => 'images/Tamanhos/5L-20L-200L.svg',
            'ficha' => 'fichas/Transmissoes/TDH TRACTOR 80W - Ficha Técnica.pdf',
            'fispq' => 'none',
            'categoria_id' => 4,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'TDH TRACTOR SAE 30',
            'descricao' => 'Óleo lubrificante mineral monoviscoso para 
            transmissões, sistemas hidráulicos, freios 
            banhados a óleo e comandos finais. Atende aos 
            níveis de desempenho API GL4 e grau SAE 30.',
            'comp_quimica' => 'Óleos minerais e aditivos
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante e extrema pressão.',
            'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Agricolas/TDH TRACTOR SAE 30 - 20L.png',
            'tamanhos' => 'images/Tamanhos/5L-20L-200L.svg',
            'ficha' => 'fichas/Transmissoes/TDH TRACTOR SAE 30 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Transmissões/FISPQ - TDH TRACTOR SAE 30.pdf",
            'categoria_id' => 4,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'TOTAC 410',
            'descricao' => 'Óleo lubrificante mineral monoviscoso para 
            conversores de torque e sistemas hidráulicos.
            Atende as especificações de desempenho Allison
            C-4 e CF-2. Grau SAE 10W.',
            'comp_quimica' => 'Óleos minerais e aditivos 
            anticorrosivo, antidesgaste, antiferrugem, 
            antioxidante, abaixador de ponto de fluidez e
            modificador de fricção.',
            'viscosidade' => 'SAE 10',
            'imagem' => 'images/produtos/Agricolas/TOTAC 410 - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Transmissoes/TOTAC 410 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Transmissões/FISPQ - TOTAC 410.pdf",
            'categoria_id' => 4,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'TOTAC 430',
            'descricao' => 'Óleo lubrificante mineral monoviscoso para 
            conversores de torque e sistemas hidráulicos.
            Atende as especificações de desempenho Allison
            C-4 e CF-2. Grau SAE 30W.',
            'comp_quimica' => 'Óleos minerais e aditivos 
            anticorrosivo, antidesgaste, antiferrugem, 
            antioxidante, abaixador de ponto de fluidez e
            modificador de fricção.',
            'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Agricolas/TOTAC 430 - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Transmissoes/TOTAC 430 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Transmissões/FISPQ - TOTAC 430.pdf",
            'categoria_id' => 4,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'TOTAC 440',
            'descricao' => 'Óleo lubrificante mineral monoviscoso para 
            conversores de torque e sistemas hidráulicos.
            Atende as especificações de desempenho Allison
            C-4 e CF-2. Grau SAE 40W.',
            'comp_quimica' => 'Óleos minerais e aditivos 
            anticorrosivo, antidesgaste, antiferrugem, 
            antioxidante, abaixador de ponto de fluidez e
            modificador de fricção.',
            'viscosidade' => 'SAE 40',
            'imagem' => 'images/produtos/Agricolas/TOTAC 440 - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Transmissoes/TOTAC 430 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Transmissões/FISPQ - TOTAC 430.pdf",
            'categoria_id' => 4,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'TOTAC 450',
            'descricao' => 'Óleo lubrificante mineral monoviscoso para 
            conversores de torque e sistemas hidráulicos.
            Atende as especificações de desempenho Allison
            C-4 e CF-2.  Grau SAE 50W.',
            'comp_quimica' => 'Óleos minerais e aditivos 
            anticorrosivo, antidesgaste, antiferrugem, 
            antioxidante, abaixador de ponto de fluidez e
            modificador de fricção.',
            'viscosidade' => 'SAE 50',
            'imagem' => 'images/produtos/Agricolas/TOTAC 450 - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Transmissoes/TOTAC 450 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Transmissões/FISPQ - TOTAC 450.pdf",
            'categoria_id' => 4,
        ]);

        //HIDRAULICOS
        DB::table('produtos')->insert([
            'nome' => 'MAX HIDRO 22 EP',
            'descricao' => 'É um lubrificante hidráulico premium recomendado 
            para sistemas hidráulicos de alto rendimento,
            submetidos a elevadas temperatura e pressão.
            A linha DULUB MAX HIDRO EP é recomendada para 
            lubrificação de máquinas e ferramentas  que
            exigem produtos com propriedades antidesgaste.',
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antidesgaste, agente de extrema 
            pressão, antiespumante e antiferrugem.',
            'viscosidade' => 'HLP-DIN 51524',
            'imagem' => 'images/produtos/Hidraulicos/MAXHIDRO 22 - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Hidráulicos/FICHA TÉCNICA - DULUB MAX HIDRO 22 EP.pdf',
            'fispq' => 'fispqs/Hidráulicos/FISPQ - MAX HIDRO 22 EP.pdf',
            'categoria_id' => 5,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX HIDRO 32 EP',
            'descricao' => 'É um lubrificante hidráulico premium recomendado 
            para sistemas hidráulicos de alto rendimento,
            submetidos a elevadas temperatura e pressão.
            A linha DULUB MAX HIDRO EP é recomendada para 
            lubrificação de máquinas e ferramentas  que
            exigem produtos com propriedades antidesgaste.',
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antidesgaste, agente de extrema 
            pressão, antiespumante e antiferrugem.',
            'viscosidade' => 'HLP-DIN 51524',
            'imagem' => 'images/produtos/Hidraulicos/MAXHIDRO 32 - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Hidráulicos/FICHA TÉCNICA - DULUB MAX HIDRO 32 EP.pdf',
            'fispq' => 'fispqs/Hidráulicos/FISPQ - MAX HIDRO 32 EP.pdf',
            'categoria_id' => 5,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX HIDRO 46 EP',
            'descricao' => 'É um lubrificante hidráulico premium recomendado 
            para sistemas hidráulicos de alto rendimento,
            submetidos a elevadas temperatura e pressão.
            A linha DULUB MAX HIDRO EP é recomendada para 
            lubrificação de máquinas e ferramentas  que
            exigem produtos com propriedades antidesgaste.',
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antidesgaste, agente de extrema 
            pressão, antiespumante e antiferrugem.',
            'viscosidade' => 'HLP-DIN 51524',
            'imagem' => 'images/produtos/Hidraulicos/MAXHIDRO 46 - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Hidráulicos/FICHA TÉCNICA - DULUB MAX HIDRO 46 EP.pdf',
            'fispq' => 'fispqs/Hidráulicos/FISPQ - MAX HIDRO 46 EP.pdf',
            'categoria_id' => 5,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX HIDRO 68 EP',
            'descricao' => 'É um lubrificante hidráulico premium recomendado 
            para sistemas hidráulicos de alto rendimento,
            submetidos a elevadas temperatura e pressão.
            A linha DULUB MAX HIDRO EP é recomendada para 
            lubrificação de máquinas e ferramentas  que
            exigem produtos com propriedades antidesgaste.',
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antidesgaste, agente de extrema 
            pressão, antiespumante e antiferrugem.',
            'viscosidade' => 'HLP-DIN 51524',
            'imagem' => 'images/produtos/Hidraulicos/MAXHIDRO 68 - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Hidráulicos/FICHA TÉCNICA - DULUB MAX HIDRO 68 EP.pdf',
            'fispq' => 'fispqs/Hidráulicos/FISPQ - MAX HIDRO 68 EP.pdf',
            'categoria_id' => 5,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX HIDRO 100 EP',
            'descricao' => 'É um lubrificante hidráulico premium recomendado 
            para sistemas hidráulicos de alto rendimento,
            submetidos a elevadas temperatura e pressão.
            A linha DULUB MAX HIDRO EP é recomendada para 
            lubrificação de máquinas e ferramentas  que
            exigem produtos com propriedades antidesgaste.',
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antidesgaste, agente de extrema 
            pressão, antiespumante e antiferrugem.',
            'viscosidade' => 'HLP-DIN 51524',
            'imagem' => 'images/produtos/Hidraulicos/MAXHIDRO 100 - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Hidráulicos/FICHA TÉCNICA - DULUB MAX HIDRO 100 EP.pdf',
            'fispq' => 'fispqs/Hidráulicos/FISPQ - MAX HIDRO 100 EP.pdf',
            'categoria_id' => 5,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX HIDRO 150 EP',
            'descricao' => 'É um lubrificante hidráulico premium recomendado 
            para sistemas hidráulicos de alto rendimento,
            submetidos a elevadas temperatura e pressão.
            A linha DULUB MAX HIDRO EP é recomendada para 
            lubrificação de máquinas e ferramentas  que
            exigem produtos com propriedades antidesgaste.',
            'comp_quimica' => 'Óleo mineral e aditivos
            anticorrosivo, antidesgaste, agente de extrema 
            pressão, antiespumante e antiferrugem.',
            'viscosidade' => 'HLP-DIN 51524',
            'imagem' => 'images/produtos/Hidraulicos/MAXHIDRO 150 - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Hidráulicos/FICHA TÉCNICA - DULUB MAX HIDRO 150 EP.pdf',
            'fispq' => 'fispqs/Hidráulicos/FISPQ - MAX HIDRO 150 EP.pdf',
            'categoria_id' => 5,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'HIDRÁULICO 68',
            'descricao' => 'Óleo lubrificante mineral para sistemas hidráulicos 
            e circulatórios que operam em condições 
            moderadas de pressão e temperatura.
            DULUB  HIDRÁULICO 68  é recomendado para 
            aplicações em redutores, sistemas circulatórios, 
            máquinas hidráulicas (prensas, elevadores em 
            serviços leves), motores elétricos lubrificados a 
            óleo, mancais simples e rolamentos.',
            'comp_quimica' => 'Óleo mineral e aditivos
            antidesgaste, antioxidante, antiespumante e 
            extrema pressão.',
            'viscosidade' => 'HL-DIN 51524',
            'imagem' => 'images/produtos/Hidraulicos/HIDRÁULICO 68 PREMIUM - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'ficha' => 'fichas/Hidráulicos/FICHA TÉCNICA - DULUB HIDRÁULICO 68.pdf',
            'fispq' => 'fispqs/Hidráulicos/FISPQ - Hidráulico 68.pdf',
            'categoria_id' => 5,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ECONOLINE HIDRÁULICO 68',
            'descricao' => 'Óleo lubrificante mineral para sistemas hidráulicos 
            e circulatórios que operam em condições 
            moderadas de pressão e temperatura.
            ECONOLINE HIDRÁULICO 68  é recomendado para 
            aplicações em redutores, sistemas circulatórios, 
            máquinas hidráulicas (prensas, elevadores em 
            serviços leves), motores elétricos lubrificados a 
            óleo, mancais simples e rolamentos.',
            'comp_quimica' => 'Óleo mineral e aditivos
            antidesgaste, antioxidante, antiespumante e 
            extrema pressão.',
            'viscosidade' => 'HL-DIN 51524',
            'imagem' => 'images/produtos/Econoline/HIDRÁULICO 68 ECONOLINE - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L.svg',
            'ficha' => 'fichas/Econoline/Ficha Técnica - Hidráulico 68 Econoline.pdf',
            'fispq' => 'fispqs/Hidráulicos/FISPQ - Hidráulico 68.pdf',
            'categoria_id' => 5,
        ]);

        //ENGRENAGENS
        DB::table('produtos')->insert([
            'nome' => 'RBM 68',
            'descricao' => 'Óleo lubriﬁcante recomendado para redutores e engrenagens
                fechadas industriais cilíndricas, helicoidais e cônicas que operam
                a temperaturas de até 100ºC. Particularmente, são adequados
                para engrenagens que trabalham com cargas pesadas ou de
                choque. DULUB RBM 68 controla o desgaste e a corrosão das
                partes lubriﬁcadas. Sua aditivação permite garantir características
                de extrema pressão, resistência a oxidação e a formação de
                espuma.',            
            'comp_quimica' => 'óleo básico mineral e aditivos antidesgaste, aditivos de
                extrema pressão, antiespumante, antioxidante e anticorrosivo.',
            'viscosidade' => 'SAE 68',
            'imagem' => 'images/produtos/Engrenagens/Produtos - 1L - RBM 68.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/Ficha Técnica - RBM 68.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ RBM 68.pdf",
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'RBM 100',
            'descricao' => 'Óleo lubriﬁcante recomendado para redutores e engrenagens
                fechadas industriais cilíndricas, helicoidais e cônicas que operam
                a temperaturas de até 100ºC. Particularmente, são adequados
                para engrenagens que trabalham com cargas pesadas ou de
                choque. DULUB RBM 100 controla o desgaste e a corrosão das
                partes lubriﬁcadas. Sua aditivação permite garantir características
                de extrema pressão, resistência a oxidação e a formação de
                espuma.',            
            'comp_quimica' => 'óleo básico mineral e aditivos antidesgaste, aditivos de
                extrema pressão, antiespumante, antioxidante e anticorrosivo.',
            'viscosidade' => 'SAE 100',
            'imagem' => 'images/produtos/Engrenagens/Produtos - 1L - RBM 100.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/Ficha Técnica - RBM 100.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ RBM 100.pdf",
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'RBM 150',
            'descricao' => 'Óleo lubriﬁcante recomendado para redutores e engrenagens
                fechadas industriais cilíndricas, helicoidais e cônicas que operam
                a temperaturas de até 100ºC. Particularmente, são adequados
                para engrenagens que trabalham com cargas pesadas ou de
                choque. DULUB RBM 150 controla o desgaste e a corrosão das
                partes lubriﬁcadas. Sua aditivação permite garantir características
                de extrema pressão, resistência a oxidação e a formação de
                espuma.',            
            'comp_quimica' => 'óleo básico mineral e aditivos antidesgaste, aditivos de
                extrema pressão, antiespumante, antioxidante e anticorrosivo.',
            'viscosidade' => 'SAE 150',
            'imagem' => 'images/produtos/Engrenagens/Produtos - 1L - RBM 150.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/Ficha Técnica - RBM 150.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ RBM 150.pdf",
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'RBM 220',
            'descricao' => 'Óleo lubriﬁcante recomendado para redutores e engrenagens
                fechadas industriais cilíndricas, helicoidais e cônicas que operam
                a temperaturas de até 100ºC. Particularmente, são adequados
                para engrenagens que trabalham com cargas pesadas ou de
                choque. DULUB RBM 220 controla o desgaste e a corrosão das
                partes lubriﬁcadas. Sua aditivação permite garantir características
                de extrema pressão, resistência a oxidação e a formação de
                espuma.',            
            'comp_quimica' => 'óleo básico mineral e aditivos antidesgaste, aditivos de
                extrema pressão, antiespumante, antioxidante e anticorrosivo.',
            'viscosidade' => 'SAE 220',
            'imagem' => 'images/produtos/Engrenagens/Produtos - 1L - RBM 220.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/Ficha Técnica - RBM 220.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ RBM 220.pdf",
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'RBM 320',
            'descricao' => 'Óleo lubriﬁcante recomendado para redutores e engrenagens
                fechadas industriais cilíndricas, helicoidais e cônicas que operam
                a temperaturas de até 100ºC. Particularmente, são adequados
                para engrenagens que trabalham com cargas pesadas ou de
                choque. DULUB RBM 320 controla o desgaste e a corrosão das
                partes lubriﬁcadas. Sua aditivação permite garantir características
                de extrema pressão, resistência a oxidação e a formação de
                espuma.',            
            'comp_quimica' => 'óleo básico mineral e aditivos antidesgaste, aditivos de
                extrema pressão, antiespumante, antioxidante e anticorrosivo.',
            'viscosidade' => 'SAE 320',
            'imagem' => 'images/produtos/Engrenagens/Produtos - 1L - RBM 320.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/Ficha Técnica - RBM 320.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ RBM 320.pdf",
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'RBM 460',
            'descricao' => 'Óleo lubriﬁcante recomendado para redutores e engrenagens
                fechadas industriais cilíndricas, helicoidais e cônicas que operam
                a temperaturas de até 100ºC. Particularmente, são adequados
                para engrenagens que trabalham com cargas pesadas ou de
                choque. DULUB RBM 460 controla o desgaste e a corrosão das
                partes lubriﬁcadas. Sua aditivação permite garantir características
                de extrema pressão, resistência a oxidação e a formação de
                espuma.',            
            'comp_quimica' => 'óleo básico mineral e aditivos antidesgaste, aditivos de
                extrema pressão, antiespumante, antioxidante e anticorrosivo.',
            'viscosidade' => 'SAE 460',
            'imagem' => 'images/produtos/Engrenagens/Produtos - 1L - RBM 460.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/Ficha Técnica - RBM 460.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ RBM 460.pdf",
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'RBM 680',
            'descricao' => 'Óleo lubriﬁcante recomendado para redutores e engrenagens
                fechadas industriais cilíndricas, helicoidais e cônicas que operam
                a temperaturas de até 100ºC. Particularmente, são adequados
                para engrenagens que trabalham com cargas pesadas ou de
                choque. DULUB RBM 680 controla o desgaste e a corrosão das
                partes lubriﬁcadas. Sua aditivação permite garantir características
                de extrema pressão, resistência a oxidação e a formação de
                espuma.',            
            'comp_quimica' => 'óleo básico mineral e aditivos antidesgaste, aditivos de
                extrema pressão, antiespumante, antioxidante e anticorrosivo.',
            'viscosidade' => 'SAE 680',
            'imagem' => 'images/produtos/Engrenagens/Produtos - 1L - RBM 680.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/Ficha Técnica - RBM 680.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ RBM 680.pdf",
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE 90 API GL4',
            'descricao' => 'Óleo lubrificante mineral de diferenciais hipoidais,
            alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem 
            automotivas em condições de elevada severidade.
            Atende aos níveis de desempenho API GL4 e grau
            SAE 90.',            
            'comp_quimica' => 'Óleos minerais e aditivos antioxidante, antidesgaste, antiespumante, e extrema pressão.',
            'viscosidade' => 'SAE 90',
            'imagem' => 'images/produtos/Engrenagens/HIPÓIDE GL4 SAE 90 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/HIPOIDE 90 GL4 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ - HIPOIDE 90 GL4.pdf",
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE 140 API GL4',
            'descricao' => 'Óleo lubrificante mineral de diferenciais hipoidais,
            alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem 
            automotivas em condições de elevada severidade.
            Atende aos níveis de desempenho API GL4 e grau
            SAE 140.',            
            'comp_quimica' => 'Óleos minerais e aditivos antioxidante, antidesgaste, antiespumante, e extrema pressão.',
            'viscosidade' => 'SAE 140',
            'imagem' => 'images/produtos/Engrenagens/HIPÓIDE GL4 SAE 140 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/HIPOIDE 140 GL4 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ - HIPOIDE 140 GL4.pdf",
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE 250 API GL4',
            'descricao' => 'Óleo lubrificante mineral de diferenciais hipoidais,
            alguns tipos de caixas de mudanças manuais, 
            caixas de direção e caixas de embreagem 
            automotivas em condições de elevada severidade.
            Atende aos níveis de desempenho API GL4 e grau
            SAE 250.',            
            'comp_quimica' => 'Óleos minerais e aditivos antioxidante, antidesgaste, antiespumante, e extrema pressão.',
            'viscosidade' => 'SAE 250',
            'imagem' => 'images/produtos/Engrenagens/HIPÓIDE GL4 SAE 250 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/HIPOIDE 250 GL4 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ - HIPOIDE 250 GL4.pdf",
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE S 80W90 API GL5',
            'descricao' => 'Óleo lubrificante mineral multiviscoso para diferenciais hipoidais, alguns tipos de caixas de mudanças manuais, caixas de direção e caixas de embreagem automotivas em condições de elevada severidade. Atende aos níveis de desempenho API GL5 e grau SAE 80W90. DULUB HIPOIDE S 80W90 GL5 é um lubrificante de extrema pressão recomendado para engrenagens de carros de passeio, utilitários, caminhões, ônibus e tratores.',            
            'comp_quimica' => 'Óleos minerais e aditivos antioxidante, antidesgaste, antiespumante, e extrema pressão.',
            'viscosidade' => 'SAE 80W90',
            'imagem' => 'images/produtos/Engrenagens/HIPÓIDE S GL5 SAE 80W90 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/HIPOIDE S 80W90 GL5 - Ficha Técnica.pdf',
            'fispq' => 'none',
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE S 85W90 API GL5',
            'descricao' => 'Dulub Hipoide S 85W-90 é um lubrificante para engrenagens operando em serviço pesado, formulado com óleos básicos e pacote de aditivos de alto desempenho onde sejam necessários serviços API GL-5. DULUB HIPOIDE S 85W90 GL-5 é recomendado para uso em transmissões manuais, eixos e comandos finais onde são esperados cargas de extrema pressão e de choque.',            
            'comp_quimica' => 'Óleos minerais e aditivos antioxidante, antidesgaste, antiespumante, e extrema pressão.',
            'viscosidade' => 'SAE 85W90',
            'imagem' => 'images/produtos/Engrenagens/HIPÓIDE S GL5 SAE 85W90 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/HIPOIDE S 85W90 GL5 - Ficha Técnica.pdf',
            'fispq' => 'none',
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE 85W140 API GL5',
            'descricao' => 'Óleo lubrificante mineral multiviscoso para
            diferenciais hipoidais, alguns tipos de caixas de 
            mudanças manuais, caixas de direção e caixas de 
            embreagem automotivas em condições de elevada 
            severidade. Atende aos níveis de desempenho API 
            GL5 e grau SAE 85W140.',            
            'comp_quimica' => 'Óleos minerais e aditivos 
            antioxidante, antidesgaste, antiespumante, 
            depressor de ponto de fluidez e extrema pressão.',
            'viscosidade' => 'SAE 85W140',
            'imagem' => 'images/produtos/Engrenagens/HIPÓIDE 85W140 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/HIPOIDE S 85W140 GL5 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ - HIPOIDE S 85W140 GL5.pdf",
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE S 90 API GL5',
            'descricao' => 'Óleo lubrificante mineral monoviscoso para
            diferenciais hipoidais, alguns tipos de caixas de 
            mudanças manuais, caixas de direção e caixas de 
            embreagem automotivas em condições de elevada 
            severidade. Atende aos níveis de desempenho API 
            GL5 e grau SAE 90.',            
            'comp_quimica' => 'Óleos minerais e aditivos antioxidante, antidesgaste, antiespumante, e extrema pressão.',
            'viscosidade' => 'SAE 90',
            'imagem' => 'images/produtos/Engrenagens/HIPÓIDE S GL5 SAE 90 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/HIPOIDE S 90 GL5 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ - HIPOIDE S 90 GL5.pdf",
            'categoria_id' => 6,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'HIPÓIDE S 140 API GL5',
            'descricao' => 'Óleo lubrificante mineral monoviscoso para
            diferenciais hipoidais, alguns tipos de caixas de 
            mudanças manuais, caixas de direção e caixas de 
            embreagem automotivas em condições de elevada 
            severidade. Atende aos níveis de desempenho API 
            GL5 e grau SAE 140.',            
            'comp_quimica' => 'Óleos minerais e aditivos antioxidante, antidesgaste, antiespumante, e extrema pressão.',
            'viscosidade' => 'SAE 140',
            'imagem' => 'images/produtos/Engrenagens/HIPÓIDE S GL5 SAE 140 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-5L-20L-200L.svg',
            'ficha' => 'fichas/Engrenagens/HIPOIDE S 140 GL5 - Ficha Técnica.pdf',
            'fispq' => "fispqs/Engrenagens/FISPQ - HIPOIDE S 140 GL5.pdf",
            'categoria_id' => 6,
        ]);

        //INDUSTRIAIS
        DB::table('produtos')->insert([
            'nome' => 'COLDTECH 32',
            'descricao' => 'Óleo lubrificante semissintético para uso em todos 
            os tipos de sistemas de refrigeração que utilizem 
            gases refrigerantes como NH3, CO2, CH3Cl, Freon, 
            R-11, R-12, R-22, R-123, R-134, R-408, R-409, R-502, entre outros.
            DULUB  COLDTECH  32  possui elevada 
            estabilidade química, apresentando resistência a 
            oxidação e formação de borra ou goma. É 
            praticamente isento de parafinas e mantém os 
            compressores de frio trabalhando livres de 
            depósitos.',
            'comp_quimica' => ' base sintética  do grupo  III, 
            básicos naftênicos, aditivos antioxidante e 
            melhorador de ponto de fluidez.',
            'viscosidade' => 'SAE 32',
            'imagem' => 'images/produtos/Refrigeração/Coldtech 32 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'fichas/Industriais/Ficha Técnica - DULUB COLDTECH 32.pdf',
            'fispq' => "fispqs/Industriais/FISPQ - Dulub Coldtech 32.pdf",
            'categoria_id' => 7,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'CR TECH',
            'descricao' => 'Óleo lubrificante mineral de base naftênica 
            especialmente desenvolvido para aplicação em 
            sistemas de refrigeração que trabalhem com gases 
            refrigerantes como freons, genetrons, isotrons, 
            carrene, amônia, cloreto de metila, anidrido 
            sulfuroso, dióxido de carbono e outros.',
            'comp_quimica' => 'Óleo neutro básico  mineral
            e aditivos antioxidante e melhorador de fluidez.',
            'viscosidade' => 'ISO 46, 68, 100, 150',
            'imagem' => 'images/produtos/Refrigeração/CR TECH - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L.svg',
            'ficha' => 'none',
            'fispq' => "fispqs/Industriais/FISPQ - Dulub CR TECH.zip",
            'categoria_id' => 7,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'MAX P',
            'descricao' => 'É um lubrificante  premium  recomendado para 
            ferramentas pneumáticas, compressores de ar tipo 
            pistão e barramentos de máquinas operatrizes. 
            Disponível no grau ISO 46. Recomendado para a 
            lubrificação de marteletes, compressores de ar a 
            pistão, britadores e máquinas operatrizes de uso 
            geral.',
            'comp_quimica' => 'Óleo básico mineral e 
            aditivos anticorrosivo, antidesgaste, agente de 
            extrema pressão, antiespumante e antiferrugem.',
            'viscosidade' => 'ISO 46, 68, 100, 150, 220',
            'imagem' => 'images/produtos/Compressores/MAX P - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Industriais/Ficha Técnica - DULUB MAX P.zip',
            'fispq' => "fispqs/Industriais/FISPQ - Dulub Max P.zip",
            'categoria_id' => 7,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'STC TECH',
            'descricao' => 'Óleo lubrificante sintético hidráulico de alta 
            qualidade, formulado a partir de bases sintéticas, 
            polialfaolefinas  (PAO), e aditivos especiais para a 
            lubrificação de turbinas e compressores de ar de 
            alta perfomance.',
            'comp_quimica' => 'base sintética e aditivos 
            antidesgaste, agente demulsificante, antioxidante e 
            antiespumante.',
            'viscosidade' => 'ISO 46, 68, 100',
            'imagem' => 'images/produtos/Compressores/STC TECH - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Industriais/Ficha Técnica - DULUB STC TECH.zip',
            'fispq' => 'fispqs/Industriais/FISPQ - Dulub STC TECH.zip',
            'categoria_id' => 7,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'TC TECH',
            'descricao' => 'Óleo lubrificante mineral para uso em turbinas, 
            compressores rotativos, sistemas circulatórios e 
            hidráulicos, máquinas operatrizes e redutores 
            operando em condições moderadamente leves.
            Lubrificante formulado 
            com óleos básicos parafínicos e pacote de aditivos 
            de última geração, proporcionando melhor 
            resistência a oxidação e elevada demulsibilidade.',
            'comp_quimica' => 'Óleos básicos parafínicos e 
            aditivos antidesgaste, agente demulsificante, 
            antioxidante e antiespumante.',
            'viscosidade' => 'ISO 46, 68, 100, 150, 220',
            'imagem' => 'images/produtos/Compressores/TC TECH - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Industriais/Ficha Técnica - DULUB TC TECH.zip',
            'fispq' => 'fispqs/Industriais/FISPQ - Dulub TC TECH.zip',
            'categoria_id' => 7,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'THERMO',
            'descricao' => 'Óleo lubrificante mineral de base parafínica para 
            ação térmica e transferência de calor em sistemas 
            circulatórios de aquecimento indireto.
            É aplicado em sistemas 
            abertos com temperaturas de operação da ordem 
            de 180ºC a 200ºC. Em sistemas fechados, selados 
            por gás inerte, o óleo apresenta bom desempenho 
            a temperaturas em até 280ºC, sem alterações de 
            suas características físico-químicas, desde que 
            observadas as condições adequadas de 
            aquecimento e circulação do óleo.',
            'comp_quimica' => 'Óleos básicos  óleo neutro 
            básico e aditivos antioxidante, anticorrosivo e 
            antiferrugem.',
            'viscosidade' => 'ISO 32, 46, 68, 100',
            'imagem' => 'images/produtos/Térmicos/THERMO - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Industriais/Ficha Técnica - DULUB THERMO.zip',
            'fispq' => 'fispqs/Industriais/FISPQ - Dulub THERMO.zip',
            'categoria_id' => 7,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'DESMOLD',
            'descricao' => 'Óleo mineral de alta estabilidade térmica, baixo 
            escoamento e fácil aplicação para desmoldagem 
            de formas metálicas, poliméricas, madeiras 
            naturais e/ou industrializadas. Desenvolvido 
            especialmente para a indústria de espumação em 
            geral, garantindo qualidade superior quanto a 
            uniformidade e homogeneidade no processo.',
            'comp_quimica' => 'Óleo mineral e aditivos 
            detergentes, dispersantes, antiferrugem e 
            antioxidante.',
            'viscosidade' => 'FP 68, 140',
            'imagem' => 'images/produtos/Desmoldantes/DESMOLD - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Industriais/Ficha Técnica - DULUB DESMOLD FP.zip',
            'fispq' => 'fispqs/Industriais/FISPQ - Dulub Desmold_ALL.pdf',
            'categoria_id' => 7,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'BÁSICO 10',
            'descricao' => 'É um óleo lubrificante de cor clara de alta 
            qualidade, formulado a partir de óleo básico 
            mineral de petróleo selecionado. Possui grau ISO 
            VG 22.
            DULUB  BÁSICO 10  é recomendado para a 
            lubrificação e limpeza de equipamentos industriais, 
            máquinas de tecelagens, máquinas de costura e 
            uso em sistemas circulatórios que exijam do óleo 
            resistência à oxidação e proteção contra a 
            corrosão.',
            'comp_quimica' => 'Óleo básico mineral e 
            aditivos antiespumante, anticorrosivo e 
            antioxidante.',
            'viscosidade' => 'ISO VG 22',
            'imagem' => 'images/produtos/Têxtil/BÁSICO 10 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Industriais/Ficha Técnica - DULUB BASICO 10.pdf',
            'fispq' => 'fispqs/Industriais/FISPQ - Dulub Basico 10.pdf',
            'categoria_id' => 7,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'BÁSICO C-10',
            'descricao' => 'É um óleo lubrificante  neutro, de cor clara  e alta 
            qualidade, formulado a partir de óleo básico 
            mineral de petróleo selecionado. Possui grau ISO 
            VG 32.
            DULUB  BÁSICO  C-10  é recomendado para a
            lubrificação e limpeza  de equipamentos industriais, 
            máquinas de costura e uso em sistemas 
            circulatórios que exijam do óleo resistência à 
            oxidação e proteção contra a corrosão.',
            'comp_quimica' => 'Óleo básico mineral e 
            aditivos antiespumante, anticorrosivo e 
            antioxidante.',
            'viscosidade' => 'ISO VG 22',
            'imagem' => 'images/produtos/Têxtil/BÁSICO C-10 - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Industriais/Ficha Técnica - DULUB BASICO C-10.pdf',
            'fispq' => 'fispqs/Industriais/FISPQ - Dulub Basico C-10.pdf',
            'categoria_id' => 7,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'INTEX 32',
            'descricao' => 'Óleo lubrificante lavável de rápida remoção
            indicado para lubrificação de agulhas e  platinas, 
            indicado em máquinas circulares,  retilíneas e de 
            meias.
            DULUB  INTEX 32  possui tensoativos que evitam 
            manchas nas fibras têxteis quando lavado.',
            'comp_quimica' => 'Óleos  básicos  e aditivos
            anticorrosivo, antidesgaste, antiferrugem e 
            tensoativos.',
            'viscosidade' => 'ISO VG 32',
            'imagem' => 'images/produtos/Têxtil/INTEX 32 - 1L.png',
            'tamanhos' => 'images/Tamanhos/20L-200L.svg',
            'ficha' => 'fichas/Industriais/Ficha Técnica - DULUB INTEX 32.pdf',
            'fispq' => 'fispqs/Industriais/FISPQ - Dulub Intex 32.pdf',
            'categoria_id' => 7,
        ]);

        //ECONOLINE
        DB::table('produtos')->insert([
            'nome' => 'ECONOLINE SUPREME 20W50',
            'descricao' => 'Óleo lubriﬁcante mineral multiviscoso de última geração utilizado
            em modernos motores de automóveis atuais. Garante uma
            perfeita lubriﬁcação do motor, tanto nas partidas a frio quanto nas
            temperaturas de funcionamento do veículo. O Dulub Supreme
            atende ao nível de desempenho API SL e é indicado para todos
            os motores a gasolina, etanol ou GNV de todas as marcas e
            potências. ECONOLINE SUPREME 20W50 controla a formação
            borras e depósitos, mesmo a altas temperaturas, reduzindo os
            desgastes e a corrosão nas partes lubriﬁcadas. ECONOLINE
            SUPREME 20W50 possui elevada resistência a oxidação e
            aditivação que confere ao óleo superior estabilidade térmica,
            proporcionando excelente desempenho em temperaturas
            extremas e ignições rápidas. ECONOLINE SUPREME 20W50 é
            indicado para uso em motores de todas as potências a gasolina,
            etanol, ﬂex e GNV de veículos nacionais ou importados com
            injeção eletrônica e/ou multiválvulas, sendo compatível com os
            conversores catalíticos de automóveis modernos. Possui Grau
            SAE 20W50 API SL.',            
            'comp_quimica' => 'Óleo mineral e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante e agente de reserva alcalina.',
            'viscosidade' => 'SAE 20W50',
            'imagem' => 'images/produtos/Econoline/SUPREME 20W50 ECONOLINE - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'fichas/Econoline/Ficha Técnica - Supreme Econoline 20W30.pdf',
            'fispq' => 'none',
            'categoria_id' => 8,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ECONOLINE MOTO 4T EXTREME 20W50',
            'descricao' => 'Óleo lubrificante multiviscoso mineral de avançada 
            tecnologia para uso em motores de motocicleta
            quatro tempos de alta rotação.  Atende  as 
            especificações de serviços API SL e JASO MA. 
            Disponível no grau SAE 20W50.            
            Econoline Moto 4T Extreme é recomendado para o uso em todos os motores de motocicletas 4 tempos, 
            e especialmente desenvolvido para proporcionar superior performance aos motores que operam em condições extremas.',            
            'comp_quimica' => 'Óleo mineral  e aditivos 
            anticorrosivo, antidesgaste, antiespumante, 
            antioxidante, detergente, dispersante, agente de 
            reserva alcalina e melhorador de fluidez.',
            'viscosidade' => 'SAE 20W50',
            'imagem' => 'images/produtos/Econoline/MOTO 4T EXTREME 20W50 ECONOLINE - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'fichas/Econoline/Ficha Técnica - Moto 4T Extreme Econoline.pdf',
            'fispq' => 'none',
            'categoria_id' => 8,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ECONOLINE HIDRÁULICO 68',
            'descricao' => 'Óleo lubrificante mineral para sistemas hidráulicos 
            e circulatórios que operam em condições 
            moderadas de pressão e temperatura.
            ECONOLINE HIDRÁULICO 68  é recomendado para 
            aplicações em redutores, sistemas circulatórios, 
            máquinas hidráulicas (prensas, elevadores em 
            serviços leves), motores elétricos lubrificados a 
            óleo, mancais simples e rolamentos.',
            'comp_quimica' => 'Óleo mineral e aditivos
            antidesgaste, antioxidante, antiespumante e 
            extrema pressão.',
            'viscosidade' => 'HL-DIN 51524',
            'imagem' => 'images/produtos/Econoline/HIDRÁULICO 68 ECONOLINE - 20L.png',
            'tamanhos' => 'images/Tamanhos/20L.svg',
            'ficha' => 'fichas/Econoline/Ficha Técnica - Hidráulico 68 Econoline.pdf',
            'fispq' => 'none',
            'categoria_id' => 8,
        ]);

        //GRAXAS
        DB::table('produtos')->insert([
            'nome' => 'GRAXLUB CA-2',
            'descricao' => 'Graxa lubrificante desenvolvida a base de sabão 
            de cálcio e óleos minerais. Possui excelente 
            adesividade e resistência a água.
            DULUB GRAXLUB CA-2  possui propriedades de 
            lubricidade, anticorrosivas e antidesgaste. Sua 
            formulação proporciona lubrificação em pontos e 
            peças expostas a vibrações e intempéries.',
            'comp_quimica' => 'Óleo mineral, sabão de 
            cálcio e aditivos.',
            'viscosidade' => 'CA-2',
            'imagem' => 'images/produtos/Graxas/GRAXLUB CA-2 - 18Kg.png',
            'tamanhos' => 'images/Tamanhos/500G-1KG-10KG-18KG-170KG.svg',
            'ficha' => 'fichas/Graxas/GRAXLUB CA2 - Ficha Técnica.pdf',
            'fispq' => 'fispqs/Graxas/FISPQ - GRAXLUB CA-2.pdf',
            'categoria_id' => 9,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'DULUB ROL MP-2',
            'descricao' => 'Graxa lubrificante desenvolvida a base de sabão
            de lítio, óleos minerais e aditivos especiais. Possui
            excelente adesividade e resistência a água.
            DULUB ROL MP-2 possui propriedades de lubricidade, anticorrosividade, antidesgaste e 
            antioxidação. Sua formulação proporciona lubrificação em pontos e peças expostas a 
            vibrações e intempéries.',
            'comp_quimica' => 'Óleo mineral, sabão de 
            cálcio e aditivos.',
            'viscosidade' => 'MP-2',
            'imagem' => 'images/produtos/Graxas/DULUB ROL MP-2.png',
            'tamanhos' => 'images/Tamanhos/500G-1KG-10KG-18KG-170KG.svg',
            'ficha' => 'fichas/Graxas/ROL MP-2 - Ficha Técnica.pdf',
            'fispq' => 'fispqs/Graxas/FISPQ - ROL MP-2.pdf',
            'categoria_id' => 9,
        ]);

        //FLUIDOS DE FREIOS
        DB::table('produtos')->insert([
            'nome' => 'DOT 3',
            'descricao' => 'O DULUB DOT 3 é um ﬂuido para freio e embreagens
            hidráulicas com alto ponto de ebulição. O DOT 3 atende os
            limites especiﬁcados pelas normas nacionais e internacionais e
            as supera. O DULUB DOT 3 atende às normas ABNT NBR
            9292 - Tipo 3 e é certiﬁcado pelo INMETRO. TECNOLOGIA:
            O DOT 3 é essencialmente mistura de glicóis e atua contra
            corrosão e oxidação. É compatível com borrachas e com
            materiais não metálicos.',
            'comp_quimica' => 'Óleo mineral e aditivos 
                                    anticorrosivo, antidesgaste, antiespumante, 
                                    antioxidante, detergente, dispersante, agente de 
                                    reserva alcalina e melhorador de fluidez.',
            'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Fluidos de Freios/Dot 3 - 200e500mL.png',
            'tamanhos' => 'images/Tamanhos/200-500.svg',
            'ficha' => 'fichas/Fluidos de Freios/Ficha Técnica - Fluidos de Freios Dot 3.pdf',
            'fispq' => 'fispqs/Fluidos de Freios/FISPQ Dulub DOT-3.rev 20.pdf',
            'categoria_id' => 10,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'DOT 4',
            'descricao' => 'O DULUB DOT 4 é um ﬂuido para freio e embreagens
            hidráulicas e tem ponto de ebulição (fervura) e baixa viscosidade,
            como requerido pelas principais montadoras. O ﬂuido para freio
            DOT 4 atende e supera os limites especiﬁcados pelas normas
            nacionais e internacionais. TECNOLOGIA: Segurança superior
            ao tipo 4, é um ﬂuido com alto ponto de ebulição úmido. São
            superiores a proteção contra oxidação e a corrosão. O ﬂuido é
            compatível com materiais não metálicos e borrachas.',
            'comp_quimica' => 'Óleo mineral e aditivos 
                                    anticorrosivo, antidesgaste, antiespumante, 
                                    antioxidante, detergente, dispersante, agente de 
                                    reserva alcalina e melhorador de fluidez.',
            'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Fluidos de Freios/Dot 4 - 200e500mL.png',
            'tamanhos' => 'images/Tamanhos/200-500.svg',
            'ficha' => 'fichas/Fluidos de Freios/Ficha Técnica - Fluidos de Freios Dot 4.pdf',
            'fispq' => 'fispqs/Fluidos de Freios/FISPQ Dulub DOT-4.rev 20.pdf',
            'categoria_id' => 10,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'DOT 4 LV',
            'descricao' => 'O DULUB DOT 4 LV (Low Viscosity) é um ﬂuido para freio e
            embreagem hidráulica. É especialmente recomendado para uso
            em sistemas de freio e embreagem hidráulica de veículos
            equipados com ESP (Electronic Stability Program), ABS (Anti-lock
            Braking System) e ASR (Acceleration Slip Regulation) com um
            ponto de ebulição elevado e excelente desempenho a
            temperaturas bastante baixas. TECNOLOGIA: Maior período de
            troca. Viscosidade baixíssima, melhor resposta de frenagem.
            Fluidos 100% sintético. Proteção superior contra corrosão e
            oxidação. Compatibilidade com materiais metálicos, não metálicos
            e borrachas.',
            'comp_quimica' => 'Óleo mineral e aditivos 
                                    anticorrosivo, antidesgaste, antiespumante, 
                                    antioxidante, detergente, dispersante, agente de 
                                    reserva alcalina e melhorador de fluidez.',
            'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Fluidos de Freios/Dot 4LV - 200e500mL.png',
            'tamanhos' => 'images/Tamanhos/200-500.svg',
            'ficha' => 'fichas/Fluidos de Freios/Ficha Técnica - Fluidos de Freios Dot 4LV.pdf',
            'fispq' => 'none',
            'categoria_id' => 10,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'DOT 5.1',
            'descricao' => 'O DULUB DOT 5.1 é uma ﬂuido para freio e embreagem
            hidráulica, classe de segurança 5.1, com altíssimo ponto de
            ebulição (fervura) e baixa viscosidade, como requerido pelas
            principais montadoras. Direcionado para veículos e motos de alto
            desempenho proporcionando uma maior segurança. O ﬂuido para
            freio DOT 5.1 atende e supera os limites especiﬁcados nas normas
            nacionais e internacionais. TECNOLOGIA: Maior período de troca.
            Maior segurança, alto ponto de ebulição úmido. Proteção superior
            contra corrosão e oxidação. Compatibilidade com materiais
            metálicos, não metálicos e borrachas.',
            'comp_quimica' => 'Óleo mineral e aditivos 
                                    anticorrosivo, antidesgaste, antiespumante, 
                                    antioxidante, detergente, dispersante, agente de 
                                    reserva alcalina e melhorador de fluidez.',
            'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Fluidos de Freios/Dot 5.1 Premium - 200e500mL.png',
            'tamanhos' => 'images/Tamanhos/200-500.svg',
            'ficha' => 'fichas/Fluidos de Freios/Ficha Técnica - Fluidos de Freios Dot 5-1 Premium.pdf',
            'fispq' => 'none',
            'categoria_id' => 10,
        ]);

        //SUPER ADITIVOS
        DB::table('produtos')->insert([
            'nome' => 'SUPER ADITIVO BASE MEG CONCENTRADO',
            'descricao' => "DULUB SUPER ADITIVO PARA RADIADOR INORGÂNICO
            CONCENTRADO é formulado com Monoetilenoglicol e inibidores
            de corrosão inorgânicos que irão proteger todo o sistema contra
            corrosão, superaquecimento e cavitação. Evita o ressecamento
            das mangueiras, lubriﬁca a bomba d'água e proporciona proteção
            adicional ao alumínio. Indicado para veículos a gasolina, álcool,
            multicombustíveis, diesel e GNV.",
            'comp_quimica' => 'Monoetilenoglicol, base especial protetora orgânica, corante e
            água bi desmineralizada',
            //'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Super Aditivos/SUPER ADITIVO BASEMEG CONC - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Super Aditivos/Super Aditivo Inorgânico Concentrado - Ficha Técnica.pdf',
            'fispq' => 'none',
            'categoria_id' => 11,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'SUPER ADITIVO BASE MEG PRONTO USO',
            'descricao' => "DULUB SUPER ADITIVO PARA RADIADOR INORGÂNICO
            PRONTO PARA USO é formulado com monoetilenoglicol e
            inibidores de corrosão inorgânicos pronto para aplicação. Sua
            formulação eleva o ponto de ebulição e reduz o ponto de
            congelamento. Aumenta a vida útil do motor lubriﬁcando a
            bomba d'água, a válvula termostática protegendo todo o sistema
            contra corrosão, superaquecimento e cavitação. Evita o
            ressecamento das mangueiras e proporciona uma proteção
            especial ao alumínio. Indicado para veículos a gasolina, álcool,
            multicombustíveis, diesel, transformados e GNV.",
            'comp_quimica' => 'Monoetilenoglicol, base especial protetora inorgânica, corante e
            água bi desmineralizada.',
            //'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Super Aditivos/SUPER ADITIVO BASEMEG PPU - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Super Aditivos/Super Aditivo Inorgânico Pronto para Uso - Ficha Técnica.pdf',
            'fispq' => 'none',
            'categoria_id' => 11,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'SUPER ADITIVO ORGÂNICO CONCENTRADO',
            'descricao' => "DULUB SUPER ADITIVO PARA RADIADOR ORGÂNICO
            CONCENTRADO é formulado com Glicerina e inibidores de
            corrosão orgânicos que irão proteger todo o sistema contra
            corrosão, superaquecimento e cavitação. Evita o ressecamento
            das mangueiras, lubriﬁca a bomba d'água e proporciona
            proteção adicional ao alumínio. Indicado para veículos a
            gasolina, álcool, multicombustíveis e GNV.",
            'comp_quimica' => 'Glicerina, base especial protetora orgânica, corante.',
            //'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Super Aditivos/SUPER ADITIVO ORG CONC - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Super Aditivos/Super Aditivo Organico Concentrado - Ficha Técnica.pdf',
            'fispq' => 'none',
            'categoria_id' => 11,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'SUPER ADITIVO ORGÂNICO PRONTO USO',
            'descricao' => "DULUB SUPER ADITIVO PARA RADIADOR ORGÂNICO
            PRONTO PARA USO é formulado com Glicerina e inibidores de
            corrosão orgânicos pronto para aplicação. Sua formulação
            eleva o ponto de ebulição e reduz o ponto de congelamento.
            Aumenta a vida útil do motor lubriﬁcando a bomba d'água, a
            válvula termostática protegendo todo o sistema contra corrosão,
            superaquecimento e cavitação. Evita o ressecamento das
            mangueiras e proporciona uma proteção especial ao alumínio.
            Indicado para veículos a gasolina, álcool, multicombustíveis,
            transformados e GNV.",
            'comp_quimica' => 'Glicerina, base especial
            protetora orgânica, corante e água bi desmineralizada.',
            //'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Super Aditivos/SUPER ADITIVO ORG PPU - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L-200L.svg',
            'ficha' => 'fichas/Super Aditivos/Super Aditivo Organico Pronto para Uso - Ficha Técnica.pdf',
            'fispq' => 'none',
            'categoria_id' => 11,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'PROTETIVO DE RADIADOR DIESEL',
            'descricao' => "DULUB PROTETIVO PARA RADIADORES DIESEL é um composto químico diluído – PRONTO PARA USO desenvolvido a base de polímeros ativos semissintéticos de elevada performance, alta condutividade térmica e bases especiais anticorrosivas orgânicas, não tóxicas ao meio ambiente. É livre de nitritos, fosfatos, aminas e silicatos. Superior proteção contra corrosão, inibe a formação de espuma, baixa o ponto de congelamento e eleva ponto de fervura da água. Compatível com juntas, retentores, elastômeros e outras peças não metálicas que compõe todo sistema de arrefecimento do veículo.",
            'comp_quimica' => 'Polímeros sintéticos, bases especiais
                                anticorrosivas orgânicas, água desmineralizada e corante.',
            //'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Super Aditivos/Protetivo de Radiador Diesel.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'fichas/Super Aditivos/Protetivo de Radiador Diesel  - Ficha Técnica.pdf',
            'fispq' => 'none',
            'categoria_id' => 11,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'PROTETIVO DE RADIADOR GASOLINA',
            'descricao' => "DULUB PROTETIVO PARA RADIADORES GASOLINA é um composto químico diluído – PRONTO PARA USO desenvolvido a base de polímeros ativos semissintéticos de elevada performance, alta condutividade térmica e bases especiais anticorrosivas orgânicas, não tóxicas ao meio ambiente, que proporciona proteção total aos componentes metálicos do sistema de arrefecimento, prolongando a vida útil do motor, evitando a corrosão, a cavitação, a formação de espuma e o ressecamento das mangueiras.",
            'comp_quimica' => 'Polímeros sintéticos, bases especiais
                                anticorrosivas orgânicas, água desmineralizada e corante.',
            //'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Super Aditivos/Protetivo de Radiador Gasolina.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'fichas/Super Aditivos/Protetivo de Radiador Gasolina  - Ficha Técnica.pdf',
            'fispq' => 'none',
            'categoria_id' => 11,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'ÁGUA BI-DESMINERALIZADA',
            'descricao' => 'A DULUB Água Desmineralizada é água quimicamente pura, isenta de sais solúveis e destinada à adição em aditivos para radiadores ou líquidos de arrefecimento de sistemas de radiadores. A tecnologia que adotamos visa a filtração por osmose reversa e é um dos poucos métodos disponíveis para remover partículas de tamanho molecular, como íons e bactérias. É um produto Não Estéril: nunca usar para fins injetáveis ou em procedimentos que exijam líquidos estéreis',
            
            //'viscosidade' => 'SAE 30',
            'imagem' => 'images/produtos/Super Aditivos/Água Bi-Desmineralizada - 1L.png',
            'tamanhos' => 'images/Tamanhos/1L.svg',
            'ficha' => 'none',
            'fispq' => 'none',
            'categoria_id' => 11,
        ]);
        DB::table('produtos')->insert([
            'nome' => 'RENOX ARLA 32',
            'descricao' => 'É um Agente Redutor Líquido de NOX Automotivo
            (ARLA), necessário a tecnologia SCR (Redução 
            Catalítica Seletiva), presente nos veículos 
            automotores a diesel classificados como 
            comerciais pesados e semipesados (acima de 16 
            ton), fabricados a partir de janeiro de 2012.',   
            'imagem' => 'images/produtos/Arla 32/RENOX ARLA 32 - 20L.png',
            'tamanhos' => 'images/Tamanhos/1L-20L.svg',
            'ficha' => 'fichas/Arla/RENOX ARLA 32 - Ficha Técnica.pdf',
            'fispq' => 'none',
            'categoria_id' => 12,
        ]);
    }
}
