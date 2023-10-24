<?php
    namespace Microblog;
    use PDO, Exception;

    final class noticia {
        private int $id;
        private string $data;
        private string $titulo;
        private string $resumo;
        private string $imagem;
        private string $destaque;
        private string $termo; // para usar na busca
        private PDO $conexao;

        
        public function getId(): int
        {
                return $this->id;
        }

        public function setId(int $id): self
        {
                $this->id = $id;

                return $this;
        }

        public function getData(): string
        {
                return $this->data;
        }

   
        public function setData(string $data): self
        {
                $this->data = $data;

                return $this;
        }

      
        public function getTitulo(): string
        {
                return $this->titulo;
        }

        public function setTitulo(string $titulo): self
        {
                $this->titulo = $titulo;

                return $this;
        }

   
        public function getResumo(): string
        {
                return $this->resumo;
        }


        public function setResumo(string $resumo): self
        {
                $this->resumo = $resumo;

                return $this;
        }

    
        public function getImagem(): string
        {
                return $this->imagem;
        }

   
        public function setImagem(string $imagem): self
        {
                $this->imagem = $imagem;

                return $this;
        }


        public function getDestaque(): string
        {
                return $this->destaque;
        }

    
        public function setDestaque(string $destaque): self
        {
                $this->destaque = $destaque;

                return $this;
        }

        public function getTermo(): string
        {
                return $this->termo;
        }

  
        public function setTermo(string $termo): self
        {
                $this->termo = $termo;

                return $this;
        }
    }
?>