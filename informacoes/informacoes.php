<?php
class Informacoes
{
    public function Components(){
        $post = array(
            [
                'id'=> 1,
                'title'=>'Flamengo renova com Gabigol ',
                'descricaobasica'=>'Flamengo na tarde de 16/02/2024 renovou com o atacante Gabigol. Seu contrato está valido até dezembro de 2028',
                'tags'=>['Flamengo','renovação','futebol']
            ],
            [
                'id'=>2,
                'title'=>'Juan Miguel de Oliveira se tona o homem mais rico do mundo',
                'descricaobasica'=> 'A partir do momemento que juan lançou sua nova criação o Fitnes plus, miguel começou a lucrar aproximadamente 69 bilhões de dolares por dia ',
                'tags'=> ['Ciencia','Tecnologia','desenvolvimento']
            ],
            [
                'id'=>3,
                'title'=>'Criação do novo Genoma Humano',
                'descricaobasica'=>'foi criado hoje em laboratório o mais novo genoma Humano, e adivinha esse genoma é incrivel ele trasnforma qualquer pessoa em um grande super herói',
                'tags'=>['Ciencia','Biologia','humanos']
            ],
            [
                'id'=>4,
                'title'=>'Ser Humano obtém mais um dente',
                'descricaobasica'=>'Todos sabemos que o ser humano está evoluindo, e na matéria de hoje, informamos que o ser humano a geração z1 vai ganhar mais um dente, isso mesmo',
                'tags'=>['Odontologia','Dente','Evolução']
            ],
            [
                'id'=>5,
                'title'=>'Vasco é campeão do mundial de clubes de 2024',
                'descricaobasica'=>'Hoje o Rio de janeiro recebe o seu mais novo campeão mundial. Nesta tarde O campeão da América jogou contra o Real Madrid e ganhou de 3x0, com gols de mariano e jorginho.',
                'tags'=>['futebol','vasco da gama', 'cazé','carioca']
            ],
            [
                'id'=>6,
                'title'=>'Entre os alunos mais pobres, só 3% têm conhecimentos adequados de matemática no Brasil, mostra Pisa',
                'descricaobasica'=>'Levantamento exclusivo mostra que, entre os mais ricos, esse índice é de 33%. Prova internacional avalia estudantes de 15 anos em leitura, matemática e ciências.',
                'tags'=>['matemática','pobres','conhecimento','educação basica']
            ]
        );
        return $post;
        
    }
}