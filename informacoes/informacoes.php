<?php
class Informacoes
{
    public function Components(){
        $post = [
            [
                'id'=> 1,
                'title'=>'Flamengo renova com Gabigol ',
                'tags'=>['Flamengo','renovação','futebol']
            ],
            [
                'id'=>2,
                'title'=>'Juan Miguel de Oliveira se tona o homem mais rico do mundo',
                'tags'=> ['Ciencia','Tecnologia','desenvolvimento']
            ],
            [
                'id'=>3,
                'title'=>'Criação do novo Genoma Humano',
                'tags'=>['Ciencia','Biologia','humanos']
            ],
            [
                'id'=>4,
                'title'=>'Ser Humano obtém mais um dente',
                'tags'=>['Odontologia','Dente','Evolução']
            ]
        ];
        return $post;
        
    }
}