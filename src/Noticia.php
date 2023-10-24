<?php
    namespace Microblog;
    use PDO, Exception;

    final class Noticia {
        private int $id;
        private string $data;
        private string $titulo;
        private string $texto;
        private string $resumo;
        private string $imagem;
        private string $destaque;
        private string $termo; // para usar na busca
        private PDO $conexao;

        //propriedades cujo tipo estão associados à classes já existentes, isso permitirá usar recursos destas classes à partir de Noticia.
        public Usuario $usuario;
        public Categoria $categoria;

        public function __construct(){
                //ao criar um objeto Noticia, aproveitamos para instanciar objetos de Usuario e Categoria
                $this->usuario = new Usuario;
                $this->categoria = new Categoria;


                $this->conexao = Banco::conecta();
        }
        

        public function inserir():void {
                $sql = "INSERT INTO noticias(titulo, texto, resumo, imagem, destaque, usuario_id, categoria_id) VALUES (:titulo, :texto: :resumo, :imagem, :destaque, :usuario_id, :categoria_id)";

                try {
                        $consulta = $this->conexao->prepare($sql);
                        $consulta->bindValue(":titulo", $this->titulo, PDO::PARAM_STR);
                        $consulta->bindValue(":texto", $this->texto, PDO::PARAM_STR);
                        $consulta->bindValue(":resumo", $this->resumo, PDO::PARAM_STR);
                        $consulta->bindValue(":imagem", $this->imagem, PDO::PARAM_STR);
                        $consulta->bindValue(":destaque", $this->destaque, PDO::PARAM_STR);


                        //AQUI, chamamos os getter de ID do Usuario e de Categoria, para só depois os valores aos parâmetros da consulta SQL. isso é possível devido à associação entre classes.
                        $consulta->bindValue(":usuario_id", $this->usuario->getId(), PDO::PARAM_INT);
                        $consulta->bindValue(":categoria_id", $this->categoria->getId(), PDO::PARAM_INT);
                } catch (Exception $erro) {
                        die("Erro ao inserir noticia: ".$erro->getMessage());
                }
        }









        
        public function getId(): int
        {
                return $this->id;
        }

        public function setId(int $id): self
        {
                $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

                return $this;
        }

        public function getData(): string
        {
                return $this->data;
        }

   
        public function setData(string $data): self
        {
                $this->data = filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS);

                return $this;
        }

      
        public function getTitulo(): string
        {
                return $this->titulo;
        }

        public function setTitulo(string $titulo): self
        {
                $this->titulo = filter_var($titulo, FILTER_SANITIZE_SPECIAL_CHARS);

                return $this;
        }

   
        public function getResumo(): string
        {
                return $this->resumo;
        }


        public function setResumo(string $resumo): self
        {
                $this->resumo = filter_var($resumo, FILTER_SANITIZE_SPECIAL_CHARS); 

                return $this;
        }

    
        public function getImagem(): string
        {
                return $this->imagem;
        }

   
        public function setImagem(string $imagem): self
        {
                $this->imagem = filter_var($imagem, FILTER_SANITIZE_SPECIAL_CHARS);

                return $this;
        }


        public function getDestaque(): string
        {
                return $this->destaque;
        }

    
        public function setDestaque(string $destaque): self
        {
                $this->destaque = filter_var($destaque, FILTER_SANITIZE_SPECIAL_CHARS);

                return $this;
        }

        public function getTermo(): string
        {
                return $this->termo;
        }

  
        public function setTermo(string $termo): self
        {
                $this->termo = filter_var($termo, FILTER_SANITIZE_SPECIAL_CHARS);

                return $this;
        }

        public function getTexto(): string
        {
                return $this->texto;
        }


        public function setTexto(string $texto): self
        {
                $this->texto = $texto;

                return $this;
        }
    }
?>